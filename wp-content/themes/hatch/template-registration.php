<?php /* Template Name: Registration Page Template */ get_template_part( 'includes/registration-header' );
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<?php //the_field('photo_gallery_id'); ?>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/bg-registration-bigsky.jpg');">
  <div class="form-title">
    <span class="site-logo"><em>HATCH</em> 2021 Registration</span>
    <span class="site-logo-date"><?php the_field('event_date'); ?> &bull; <?php the_field('event_location'); ?></span>
  </div>
  <h1>Welcome.</h1>
</header>

<!-- BUTTON ================= -->
<!-- ======================== -->
<div class="registration-button-wrapper">
  <button id="registration-toggle" class="btn btn-secondary btn-registration">Register Now</button>
  <!-- <span style='display:inline-block;background:#111111;color:#ffffff;font-size:21px;font-weight:500;padding: 10px 30px;border-radius:10px;'>Hello!  We're sorry, but this HATCH Summit Cohort is now full. If you have any questions contact Yarrow.</span> -->
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
            <p>The cost of this invite-only Summit is zero, as a gift to you for HATCHing a Better World. You will need to cover hard costs, which includes 4 nights accommodations, 3 meals a day, drinks, entertainment, and shuttles to and from the airport. This totals $2750 for HATCH Montana.</p>
            <p>Note - we do not want finances to be the barrier of entry, so if you need to request a partial scholarship, <a href="https://hatchexperience.org/hatch-scholarship-application/">click here</a>.  Scholarships are limited and preference will be offered to students, educators, marginalized communities, and those in social impact / non-profit sectors.</p>
            <p>HATCH is a non-profit designed to benefit you and expand our network to HATCH a Better World, as well as mentor the next generation of our global leaders.</p>          </div>
        </div>
      </div>
    </div>
    <!-- QUOTE ============== -->
    <aside class="section-aside hard-to-explain">
      <div class="row">
        <div class="section-aside-title col-md-3">
          <h3>It's hard to explain</h3>
        </div>
        <div class="section-aside-content col-md-9">
          <div class="section-aside-content-wrapper">
            <div class="quote-block">
              <div class="quote-statement">
                <p>“HATCH is something you can’t really put into words because there doesn’t seem to be an adequate way to verbally describe something that is so genuinely life changing for everyone there — It truly is. The people that are curated are brilliant, smart, talented, and giving. HATCH is beyond a doubt the best thing I have ever experienced. It’s changed how I do business — and how I live life.”</p>
              </div>
              <cite>&mdash;&nbsp; <span class="cite-person"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/grace-davis.png"> Grace Davis</span> <span class="cite-organization">INTEL</span></cite>
            </div>
          </div>
        </div>
    </aside>

    <div class="section-deductible">
      <h4>Cost:</h4>
      <p><strong>Your HATCH invitiation is free.</strong></p>
      <p><strong>The fee is to cover hard costs:</strong></p>
      <p>(We’ve bundled everything for you to make it easy)</p>
      <ul>
        <li>4 nights of hospitality</li>
        <li>Food and drink</li>
        <li>Entertainment</li>
        <li>Transport to and from the airport</li>
      </ul>
      <p><strong>$2750 USD</strong> (plus flight)</p>
      <p>HATCH is a non-profit, and these summits work at break-even costs. HATCH writes a check per head for hard costs to the venue and vendors. At other conferences and convenings, attendees must pay for their entrance AND accommodations, food, etc., At HATCH you only cover your hard costs.</p>
      <p>This is an investment in you (personally and professionally), with tangible outcomes and not simply access to a one-off event, but access to a 15 year global network awaiting on the other side of the summit.</p>
      <!-- <p>If the cost is prohibitive, there are sometimes amazing attendees that select the “pay it forward” option to sponsor an artist, educator, or student. If you are in need of a partial scholarship please email <a href="mailto:cassidy@hatchexperience.org">cassidy@hatchexperience.org</a> and we will add you to a waitlist in hopes that we can bring in additional sponsorship for partial scholarships (or when a “pay it forward” ticket is gifted). If this is the case, we will let you know with three weeks advance notice. We hope to see you at HATCH.</p> -->
    </div>

    <div class="section-timing">
      <h4>Timing / Travel Details</h4>
      <p><strong>Arrive:</strong> Tuesday, September 29 by 4:00PM in to Bozeman Yellowstone International Airport (BZN).</p>
      <p><strong>Depart:</strong> Saturday, October 3 in the late morning or early afternoon (BZN)</p>
      <p>If you would you like to stay for an optional decompression and explore the area and Yellowstone National Park with a night spent at a hot springs resort for a night or two, please email <a href="mailto:cassidy@hatchexperience.org">cassidy@hatchexperience.org</a></p>
      <p><strong>Questions?:</strong> email Cassidy Seckman at <a href="mailto:experience@hatchexperience.org">experience@hatchexperience.org</a></p>
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
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-thaller.png">
          <span class="alumnus-name">Michelle Thaller</span>
          <span class="alumnus-title">Nasa Scientist</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-hardy.png">
          <span class="alumnus-name">John Hardy</span>
          <span class="alumnus-title">Founder, Greenschool Bali</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-altringer.png">
          <span class="alumnus-name">Dr. Beth Altringer</span>
          <span class="alumnus-title">Lead, Desirabilty Lab, Harvard</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-gruber.png">
          <span class="alumnus-name">Tom Gruber</span>
          <span class="alumnus-title">Inventor, Siri, Apple</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-bridges.png">
          <span class="alumnus-name">Jeff Bridges</span>
          <span class="alumnus-title">Oscar-winning actor</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-kuhr.png">
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
