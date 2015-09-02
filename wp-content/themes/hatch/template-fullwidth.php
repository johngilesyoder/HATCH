<?php /* Template Name: Full Width Page Template */ get_header(); ?>

	<main role="main">

		<div class="container">
			<div class="row">
				<div class="page-content page-full">
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
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

	</main>

<?php get_footer(); ?>
