<?php /* Template Name: Registration Page Template */ get_template_part( 'includes/registration-header' ); ?>
  
  <div class="container">
    <div class="form-wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php endif; ?>
      
      <?php gravity_form(8, false, false, false, '', true); ?>
    </div>
  </div>


<?php get_template_part( 'includes/registration-footer' ); ?>



