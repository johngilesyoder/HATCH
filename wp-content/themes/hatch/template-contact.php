<?php /* Template Name: Contact Page Template */ get_header(); ?>

  <main role="main">

    <div class="container">
      <div class="row">
        <div class="contact-left col-md-4">
          <div class="row">
            <div class="support-link col-sm-6 col-md-12">
              <h2>Support HATCH</h2>
              <p>Students of today are our leaders of tomorrow. <em>It’s in the best interest of our future to invest in them.</em></p>
              <a href="/partners/support-contribute/" class="btn btn-secondary btn-support">Support Now</a>
            </div>
            <div class="general-inquiry col-sm-6 col-md-12">
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
                2358 Whitetail Rd<br>
                Bozeman, MT 59715
              </address>
              <!--<span class="contact-phone">(406) 209-9809</span>-->
              <a class="contact-email-address" href="mailto:info@hatchexperience.org">info@hatchexperience.org</a>
            </div>
            <div class="connect col-sm-6 col-md-12">
              <h2>Connect</h2>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-footer-twitter.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-footer-facebook.svg"></a>
              <a class="social-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-footer-instagram.svg"></a>
            </div>
          </div>
        </div>
        <div class="contact-right col-md-8 col-lg-7 offset-lg-1">
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
