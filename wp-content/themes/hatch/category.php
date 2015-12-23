<?php get_header(); ?>

  <div class="blog-roll-wrapper">
    <div class="category-title">
      <h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
    </div>
    <div class="container container-blog">
      <main role="main">

        <?php get_template_part('loop'); ?>

        <div class="blog-pagination">
          <div class="nav-previous"><?php next_posts_link( '&larr;&nbsp; Older posts' ); ?></div>
          <div class="nav-next"><?php previous_posts_link( 'Newer posts &nbsp;&rarr;' ); ?></div>
        </div>

      </main>
      <div class="blog-sidebar-wrapper">
        <aside class="blog-sidebar">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
</div>