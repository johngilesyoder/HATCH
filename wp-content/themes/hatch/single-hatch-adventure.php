<?php get_header(); ?>
	<main role="main">
    <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/banner-adventures.jpg');background-position: 50% 50%;">
			<div class="page-title">
				<div class="container">
					<h1>HATCH Adventures</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">

				<div class="page-content page-full">
          <div class="page-title">
  					<h1><?php the_title(); ?></h1>
  				</div>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>
							<hr>
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
                  <h3>Register now</h3>
									<!-- <div class="alert alert-warning">
										The application window for HATCH Adventure Mexico has now closed. Check back here next year.
									</div> -->
									<?php gravity_form(18, false, false, false, '', true); ?>
								</div>
							</div>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
