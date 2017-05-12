<?php /* Template Name: Briana Survey Template */ ?>
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
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

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

    <header class="form-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1 class="logo">
              <span class="site-logo">HATCH</span>
              <span class="form-name">Connection Survey</span>
            </h1>
            <div class="user-name">
              <label>First things first &mdash; Who are you?</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" id="input-first-name" class="form-control input-lg" data-input-id="195_3" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" id="input-last-name" class="form-control input-lg" data-input-id="195_6" placeholder="Last name">
                </div>
              </div>
              <input type="text" id="input-email" class="form-control input-lg" data-input-id="196" placeholder="Your email address">
            </div>
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
      </div>
    </header>

    <div class="container-fluid">
      <div class="form-wrapper">
        <div class="tiles">

          <?php get_template_part( 'includes/survey-people' ); ?>

        </div>
      </div>
    </div>

    <div class="submit-wrapper">
      <!-- THE GRAVITY FORM -->
      <!-- ================ -->
      <?php gravity_form( 28, false, false, false, '', true ); ?>
      <!-- FOOTER ================= -->
      <!-- ======================== -->
      <footer class="form-footer">
        <div class="container">
          <span>© <?php echo date('Y'); ?> HATCHfest. All rights reserved.</span> &nbsp;|&nbsp; <a href="/contact">Contact Us</a>
        </div>
      </footer>
    </div>




    <?php wp_footer(); ?>

  </body>
</html>