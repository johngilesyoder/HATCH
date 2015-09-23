<?php get_header(); ?>
	<main role="main">
		<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/banner-matching.jpg');background-position: 50% 50%;">
			<div class="page-title">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				
				<?php
				  if($post->post_parent) {
				  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  $titlenamer = get_the_title($post->post_parent);
				  }

				  else {
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  $titlenamer = get_the_title($post->ID);
				  }
				  if ($children) : ?>
				  <div class="page-sidebar">
					  <h2><?php echo $titlenamer; ?></h2>
					  <ul>
					  <?php echo $children; ?>
					  </ul>
					 </div>

					 <div class="page-content">
					 	<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-parent-chevron.svg"></span>

					<?php else: ?>
						
						<div class="page-content page-full">
				
				<?php endif; ?>

					
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<div class="alert alert-matching">
							  <img src="http://hatchexperience.org/wp-content/uploads/2015/09/dawn-matching.png" alt="goodworks-matching" />
							  <p><strong>Dawn McGee &mdash; Goodworks Ventures</strong></p>
							  <p>Dawn McGee is the new CEO of Good Works Ventures, LLC &ndash; a Montana based company that invests in high social impact companies. They consider companies that are paradigm changing and have the potential for good financial return. Good Works invests in early and mid stage companies that show promise in their technology, scalability and management.</p>
							</div>

							<div class="total-raised">
							  <span>Fundraising goal: <strong>$10,000</strong></span><span>Total raised: <strong>$6,974</strong></span>
							</div>

							<div class="matching-progress progress-1">
							  <span class="matching-progress-final">Contributed</span>
							  <div class="progress">
							    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
							      $3,487
							    </div>
							  </div>
							</div>

							<div class="matching-progress progress-2">
							  <span class="matching-progress-final">Matched</span>
							  <div class="progress">
							    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
							      $3,487
							    </div>
							  </div>
							</div>

							<hr />

							<?php echo do_shortcode('[give_form id="1162"]'); ?>

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
