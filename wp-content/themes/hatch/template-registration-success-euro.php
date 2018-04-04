<?php /* Template Name: Europe Registration Success Template */ get_template_part( 'includes/registration-header' ); ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <span class="hatch-logo">HATCH</span>
        <div class="message-wrapper">
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
    </div>
  </div>

  <script type="text/javascript">
    window.setTimeout(function() {
			window.location.href = 'http://booking.thecamp.fr/hatch-europe-x-thecamp-festival-aix-en-provence-non-datee-css5-thecamp-lgen-pg101-ri5302257.html';
		}, 10000);
  </script>


<?php get_template_part( 'includes/registration-footer' ); ?>
