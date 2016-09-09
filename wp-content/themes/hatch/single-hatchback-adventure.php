<?php get_header(); ?>
	<main role="main">
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
									<!-- <div class="alert alert-warning">
										The application window for HATCH 2015 has now closed. Check back here next year for HATCH 2016.
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
