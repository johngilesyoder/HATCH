<?php get_header(); /* Template Name: HATCHING a Better World */ ?>

	<main role="main">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
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

          <div class="labs">
            
            <?php
              global $wp_query;
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => 'story',
                'posts_per_page' => 15,
                'paged' => $paged
              );
              $wp_query = new WP_Query($args);

              while ( $wp_query->have_posts() ) : $wp_query->the_post();

              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

              get_template_part( 'includes/story'); ?>

            <?php endwhile; ?>
             
          </div>
        
          <?php the_posts_pagination( ); ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
