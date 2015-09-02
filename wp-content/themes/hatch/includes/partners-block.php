<section class="section-block section-partners">
  <div class="section-header">
    <h2 class="section-title">Partners</h2>
    <div class="section-header-links">
      <a href="/our-partners">View All HATCH Partners<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
      <a href="/become-a-partner">Become a Partner<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
    </div>
  </div>
  <div class="row">
    <a href="#" class="innovation-partner">
      <div class="innovation-partner-wrapper">
        <span>Innovation Partner</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner-intel.png">
      </div>
    </a>
    <div class="partners-column partners-platinum">
      <h3 class="partners-column-title">Platinum</h3>
      <div class="partner-logos">
        <?php $args = array( 'category_name' => 'platinum', 'post_type' => 'sponsor', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="partner-logo">
          <img src="<?php echo $image[0]; ?>">
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="partners-column partners-gold">
      <h3 class="partners-column-title">Gold</h3>
      <div class="partner-logos">
        <?php $args = array( 'category_name' => 'gold', 'post_type' => 'sponsor', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="partner-logo">
          <img src="<?php echo $image[0]; ?>">
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="partners-column partners-silver">
      <h3 class="partners-column-title">Silver</h3>
      <div class="partner-logos">
        <?php $args = array( 'category_name' => 'silver', 'post_type' => 'sponsor', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="partner-logo">
          <img src="<?php echo $image[0]; ?>">
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>