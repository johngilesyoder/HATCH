<div class="mobile-carousel">

  <?php query_posts( 
    array(
      'post_type' => 'post', // if the post type is post 
      'posts_per_page' => 8,
      'tax_query' => array(
      array(
        'taxonomy' => 'post_format',
        'field' => 'slug',
        'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
        'operator' => 'NOT IN'
      ))
    )
  ); 
  ?>

  <?php 
    if (have_posts()): while (have_posts()) : the_post(); 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
    $thumb_url = $thumb_url_array[0];
  ?>
	<div class="gallery-cell">
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
      <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
      <?php else: ?>
      <article class="article-wrapper">
      <?php endif; ?>
        <div class="gradient-wrapper">
          <hgroup>
            <h2 class="post-author"><?php the_author(); ?> </h2>
            <h1 class="post-title"><?php the_title(); ?></h1>
          </hgroup>
        </div>
      </article>
    </a>
  </div>
  <?php endwhile; ?>

  <?php else: ?>

    <!-- article -->
    <article>
      <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->

  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>