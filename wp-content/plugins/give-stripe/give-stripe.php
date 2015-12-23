<?php
/*
Plugin Name: Give - Stripe Payment Gateway
Plugin URL: http://wordimpress.com/
Description: Adds the Stripe.com payment gateway to the available Give payment methods.
Version: 1.0
Author: WordImpress
Author URI: http://wordimpress.com
*/

if ( ! defined( 'GIVE_STRIPE_PLUGIN_DIR' ) ) {
	define( 'GIVE_STRIPE_PLUGIN_DIR', dirname( __FILE__ ) );
}

if ( ! defined( 'GIVE_STRIPE_PLUGIN_URL' ) ) {
	define( 'GIVE_STRIPE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

define( 'GIVE_STRIPE_VERSION', '1.0' );

//Licensing
function give_add_stripe_licensing() {
	if ( class_exists( 'Give_License' ) && is_admin() ) {
		$give_stripe_license = new Give_License( __FILE__, 'Stripe Gateway', GIVE_STRIPE_VERSION, 'Devin Walker', 'stripe_license_key' );
	}
}

add_action( 'plugins_loaded', 'give_add_stripe_licensing' );


/**
 * Internationalization
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_textdomain() {
	load_plugin_textdomain( 'give-stripe', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'init', 'give_stripe_textdomain' );

/**
 * Register our payment gateway
 *
 * @access      public
 * @since       1.0
 * @return      array
 */

function give_stripe_register_gateway( $gateways ) {
	// Format: ID => Name
	$gateways['stripe'] = array(
		'admin_label'    => 'Stripe',
		'checkout_label' => __( 'Credit Card', 'give-stripe' ),
		'supports'       => array(
			'buy_now'
		)
	);

	return $gateways;
}

add_filter( 'give_payment_gateways', 'give_stripe_register_gateway' );


/**
 * Add an errors div
 *
 * @access      public
 * @since       1.0
 * @return      void
 */

function give_stripe_add_stripe_errors() {
	echo '<div id="give-stripe-payment-errors"></div>';
}

add_action( 'give_after_cc_fields', 'give_stripe_add_stripe_errors', 999 );

/**
 * Stripe uses it's own credit card form because the card details are tokenized.
 *
 * We don't want the name attributes to be present on the fields in order to prevent them from getting posted to the server
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_credit_card_form() {

	global $give_options;

	ob_start(); ?>

	<?php do_action( 'give_before_cc_fields' ); ?>

	<fieldset id="give_cc_fields" class="give-do-validate">
		<legend><?php _e( 'Credit Card Info', 'give-stripe' ); ?></legend>
		<?php if ( is_ssl() ) : ?>
			<div id="give_secure_site_wrapper">
				<span class="padlock"></span>
				<span><?php _e( 'This is a secure SSL encrypted payment.', 'give-stripe' ); ?></span>
			</div>
		<?php endif; ?>
		<p id="give-card-number-wrap" class="form-row form-row-two-thirds">
			<label for="card_number" class="give-label">
				<?php _e( 'Card Number', 'give-stripe' ); ?>
				<span class="give-required-indicator">*</span>
				<span class="give-tooltip give-icon give-icon-question" data-tooltip="<?php _e( 'The (typically) 16 digits on the front of your credit card.', 'give-stripe' ); ?>"></span>
				<span class="card-type"></span>
			</label>
			<input type="text" autocomplete="off" <?php if ( isset( $give_options['stripe_js_fallback'] ) ) {
				echo 'name="card_number" ';
			} ?>id="card_number" class="card-number give-input required" placeholder="<?php _e( 'Card number', 'give-stripe' ); ?>" />
		</p>

		<p id="give-card-cvc-wrap" class="form-row form-row-one-third">
			<label for="card_cvc" class="give-label">
				<?php _e( 'CVC', 'give-stripe' ); ?>
				<span class="give-required-indicator">*</span>
				<span class="give-tooltip give-icon give-icon-question" data-tooltip="<?php _e( 'The 3 digit (back) or 4 digit (front) value on your card.', 'give-stripe' ); ?>"></span>
			</label>
			<input type="text" size="4" autocomplete="off" <?php if ( isset( $give_options['stripe_js_fallback'] ) ) {
				echo 'name="card_cvc" ';
			} ?>id="card_cvc" class="card-cvc give-input required" placeholder="<?php _e( 'Security code', 'give-stripe' ); ?>" />
		</p>

		<p id="give-card-name-wrap" class="form-row form-row-two-thirds">
			<label for="card_name" class="give-label">
				<?php _e( 'Name on the Card', 'give-stripe' ); ?>
				<span class="give-required-indicator">*</span>
				<span class="give-tooltip give-icon give-icon-question" data-tooltip="<?php _e( 'The name printed on the front of your credit card.', 'give-stripe' ); ?>"></span>
			</label>
			<input type="text" autocomplete="off" <?php if ( isset( $give_options['stripe_js_fallback'] ) ) {
				echo 'name="card_name" ';
			} ?>id="card_name" class="card-name give-input required" placeholder="<?php _e( 'Card name', 'give-stripe' ); ?>" />
		</p>
		<?php do_action( 'give_before_cc_expiration' ); ?>
		<p class="card-expiration form-row form-row-one-third">
			<label for="card_exp_month" class="give-label">
				<?php _e( 'Expiration', 'give-stripe' ); ?>
				<span class="give-required-indicator">*</span>
				<span class="give-tooltip give-icon give-icon-question" data-tooltip="<?php _e( 'The date your credit card expires (MM/YY), typically on the front of the card.', 'give-stripe' ); ?>"></span>
			</label>
			<select <?php if ( isset( $give_options['stripe_js_fallback'] ) ) {
				echo 'name="card_exp_month" ';
			} ?>id="card_exp_month" class="card-expiry-month give-select give-select-small required">
				<?php for ( $i = 1; $i <= 12; $i ++ ) {
					echo '<option value="' . $i . '">' . sprintf( '%02d', $i ) . '</option>';
				} ?>
			</select>
			<span class="exp-divider"> / </span>
			<select <?php if ( isset( $give_options['stripe_js_fallback'] ) ) {
				echo 'name="card_exp_year" ';
			} ?>id="card_exp_year" class="card-expiry-year give-select give-select-small required">
				<?php for ( $i = date( 'Y' ); $i <= date( 'Y' ) + 10; $i ++ ) {
					echo '<option value="' . $i . '">' . substr( $i, 2 ) . '</option>';
				} ?>
			</select>
		</p>
		<?php do_action( 'give_after_cc_expiration' ); ?>

	</fieldset>
	<?php
	do_action( 'give_after_cc_fields' );

	echo ob_get_clean();
}

add_action( 'give_stripe_cc_form', 'give_stripe_credit_card_form' );

/**
 * Process stripe checkout submission
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_process_stripe_payment( $purchase_data ) {

	global $give_options;

	if ( ! class_exists( 'Stripe' ) ) {
		require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
	}

	if ( give_is_test_mode() ) {
		$secret_key = trim( $give_options['test_secret_key'] );
	} else {
		$secret_key = trim( $give_options['live_secret_key'] );
	}

	$purchase_summary = give_get_purchase_summary( $purchase_data, false );

	// make sure we don't have any left over errors present
	give_clear_errors();

	if ( ! isset( $_POST['give_stripe_token'] ) ) {

		// check for fallback mode
		if ( isset( $give_options['stripe_js_fallback'] ) ) {

			if ( ! isset( $_POST['card_name'] ) || strlen( trim( $_POST['card_name'] ) ) == 0 ) {
				give_set_error( 'no_card_name', __( 'Please enter a name for the credit card.', 'give-stripe' ) );
			}

			if ( ! isset( $_POST['card_number'] ) || strlen( trim( $_POST['card_number'] ) ) == 0 ) {
				give_set_error( 'no_card_number', __( 'Please enter a credit card number.', 'give-stripe' ) );
			}

			if ( ! isset( $_POST['card_cvc'] ) || strlen( trim( $_POST['card_cvc'] ) ) == 0 ) {
				give_set_error( 'no_card_cvc', __( 'Please enter a CVC/CVV for the credit card.', 'give-stripe' ) );
			}

			if ( ! isset( $_POST['card_exp_month'] ) || strlen( trim( $_POST['card_exp_month'] ) ) == 0 ) {
				give_set_error( 'no_card_exp_month', __( 'Please enter a expiration month.', 'give-stripe' ) );
			}

			if ( ! isset( $_POST['card_exp_year'] ) || strlen( trim( $_POST['card_exp_year'] ) ) == 0 ) {
				give_set_error( 'no_card_exp_year', __( 'Please enter a expiration year.', 'give-stripe' ) );
			}

			$card_data = array(
				'number'          => $purchase_data['card_info']['card_number'],
				'name'            => $purchase_data['card_info']['card_name'],
				'exp_month'       => $purchase_data['card_info']['card_exp_month'],
				'exp_year'        => $purchase_data['card_info']['card_exp_year'],
				'cvc'             => $purchase_data['card_info']['card_cvc'],
				'address_line1'   => $purchase_data['card_info']['card_address'],
				'address_line2'   => $purchase_data['card_info']['card_address_2'],
				'address_city'    => $purchase_data['card_info']['card_city'],
				'address_zip'     => $purchase_data['card_info']['card_zip'],
				'address_state'   => $purchase_data['card_info']['card_state'],
				'address_country' => $purchase_data['card_info']['card_country']
			);

		} else {

			// no Stripe token
			give_set_error( 'no_token', __( 'Missing Stripe token. Please contact support.', 'give-stripe' ) );
			give_record_gateway_error( __( 'Missing Stripe Token', 'give-stripe' ), __( 'A Stripe token failed to be generated. Please check Stripe logs for more information', 'give-stripe' ) );

		}

	} else {
		$card_data = $_POST['give_stripe_token'];
	}

	$errors = give_get_errors();

	if ( ! $errors ) {

		try {

			Stripe::setApiKey( $secret_key );

			// setup the payment details
			$payment_data = array(
				'price'           => $purchase_data['price'],
				'give_form_title' => $purchase_data['post_data']['give-form-title'],
				'give_form_id'    => intval( $purchase_data['post_data']['give-form-id'] ),
				'date'            => $purchase_data['date'],
				'user_email'      => $purchase_data['user_email'],
				'purchase_key'    => $purchase_data['purchase_key'],
				'currency'        => give_get_currency(),
				'user_info'       => $purchase_data['user_info'],
				'status'          => 'pending',
				'gateway'         => 'stripe'
			);

			$customer_exists = false;

			if ( is_user_logged_in() ) {

				$user = get_user_by( 'email', $purchase_data['user_email'] );

				if ( $user ) {

					$customer_id = get_user_meta( $user->ID, give_stripe_get_customer_key(), true );

					if ( $customer_id ) {

						$customer_exists = true;

						try {

							// Update the customer to ensure their card data is up to date
							$cu = Stripe_Customer::retrieve( $customer_id );

							if ( isset( $cu->deleted ) && $cu->deleted ) {

								// This customer was deleted
								$customer_exists = false;

							} else {

								$cu->card = $card_data;
								$cu->save();

							}

							// No customer found
						}
						catch ( Exception $e ) {


							$customer_exists = false;

						}

					}

				}

			}

			if ( ! $customer_exists ) {

				// Create a customer first so we can retrieve them later for future payments
				$customer = Stripe_Customer::create( array(
						'description' => $purchase_data['user_email'],
						'email'       => $purchase_data['user_email'],
						'card'        => $card_data
					)
				);

				$customer_id = is_array( $customer ) ? $customer['id'] : $customer->id;

				if ( is_user_logged_in() ) {
					update_user_meta( $user->ID, give_stripe_get_customer_key(), $customer_id );
				}
			}

			if ( give_stripe_is_recurring_purchase( $purchase_data ) && ( ! empty( $customer ) || $customer_exists ) ) {

				// Process a recurring subscription purchase
				$cu = Stripe_Customer::retrieve( $customer_id );

				try {

					$plan_id = give_stripe_get_plan_id( $purchase_data );

					// record the pending payment
					$payment = give_insert_payment( $payment_data );

					set_transient( '_give_recurring_payment_' . $payment, '1', DAY_IN_SECONDS );

					// Store the parent payment ID in the user meta
					GIVE_Recurring_Customer::set_customer_payment_id( $user->ID, $payment );

					// Update the customer's subscription in Stripe
					$customer_response = $cu->updateSubscription( array( 'plan' => $plan_id ) );

					// Set user as subscriber
					GIVE_Recurring_Customer::set_as_subscriber( $user->ID );

					// store the customer recurring ID
					GIVE_Recurring_Customer::set_customer_id( $user->ID, $customer_id );

					// Set the customer status
					GIVE_Recurring_Customer::set_customer_status( $user->ID, 'active' );

					// Calculate the customer's new expiration date
					$new_expiration = GIVE_Recurring_Customer::calc_user_expiration( $user->ID, $payment );

					// Set the customer's new expiration date
					GIVE_Recurring_Customer::set_customer_expiration( $user->ID, $new_expiration );

				}
				catch ( Stripe_CardError $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					if ( isset( $err['message'] ) ) {
						give_set_error( 'payment_error', $err['message'] );
					} else {
						give_set_error( 'payment_error', __( 'There was an error processing your payment, please ensure you have entered your card number correctly.', 'give-stripe' ) );
					}

					give_record_gateway_error( __( 'Stripe Error', 'give-stripe' ), sprintf( __( 'There was an error while processing a Stripe payment. Payment data: %s', 'give-stripe' ), json_encode( $err ) ), 0 );

				}
				catch ( Stripe_ApiConnectionError $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					give_set_error( 'payment_error', __( 'There was an error processing your payment (Stripe\'s API is down), please try again', 'give-stripe' ) );
					give_record_gateway_error( __( 'Stripe Error', 'give-stripe' ), sprintf( __( 'There was an error processing your payment (Stripe\'s API was down). Error: %s', 'give-stripe' ), json_encode( $err['message'] ) ), 0 );

				}
				catch ( Stripe_InvalidRequestError $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					// Bad Request of some sort. Maybe Christoff was here ;)
					if ( isset( $err['message'] ) ) {
						give_set_error( 'request_error', $err['message'] );
					} else {
						give_set_error( 'request_error', sprintf( __( 'The Stripe API request was invalid, please try again. Error: %s', 'give-stripe' ), json_encode( $err['message'] ) ) );
					}

				}
				catch ( Stripe_ApiError $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					if ( isset( $err['message'] ) ) {
						give_set_error( 'request_error', $err['message'] );
					} else {
						give_set_error( 'request_error', __( 'The Stripe API request was invalid, please try again', 'give-stripe' ) );
					}
					give_record_gateway_error( __( 'Stripe Error', 'give-stripe' ), sprintf( __( 'There was an error with Stripe\'s API: ', 'give-stripe' ), json_encode( $err['message'] ) ), 0 );

				}
				catch ( Stripe_AuthenticationError $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					// Authentication error. Stripe keys in settings are bad.
					if ( isset( $err['message'] ) ) {
						give_set_error( 'request_error', $err['message'] );
					} else {
						give_set_error( 'api_error', __( 'The API keys entered in settings are incorrect', 'give-stripe' ) );
					}

				}
				catch ( Stripe_Error $e ) {

					$body = $e->getJsonBody();
					$err  = $body['error'];

					// generic stripe error
					if ( isset( $err['message'] ) ) {
						give_set_error( 'request_error', $err['message'] );
					} else {
						give_set_error( 'api_error', __( 'Something went wrong.', 'give-stripe' ) );
					}

				}
				catch ( Exception $e ) {

					// some sort of other error
					$body = $e->getJsonBody();
					$err  = $body['error'];
					if ( isset( $err['message'] ) ) {
						give_set_error( 'request_error', $err['message'] );
					} else {
						give_set_error( 'api_error', __( 'Something went wrong.', 'give-stripe' ) );
					}

				}

				if ( ! empty( $err ) ) {

					// Delete any invoice items we created for fees, taxes, and other
					foreach ( $invoice_items as $invoice ) {
						$ii = Stripe_InvoiceItem::retrieve( $invoice );
						$ii->delete();
					}

					give_send_back_to_checkout( '?payment-mode=stripe' );
				}

			} elseif ( ! empty( $customer ) || $customer_exists ) {

				// Process a normal one-time charge purchase
				if ( ! isset( $give_options['stripe_preapprove_only'] ) ) {

					if ( give_stripe_is_zero_decimal_currency() ) {
						$amount = $purchase_data['price'];
					} else {
						$amount = $purchase_data['price'] * 100;
					}

					$charge = Stripe_Charge::create( array(
							"amount"               => $amount,
							"currency"             => give_get_currency(),
							"customer"             => $customer_id,
							"description"          => html_entity_decode( $purchase_summary, ENT_COMPAT, 'UTF-8' ),
							'statement_descriptor' => substr( $purchase_summary, 0, 15 ),
							'metadata'             => array(
								'email' => $purchase_data['user_info']['email']
							)
						)
					);
				}

				// record the pending payment
				$payment = give_insert_payment( $payment_data );

			} else {

				give_record_gateway_error( __( 'Customer Creation Failed', 'give-stripe' ), sprintf( __( 'Customer creation failed while processing a payment. Payment Data: %s', 'give-stripe' ), json_encode( $payment_data ) ), $payment );

			}

			if ( $payment && ( ! empty( $customer_id ) || ! empty( $charge ) ) ) {

				if ( ! empty( $needs_invoiced ) ) {

					try {
						// Create the invoice containing taxes / discounts / fees
						$invoice = Stripe_Invoice::create( array(
							'customer' => $customer_id, // the customer to apply the fee to
						) );
						$invoice = $invoice->pay();
					}
					catch ( Exception $e ) {
						// If there is nothing to pay, it just means the invoice item was taken care of with the subscription payment
					}
				}

				if ( isset( $give_options['stripe_preapprove_only'] ) ) {
					give_update_payment_status( $payment, 'preapproval' );
					add_post_meta( $payment, '_give_stripe_stripe_customer_id', $customer_id );
				} else {
					give_update_payment_status( $payment, 'publish' );
				}

				// You should be using Stripe's API here to retrieve the invoice then confirming it's been paid
				if ( ! empty( $charge ) ) {

					give_insert_payment_note( $payment, 'Stripe Charge ID: ' . $charge->id );

					if ( function_exists( 'give_set_payment_transaction_id' ) ) {

						give_set_payment_transaction_id( $payment, $charge->id );

					}

				} elseif ( ! empty( $customer_id ) ) {
					give_insert_payment_note( $payment, 'Stripe Customer ID: ' . $customer_id );
				}

				give_send_to_success_page();

			} else {

				give_set_error( 'payment_not_recorded', __( 'Your payment could not be recorded, please contact the site administrator.', 'give-stripe' ) );

				// if errors are present, send the user back to the purchase page so they can be corrected
				give_send_back_to_checkout( '?payment-mode=stripe' );

			}
		}
		catch ( Stripe_CardError $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			if ( isset( $err['message'] ) ) {
				give_set_error( 'payment_error', $err['message'] );
			} else {
				give_set_error( 'payment_error', __( 'There was an error processing your payment, please ensure you have entered your card number correctly.', 'give-stripe' ) );
			}

			give_record_gateway_error( __( 'Stripe Error', 'give-stripe' ), sprintf( __( 'There was an error while processing a Stripe payment. Payment data: %s', 'give-stripe' ), json_encode( $err ) ), 0 );
			give_send_back_to_checkout( '?payment-mode=stripe' );

		}
		catch ( Stripe_ApiConnectionError $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			give_set_error( 'payment_error', __( 'There was an error processing your payment (Stripe\'s API is down), please try again', 'give-stripe' ) );
			give_record_gateway_error( __( 'Stripe Error', 'give-stripe' ), sprintf( __( 'There was an error processing your payment (Stripe\'s API was down). Error: %s', 'give-stripe' ), json_encode( $err['message'] ) ), 0 );
			give_send_back_to_checkout( '?payment-mode=stripe' );

		}
		catch ( Stripe_InvalidRequestError $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			// Bad Request of some sort. Maybe Christoff was here ;)
			if ( isset( $err['message'] ) ) {
				give_set_error( 'request_error', $err['message'] );
			} else {
				give_set_error( 'request_error', __( 'The Stripe API request was invalid, please try again', 'give-stripe' ) );
			}
			give_send_back_to_checkout( '?payment-mode=stripe' );

		}
		catch ( Stripe_ApiError $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			if ( isset( $err['message'] ) ) {
				give_set_error( 'request_error', $err['message'] );
			} else {
				give_set_error( 'request_error', __( 'The Stripe API request was invalid, please try again', 'give-stripe' ) );
			}
			give_set_error( 'request_error', sprintf( __( 'The Stripe API request was invalid, please try again. Error: %s', 'give-stripe' ), json_encode( $err['message'] ) ) );
			give_send_back_to_checkout( '?payment-mode=stripe' );

		}
		catch ( Stripe_AuthenticationError $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			// Authentication error. Stripe keys in settings are bad.
			if ( isset( $err['message'] ) ) {
				give_set_error( 'request_error', $err['message'] );
			} else {
				give_set_error( 'api_error', __( 'The API keys entered in settings are incorrect', 'give-stripe' ) );
			}

			give_send_back_to_checkout( '?payment-mode=stripe' );
		}
		catch ( Stripe_Error $e ) {

			$body = $e->getJsonBody();
			$err  = $body['error'];

			// generic stripe error
			if ( isset( $err['message'] ) ) {
				give_set_error( 'request_error', $err['message'] );
			} else {
				give_set_error( 'api_error', __( 'Something went wrong.', 'give-stripe' ) );
			}
			give_send_back_to_checkout( '?payment-mode=stripe' );
		}
		catch ( Exception $e ) {
			// some sort of other error
			$body = $e->getJsonBody();
			$err  = $body['error'];
			if ( isset( $err['message'] ) ) {
				give_set_error( 'request_error', $err['message'] );
			} else {
				give_set_error( 'api_error', __( 'Something went wrong.', 'give-stripe' ) );
			}
			give_send_back_to_checkout( '?payment-mode=stripe' );

		}
	} else {
		give_send_back_to_checkout( '?payment-mode=stripe' );
	}
}

add_action( 'give_gateway_stripe', 'give_stripe_process_stripe_payment' );


/**
 * Create recurring payment plans when donations are saved
 *
 * @description This is in order to support the Recurring Payments module
 * @access      public
 * @since       1.0
 * @return      int
 */
function give_stripe_create_recurring_plans( $post_id = 0 ) {
	global $give_options, $post;

	if ( ! class_exists( 'Give_Recurring' ) ) {
		return $post_id;
	}

	if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || isset( $_REQUEST['bulk_edit'] ) ) {
		return $post_id;
	}

	if ( isset( $post->post_type ) && $post->post_type == 'revision' ) {
		return $post_id;
	}

	if ( ! isset( $post->post_type ) || $post->post_type != 'download' ) {
		return $post_id;
	}

	if ( ! current_user_can( 'edit_products', $post_id ) ) {
		return $post_id;
	}

	if ( ! class_exists( 'Stripe' ) ) {
		require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
	}

	$secret_key = give_is_test_mode() ? trim( $give_options['test_secret_key'] ) : trim( $give_options['live_secret_key'] );

	$plans = array();

	try {

		Stripe::setApiKey( $secret_key );

		if ( give_has_variable_prices( $post_id ) ) {

			$prices = give_get_variable_prices( $post_id );
			foreach ( $prices as $price_id => $price ) {

				if ( Give_Recurring()->is_price_recurring( $post_id, $price_id ) ) {

					$period = Give_Recurring()->get_period( $price_id, $post_id );

					if ( $period == 'day' || $period == 'week' ) {
						wp_die( __( 'Stripe only permits yearly and monthly plans.', 'give-stripe' ), __( 'Error', 'give-stripe' ) );
					}

					if ( Give_Recurring()->get_times( $price_id, $post_id ) > 0 ) {
						wp_die( __( 'Stripe requires that the Times option be set to 0.', 'give-stripe' ), __( 'Error', 'give-stripe' ) );
					}

					$plans[] = array(
						'name'   => $price['name'],
						'price'  => $price['amount'],
						'period' => $period
					);

				}
			}

		} else {

			if ( Give_Recurring()->is_recurring( $post_id ) ) {

				$period = Give_Recurring()->get_period_single( $post_id );

				if ( $period == 'day' || $period == 'week' ) {
					wp_die( __( 'Stripe only permits yearly and monthly plans.', 'give-stripe' ), __( 'Error', 'give-stripe' ) );
				}

				if ( Give_Recurring()->get_times_single( $post_id ) > 0 ) {
					wp_die( __( 'Stripe requires that the Times option be set to 0.', 'give-stripe' ), __( 'Error', 'give-stripe' ) );
				}

				$plans[] = array(
					'name'   => get_post_field( 'post_name', $post_id ),
					'price'  => give_get_download_price( $post_id ),
					'period' => $period
				);
			}
		}

		// Get all plans so we know which ones already exist
		$all_plans = array();
		$more      = true;
		$params    = array( 'limit' => 100 ); // Plan request params

		while ( $more ) {

			if ( ! empty( $all_plans ) ) {
				$params['starting_after'] = end( $all_plans );
			}

			$response  = Stripe_Plan::all( $params );
			$all_plans = array_merge( $all_plans, wp_list_pluck( $response->data, "id" ) );
			$more      = absint( $response->has_more );

		}

		foreach ( $plans as $plan ) {

			// Create the plan ID
			$plan_id = $plan['name'] . '_' . $plan['price'] . '_' . $plan['period'];
			$plan_id = sanitize_key( $plan_id );
			$plan_id = apply_filters( 'give_recurring_plan_id', $plan_id, $plan );

			if ( in_array( $plan_id, $all_plans ) ) {
				continue;
			}

			if ( give_stripe_is_zero_decimal_currency() ) {
				$amount = $plan['price'];
			} else {
				$amount = $plan['price'] * 100;
			}

			$plan_args = array(
				"amount"   => $amount,
				"interval" => $plan['period'],
				"name"     => $plan['name'],
				"currency" => give_get_currency(),
				"id"       => $plan_id
			);

			$plan_args = apply_filters( 'give_recurring_plan_details', $plan_args, $plan_id );

			Stripe_Plan::create( $plan_args );
		}
	}
	catch ( Exception $e ) {
		wp_die( __( 'There was an error creating a payment plan with Stripe.', 'give-stripe' ), __( 'Error', 'give-stripe' ) );
	}
}

add_action( 'save_post', 'give_stripe_create_recurring_plans', 999 );


/**
 * Detect if the current purchase is for a recurring product
 *
 * @access      public
 * @since       1.5
 * @return      bool
 */

function give_stripe_is_recurring_purchase( $purchase_data ) {

	if ( ! class_exists( 'Give_Recurring' ) ) {
		return false;
	}

	if ( Give_Recurring()->is_purchase_recurring( $purchase_data ) ) {
		return true;
	}

	return false;
}


/**
 * Retrieve the plan ID from the purchased items
 *
 * @access      public
 * @since       1.5
 * @return      string|bool
 */

function give_stripe_get_plan_id( $purchase_data ) {
	foreach ( $purchase_data['donations'] as $download ) {

		if ( give_has_variable_prices( $download['id'] ) ) {

			$prices = give_get_variable_prices( $download['id'] );

			$price_name   = give_get_price_option_name( $download['id'], $download['options']['price_id'] );
			$price_amount = $prices[ $download['options']['price_id'] ]['amount'];

		} else {

			$price_name   = get_post_field( 'post_name', $download['id'] );
			$price_amount = give_get_download_price( $download['id'] );

		}

		$period = $download['options']['recurring']['period'];

		$plan_id = $price_name . '_' . $price_amount . '_' . $period;

		return sanitize_key( $plan_id );
	}

	return false;
}


/**
 * Fiter the Recurring Payments cancellation link
 *
 * @access      public
 * @since       1.5
 * @return      string
 */

function give_stripe_recurring_cancel_link( $link = '', $user_id = 0 ) {

	$customer_id = Give_Recurring_Customer::get_customer_id( $user_id );

	// Only modify Stripe customer's cancellation links
	if ( strpos( $customer_id, 'cus_' ) === false ) {
		return $link;
	}

	$cancel_url = wp_nonce_url( add_query_arg( array(
		'give_action' => 'cancel_recurring_stripe_customer',
		'customer_id' => $customer_id,
		'user_id'     => $user_id
	) ), 'give_stripe_cancel' );
	$link       = '<a href="%s" class="give-recurring-cancel" title="%s">%s</a>';
	$link       = sprintf(
		$link,
		$cancel_url,
		__( 'Cancel your subscription', 'give-recurring' ),
		empty( $atts['text'] ) ? __( 'Cancel Subscription', 'give-recurring' ) : esc_html( $atts['text'] )
	);

	$link .= '<script type="text/javascript">jQuery(document).ready(function($) {$(".give-recurring-cancel").on("click", function() { if(confirm("' . __( "Do you really want to cancel your subscription? You will retain access for the length of time you have paid for.", "edds" ) . '")) {return true;}return false;});});</script>';

	return $link;

}

add_filter( 'give_recurring_cancel_link', 'give_stripe_recurring_cancel_link', 10, 2 );


/**
 * Process a recurring payments cancellation
 *
 * @access      public
 * @since       1.0
 * @return      void
 */

function give_stripe_cancel_subscription( $data ) {
	if ( wp_verify_nonce( $data['_wpnonce'], 'give_stripe_cancel' ) ) {

		global $give_options;

		$secret_key = give_is_test_mode() ? trim( $give_options['test_secret_key'] ) : trim( $give_options['live_secret_key'] );

		if ( ! class_exists( 'Stripe' ) ) {
			require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
		}

		Stripe::setApiKey( $secret_key );

		try {

			$cu = Stripe_Customer::retrieve( urldecode( $data['customer_id'] ) );
			$cu->cancelSubscription( array( 'at_period_end' => true ) );

			Give_Recurring_Customer::set_customer_status( $data['user_id'], 'cancelled' );

			wp_redirect(
				add_query_arg(
					'subscription',
					'cancelled',
					remove_query_arg( array( 'give_action', 'customer_id', 'user_id', '_wpnonce' ) )
				)
			);
			exit;

		}
		catch ( Exception $e ) {
			wp_die( '<pre>' . $e . '</pre>', __( 'Error', 'give-stripe' ) );
		}

	}
}

add_action( 'give_cancel_recurring_stripe_customer', 'give_stripe_cancel_subscription' );


/**
 * Register payment statuses for preapproval
 *
 * @since 1.0
 * @return void
 */
function give_stripe_register_post_statuses() {
	register_post_status( 'preapproval', array(
		'label'                     => _x( 'Preapproved', 'Preapproved payment', 'give-stripe' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Active <span class="count">(%s)</span>', 'Active <span class="count">(%s)</span>', 'give-stripe' )
	) );
	register_post_status( 'cancelled', array(
		'label'                     => _x( 'Cancelled', 'Cancelled payment', 'give-stripe' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Active <span class="count">(%s)</span>', 'Active <span class="count">(%s)</span>', 'give-stripe' )
	) );
}

add_action( 'init', 'give_stripe_register_post_statuses', 110 );


/**
 * Register our new payment status labels for EDD
 *
 * @since 1.0
 * @return array
 */
function give_stripe_payment_status_labels( $statuses ) {
	$statuses['preapproval'] = __( 'Preapproved', 'give-stripe' );
	$statuses['cancelled']   = __( 'Cancelled', 'give-stripe' );

	return $statuses;
}

add_filter( 'give_payment_statuses', 'give_stripe_payment_status_labels' );


/**
 * Display the Preapprove column label
 *
 * @since 1.0
 * @return array
 */
function give_stripe_payments_column( $columns ) {

	global $give_options;

	if ( isset( $give_options['stripe_preapprove_only'] ) ) {
		$columns['preapproval'] = __( 'Preapproval', 'give-stripe' );
	}

	return $columns;
}

add_filter( 'give_payments_table_columns', 'give_stripe_payments_column' );


/**
 * Display the payment status filters
 *
 * @since 1.0
 * @return array
 */
function give_stripe_payment_status_filters( $views ) {
	$payment_count        = wp_count_posts( 'give_payment' );
	$preapproval_count    = '&nbsp;<span class="count">(' . $payment_count->preapproval . ')</span>';
	$cancelled_count      = '&nbsp;<span class="count">(' . $payment_count->cancelled . ')</span>';
	$current              = isset( $_GET['status'] ) ? $_GET['status'] : '';
	$views['preapproval'] = sprintf( '<a href="%s"%s>%s</a>', add_query_arg( 'status', 'preapproval', admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ), $current === 'preapproval' ? ' class="current"' : '', __( 'Preapproval Pending', 'give-stripe' ) . $preapproval_count );
	$views['cancelled']   = sprintf( '<a href="%s"%s>%s</a>', add_query_arg( 'status', 'cancelled', admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ), $current === 'cancelled' ? ' class="current"' : '', __( 'Cancelled', 'give-stripe' ) . $cancelled_count );

	return $views;
}

add_filter( 'give_payments_table_views', 'give_stripe_payment_status_filters' );

/**
 * Show the Process / Cancel buttons for preapproved payments
 *
 * @since 1.0
 * @return string
 */
function give_stripe_payments_column_data( $value, $payment_id, $column_name ) {
	if ( $column_name == 'preapproval' ) {
		$status      = get_post_status( $payment_id );
		$customer_id = get_post_meta( $payment_id, '_give_stripe_stripe_customer_id', true );

		if ( ! $customer_id ) {
			return $value;
		}

		$nonce = wp_create_nonce( 'give-stripe-process-preapproval' );

		$preapproval_args = array(
			'payment_id'  => $payment_id,
			'nonce'       => $nonce,
			'give-action' => 'charge_stripe_preapproval'
		);
		$cancel_args      = array(
			'preapproval_key' => $customer_id,
			'payment_id'      => $payment_id,
			'nonce'           => $nonce,
			'give-action'     => 'cancel_stripe_preapproval'
		);

		if ( 'preapproval' === $status ) {
			$value = '<a href="' . add_query_arg( $preapproval_args, admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ) . '" class="button-secondary button button-small" style="width: 120px; margin: 0 0 3px; text-align:center;">' . __( 'Process Payment', 'give-stripe' ) . '</a>&nbsp;';
			$value .= '<a href="' . add_query_arg( $cancel_args, admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ) . '" class="button-secondary button button-small" style="width: 120px; margin: 0; text-align:center;">' . __( 'Cancel Preapproval', 'give-stripe' ) . '</a>';
		}
	}

	return $value;
}

add_filter( 'give_payments_table_column', 'give_stripe_payments_column_data', 10, 3 );


/**
 * Trigger preapproved payment charge
 *
 * @since 1.0
 * @return void
 */
function give_stripe_process_preapproved_charge() {

	if ( empty( $_GET['nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( $_GET['nonce'], 'give-stripe-process-preapproval' ) ) {
		return;
	}

	$payment_id = absint( $_GET['payment_id'] );
	$charge     = give_stripe_charge_preapproved( $payment_id );

	if ( $charge ) {
		wp_redirect( add_query_arg( array( 'give-message' => 'preapproval-charged' ), admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ) );
		exit;
	} else {
		wp_redirect( add_query_arg( array( 'give-message' => 'preapproval-failed' ), admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ) );
		exit;
	}

}

add_action( 'give_charge_stripe_preapproval', 'give_stripe_process_preapproved_charge' );


/**
 * Cancel a preapproved payment
 *
 * @since 1.0
 * @return void
 */
function give_stripe_process_preapproved_cancel() {
	global $give_options;

	if ( empty( $_GET['nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( $_GET['nonce'], 'give-stripe-process-preapproval' ) ) {
		return;
	}

	$payment_id  = absint( $_GET['payment_id'] );
	$customer_id = get_post_meta( $payment_id, '_give_stripe_stripe_customer_id', true );

	if ( empty( $customer_id ) || empty( $payment_id ) ) {
		return;
	}

	if ( 'preapproval' !== get_post_status( $payment_id ) ) {
		return;
	}

	if ( ! class_exists( 'Stripe' ) ) {
		require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
	}

	give_insert_payment_note( $payment_id, __( 'Preapproval cancelled', 'give-stripe' ) );
	give_update_payment_status( $payment_id, 'cancelled' );
	delete_post_meta( $payment_id, '_give_stripe_stripe_customer_id' );

	wp_redirect( add_query_arg( array( 'give-message' => 'preapproval-cancelled' ), admin_url( 'edit.php?post_type=give_forms&page=give-payment-history' ) ) );
	exit;
}

add_action( 'give_cancel_stripe_preapproval', 'give_stripe_process_preapproved_cancel' );


/**
 * Charge a preapproved payment
 *
 * @since 1.0
 * @return bool
 */
function give_stripe_charge_preapproved( $payment_id = 0 ) {

	global $give_options;

	if ( empty( $payment_id ) ) {
		return false;
	}

	$customer_id = get_post_meta( $payment_id, '_give_stripe_stripe_customer_id', true );

	if ( empty( $customer_id ) || empty( $payment_id ) ) {
		return;
	}

	if ( 'preapproval' !== get_post_status( $payment_id ) ) {
		return;
	}

	if ( ! class_exists( 'Stripe' ) ) {
		require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
	}

	$secret_key = give_is_test_mode() ? trim( $give_options['test_secret_key'] ) : trim( $give_options['live_secret_key'] );

	Stripe::setApiKey( $secret_key );

	if ( give_stripe_is_zero_decimal_currency() ) {
		$amount = give_get_payment_amount( $payment_id );
	} else {
		$amount = give_get_payment_amount( $payment_id ) * 100;
	}

	try {

		$charge = Stripe_Charge::create( array(
				"amount"      => $amount,
				"currency"    => give_get_currency(),
				"customer"    => $customer_id,
				"description" => sprintf( __( 'Preappoved charge for purchase %s from %s', 'give-stripe' ), give_get_payment_key( $payment_id ), home_url() )
			)
		);

	}
	catch ( Stripe_CardError $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}
	catch ( Stripe_ApiConnectionError $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}
	catch ( Stripe_InvalidRequestError $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}
	catch ( Stripe_ApiError $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );
	}
	catch ( Stripe_AuthenticationError $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}
	catch ( Stripe_Error $e ) {

		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}
	catch ( Exception $e ) {

		// some sort of other error
		$body = $e->getJsonBody();
		$err  = $body['error'];

		$error_message = isset( $err['message'] ) ? $err['message'] : __( 'There was an error processing this charge', 'give-stripe' );

	}

	if ( ! empty( $charge ) ) {

		give_insert_payment_note( $payment_id, 'Stripe Charge ID: ' . $charge->id );
		give_update_payment_status( $payment_id, 'publish' );
		delete_post_meta( $payment_id, '_give_stripe_stripe_customer_id' );

		return true;

	} else {

		give_insert_payment_note( $payment_id, $error_message );

		return false;
	}
}


/**
 * Admin Messages
 *
 * @since 1.0
 * @return void
 */
function give_stripe_admin_messages() {

	if ( isset( $_GET['give-message'] ) && 'preapproval-charged' == $_GET['give-message'] ) {
		add_settings_error( 'give-stripe-notices', 'give-stripe-preapproval-charged', __( 'The preapproved payment was successfully charged.', 'give-stripe' ), 'updated' );
	}
	if ( isset( $_GET['give-message'] ) && 'preapproval-failed' == $_GET['give-message'] ) {
		add_settings_error( 'give-stripe-notices', 'give-stripe-preapproval-charged', __( 'The preapproved payment failed to be charged. View order details for further details.', 'give-stripe' ), 'error' );
	}
	if ( isset( $_GET['give-message'] ) && 'preapproval-cancelled' == $_GET['give-message'] ) {
		add_settings_error( 'give-stripe-notices', 'give-stripe-preapproval-cancelled', __( 'The preapproved payment was successfully cancelled.', 'give-stripe' ), 'updated' );
	}

	settings_errors( 'give-stripe-notices' );
}

add_action( 'admin_notices', 'give_stripe_admin_messages' );


/**
 * Listen for Stripe events, primarily recurring payments
 *
 * @access      public
 * @since       1.0
 * @return      void
 */

function give_stripe_stripe_event_listener() {

	if ( ! class_exists( 'Give_Recurring' ) ) {
		return;
	}

	if ( isset( $_GET['give-listener'] ) && $_GET['give-listener'] == 'stripe' ) {

		global $give_options;

		if ( ! class_exists( 'Stripe' ) ) {
			require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
		}

		$secret_key = give_is_test_mode() ? trim( $give_options['test_secret_key'] ) : trim( $give_options['live_secret_key'] );

		Stripe::setApiKey( $secret_key );

		// retrieve the request's body and parse it as JSON
		$body       = @file_get_contents( 'php://input' );
		$event_json = json_decode( $body );

		// for extra security, retrieve from the Stripe API
		$event_id = $event_json->id;

		if ( isset( $event_json->id ) ) {

			status_header( 200 );

			$event = Stripe_Event::retrieve( $event_json->id );

			$invoice = $event->data->object;
			switch ( $event->type ) :

				case 'invoice.payment_succeeded' :

					// Process a subscription payment

					// retrieve the customer who made this payment (only for subscriptions)
					$user_id = Give_Recurring_Customer::get_user_id_by_customer_id( $invoice->customer );

					// retrieve the customer ID from WP database
					$customer_id = Give_Recurring_Customer::get_customer_id( $user_id );

					// check to confirm this is a stripe subscriber
					if ( $user_id && $customer_id ) {

						$cu = Stripe_Customer::retrieve( $customer_id );

						// Get all subscriptions of this customer
						$plans            = $cu->subscriptions->data;
						$subscriptions    = wp_list_pluck( $plans, 'plan' );
						$subscription_ids = ! empty( $subscriptions ) ? wp_list_pluck( $subscriptions, 'id' ) : array();

						// Make sure this charge is for the user's subscription
						if ( ! empty( $subscription_ids ) && ! in_array( $invoice->lines->data[0]->plan->id, $subscription_ids ) ) {
							die( '-3' );
						}

						// Retrieve the original payment details
						$parent_payment_id = Give_Recurring_Customer::get_customer_payment_id( $user_id );

						if ( false !== get_transient( '_give_recurring_payment_' . $parent_payment_id ) ) {
							die( '2' ); // This is the initial payment
						}

						try {

							// Store the payment
							Give_Recurring()->record_subscription_payment( $parent_payment_id, $invoice->total / 100, $invoice->charge );

							// Set the customer's status to active
							Give_Recurring_Customer::set_customer_status( $user_id, 'active' );

							// Calculate the customer's new expiration date
							$new_expiration = Give_Recurring_Customer::calc_user_expiration( $user_id, $parent_payment_id );

							// Set the customer's new expiration date
							Give_Recurring_Customer::set_customer_expiration( $user_id, $new_expiration );

						}
						catch ( Exception $e ) {
							die( '3' ); // Something not as expected
						}

					}

					break;

				case 'customer.subscription.deleted' :

					// Process a cancellation

					// retrieve the customer who made this payment (only for subscriptions)
					$user_id = Give_Recurring_Customer::get_user_id_by_customer_id( $invoice->customer );

					$parent_payment_id = Give_Recurring_Customer::get_customer_payment_id( $user_id );

					// Set the customer's status to active
					Give_Recurring_Customer::set_customer_status( $user_id, 'cancelled' );

					give_update_payment_status( $parent_payment_id, 'cancelled' );

					break;

			endswitch;

			do_action( 'give_stripe_stripe_event_' . $event->type, $event );

			die( '1' ); // Completed successfully

		} else {
			status_header( 500 );
			die( '-1' ); // Failed
		}
		die( '-2' ); // Failed
	}
}

add_action( 'init', 'give_stripe_stripe_event_listener' );


/**
 * Register the gateway settings
 *
 * @access      public
 * @since       1.0
 * @return      array
 */

function give_stripe_add_settings( $settings ) {

	$stripe_settings = array(
		array(
			'name' => __( 'Stripe Settings', 'give-stripe' ),
			'desc' => '<hr>',
			'id'   => 'give_title',
			'type' => 'give_title'
		),
		array(
			'name' => __( 'Live Secret Key', 'edd' ),
			'desc' => __( 'Enter your live secret key, found in your Stripe Account Settings', 'give-stripe' ),
			'id'   => 'live_secret_key',
			'type' => 'text',
		),
		array(
			'name' => __( 'Live Publishable Key', 'give-stripe' ),
			'desc' => __( 'Enter your live publishable key, found in your Stripe Account Settings', 'give-stripe' ),
			'id'   => 'live_publishable_key',
			'type' => 'text'
		),
		array(
			'name' => __( 'Test Secret Key', 'give-stripe' ),
			'desc' => __( 'Enter your test secret key, found in your Stripe Account Settings', 'give-stripe' ),
			'id'   => 'test_secret_key',
			'type' => 'text'
		),
		array(
			'name' => __( 'Test Publishable Key', 'give-stripe' ),
			'desc' => __( 'Enter your test publishable key, found in your Stripe Account Settings', 'give-stripe' ),
			'id'   => 'test_publishable_key',
			'type' => 'text',
		),
		array(
			'name' => __( 'Stripe JS Fallback Support', 'give-stripe' ),
			'desc' => __( 'Check this if your site has problems with processing cards using Stripe JS. This option makes card processing slightly less secure.', 'give-stripe' ),
			'id'   => 'stripe_js_fallback',
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Preapprove Only?', 'give-stripe' ),
			'desc' => __( 'Check this if you would like to preapprove payments but not charge until a later date.', 'give-stripe' ),
			'id'   => 'stripe_preapprove_only',
			'type' => 'checkbox'
		)
	);

	return array_merge( $settings, $stripe_settings );

}

add_filter( 'give_settings_gateways', 'give_stripe_add_settings' );


/**
 * Load our javascript
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_js( $override = false ) {
	global $give_options;

	if ( isset( $give_options['stripe_js_fallback'] ) ) {
		return;
	} // in fallback mode

	$publishable_key = null;

	if ( give_is_test_mode() ) {
		$publishable_key = isset( $give_options['test_publishable_key'] ) ? trim( $give_options['test_publishable_key'] ) : '';
	} else {
		$publishable_key = isset( $give_options['live_publishable_key'] ) ? trim( $give_options['live_publishable_key'] ) : '';
	}
	if ( give_is_gateway_active( 'stripe' ) ) {

		wp_enqueue_script( 'stripe-js', 'https://js.stripe.com/v2/', array( 'jquery' ) );
		wp_enqueue_script( 'give-stripe-js', GIVE_STRIPE_PLUGIN_URL . 'give-stripe.js', array(
			'jquery',
			'stripe-js'
		), GIVE_STRIPE_VERSION );

		$stripe_vars = array(
			'publishable_key' => $publishable_key,
		);

		wp_localize_script( 'give-stripe-js', 'give_stripe_vars', $stripe_vars );

	}

}

add_action( 'wp_enqueue_scripts', 'give_stripe_js', 100 );

/**
 * Load our admin javascript
 *
 * @access      public
 * @since       1.8
 * @return      void
 */
function give_stripe_admin_js( $payment_id = 0 ) {

	if ( 'stripe' !== give_get_payment_gateway( $payment_id ) ) {
		return;
	}
	?>
	<script type="text/javascript">
		jQuery( document ).ready( function ( $ ) {
			$( 'select[name=give-payment-status]' ).change( function () {

				if ( 'refunded' == $( this ).val() ) {

					$( this ).parent().parent().append( '<input type="checkbox" id="give_refund_in_stripe" name="give_refund_in_stripe" value="1"/>' );
					$( this ).parent().parent().append( '<label for="give_refund_in_stripe">Refund Charge in Stripe</label>' );

				} else {

					$( '#give_refund_in_stripe' ).remove();
					$( 'label[for="give_refund_in_stripe"]' ).remove();

				}

			} );
		} );
	</script>
<?php

}

add_action( 'give_view_order_details_before', 'give_stripe_admin_js', 100 );

/**
 * Process refund in Stripe
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_process_refund( $payment_id, $new_status, $old_status ) {

	global $give_options;

	if ( empty( $_POST['give_refund_in_stripe'] ) ) {
		return;
	}

	if ( 'publish' != $old_status && 'revoked' != $old_status ) {
		return;
	}

	if ( 'refunded' != $new_status ) {
		return;
	}

	$charge_id = false;

	$notes = give_get_payment_notes( $payment_id );
	foreach ( $notes as $note ) {
		if ( preg_match( '/^Stripe Charge ID: ([^\s]+)/', $note->comment_content, $match ) ) {
			$charge_id = $match[1];
			break;
		}
	}

	// Bail if no charge ID was found
	if ( empty( $charge_id ) ) {
		return;
	}

	if ( ! class_exists( 'Stripe' ) ) {
		require_once GIVE_STRIPE_PLUGIN_DIR . '/Stripe/Stripe.php';
	}

	$secret_key = give_is_test_mode() ? trim( $give_options['test_secret_key'] ) : trim( $give_options['live_secret_key'] );

	Stripe::setApiKey( $secret_key );

	$ch = Stripe_Charge::retrieve( $charge_id );


	try {
		$ch->refund();

		give_insert_payment_note( $payment_id, __( 'Charge refunded in Stripe', 'give-stripe' ) );

	}
	catch ( Exception $e ) {

		// some sort of other error
		$body = $e->getJsonBody();
		$err  = $body['error'];

		if ( isset( $err['message'] ) ) {
			$error = $err['message'];
		} else {
			$error = __( 'Something went wrong while refunding the Charge in Stripe.', 'give-stripe' );
		}

		wp_die( $error );

	}

}

add_action( 'give_update_payment_status', 'give_stripe_process_refund', 200, 3 );

/**
 * Get the meta key for storing Stripe customer IDs in
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function give_stripe_get_customer_key() {

	$key = '_give_stripe_customer_id';
	if ( give_is_test_mode() ) {
		$key .= '_test';
	}

	return $key;
}

/**
 * Determines if the shop is using a zero-decimal currency
 *
 * @access      public
 * @since       1.0
 * @return      bool
 */
function give_stripe_is_zero_decimal_currency() {

	$ret      = false;
	$currency = give_get_currency();

	switch ( $currency ) {

		case 'BIF' :
		case 'CLP' :
		case 'DJF' :
		case 'GNF' :
		case 'JPY' :
		case 'KMF' :
		case 'KRW' :
		case 'MGA' :
		case 'PYG' :
		case 'RWF' :
		case 'VND' :
		case 'VUV' :
		case 'XAF' :
		case 'XOF' :
		case 'XPF' :

			$ret = true;
			break;

	}

	return $ret;
}

/**
 * Given a Payment ID, extract the transaction ID from Stripe
 *
 * @param  string $payment_id Payment ID
 *
 * @return string                   Transaction ID
 */
function give_stripe_get_payment_transaction_id( $payment_id ) {

	$notes          = give_get_payment_notes( $payment_id );
	$transaction_id = '';

	foreach ( $notes as $note ) {
		if ( preg_match( '/^Stripe Charge ID: ([^\s]+)/', $note->comment_content, $match ) ) {
			$transaction_id = $match[1];
			continue;
		}
	}

	return apply_filters( 'give_stripe_set_payment_transaction_id', $transaction_id, $payment_id );
}

add_filter( 'give_get_payment_transaction_id-stripe', 'give_stripe_get_payment_transaction_id', 10, 1 );


/**
 * Given a transaction ID, generate a link to the PayPal transaction ID details
 *
 * @since  1.9.1
 *
 * @param  string $transaction_id The Transaction ID
 * @param  int    $payment_id     The payment ID for this transaction
 *
 * @return string                 A link to the PayPal transaction details
 */
function give_stripe_link_transaction_id( $transaction_id, $payment_id ) {

	$test = give_get_payment_meta( $payment_id, '_give_payment_mode' ) === 'test' ? 'test/' : '';
	$url  = '<a href="https://dashboard.stripe.com/' . $test . 'payments/' . $transaction_id . '" target="_blank">' . $transaction_id . '</a>';

	return apply_filters( 'give_stripe_link_payment_details_transaction_id', $url );

}

add_filter( 'give_payment_details_transaction_id-stripe', 'give_stripe_link_transaction_id', 10, 2 );

/**
 * Sets the stripe-checkout parameter if the direct parameter is present in the [purchase_link] short code
 *
 * @since  2.0
 * @return array
 */
function give_stripe_purchase_link_shortcode_atts( $out, $pairs, $atts ) {

	if ( ! empty( $out['direct'] ) ) {

		$out['stripe-checkout'] = true;
		$out['direct']          = true;

	} else {

		foreach ( $atts as $key => $value ) {
			if ( false !== strpos( $value, 'stripe-checkout' ) ) {
				$out['stripe-checkout'] = true;
				$out['direct']          = true;
			}
		}

	}

	return $out;
}

add_filter( 'shortcode_atts_purchase_link', 'give_stripe_purchase_link_shortcode_atts', 10, 3 );

/**
 * Sets the stripe-checkout parameter if the direct parameter is present in give_get_purchase_link()
 *
 * @since  2.0
 * @return array
 */
function give_stripe_purchase_link_atts( $args ) {

	if ( ! empty( $args['direct'] ) ) {

		$args['stripe-checkout'] = true;
		$args['direct']          = true;
	}

	return $args;
}

add_filter( 'give_purchase_link_args', 'give_stripe_purchase_link_atts', 10 );

/**
 * Outputs javascript for the Stripe Checkout modal
 *
 * @since  1.0
 * @return void
 */
function give_stripe_purchase_link_output( $download_id, $args ) {

	if ( ! isset( $args['stripe-checkout'] ) ) {
		return;
	}
	give_stripe_js( true );

	if ( give_is_test_mode() ) {
		$publishable_key = trim( give_get_option( 'test_publishable_key' ) );
	} else {
		$publishable_key = trim( give_get_option( 'live_publishable_key' ) );
	}

	$download = get_post( $download_id );

	$email = '';
	if ( is_user_logged_in() ) {
		global $current_user;
		get_currentuserinfo();
		$email = $current_user->user_email;
	}
	?>
	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script>
		jQuery( document ).ready( function ( $ ) {

			var give_global_vars;
			var give_scripts;
			var form;

			$( '#give_purchase_<?php echo $download_id; ?>,.give_purchase_<?php echo $download_id; ?>' ).submit( function ( e ) {

				form = $( this );

				e.preventDefault();

				if ( form.find( '.give_price_options' ).length || form.find( '.give_price_option_<?php echo $download_id; ?>' ).length ) {
					var price_id;
					var prices = [];

					<?php foreach( give_get_variable_prices( $download_id ) as $price_id => $price ) : ?>
					prices[<?php echo $price_id; ?>] = <?php echo $price['amount']*100; ?>;
					<?php endforeach; ?>

					if ( form.find( '.give_price_option_<?php echo $download_id; ?>' ).length > 1 ) {
						price_id = form.find( '.give_price_options input:checked' ).val();
					} else {
						price_id = form.find( '.give_price_option_<?php echo $download_id; ?>' ).val();
					}
					amount = prices[price_id];

				} else {
					amount =
					<?php echo give_get_download_price( $download_id ) * 100; ?>
				}

				StripeCheckout.configure( {
					key  : '<?php echo $publishable_key; ?>',
					//image: '/square-image.png',
					token: function ( token ) {
						// insert the token into the form so it gets submitted to the server
						form.append( "<input type='hidden' name='give_stripe_token' value='" + token.id + "' />" );
						form.append( "<input type='hidden' name='give_email' value='" + token.email + "' />" );
						// submit
						form.get( 0 ).submit();
					}
				} ).open( {
					name       : '<?php echo get_bloginfo( "name" ); ?>',
					description: '<?php echo $download->post_title; ?>',
					amount     : amount,
					zipCode    : true,
					email      : '<?php echo $email; ?>',
					currency   : '<?php echo give_get_currency(); ?>'
				} );

			} );

		} );
	</script>
<?php
}

add_action( 'give_purchase_link_end', 'give_stripe_purchase_link_output', 99999, 2 );

/**
 * Injects the Stripe token and customer email into the pre-gateway data
 *
 * @since  2.0
 * @return array
 */
function give_stripe_straight_to_gateway_data( $purchase_data ) {

	if ( isset( $_REQUEST['give_stripe_token'] ) ) {
		$purchase_data['gateway'] = 'stripe';
		$_REQUEST['give-gateway'] = 'stripe';

		if ( isset( $_REQUEST['give_email'] ) ) {
			$purchase_data['user_info']['email'] = $_REQUEST['give_email'];
			$purchase_data['user_email']         = $_REQUEST['give_email'];
		}

	}

	return $purchase_data;
}

add_filter( 'give_straight_to_gateway_purchase_data', 'give_stripe_straight_to_gateway_data' );
