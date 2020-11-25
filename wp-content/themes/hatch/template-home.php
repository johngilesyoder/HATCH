<?php /* Template Name: Home Page Template */ get_header(); ?>

  <!-- Posts hero -->
  <section id="posts-hero" class="posts-hero">
    <div id="hero-loading" class="isLoaded"></div>
  </section>

  <div class="container">
    <section class="section-block">
      <div class="section-header">
        <h2 class="section-title">Subscribe to Global Living Room Invites &amp; Updates</h2>
      </div>
      <!-- Begin Mailchimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="https://hatchexperience.us12.list-manage.com/subscribe/post?u=80e369f4604bb2b82d06aebf5&amp;id=bc2abe573d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="form-group">
              <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
              <input type="email" value="" name="EMAIL" class="required form-control" id="mce-EMAIL">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mce-FNAME">First Name </label>
                  <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mce-LNAME">Last Name </label>
                  <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
                </div>
              </div>
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_80e369f4604bb2b82d06aebf5_bc2abe573d" tabindex="-1" value="">
            </div>
            <div class="clear">
              <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe</button>
            </div>
          </div>
        </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
    </section>
  </div>

  <div class="container">
    <!-- Conference -->
  	<section class="section-block section-conference">
      <div class="section-header">
        <h2 class="section-title">HATCH <?php the_field('current_hatch_big_sky_year', 'option'); ?></h2>
      </div>
      <div class="row">
        <div class="conference-photo col-md-6">
          <div class="conference-photo-wrapper">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/conference-photo.jpg">
            <span class="conference-photo-title">OFF THE GRID // ON THE GRID</span>
          </div>
        </div>
        <div class="conference-info col-md-6">
          <h3 class="hatch-logo conference-title">HATCH<span><?php the_field('current_hatch_big_sky_year', 'option'); ?></span></h3>
          <?php if( have_rows('hatch_event', 'option') ): ?>
            
            <div class="events">
            
              <?php while( have_rows('hatch_event', 'option') ): the_row(); 

                // vars
                $date = get_sub_field('date');
                $title = get_sub_field('locationtitle');

                ?>

                <span class="event"><?php echo $date; ?> &nbsp;·&nbsp; <?php echo $title; ?></span>

              <?php endwhile; ?>
            
            </div>

          <?php endif; ?>
          <p>Imagine gathering up a hundred innovators, artists, makers, creators, educators, risk-takers, influencers, and mavericks… people who want to shake the world by its ankles. And are. Imagine them in a room together, teased out of their cocoons, grids off, brains on, glass flying everywhere:</p>
          <p>A musician tackles a problem for an entrepreneur. A scientist cracks open an idea for music distribution. An ad-guy delivers insight to a health-care play. An inventor, architect, and educator sketching new models for learning…  Imagine that. Or just find yourself at HATCH.</p>
          <div class="conference-actions">
            <!-- <a href="/apply" class="btn btn-primary btn-apply">Apply for an invite</a> -->
            <a href="/the-experience" class="">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Mentorship -->
    <section class="section-block section-mentorship">
      <div class="section-header">
        <h2 class="section-title">Programs</h2>
      </div>
      <div class="row">
        <div class="mentorship-block col-md-6">
          <div class="block-wrapper">
            <a href="/hatching-a-better-world/" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/homepage-habw.jpg');">
              <h3 class="mentorship-block-title gradient">
                <span>HATCH a Better World</span>
              </h3>
            </a>
            <p>The HATCH network consists of world-shapers that mentor and mutually invest in one another. The HATCH A Better World program is designed to foster and support projects, initiatives, and collaborations from within the HATCH network.This program serves as the amplifier for creative solutions for good. <a href="/hatching-a-better-world/">Learn More</a></p>
          </div>
        </div>
        <div class="mentorship-block col-md-6">
          <div class="block-wrapper">
            <a href="/nextgen-2/" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/homepage-nextgen.jpg');">
              <h3 class="mentorship-block-title gradient">
                <span>NextGen</span>
              </h3>
            </a>
            <p>Central to HATCH is cultivating the next generation of creative leaders. Each year, HATCH connects students to global leaders and mentors at the top of their industries.  As a community of innovators and influencers, HATCH works to support NextGen students and expand their horizons of what’s possible. <a href="/home/nextgen-2/">Learn more about 360° Mentorships</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners -->
    <?php get_template_part( 'includes/partners-block' ); ?>
  </div>

  <!-- What is HATCH -->
  <?php get_template_part( 'includes/what-is-hatch' ); ?>


<?php get_footer(); ?>
