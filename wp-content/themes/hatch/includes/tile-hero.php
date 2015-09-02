<?php $count = 1; ?>

<div class="tile-carousel">

  <?php if( $count == 1 ): ?>
    <div class="gallery-cell">
        <div class="isotope">
  <?php endif; ?>


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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php

        // post permalinks
        $permalink = get_permalink();
        // featured image
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];
        
        switch ($count%4) {

          case 2:
              echo "<a href='$permalink' class='item size2'>";
              break;
          case 0:
              echo "<a href='$permalink' class='item size3'>";
              break;
          default:
              echo "<a href='$permalink' class='item'>";
              break;
        }

        ?>
          
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
          <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
          <?php else: ?>
          <article class="article-wrapper">
          <?php endif; ?>
            <div class="gradient-wrapper">
              <?php //echo $count%4 ?>
              <hgroup>
                <h2 class="post-author"><?php the_author(); ?></h2>
                <h1 class="post-title"><?php the_title(); ?></h1>
              </hgroup>
            </div>
          </article>
        </a>
  <?php if( $count == $wp_query->post_count || $count%4 == 0): ?>
      </div>
     
    </div>
    <?php if( $count < $wp_query->post_count): ?>
      <div class="gallery-cell">
          <div class="isotope">
    <?php endif; ?>
  <?php endif; ?>
        <?php $count++ ?>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?> 
    
</div>