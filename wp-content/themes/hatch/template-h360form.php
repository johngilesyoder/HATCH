<?php /* Template Name: H360 Form Template */ ?>
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
					<div class="logo">
						<img class="app-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/app-icon-h360.svg">
					</div>
          <h1 class="form-name">Update your H360 profile</h1>
          <?php gravity_form( 41, false, false, false, '', true ); ?>
        </div>
      </div>
    </div>

    <footer class="footer-wrapper">
      <div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
        		<span>© <?php echo date('Y'); ?> H360. All rights reserved.</span> &nbsp;|&nbsp; <a href="/contact">Contact Us</a>
					</div>
				</div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>
