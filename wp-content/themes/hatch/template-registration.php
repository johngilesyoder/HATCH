<?php /* Template Name: Registration Page Template */ get_template_part( 'includes/registration-header' );
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<?php //the_field('photo_gallery_id'); ?>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/registration/bg-registration-bigsky.jpg');">
  <div class="form-title">
    <span class="site-logo"><em>HATCH</em> 2018 Registration</span>
    <span class="site-logo-date"><?php the_field('event_date'); ?> &bull; <?php the_field('event_location'); ?></span>
  </div>
  <h1>Welcome.</h1>
</header>

<!-- BUTTON ================= -->
<!-- ======================== -->
<div class="registration-button-wrapper">
  <button id="registration-toggle" class="btn btn-secondary btn-registration">Register Now</button>
</div>

<!-- REGISTRATION CONTENT === -->
<!-- ======================== -->
<section id="registration-content" class="registration-content">
  <div class="container">
    <!-- SUMMARY ============== -->
    <div class="registration-summary">
      <div class="row">
        <div class="col-md-7">
          <div class="video-wrapper">
            <iframe src="https://player.vimeo.com/video/212979228" width="100%" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-5">
          <p>HATCH is a community, movement, and a series of experiences designed to ACTIVATE CREATIVITY to HATCH a better world. In its 15th year, HATCH experience is a four day annual retreat meets summit gifted to 100 of the most provocative innovators, inventors, and cultural catalysts, across a wide range of disciplines.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="welcome-section">
            <h4>Welcome to the HATCH network</h4>
            <p>HATCH is a non-profit designed to benefit you and expand our network to HATCH a Better World, as well as mentor the next generation of our global leaders.  It costs $2500 to host each individual guest. HATCH is all inclusive.  Once you get yourself to Montana, everything is taken care of:  lodging, food, workshops, speaker series, entertainment, music, and transportation to and from the airport are all included with your pass.</p>
            <p>We do not want financial constraints to stand in the way of your ability to experience HATCH. If the cost is prohibitive, there is an option to apply for a sponsored cost reduction when registering.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- QUOTE ============== -->
    <aside class="section-aside hard-to-explain">
      <div class="row">
        <div class="section-aside-title">
          <h3>It's hard to explain</h3>
        </div>
        <div class="section-aside-content">
          <div class="section-aside-content-wrapper">
            <div class="quote-block">
              <div class="quote-statement">
                <p>“HATCH is something you can’t really put into words because there doesn’t seem to be an adequate way to verbally describe something that is so genuinely life changing for everyone there — It truly is. The people that are curated are brilliant, smart, talented, and giving. HATCH is beyond a doubt the best thing I have ever experienced. It’s changed how I do business — and how I live life.”</p>
              </div>
              <cite>&mdash;&nbsp; <span class="cite-person"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/grace-davis.png"> Grace Davis</span> <span class="cite-organization">INTEL</span></cite>
            </div>
          </div>
        </div>
    </aside>

    <div class="section-deductible">
      <h4>Tax Deductible</h4>
      <p>You'll be happy to hear that 50% of the cost of your HATCH ticket (at full price) can be claimed by you as a 501C3 tax deductible donation.</p>
      <p>This is how your $2500 full ticket price breaks down:</p>
      <ul>
        <li><strong>$1500</strong> - hard costs (includes accommodations, food)</li>
        <li><strong>$350</strong> - Scholarship fund for Montana students and educators</li>
        <li><strong>$350</strong> - production, transport, A/V, venue rental, entertainment, etc.</li>
        <li><strong>$300</strong> - to HATCH non-profit overhead / admin</li>
      </ul>
    </div>

    <div class="section-timing">
      <h4>Timing / Travel Details</h4>
      <p><strong>Arrive:</strong> Wednesday, October 3rd by 4:30PM in to Bozeman Yellowstone International Airport (BZN).</p>
      <p><strong>Depart:</strong> Sunday, October 7th after 10:30AM from (BZN)</p>
      <p>If you would you like to stay for an optional decompression and explore the area and Yellowstone National Park with a night spent at a hot springs resort for a night or two, please email experinece@hatchexperience.org</p>
      <p><strong>Questions?:</strong> email Sara Mo at experience@hatchexperience.org</p>
    </div>
    
    <!-- LEARN MORE ============== -->
    <div class="learn-more">
      <div class="well">
        <h3>Learn more:</h3>
        <a href="/the-experience/">The Experience</a>
        <a href="/about/montana/">Montana</a>
      </div>
    </div>

    <!-- ALUMNI ============== -->
    <div class="registration-alumni">
      <h3>The <span class="hatch-logo">HATCH</span> Network Alumni includes ...</h3>
      <div class="alumni-wrapper">
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-thaller.png">
          <span class="alumnus-name">Michelle Thaller</span>
          <span class="alumnus-title">Nasa Scientist</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-hardy.png">
          <span class="alumnus-name">John Hardy</span>
          <span class="alumnus-title">Founder, Greenschool Bali</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-altringer.png">
          <span class="alumnus-name">Dr. Beth Altringer</span>
          <span class="alumnus-title">Lead, Desirabilty Lab, Harvard</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-gruber.png">
          <span class="alumnus-name">Tom Gruber</span>
          <span class="alumnus-title">Inventor, Siri, Apple</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-bridges.png">
          <span class="alumnus-name">Jeff Bridges</span>
          <span class="alumnus-title">Oscar-winning actor</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-kuhr.png">
          <span class="alumnus-name">Barbara Kuhr</span>
          <span class="alumnus-title">Co-founder, WIRED mag</span>
        </div>
      </div>
    </div>
  </div>
  <!-- GALLERY ============== -->
  <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( $photo_gallery_id ); } ?>
</section>

<!-- FORM WRAPPER =========== -->
<!-- ======================== -->
<section id="form-wrapper">
  <div class="container">
    <!-- FORM ================== -->
    <div class="form-wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php endif; ?>

      <?php gravity_form($form_id, false, false, false, '', true); ?>
    </div>
  </div>
</section>

<!-- FOOTER ================= -->
<!-- ======================== -->
<?php get_template_part( 'includes/registration-footer' ); ?>
