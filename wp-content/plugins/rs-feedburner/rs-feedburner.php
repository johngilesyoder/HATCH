<?php
/*
Plugin Name: RS FeedBurner
Plugin URI: http://www.redsandmarketing.com/plugins/rs-feedburner/
Description: This plugin detects native WordPress feeds and redirects them to your FeedBurner, FeedPress, or FeedBlitz feeds so you can track your subscribers. 
Author: Scott Allen
Version: 1.5
Author URI: http://www.redsandmarketing.com/
Text Domain: rs-feedburner
License: GPLv2
*/

/*  Copyright 2014    Scott Allen  (email : plugins [at] redsandmarketing [dot] com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// PLUGIN - BEGIN

/* Note to any other PHP developers reading this:
My use of the closing curly braces "}" is a little funky in that I indent them, I know. IMO it's easier to debug. Just know that it's on purpose even though it's not standard. One of my programming quirks, and just how I roll. :)
*/

// Make sure plugin remains secure if called directly
if ( !defined( 'ABSPATH' ) ) {
	if ( !headers_sent() ) { header('HTTP/1.1 403 Forbidden'); }
	die('ERROR: This plugin requires WordPress and will not function if called directly.');
	}

define( 'RSFB_VERSION', '1.5' );
define( 'RSFB_REQUIRED_WP_VERSION', '3.8' );
/* Constants prefixed with 'RSMP_' are shared with other RSM Plugins for efficiency. */
if ( !defined( 'RSFB_DEBUG' ) ) 				{ define( 'RSFB_DEBUG', FALSE ); } // Do not change value unless developer asks you to - for debugging only. Change in wp-config.php.
if ( !defined( 'RSMP_SITE_URL' ) ) 				{ define( 'RSMP_SITE_URL', untrailingslashit( site_url() ) ); } 						// http://example.com
if ( !defined( 'RSMP_SITE_DOMAIN' ) ) 			{ define( 'RSMP_SITE_DOMAIN', rsfb_get_domain( RSMP_SITE_URL ) ); }						// example.com
if ( !defined( 'RSMP_PLUGINS_DIR_URL' ) ) 		{ define( 'RSMP_PLUGINS_DIR_URL', untrailingslashit( plugins_url() ) ); } 				// http://example.com/wp-content/plugins
if ( !defined( 'RSMP_CONTENT_DIR_URL' ) ) 		{ define( 'RSMP_CONTENT_DIR_URL', untrailingslashit( content_url() ) ); } 				// http://example.com/wp-content
if ( !defined( 'RSMP_ADMIN_URL' ) ) 			{ define( 'RSMP_ADMIN_URL', untrailingslashit( admin_url() ) ); }						// http://example.com/wp-admin
if ( !defined( 'RSFB_PLUGIN_BASENAME' ) ) 		{ define( 'RSFB_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); }						// rs-feedburner/rs-feedburner.php
if ( !defined( 'RSFB_PLUGIN_FILE_BASENAME' ) )	{ define( 'RSFB_PLUGIN_FILE_BASENAME', trim( basename( __FILE__ ), '/' ) ); }			// rs-feedburner.php
if ( !defined( 'RSFB_PLUGIN_NAME' ) ) 			{ define( 'RSFB_PLUGIN_NAME', trim( dirname( RSFB_PLUGIN_BASENAME ), '/' ) ); }			// rs-feedburner
if ( !defined( 'RSFB_PLUGIN_URL' ) ) 			{ define( 'RSFB_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) ); }		// http://example.com/wp-content/plugins/rs-feedburner
if ( !defined( 'RSFB_PLUGIN_FILE_URL' ) ) 		{ define( 'RSFB_PLUGIN_FILE_URL', RSFB_PLUGIN_URL.'/'.RSFB_PLUGIN_FILE_BASENAME ); }	// http://example.com/wp-content/plugins/rs-feedburner/rs-feedburner.php
if ( !defined( 'RSFB_PLUGIN_IMG_URL' ) ) 		{ define( 'RSFB_PLUGIN_IMG_URL', RSFB_PLUGIN_URL . '/img' ); }							// http://example.com/wp-content/plugins/rs-feedburner/img
if ( !defined( 'RSFB_PLUGIN_PATH' ) ) 			{ define( 'RSFB_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) ); } 	// /public_html/wp-content/plugins/rs-feedburner
if ( !defined( 'RSFB_PLUGIN_FILE_PATH' ) )		{ define( 'RSFB_PLUGIN_FILE_PATH', RSFB_PLUGIN_PATH.'/'.RSFB_PLUGIN_FILE_BASENAME ); }	// /public_html/wp-content/plugins/rs-feedburner/rs-feedburner.php
if ( !defined( 'RSFB_SERVER_ADDR' ) ) 			{ define( 'RSFB_SERVER_ADDR', rsfb_get_server_addr() ); }								// 10.20.30.100
if ( !defined( 'RSFB_SERVER_NAME' ) ) 			{ define( 'RSFB_SERVER_NAME', rsfb_get_server_name() ); }								// example.com
if ( !defined( 'RSFB_SERVER_NAME_REV' ) ) 		{ define( 'RSFB_SERVER_NAME_REV', strrev( RSFB_SERVER_NAME ) ); }
if ( !defined( 'RSFB_BLOG_NAME' ) ) 			{ define( 'RSFB_BLOG_NAME', get_bloginfo('name') ); }									// Blog Name
if ( !defined( 'RSMP_RSM_URL' ) ) 				{ define( 'RSMP_RSM_URL', 'http://www.redsandmarketing.com/' ); }
if ( !defined( 'RSFB_HOME_URL' ) ) 				{ define( 'RSFB_HOME_URL', RSMP_RSM_URL.'plugins/'.RSFB_PLUGIN_NAME.'/' ); }
if ( !defined( 'RSFB_SUPPORT_URL' ) ) 			{ define( 'RSFB_SUPPORT_URL', RSMP_RSM_URL.'plugins/wordpress-plugin-support/?plugin='.RSFB_PLUGIN_NAME.'/' ); }
if ( !defined( 'RSFB_WP_URL' ) ) 				{ define( 'RSFB_WP_URL', 'https://wordpress.org/extend/plugins/'.RSFB_PLUGIN_NAME.'/' ); }
if ( !defined( 'RSFB_WP_RATING_URL' ) ) 		{ define( 'RSFB_WP_RATING_URL', 'https://wordpress.org/support/view/plugin-reviews/'.RSFB_PLUGIN_NAME ); }
if ( !defined( 'RSFB_DONATE_URL' ) ) 			{ define( 'RSFB_DONATE_URL', 'http://bit.ly/'.RSFB_PLUGIN_NAME.'-donate' ); }
if ( !defined( 'RSFB_PHP_VERSION' ) ) 			{ define( 'RSFB_PHP_VERSION', PHP_VERSION ); }
if ( !defined( 'RSFB_WP_VERSION' ) ) 			{ global $wp_version; define( 'RSFB_WP_VERSION', $wp_version ); }

$rsfb_flash = '';
$rsfb_feedburner_settings		= get_option('rs_feedburner_settings');
$rsfb_feedburner_main_url		= !empty( $rsfb_feedburner_settings['rs_feedburner_url'] ) ? trim( $rsfb_feedburner_settings['rs_feedburner_url'] ) : '';
$rsfb_feedburner_comments_url	= !empty( $rsfb_feedburner_settings['rs_feedburner_comments_url'] ) ? trim( $rsfb_feedburner_settings['rs_feedburner_comments_url'] ) : '';

function rsfb_is_hash_valid($form_hash) {
	/* TO DO: replace with standard nonces */
	$ret = FALSE;
	$saved_hash = rsfb_retrieve_hash();
	if ($form_hash === $saved_hash) { $ret = TRUE; }
	return $ret;
	}
function rsfb_generate_hash() {
	/* TO DO: replace with standard nonces */
	$new_hash = md5( uniqid( rand(), TRUE ) );
	return $new_hash;
	}
function rsfb_store_hash($rsfb_generated_hash) {
	/* TO DO: replace with standard nonces */
	return update_option('rs_feedburner_token',$rsfb_generated_hash,'RS FeedBurner Security Hash');
	}
function rsfb_retrieve_hash() {
	/* TO DO: replace with standard nonces */
	$ret = get_option('rs_feedburner_token');
	return $ret;
	}
function rsfb_feed_redirect() {
	if ( is_feed() ) {
		global $rsfb_feedburner_settings, $rsfb_feedburner_main_url, $rsfb_feedburner_comments_url;
		if ( is_comment_feed() ) { /* Comment feed */
			$rsfb_redir_url = $rsfb_feedburner_comments_url;
			}
		else { /* Main feed: 'feed', 'rdf', 'rss', 'rss2', 'atom' */
			$rsfb_redir_url = $rsfb_feedburner_main_url;
			}
		if ( !empty($rsfb_redir_url) && strpos($rsfb_redir_url,'http')===0 ) {
			/* wp_redirect() won't suffice here because need need to set specific no-cache headers */
			if (function_exists('status_header')) { status_header( 302 ); }
			header("Cache-Control: no-cache, must-revalidate"); /* HTTP/1.1 */
			header("Pragma: no-cache"); /* HTTP 1.0 */
			header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); /* Date in the past */
			header("Location:".$rsfb_redir_url);
			header("HTTP/1.1 302 Temporary Redirect");
			exit();
			}
		}
	}

$rsfb_user_agent_lc = rsfb_get_user_agent( TRUE, TRUE );
if ( FALSE === strpos( $rsfb_user_agent_lc, 'feedburner' ) 		&& 
	 FALSE === strpos( $rsfb_user_agent_lc, 'feedpress' ) 		&& 
	 FALSE === strpos( $rsfb_user_agent_lc, 'feedblitz' ) 		&& 
	 FALSE === strpos( $rsfb_user_agent_lc, 'uri.lv' ) 			&& 
	 FALSE === strpos( $rsfb_user_agent_lc, 'feedvalidator' ) 
	) {
	add_action('template_redirect', 'rsfb_feed_redirect');
	}

add_action( 'admin_menu', 'rsfb_add_plugin_settings_page' );
add_filter( 'plugin_action_links', 'rsfb_filter_plugin_actions', 10, 2 );
add_filter( 'plugin_row_meta', 'rsfb_filter_plugin_meta', 10, 2 );

/* Standard Functions - BEGIN */
function rsfb_casetrans( $type, $string ) {
	/***
	* Convert case using multibyte version if available, if not, use defaults
	***/
	switch ($type) {
		case 'upper':
			if ( function_exists( 'mb_strtoupper' ) ) { return mb_strtoupper($string, 'UTF-8'); } else { return strtoupper($string); }
		case 'lower':
			if ( function_exists( 'mb_strtolower' ) ) { return mb_strtolower($string, 'UTF-8'); } else { return strtolower($string); }
		case 'ucfirst':
			if ( function_exists( 'mb_strtoupper' ) && function_exists( 'mb_substr' ) ) { return mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($string, 1, NULL, 'UTF-8'); } else { return ucfirst($string); }
		case 'ucwords':
			if ( function_exists( 'mb_convert_case' ) ) { return mb_convert_case($string, MB_CASE_TITLE, 'UTF-8'); } else { return ucwords($string); }
			/***
			* Note differences in results between ucwords() and this. 
			* ucwords() will capitalize first characters without altering other characters, whereas this will lowercase everything, but capitalize the first character of each word.
			* This works better for our purposes, but be aware of differences.
			***/
		default:
			return $string;
		}
	}
function rsfb_get_server_addr() {
	if ( !empty( $_SERVER['SERVER_ADDR'] ) ) { $server_addr = $_SERVER['SERVER_ADDR']; } else { $server_addr = getenv('SERVER_ADDR'); }
	if ( empty( $server_addr ) ) { $server_addr = ''; }
	return $server_addr;
	}
function rsfb_get_server_name() {
	$rsfb_site_domain	= $server_name = RSMP_SITE_DOMAIN;
	$rsfb_env_http_host	= getenv('HTTP_HOST');
	$rsfb_env_srvr_name	= getenv('SERVER_NAME');
	if 		( !empty( $_SERVER['HTTP_HOST'] ) 	&& strpos( $rsfb_site_domain, $_SERVER['HTTP_HOST'] ) 	!== FALSE ) { $server_name = $_SERVER['HTTP_HOST']; }
	elseif 	( !empty( $rsfb_env_http_host ) 	&& strpos( $rsfb_site_domain, $rsfb_env_http_host ) 	!== FALSE ) { $server_name = $rsfb_env_http_host; }
	elseif 	( !empty( $_SERVER['SERVER_NAME'] ) && strpos( $rsfb_site_domain, $_SERVER['SERVER_NAME'] ) !== FALSE ) { $server_name = $_SERVER['SERVER_NAME']; }
	elseif 	( !empty( $rsfb_env_srvr_name ) 	&& strpos( $rsfb_site_domain, $rsfb_env_srvr_name ) 	!== FALSE ) { $server_name = $rsfb_env_srvr_name; }
	return rsfb_casetrans( 'lower', $server_name );
	}
function rsfb_get_url( $noquery = FALSE ) {
	$url  = rsfb_is_https() ? 'https://' : 'http://';
	if ( TRUE === $noquery ) { $url .= RSFB_SERVER_NAME.$_SERVER['PHP_SELF']; } else { $url .= RSFB_SERVER_NAME.$_SERVER['REQUEST_URI']; }
	return $url;
	}
function rsfb_is_https() {
	if ( !empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ) { return TRUE; }
	return FALSE;
	}
function rsfb_get_domain($url) {
	// Get domain from URL
	// Filter URLs with nothing after http
	if ( empty( $url ) || preg_match( "~^https?\:*/*$~i", $url ) ) { return ''; }
	// Fix poorly formed URLs so as not to throw errors when parsing
	$url = rsfb_fix_url( $url );
	// NOW start parsing
	$parsed = @parse_url( $url );
	// Filter URLs with no domain
	if ( empty( $parsed['host'] ) ) { return ''; }
	return rsfb_casetrans( 'lower', $parsed['host'] );
	}
function rsfb_fix_url( $url, $rem_frag = FALSE, $rem_query = FALSE, $rev = FALSE ) {
	/***
	* Fix poorly formed URLs so as not to throw errors or cause problems
	***/
	$url = trim( $url );
	/* Too many forward slashes or colons after http */
	$url = preg_replace( "~^(https?)\:+/+~i", "$1://", $url );
	/* Too many dots */
	$url = preg_replace( "~\.+~i", ".", $url );
	/* Too many slashes after the domain */
	$url = preg_replace( "~([a-z0-9]+)/+([a-z0-9]+)~i", "$1/$2", $url );
	/* Remove fragments */
	if ( !empty( $rem_frag ) && strpos( $url, '#' ) !== FALSE ) { $url_arr = explode( '#', $url ); $url = $url_arr[0]; }
	/* Remove query string completely */
	if ( !empty( $rem_query ) && strpos( $url, '?' ) !== FALSE ) { $url_arr = explode( '?', $url ); $url = $url_arr[0]; }
	/* Reverse */
	if ( !empty( $rev ) ) { $url = strrev($url); }
	return $url;
	}
function rsfb_get_query_string( $url ) {
	/***
	* Get query string from URL
	* Filter URLs with nothing after http
	***/
	if ( empty( $url ) || preg_match( "~^https?\:*/*$~i", $url ) ) { return ''; }
	/* Fix poorly formed URLs so as not to throw errors when parsing */
	$url = rsfb_fix_url( $url );
	/* NOW start parsing */
	$parsed = @parse_url($url);
	/* Filter URLs with no query string */
	if ( empty( $parsed['query'] ) ) { return ''; }
	$query_str = $parsed['query'];
	return $query_str;
	}
function rsfb_get_query_args( $url ) {
	/***
	* Get query string array from URL
	***/
	if ( empty( $url ) ) { return array(); }
	$query_str = rsfb_get_query_string( $url );
	parse_str( $query_str, $args );
	return $args;
	}
function rsfb_get_user_agent( $raw = FALSE, $lowercase = FALSE ) {
	// Gives User-Agent with filters
	// If blank, gives an initialized var to eliminate need for testing if isset() everywhere
	// Default is sanitized
	if ( !empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
		if ( !empty ( $raw ) ) 			{ $user_agent = trim( $_SERVER['HTTP_USER_AGENT'] ); } else { $user_agent = sanitize_text_field( $_SERVER['HTTP_USER_AGENT'] ); }
		if ( !empty ( $lowercase ) ) 	{ $user_agent = rsfb_casetrans( 'lower', $user_agent ); }
		}
	else { $user_agent = ''; }
	return $user_agent;
	}
function rsfb_format_bytes( $size, $precision = 2 ) {
	if ( !is_numeric( $size ) || empty( $size ) ) { return $size; }
    $base = log($size) / log(1024);
    $base_floor = floor($base);
    $suffixes = array('', 'k', 'M', 'G', 'T');
    $suffix = isset( $suffixes[$base_floor] ) ? $suffixes[$base_floor] : '';
	if ( empty($suffix) ) { return $size; }
	$formatted_num = round(pow(1024, $base - $base_floor), $precision) . $suffix;
    return $formatted_num;
	}
function rsfb_wp_memory_used() {
	$wp_memory_used = 0;
	if ( function_exists( 'memory_get_usage' ) ) { $wp_memory_used = rsfb_format_bytes( memory_get_usage() ); }
    return $wp_memory_used;
	}
function rsfb_date_diff( $start, $end ) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = ($end_ts-$start_ts);
	$start_array = explode('-', $start);
	$start_year = $start_array[0];
	$end_array = explode('-', $end);
	$end_year = $end_array[0];
	$years = $end_year-$start_year;
	if (($years%4) == 0) { $extra_days = ((($end_year-$start_year)/4)-1); } else { $extra_days = ((($end_year-$start_year)/4)); }
	$extra_days = round($extra_days);
	return round($diff/86400)+$extra_days;
	}
function rsfb_is_lang_en_us( $strict = TRUE ) {
	// Test if site is set to use English (US) - the default - or another language/localization
	$rsfb_locale = get_locale();
	if ( $strict != TRUE ) {
		// Not strict - English, but localized translations may be in use
		if ( !empty( $rsfb_locale ) && !preg_match( "~^(en(_[a-z]{2})?)?$~i", $rsfb_locale ) ) { $lang_en_us = FALSE; } else { $lang_en_us = TRUE; }
		}
	else {
		// Strict - English (US), no translation being used
		if ( !empty( $rsfb_locale ) && !preg_match( "~^(en(_us)?)?$~i", $rsfb_locale ) ) { $lang_en_us = FALSE; } else { $lang_en_us = TRUE; }
		}
	return $lang_en_us;
	}
function rsfb_doc_txt() {
	return __( 'Documentation', RSFB_PLUGIN_NAME );
	}
function rsfb_is_user_admin() {
	global $rsfb_user_can_manage_options;
	if ( empty( $rsfb_user_can_manage_options ) ) { $rsfb_user_can_manage_options = current_user_can( 'manage_options' ) ? 'YES' : 'NO' ; }
	if ( $rsfb_user_can_manage_options === 'YES' ) { return TRUE; }
	return FALSE;
	}
function rsfb_append_log_data( $str = NULL, $rsds_only = FALSE ) {
	/***
	* Adds data to the log for debugging - only use when Debugging - Use with WP_DEBUG & RSFB_DEBUG
	* Example:
	* rsfb_append_log_data( PHP_EOL.'$rsfb_example_variable: "'.$rsfb_example_variable.'" Line: '.__LINE__.' | '.__FUNCTION__.' | MEM USED: ' . rsfb_wp_memory_used() . ' | VER: ' . RSFB_VERSION, TRUE );
	* rsfb_append_log_data( PHP_EOL.'[A]$rsfb_example_array_var: "'.serialize($rsfb_example_array_var).'" Line: '.__LINE__.' | '.__FUNCTION__.' | MEM USED: ' . rsfb_wp_memory_used() . ' | VER: ' . RSFB_VERSION, TRUE );
	***/
	if ( WP_DEBUG === TRUE && RSFB_DEBUG === TRUE ) {
		if ( !empty( $rsds_only ) && strpos( RSFB_SERVER_NAME_REV, RSMP_DEBUG_SERVER_NAME_REV ) !== 0 ) { return; }
		$rsfb_log_str = 'RS FeedBurner DEBUG: '.str_replace(PHP_EOL, "", $str);
		error_log( $rsfb_log_str, 0 ); /* Logs to debug.log */
		}
	}
/* Standard Functions - END */

/* Admin Functions - BEGIN */
register_activation_hook( __FILE__, 'rsfb_activation' );
function rsfb_activation() {
	global $rsfb_feedburner_settings;
	rsfb_upgrade_check();
	if ( empty( $rsfb_feedburner_settings['install_date'] ) ) {
		$rsfb_feedburner_settings['install_date'] = date('Y-m-d');
		}
	}
add_action( 'admin_init', 'rsfb_check_version' );
function rsfb_check_version() {
	if ( current_user_can( 'manage_network' ) ) {
		/* Check for pending admin notices */
		$admin_notices = get_option( 'rsfb_admin_notices' );
		if ( !empty( $admin_notices ) ) { add_action( 'network_admin_notices', 'rsfb_admin_notices' ); }
		/* Make sure not network activated */
		if ( is_plugin_active_for_network( RSFB_PLUGIN_BASENAME ) ) {
			deactivate_plugins( RSFB_PLUGIN_BASENAME, TRUE, TRUE );
			$notice_text = __( 'Plugin deactivated. RS FeedBurner is not available for network activation.', RSFB_PLUGIN_NAME );
			$new_admin_notice = array( 'style' => 'error', 'notice' => $notice_text );
			update_option( 'rsfb_admin_notices', $new_admin_notice );
			add_action( 'network_admin_notices', 'rsfb_admin_notices' );
			return FALSE;
			}
		}
	if ( current_user_can( 'manage_options' ) ) {
		/* Check if plugin has been upgraded */
		rsfb_upgrade_check();
		/* Check for pending admin notices */
		$admin_notices = get_option( 'rsfb_admin_notices' );
		if ( !empty( $admin_notices ) ) { add_action( 'admin_notices', 'rsfb_admin_notices' ); }
		/* Make sure user has minimum required WordPress version, in order to prevent issues */
		$rsfb_wp_version = RSFB_WP_VERSION;
		if ( version_compare( $rsfb_wp_version, RSFB_REQUIRED_WP_VERSION, '<' ) ) {
			deactivate_plugins( RSFB_PLUGIN_BASENAME );
			$notice_text = sprintf( __( 'Plugin deactivated. WordPress Version %s required. Please upgrade WordPress to the latest version.', RSFB_PLUGIN_NAME ), RSFB_REQUIRED_WP_VERSION );
			$new_admin_notice = array( 'style' => 'error', 'notice' => $notice_text );
			update_option( 'rsfb_admin_notices', $new_admin_notice );
			add_action( 'admin_notices', 'rsfb_admin_notices' );
			return FALSE;
			}
		rsfb_check_nag_notices();
		}
	}
function rsfb_admin_notices() {
	$admin_notices = get_option('rsfb_admin_notices');
	if ( !empty( $admin_notices ) ) {
		$style 	= $admin_notices['style']; /* 'error' or 'updated' */
		$notice	= $admin_notices['notice'];
		echo '<div class="'.$style.'"><p>'.$notice.'</p></div>';
		}
	delete_option('rsfb_admin_notices');
	}
function rsfb_admin_nag_notices() {
	global $current_user;
	$nag_notices = get_user_meta( $current_user->ID, 'rsfb_nag_notices', TRUE );
	if ( !empty( $nag_notices ) ) {
		$nid			= $nag_notices['nid'];
		$style			= $nag_notices['style']; /* 'error'  or 'updated' */
		$timenow		= time();
		$url			= rsfb_get_url();
		$query_args		= rsfb_get_query_args( $url );
		$query_str		= '?' . http_build_query( array_merge( $query_args, array( 'rsfb_hide_nag' => '1', 'nid' => $nid ) ) );
		$query_str_con	= 'QUERYSTRING';
		$notice			= str_replace( array( $query_str_con ), array( $query_str ), $nag_notices['notice'] );
		echo '<div class="'.$style.'"><p>'.$notice.'</p></div>';
		}
	}
function rsfb_check_nag_notices() {
	global $current_user;
	$status			= get_user_meta( $current_user->ID, 'rsfb_nag_status', TRUE );
	if ( !empty( $status['currentnag'] ) ) { add_action( 'admin_notices', 'rsfb_admin_nag_notices' ); return; }
	if ( !is_array( $status ) ) { $status = array(); update_user_meta( $current_user->ID, 'rsfb_nag_status', $status ); }
	$timenow		= time();
	$num_days_inst	= rsfb_num_days_inst();
	$query_str_con	= 'QUERYSTRING';
	/* Notices (Positive Nags) */
	if ( empty( $status['currentnag'] ) && ( empty( $status['lastnag'] ) || $status['lastnag'] <= $timenow - 1209600 ) ) {
		if ( empty( $status['vote'] ) && $num_days_inst >= 14 ) { /* TO DO: TRANSLATE */
			$nid = 'n01'; $style = 'updated';
			$notice_text = __( 'It looks like you\'ve been using RS FeedBurner for a while now. That\'s great! :)', RSFB_PLUGIN_NAME ) .'</p><p>'. __( 'If you find this plugin useful, would you take a moment to give it a rating on WordPress.org?', RSFB_PLUGIN_NAME ) .'</p><p>'. sprintf( __( '<strong><a href=%1$s>%2$s</a></strong>', RSFB_PLUGIN_NAME ), '"'.RSFB_WP_RATING_URL.'" target="_blank" rel="external" ', __( 'Yes, I\'d like to rate it!', RSFB_PLUGIN_NAME ) ) .' &mdash; '.  sprintf( __( '<strong><a href=%1$s>%2$s</a></strong>', RSFB_PLUGIN_NAME ), '"'.$query_str_con.'" ', __( 'I already did!', RSFB_PLUGIN_NAME ) );
			$status['currentnag'] = TRUE; $status['vote'] = FALSE;
			}
		elseif ( empty( $status['donate'] ) && $num_days_inst >= 90 ) { /* TO DO: TRANSLATE */
			$nid = 'n02'; $style = 'updated';
			$notice_text = __( 'You\'ve been using RS FeedBurner for several months now. We hope that means you like it and are finding it helpful. :)', RSFB_PLUGIN_NAME ) .'</p><p>'. __( 'RS FeedBurner is provided for free.', RSFB_PLUGIN_NAME ) . ' ' . __( 'If you like the plugin, consider a donation to help further its development.', RSFB_PLUGIN_NAME ) .'</p><p>'. sprintf( __( '<strong><a href=%1$s>%2$s</a></strong>', RSFB_PLUGIN_NAME ), '"'.RSFB_DONATE_URL.'" target="_blank" rel="external" ', __( 'Yes, I\'d like to donate!', RSFB_PLUGIN_NAME ) ) .' &mdash; '. sprintf( __( '<strong><a href=%1$s>%2$s</a></strong>', RSFB_PLUGIN_NAME ), '"'.$query_str_con.'" ', __( 'I already did!', RSFB_PLUGIN_NAME ) );
			$status['currentnag'] = TRUE; $status['donate'] = FALSE;
			}
		}
	/* Warnings (Negative Nags) */
	/* TO DO: Add Negative Nags - warnings about plugin conflicts and missing PHP functions */
	if ( !empty( $status['currentnag'] ) ) {
		add_action( 'admin_notices', 'rsfb_admin_nag_notices' );
		$new_nag_notice = array( 'nid' => $nid, 'style' => $style, 'notice' => $notice_text );
		update_user_meta( $current_user->ID, 'rsfb_nag_notices', $new_nag_notice );
		update_user_meta( $current_user->ID, 'rsfb_nag_status', $status );
		}
	}
add_action( 'admin_init', 'rsfb_hide_nag_notices', -10 );
function rsfb_hide_nag_notices() {
	if ( !rsfb_is_user_admin() ) { return; }
	$ns_codes		= array( 'n01' => 'vote', 'n02' => 'donate', ); /* Nag Status Codes */
	if ( !isset( $_GET['rsfb_hide_nag'], $_GET['nid'], $ns_codes[$_GET['nid']] ) || $_GET['rsfb_hide_nag'] != '1' ) { return; }
	global $current_user;
	$status			= get_user_meta( $current_user->ID, 'rsfb_nag_status', TRUE );
	$timenow		= time();
	$url			= rsfb_get_url();
	$query_args		= rsfb_get_query_args( $url ); unset( $query_args['rsfb_hide_nag'],$query_args['nid'] );
	$query_str		= http_build_query( $query_args ); if ( $query_str != '' ) { $query_str = '?'.$query_str; }
	$redirect_url	= rsfb_fix_url( $url, TRUE, TRUE ) . $query_str;
	$status['currentnag'] = FALSE; $status['lastnag'] = $timenow; $status[$ns_codes[$_GET['nid']]] = TRUE;
	update_user_meta( $current_user->ID, 'rsfb_nag_status', $status );
	update_user_meta( $current_user->ID, 'rsfb_nag_notices', array() );
	wp_redirect( $redirect_url );
	exit;
	}
function rsfb_upgrade_check( $installed_ver = NULL ) {
	if ( empty( $installed_ver ) ) { $installed_ver = get_option( 'rs_feedburner_version' ); }
	if ( $installed_ver != RSFB_VERSION ) { 
		update_option( 'rs_feedburner_version', RSFB_VERSION );
		if ( empty( $rsfb_feedburner_settings['install_date'] ) ) {
			$rsfb_feedburner_settings['install_date'] = date('Y-m-d');
			update_option( 'rs_feedburner_settings', $rsfb_feedburner_settings );
			}
		}
	}
add_action( 'plugins_loaded', 'rsfb_load_languages' );
function rsfb_load_languages() {
	load_plugin_textdomain( RSFB_PLUGIN_NAME, FALSE, basename( dirname( __FILE__ ) ) . '/languages' );
	}
function rsfb_filter_plugin_actions( $links, $file ) {
	/* Add "Settings" Link on Dashboard Plugins page, in plugin listings */
	if ( $file == RSFB_PLUGIN_BASENAME ){
		$settings_link = '<a href="options-general.php?page='.RSFB_PLUGIN_NAME.'">' . __('Settings') . '</a>';
		array_unshift( $links, $settings_link );
		}
	return $links;
	}
function rsfb_filter_plugin_meta( $links, $file ) {
	/* Add Links on Dashboard Plugins page, in plugin meta */
	if ( $file == RSFB_PLUGIN_BASENAME ){
		$links[] = '<a href="'.RSFB_HOME_URL.'" target="_blank" rel="external" >' . rsfb_doc_txt() . '</a>';
		$links[] = '<a href="'.RSFB_SUPPORT_URL.'" target="_blank" rel="external" >' . __( 'Support', RSFB_PLUGIN_NAME ) . '</a>';
		$links[] = '<a href="'.RSFB_WP_RATING_URL.'" target="_blank" rel="external" >' . __( 'Rate the Plugin', RSFB_PLUGIN_NAME ) . '</a>';
		$links[] = '<a href="'.RSFB_DONATE_URL.'" target="_blank" rel="external" >' . __( 'Donate', RSFB_PLUGIN_NAME ) . '</a>';
		}
	return $links;
	}
function rsfb_add_plugin_settings_page() {
	if ( function_exists('add_options_page') ) {
		add_options_page('RS FeedBurner', 'RS FeedBurner', 'manage_options', RSFB_PLUGIN_NAME, 'rsfb_plugin_settings_page');
		}
	}
function rsfb_plugin_settings_page() {

	if ( !current_user_can('manage_options') ) {
		$restricted_area_warning = __( 'You do not have sufficient permissions to access this page.' );
		wp_die( $restricted_area_warning );
		}

	global $rsfb_flash, $rsfb_feedburner_settings, $rsfb_feedburner_main_url, $rsfb_feedburner_comments_url, $_POST, $wp_rewrite;
	if ( current_user_can('manage_options') ) {
		rsfb_upgrade_check();
		if(isset($_POST['rs_feedburner_url']) || isset($_POST['rs_feedburner_comments_url'])) {
			/* Now we check the hash, to make sure we are not getting CSRF - TO DO: replace with standard nonces  */
			$rsfb_error = 0;
			if(rsfb_is_hash_valid($_POST['rs_token'])) {
				$rsfb_flash_settings_saved	= __( 'Your settings have been saved.', RSFB_PLUGIN_NAME );
				$rsfb_flash_feed_url_error	= __( 'Invalid value.', RSFB_PLUGIN_NAME ) . ' ' . __( 'Please enter a valid URL.', RSFB_PLUGIN_NAME ) . ' ' . __( 'Your settings have not been saved.', RSFB_PLUGIN_NAME );
				if (isset($_POST['rs_feedburner_url'])) { 
					$rsfb_url = rsfb_fix_url( trim($_POST['rs_feedburner_url']) );
					if ( !preg_match( "~^https?\://~i", $rsfb_url ) && !empty( $rsfb_url ) ) {
						$rsfb_flash 		= $rsfb_flash_feed_url_error;
						$rsfb_flash_style	= 'error';
						$rsfb_error = 1;
						}
					else {
						$rsfb_feedburner_settings['rs_feedburner_url'] = esc_url_raw( $rsfb_url );
						update_option('rs_feedburner_settings',$rsfb_feedburner_settings);
						$rsfb_flash 		= $rsfb_flash_settings_saved;
						$rsfb_flash_style	= 'updated';
						}
					}
				if (isset($_POST['rs_feedburner_comments_url'])&&empty($rsfb_error)) {
					$rsfb_comments_url = rsfb_fix_url( trim($_POST['rs_feedburner_comments_url']) );
					if ( !preg_match( "~^https?\://~i", $rsfb_comments_url ) && !empty( $rsfb_comments_url ) ) {
						$rsfb_flash 		= $rsfb_flash_feed_url_error;
						$rsfb_flash_style	= 'error';
						$rsfb_error = 1;
						}
					else {
						$rsfb_feedburner_settings['rs_feedburner_comments_url'] = esc_url_raw( $rsfb_comments_url );
						update_option('rs_feedburner_settings',$rsfb_feedburner_settings);
						$rsfb_flash			= $rsfb_flash_settings_saved;
						$rsfb_flash_style	= 'updated';
						}
					} 
				} else {
				/* Invalid form hash, possible CSRF attempt - TO DO: replace with standard nonces */
				$rsfb_flash			= __( 'There was an error with your request.', RSFB_PLUGIN_NAME );
				$rsfb_flash_style	= 'error';
				} 
			}
		} else {
		$rsfb_flash			= __( 'You do not have sufficient access rights.', RSFB_PLUGIN_NAME );
		$rsfb_flash_style	= 'error';
		}
	
	if ( !empty( $rsfb_flash ) ) { echo '<div id="message" class="'.$rsfb_flash_style.' fade"><p>' . $rsfb_flash . '</p></div>'; }
	
	$rsfb_temp_hash		= rsfb_generate_hash(); rsfb_store_hash($rsfb_temp_hash);
	$rsfb_token_value	= rsfb_retrieve_hash();
	$rsfb_input_width	= '90';
	$rsfb_feedburner_settings['rs_feedburner_url']			= !empty( $rsfb_feedburner_settings['rs_feedburner_url'] ) ? trim( $rsfb_feedburner_settings['rs_feedburner_url'] ) : '';
	$rsfb_feedburner_settings['rs_feedburner_comments_url']	= !empty( $rsfb_feedburner_settings['rs_feedburner_comments_url'] ) ? trim( $rsfb_feedburner_settings['rs_feedburner_comments_url'] ) : '';

	echo '<div class="wrap">';
	echo '<h2 style="color:#7c2001">' . 'RS FeedBurner ' . __('Settings') . '</h2>';
	echo '<p><img src="'.RSFB_PLUGIN_IMG_URL.'/rs-feedburner-icon-36.png" width="36" height="36" align="left" style="width:36px;height:36px;border-style:none;vertical-align:middle;padding-right:12px;padding-top:2px;float:left;" alt="" />'.__( 'This plugin helps you redirect all inbound traffic for your feeds to your custom FeedBurner, FeedPress, or FeedBlitz feed.', RSFB_PLUGIN_NAME ).'<br/>'.__( 'FeedBurner, FeedPress, and FeedBlitz track all your feed subscriber traffic and usage and enhance your original WordPress feed.', RSFB_PLUGIN_NAME ).'</p>
	<form action="" method="post">
	<input type="hidden" name="redirect" value="true" />
	<input type="hidden" name="rs_token" value="'.$rsfb_token_value.'" />
	<ol>
	<li>'.sprintf( __( 'If you haven\'t done so already, create a <a href=%1$s>FeedBurner</a>, <a href=%2$s>FeedPress</a>, or <a href=%3$s>FeedBlitz</a> feed for %4$s. This feed will handle all traffic for your posts.', RSFB_PLUGIN_NAME ), '"http://feedburner.google.com/" target="_blank" rel="external" ', '"http://feed.press/" target="_blank" rel="external" ', '"http://www.feedblitz.com/" target="_blank" rel="external" ', RSFB_BLOG_NAME).'</li>
	<li>'.__( 'Once you have created your FeedBurner, FeedPress, or FeedBlitz feed, enter its address into the field below:', RSFB_PLUGIN_NAME ).'<br /><input type="text" name="rs_feedburner_url" value="'.esc_url( $rsfb_feedburner_settings['rs_feedburner_url'] ).'" size="'.$rsfb_input_width.'" /></br>'.__( 'It should be a complete URL, like: <strong>http://feeds.feedburner.com/YourFeed</strong>, or <strong>http://feedpress.me/yourfeed</strong>, or <strong>http://feeds.feedblitz.com/yourfeed</strong>', RSFB_PLUGIN_NAME ).'</li>
	<li>'.sprintf( __( 'Optional: If you also want to use FeedBurner, FeedPress, or FeedBlitz for your WordPress comments feed,</br>create a <a href=%1$s>FeedBurner</a>, <a href=%2$s>FeedPress</a>, or <a href=%3$s>FeedBlitz</a> feed and then enter its address below:', RSFB_PLUGIN_NAME ), '"http://feedburner.google.com/" target="_blank" rel="external" ', '"http://feed.press/" target="_blank" rel="external" ', '"http://www.feedblitz.com/" target="_blank" rel="external" ' ).'<br /><input type="text" name="rs_feedburner_comments_url" value="'.esc_url( $rsfb_feedburner_settings['rs_feedburner_comments_url'] ).'" size="'.$rsfb_input_width.'" />
	</ol>
	<p><input type="submit" value="'.__( 'Save Changes' ).'" /></p></form>';
	?>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p><strong><a href="<?php echo RSFB_DONATE_URL; ?>" target="_blank" rel="external" ><?php _e( 'Donate to RS FeedBurner', RSFB_PLUGIN_NAME ); ?></a></strong><br />
<?php echo __( 'RS FeedBurner is provided for free.', RSFB_PLUGIN_NAME ) . ' ' . __( 'If you like the plugin, consider a donation to help further its development.', RSFB_PLUGIN_NAME ); ?></p>
<p>&nbsp;</p>

<p><strong><?php _e( 'Check out our other plugins:', RSFB_PLUGIN_NAME ); ?></strong></p>
<p><?php _e( 'If you like RS FeedBurner, you might want to check out our other plugins:', RSFB_PLUGIN_NAME ); ?></p>
<ul style="list-style-type:disc;padding-left:30px;">
	<li><a href="http://www.redsandmarketing.com/plugins/wp-spamshield/" target="_blank" rel="external" ><?php echo 'WP-SpamShield ' . __( 'Anti-Spam', RSFB_PLUGIN_NAME ); ?></a> <?php _e( 'An extremely powerful and user friendly WordPress anti-spam plugin that stops blog comment spam cold, including trackback and pingback spam. Includes spam-blocking contact form feature, and protection from user registration spam as well. WP-SpamShield is an all-in-one spam solution for WordPress. See what it\'s like to run a WordPress site without spam!', RSFB_PLUGIN_NAME ); ?></li>
	<li><a href="http://www.redsandmarketing.com/plugins/rs-head-cleaner/" target="_blank" rel="external" ><?php echo 'RS Head Cleaner Plus'; ?></a> <?php _e( 'This plugin cleans up a number of issues, doing the work of multiple plugins, improving speed, efficiency, security, SEO, and user experience. It removes junk code from the HEAD & HTTP headers, moves JavaScript from header to footer, combines/minifies/caches CSS & JavaScript files, hides the Generator/WordPress Version number, removes version numbers from CSS and JS links, and fixes the "Read more" link so it displays the entire post.', RSFB_PLUGIN_NAME ); ?></li>
	<li><a href="http://www.redsandmarketing.com/plugins/scrapebreaker/" target="_blank" rel="external" ><?php echo 'ScrapeBreaker'; ?></a> <?php _e( 'A combination of frame-breaker and scraper protection. Protect your website content from both frames and server-side scraping techniques.', RSFB_PLUGIN_NAME ); ?></li>
</ul>
<p>&nbsp;</p>

	<?php
	/* Recommended Partners - BEGIN */
	if ( rsfb_is_lang_en_us() ) {
	?>

<div style='width:797px;border-style:solid;border-width:1px;border-color:#333333;background-color:#FEFEFE;padding:0px 15px 0px 15px;margin-top:15px;margin-right:15px;float:left;clear:left;'>
<p><h3>Recommended Partners</h3></p>
<p>Each of these products or services are ones that we highly recommend, based on our experience and the experience of our clients. We do receive a commission if you purchase one of these, but these are all products and services we were already recommending because we believe in them. By purchasing from these providers, you get quality and you help support the further development of RS FeedBurner.</p>
</div>
	<?php
		$rsfb_rpd	= array(
						array('clear:left;','RSM_Genesis','Genesis WordPress Framework','Other themes and frameworks have nothing on Genesis. Optimized for site speed and SEO.','Simply put, the Genesis framework is one of the best ways to design and build a WordPress site. Built-in SEO and optimized for speed. Create just about any kind of design with child themes.'),
						array('','RSM_AIOSEOP','All in One SEO Pack Pro','The best way to manage the code-related SEO for your WordPress site.','Save time and effort optimizing the code of your WordPress site with All in One SEO Pack. One of the top rated, and most downloaded plugins on WordPress.org, this time-saving plugin is incredibly valuable. The pro version provides powerful features not available in the free version.'),
						);
		foreach( $rsfb_rpd as $i => $v ) {
			echo "\t".'<div style="width:375px;height:280px;border-style:solid;border-width:1px;border-color:#333333;background-color:#FEFEFE;padding:0px 15px 0px 15px;margin-top:15px;margin-right:15px;float:left;'.$v[0].'">'.PHP_EOL."\t".'<p><strong><a href="http://bit.ly/'.$v[1].'" target="_blank" rel="external" >'.$v[2].'</a></strong></p>'.PHP_EOL."\t".'<p><strong>'.$v[3].'</strong></p>'.PHP_EOL."\t".'<p>'.$v[4].'</p>'.PHP_EOL."\t".'<p><a href="http://bit.ly/'.$v[1].'" target="_blank" rel="external" >Click here to find out more. >></a></p>'.PHP_EOL."\t".'</div>'.PHP_EOL;
			}

		}
	/* Recommended Partners - END */
	?>
<p style="clear:both;">&nbsp;</p>
</div>
	<?php
	}
function rsfb_num_days_inst() {
	global $rsfb_feedburner_settings;
	$current_date	= date('Y-m-d');
	$install_date	= empty( $rsfb_feedburner_settings['install_date'] ) ? $current_date : $rsfb_feedburner_settings['install_date'];
	$num_days_inst	= rsfb_date_diff($install_date, $current_date); if ( $num_days_inst < 1 ) { $num_days_inst = 1; }
	return $num_days_inst;
	}
/* Admin Functions - END */

/*PLUGIN - END */
