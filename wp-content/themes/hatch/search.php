<?php get_header(); ?>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
    <div class="search-title">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-search.svg"><?php echo sprintf( __( '%s results for ', 'html5blank' ), $wp_query->found_posts ); ?> '<span class="search-term"><?php echo get_search_query(); ?></span>'</h1>
    </div>
    <main role="main">

			<?php get_template_part('loop-search'); ?>

			<?php get_template_part('pagination'); ?>

    </main>
  </div>
  <div class="blog-sidebar-wrapper">
    <aside class="blog-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>