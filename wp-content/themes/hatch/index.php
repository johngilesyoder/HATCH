<?php get_header(); ?>
<!-- Modal -->
<div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Categories</h4>
      </div>
      <div class="modal-body">
        <?php wp_list_categories('title_li=&orderby=count&order=DESC&taxonomy=post_tag'); ?>
      </div>
    </div>
  </div>
</div>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
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