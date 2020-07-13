<?php get_header();

$query_one_args = array(
	'post_type' => 'impact_labs_team',
	'posts_per_page' => '-1',
	'meta_query' => array(
		array(
			'key' => 'exec_board',
			'compare' => '==',
			'value' => '1'
		)
	)
);
$query_one = new WP_Query( $query_one_args );

$query_two_args = array(
	'post_type' => 'impact_labs_team',
	'posts_per_page' => '-1',
	'meta_query' => array(
		array(
			'key' => 'exec_board',
			'compare' => '==',
			'value' => '0'
		)
	)
);
$query_two = new WP_Query( $query_two_args );

?>

	<main role="main">
		<div class="container">
			<div class="row">
				<?php if($post->post_parent): ?>
				<div class="page-content">
					<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-parent-chevron.svg"></span>
				<?php else: ?>
				<div class="page-content page-full">
				<?php endif; ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>

						<div class="advisory-board-posts exec-board">

							<h4>Core Team</h4>
							<?php if ( $query_one->have_posts() ) : while ( $query_one->have_posts() ) : $query_one->the_post(); ?>
							<?php
								// featured image
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
								$thumb_url = $thumb_url_array[0];
							?>
								<div class="board-member">
							    <div class="row">
							    	<div class="col-sm-3">
							    		<?php the_post_thumbnail(); ?>
							    	</div>
							    	<div class="col-sm-9">
								    	<h3 class="board-member-name"><?php the_title(); ?></h3>
								    	<?php the_content(); ?>
								    </div>
								  </div>
							  </div>
							<?php endwhile; else : ?>
							<?php endif; ?>

							<?php wp_reset_query(); ?>

						</div>


						<div class="advisory-board-posts">

							<h4>Facilitators</h4>
							<?php if ( $query_two->have_posts() ) : while ( $query_two->have_posts() ) : $query_two->the_post(); ?>
							<?php
								// featured image
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
								$thumb_url = $thumb_url_array[0];
							?>
								<div class="board-member">
							    <div class="row">
							    	<div class="col-sm-3">
							    		<?php the_post_thumbnail(); ?>
							    	</div>
							    	<div class="col-sm-9">
								    	<h3 class="board-member-name"><?php the_title(); ?></h3>
								    	<?php the_content(); ?>
								    </div>
								  </div>
							  </div>
							<?php endwhile; else : ?>
							<?php endif; ?>

							<?php wp_reset_query(); ?>

						</div>
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<?php endif; ?>

				</div>

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

					<?php else: ?>

					<?php endif; ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
