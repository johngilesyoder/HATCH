<?php /* Template Name: Europe Experience Page Template */
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/dist/asset/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/dist/asset/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=740887432614704&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>try{Typekit.load();}catch(e){}</script>

	</head>

	<body <?php body_class(); ?>>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero">
  <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/euro-hero.jpg">
</header>

<!-- REGISTRATION CONTENT === -->
<!-- ======================== -->

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="power-statements">
        <p><span class="yellow"><strong>Explore</strong></span> the future</p>
        <p><span class="yellow"><strong>Accelerate</strong></span> positive global impact</p>
        <p>Partner in <span class="blue"><strong>peer to peer</strong></span> project acceleration</p>
        <p><span class="yellow"><strong>Empower</strong></span> next generation leaders</p>
      </div>
    </div>
  </div>
</div>

<section id="registration-content" class="registration-content">

  <!-- SUMMARY ============== -->
  <div class="registration-summary">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <p>
            For the first time in Europe, HATCH and thecamp are joining forces to
            create a cross-pollinated alchemy of global perspectives, bringing
            thought leaders together to re-ignite their creative vision, and establish
            bonds with a new network for life. HATCH outcomes have led to hundreds
            of new projects, collaborations, and ongoing mentorship.
          </p>
          <p>
            HATCH brings together the most provocative innovators, inventors
            and cultural catalysts across a wide range of disciplines for four
            unforgettable days launching impactful projects, radical creativity, and
            unexpected encounters.
          </p>
          <p class="intro-statement">Founded in 2004, HATCH is a network of accomplished doers working to better humanity. HATCH connects innovative minds to resources and a global network to activate solutions. thecamp was opened in 2018 with the mission of working on solutions for cities of the future. Together, HATCH and theCamp are bringing you the inaugural HATCH europe.</p>
          <div class="video-wrapper">
            <div style="position:relative;height:0;padding-bottom:57.0%">
              <iframe src="https://player.vimeo.com/video/261960182" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="regular-margin">
                Currently there is a lack of time, space
                and incentive for collaboration to turn
                into actionable solutions. HATCH
                addresses this by focusing on the
                individual and maximizing their
                potential, and then carefully curates and
                connects innovative minds to resources
                and a global network to activate
                solutions.
              </p>
            </div>
            <div class="col-md-6">
              <p class="regular-margin">The HATCH ecosystem exists of:</p>
              <ul>
                <li>Two signature summits each year</li>
                <li>HATCH Labs (think tanks)</li>
                <li><a target="_blank" href="https://www.hatchacademy.net/">HATCH Academy</a></li>
                <li>And an A.I. / machine learning platform that match makes needs / solutions and resources to ideas.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- QUOTE ============== -->
  <aside class="section-aside hard-to-explain">
    <div class="container">
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
      </div>
    </div>
  </aside>

  <!-- ALUMNI ============== -->
  <div class="registration-alumni">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>A Sampling of <span class="hatch-logo">HATCH</span> Alumni ...</h3>
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
              <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-earle.png">
              <span class="alumnus-name">Sylvia Earle</span>
              <span class="alumnus-title">Oceanographer, National Geographic explorer-in-residence</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="section-the-camp">
    <div class="the-camp-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/the-camp-horizontal.jpg')"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="camp-title">
            <a target="_blank" href="http://thecamp.fr"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/logo-the-camp-color.png"></a>
            <span>Aix-en-Provence, France</span>
          </h3>
          <p>
            Open since October 2017 in Aix-en-Provence, France, thecamp is a base
            camp for exploring the future. It's a new focal point and meeting point
            that welcomes all kinds of explorer communities. A space where
            expeditions are planned to sound out and invent the future in a
            collaborative way. Dedicated to emerging technologies (virtual reality,
            robotics, artificial intelligence, biotechnology) and social innovation
            (collective intelligence, sustainable economic models, shared governance),
            thecamp is a place for inspiration, exchanges, creation and
            experimentation on a large scale.
          </p>
      	  <p>
            For thousands of years, people have had the same concerns: What will
            we eat tomorrow? How will we learn? What will it be like to age? How will
            we go from one place to another? Using what energy? Now, thecamp is
            undertaking these challenges and finding new approaches to universal
            issues, aggregating people and projects driven by
            the same excitement for the future.
          </p>
      		<p>And that’s why the partnership with HATCH is perfect.</p>
          <p><a class="learn-more" target="_blank" href="https://www.lonelyplanet.com/france/provence/aix-en-provence">Learn more about Aix-en-Provence, France</a></p>
          <div class="welcome-section">
            <h3>Creative Collaboration to Solve Global Challenges</h2>
            <p>
              The goal at HATCH Europe is to make forward progress on the UN’s
              Sustainable Development Goals (SDGs), which are universal call to actions
              centered around equality, poverty, the environment, global warming and
              restoring peace and prosperity. They address the root causes that unite us
              in an effort to create positive change for both people and planet.
            </p>
            <img class="sdp" src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/sustainable-development-goals.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-details">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="sponsors">
            <h2 class="section-title">HATCH Europe Sponsors</h2>
            <div class="sponsors-wrapper">
              <a target="_blank" href="https://www.domo.com/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/domo.jpg"/></a>
              <a target="_blank" href="http://futur.io/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/futurio.jpg"/></a>
              <a target="_blank" href="http://www.giglam.fr/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/giglam.png"/></a>
              <a target="_blank" href="http://www.ladn.eu/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/ladn.png"/></a>
              <a target="_blank" href="http://www.lafrenchtech.com/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/lafrenchtech.jpg"/></a>
              <a target="_blank" href="https://www.gretel-box.com/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/gretel-box.png"/></a>
              <a target="_blank" href="http://www.seafoodia.com/" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/seafoodia.jpg"/></a>
              <a target="_blank" href="https://www.steelcase.com/eu-en" class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/europe-experience/steelcase.png"/></a>
            </div>
          </div>
          <d
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
    </div>
  </div>
</section>

<!-- FOOTER ================= -->
<!-- ======================== -->
<?php get_template_part( 'includes/registration-footer' ); ?>
<!--



<div class="well"><h4>HATCH Europe Tickets $2925 / €2500</h4>
<p>Once you get to thecamp, everything is included (entertainment, food, drink, accomodation.)</p></div> -->
