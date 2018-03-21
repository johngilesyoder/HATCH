<?php /* Template Name: Registration Success Template */ get_template_part( 'includes/registration-header' ); ?>
  
  <div class="container">
    <div class="form-wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h1 class="success-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-registration-success.svg">Success. You are awesome!</h1>
          <div class="success-body">
            <?php the_content(); ?>
          </div>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php endif; ?>
    </div>
  </div>


<?php get_template_part( 'includes/registration-footer' ); ?>



