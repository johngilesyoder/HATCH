<?php /* Template Name: Europe Registration Page Template */ get_template_part( 'includes/registration-header-europe' );
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<?php //the_field('photo_gallery_id'); ?>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero">
  <div class="form-title">
    <span class="site-logo"><strong>HATCH</strong> <em>Europe</em></span>
    <span class="icon-plus">&plus;</span>
    <img class="logo-the-camp" src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/logo-the-camp.png">
  </div>
  <div class="hero-bottom">
    <div class="where-when">
      <span><?php the_field('event_location'); ?></span>
      <span><?php the_field('event_date'); ?></span>
    </div>
    <button id="registration-toggle" class="btn btn-secondary btn-registration">Register Now</button>
  </div>
</header>


<!-- REGISTRATION CONTENT === -->
<!-- ======================== -->
<section id="registration-content" class="registration-content">
  <!-- SUMMARY ============== -->
  <div class="registration-summary">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="section-title">HATCH a Better World</h2>
          <p class="intro-statement">Founded in 2004, HATCH is a network of accomplished doers working to better humanity. HATCH connects innovative minds to resources and a global network to activate solutions.  theCamp was opened in 2018 with the mission of working on solutions for cities of the future. Together, HATCH and theCamp are bringing you the inaugural HATCH europe.</p>
          <div class="video-wrapper">
            <div style="position:relative;height:0;padding-bottom:57.0%">
              <iframe src="https://player.vimeo.com/video/212979228" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Currently there is a lack of time, space and incentive for collaboration to turn into actionable solutions. HATCH addresses this by focusing on the individual and maximizing their potential, and then carefully curates and connects innovative minds to resources and a global network to activate solutions. </p>
            </div>
            <div class="col-md-6">
              <p>The HATCH ecosystem exists of:</p>
              <ul>
                <li>Two signature summits each year</li>
                <li>HATCH Labs (think tanks)</li>
                <li><a target="_blank" href="https://www.hatchacademy.net/">HATCH Academy</a></li>
                <li>And an A.I. / machine learning platform that match makes needs / solutions and resources to ideas.</li>
              </ul>
            </div>
          </div>
          <div class="welcome-section">
            <h3>Creative Collaboration to Solve Global Challenges</h2>
            <p>The goal is to make forward progress on the UN’s <a target="_blank" href="http://www.undp.org/content/undp/en/home/sustainable-development-goals.html">Sustainable Development Goals</a> (SDGs), which are universal call to actions centered around equality, poverty, the environment, global warming and restoring peace and prosperity. They address the root causes that unite us in an effort to create positive change for both people and planet.</p>
            <img class="sdp" src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/sustainable-development-goals.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- QUOTE ============== -->
  <aside class="section-aside hard-to-explain">
    <div class="container">
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
      </div>
    </div>
  </aside>

  <div class="section-the-camp">
    <div class="the-camp-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/registration/the-camp-horizontal.jpg')">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/logo-the-camp-white.png">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3><a target="_blank" href="http://thecamp.fr">The Camp</a> in Aix-en-Provence, France</h2>
          <p>Open since October 2017 in Aix-en-Provence, France, thecamp is a base camp for exploring the future. It's a new focal point and meeting point that welcomes all kinds of explorer communities. A space where expeditions are planned to sound out and invent the future in a collaborative way. Dedicated to emerging technologies (virtual reality, robotics, artificial intelligence, biotechnology) and social innovation (collective intelligence, sustainable economic models, shared governance), thecamp is a place for inspiration, exchanges, creation and experimentation on a large scale.</p>
      	  <p>For thousands of years, people have had the same concerns: What will we eat tomorrow? How will we learn?  What will it be like to age?  How will we go from one place to another? Using what energy? Now, thecamp is undertaking these challenges and finding new approaches to universal issues, aggregating people and projects driven by the same excitement for the future.</p>
      		<p>And that’s why the partnership with HATCH is perfect.</p>
          <p><a class="learn-more" target="_blank" href="https://www.lonelyplanet.com/france/provence/aix-en-provence">Learn more about Aix-en-Provence, France</a></p>
          <div class="video-wrapper">
            <div style="position:relative;height:0;padding-bottom:57.0%">
              <iframe src="https://player.vimeo.com/video/261960182" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-details">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="section-title">
            Details &amp; Cost
          </h2>
          <div class="includes">
            <h3>€2500 includes</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="point"><span>A global network</span></div>
                <div class="point"><span>3 meals / day <small>(including snack breaks)</small></span></div>
              </div>
              <div class="col-md-6">
                <div class="point"><span>An experience you will not forget <small>(workshops, speakers, entertainment, music)</small></span></div>
                <div class="point"><span>4 night accommodations</span></div>
              </div>
            </div>
          </div>
          <p><strong>Only 100 invites. Event programming starts at 5:00pm on Wednesday, June 13th and ends after breakfast on Sunday, June 17th.</strong> HATCH is a non-profit designed to benefit you, your organization, and the world, as well as mentor the next generation of our global leaders. A Signature HATCH Summit costs €2500, (all inclusive). Once you arrive, everything is taken care of: lodging, food, workshops, speaker series, entertainment, music, and transportation to and from the airport are all included with your pass.</p>
          <p>We do not want financial constraints to stand in the way of your ability to experience HATCH. If the cost is prohibitive, please email experience@experience.org, and we will explore options for partial support from the scholarship fund. Some attendees may also choose to sponsor by "paying it forward".</p>
      		<p>For US citizens, 50% of this ticket is tax deductible to 501(c)(3) Non-Profit, which is used to fund scholarships for students, and artists. This is how your €2500 full ticket price breaks down:</p>
          <ul>
            <li><strong>50% (€1250)</strong> - Hard costs (includes accommodations, food, logistics, A/V, venue rental, entertainment, etc.)</li>
            <li><strong>25% (€650)</strong> - Scholarship fund to assist those in need to attend</li>
            <li><strong>25% (€650)</strong> - To HATCH non-profit overhead</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ALUMNI ============== -->
  <div class="registration-alumni">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>A Sampling of <span class="hatch-logo">HATCH</span> Alumni ...</h3>
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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-earle.png">
              <span class="alumnus-name">Sylvia Earle</span>
              <span class="alumnus-title">Co-founder, WIRED mag</span>
            </div>
          </div>
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
