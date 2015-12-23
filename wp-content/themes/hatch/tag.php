<?php get_header(); ?>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
    <div class="category-title">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-category.svg"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
    </div>
    <main role="main">

      <?php get_template_part('loop'); ?>

      <div class="blog-pagination">
        <div class="nav-previous"><?php next_posts_link( '&larr;&nbsp; Older posts' ); ?></div>
        <div class="nav-next"><?php previous_posts_link( 'Newer posts &nbsp;&rarr;' ); ?></div>
      </div>

    </main>
  </div>
  <div class="blog-sidebar-wrapper">
    <aside class="blog-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>