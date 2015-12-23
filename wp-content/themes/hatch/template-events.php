<?php /* Template Name: Events Template */ get_header(); ?>

	<main role="main">
		<div class="container">
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

	</main>

<?php get_footer(); ?>
