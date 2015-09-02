<?php /* Template Name: Contact Page Template */ get_header(); ?>

  <main role="main">

    <div class="container">
      <div class="row">
        <div class="contact-left">
          <div class="row">
            <div class="general-inquiry">
              <h2>General Enquiry</h2>
              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

            <?php endif; ?>
              <address class="contact-address">
                627 E Peach St.<br>
                Bozeman, MT 59715
              </address>
              <!--<span class="contact-phone">(406) 209-9809</span>-->
              <a class="contact-email-address" href="mailto:hatchinfo@hatchexperience.org">hatchinfo@hatchexperience.org</a>
            </div>
            <div class="connect">
              <h2>Connect</h2>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-twitter.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-facebook.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-footer-instagram.svg"></a>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <div class="inquiry-contact">
            <div class="inquiry-wrapper">
              <h2>Contact Us</h2>
              <?php gravity_form(7, false, false, false, '', true); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>



