<?php /* Template Name: Divi Full Width */ get_header(); ?>

	<main role="main">

		<div class="container-fluid">
			<div class="row">
				<?php if($post->post_parent): ?>
				<div class="page-content col-md-9 order-last">
					<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-parent-chevron.svg"></span>
				<?php else: ?>
				<div class="page-content page-full col-md-13">
				<?php endif; ?>
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
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
				  <div class="page-sidebar col-md-3 order-first">
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
