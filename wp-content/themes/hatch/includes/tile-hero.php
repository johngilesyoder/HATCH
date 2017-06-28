<?php

// Vars
// ====================================
$sticky = get_option( 'sticky_posts' );
$counter_1 = 1;
$counter_2 = 1;

// Queries
// ====================================

// First query
$query_one_args = array(
  'post_type' => 'post',
  'posts_per_page' => 1,
  'ignore_sticky_posts' => 1,
  'post__not_in' => $sticky,
  'tax_query' => array(
  array(
    'taxonomy' => 'post_format',
    'field' => 'slug',
    'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
    'operator' => 'NOT IN'
  ))
);
$query_one = new WP_Query( $query_one_args );

// Sticky Posts Query
$sticky_query_args = array(
  'posts_per_page' => 1,
  'post__in'  => $sticky,
  'ignore_sticky_posts' => 1
);
$sticky_query = new WP_Query( $sticky_query_args );

// Second query
$query_two_args = array(
  'post_type' => 'post',
  'posts_per_page' => 2,
  'ignore_sticky_posts' => 1,
  'post__not_in' => $sticky,
  'offset' => 1,
  'tax_query' => array(
  array(
    'taxonomy' => 'post_format',
    'field' => 'slug',
    'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
    'operator' => 'NOT IN'
  ))
);
$query_two = new WP_Query( $query_two_args );

// Third query
$query_three_args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'offset' => 3,
  'ignore_sticky_posts' => 1,
  'post__not_in' => $sticky,
  'tax_query' => array(
  array(
    'taxonomy' => 'post_format',
    'field' => 'slug',
    'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
    'operator' => 'NOT IN'
  ))
);
$query_three = new WP_Query( $query_three_args );

?>



<div class="tile-carousel">

  <!-- ================================== -->
  <!-- CELL ONE ========================= -->
  <!-- ================================== -->
  <div class="gallery-cell">
    <div class="isotope">

    <!-- FIRST QUERY ==================== -->
    <!-- ================================ -->
    <?php if ( $query_one->have_posts() ) : while ( $query_one->have_posts() ) : $query_one->the_post(); ?>
      <?php
        // Thumbnail vars
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-thumb', true);
        $thumb_url = $thumb_url_array[0];
      ?>
      <a href="<?php the_permalink(); ?>" class="item">
        <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
          <div class="gradient-wrapper">
            <hgroup>
              <h2 class="post-author"><?php the_author(); ?></h2>
              <h1 class="post-title"><?php the_title(); ?></h1>
            </hgroup>
          </div>
        </article>
      </a>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>


      <!-- STICKY QUERY =================== -->
      <!-- ================================ -->
      <?php if ( isset($sticky[0]) ) : ?>
        <?php if ( $sticky_query->have_posts() ) : while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>
          <?php
            // Thumbnail vars
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-thumb', true);
            $thumb_url = $thumb_url_array[0];
          ?>
          <a href="<?php the_permalink(); ?>" class="item size2">
            <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
              <div class="gradient-wrapper">
                <hgroup>
                  <h2 class="post-author"><?php the_author(); ?></h2>
                  <h1 class="post-title"><?php the_title(); ?></h1>
                </hgroup>
              </div>
            </article>
          </a>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>


      <!-- SECOND QUERY ==================== -->
      <!-- ================================= -->
      <?php if ( $query_two->have_posts() ) : while ( $query_two->have_posts() ) : $query_two->the_post(); ?>
        <?php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-thumb', true);
          $thumb_url = $thumb_url_array[0];
        ?>
        <a href="<?php the_permalink(); ?>" class="item<?php if($counter_1 == 2) : ?> size3<?php endif; ?>">
          <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
            <div class="gradient-wrapper">
              <hgroup>
                <h2 class="post-author"><?php the_author(); ?></h2>
                <h1 class="post-title"><?php the_title(); ?></h1>
              </hgroup>
            </div>
          </article>
        </a>
        <?php $counter_1++; ?>
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>
  </div>


  <!-- ================================== -->
  <!-- CELL TWO ========================= -->
  <!-- ================================== -->
  <div class="gallery-cell">
    <div class="isotope">

      <!-- THIRD QUERY ===================== -->
      <!-- ================================= -->
      <?php if ( $query_three->have_posts() ) : while ( $query_three->have_posts() ) : $query_three->the_post(); ?>
        <?php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium-thumb', true);
          $thumb_url = $thumb_url_array[0];

          switch ($counter_2%4) {
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

        <article class="article-wrapper" style="background-image:url('<?php echo $thumb_url ?>');">
          <div class="gradient-wrapper">
            <hgroup>
              <h2 class="post-author"><?php the_author(); ?></h2>
              <h1 class="post-title"><?php the_title(); ?></h1>
            </hgroup>
          </div>
        </article>
      </a>

      <?php $counter_2++ ?>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </div>

</div>
