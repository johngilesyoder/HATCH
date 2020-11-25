<!doctype html>
<?php if (is_home() || is_singular( 'post' ) || is_singular( 'hatchback-story') || is_category() || is_tag() || is_search() ) :?>
  <html <?php language_attributes(); ?> class="blog-format no-js">
<?php else: ?>
  <html <?php language_attributes(); ?> class="no-js">
<?php endif; ?>

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

		<?php wp_head(); ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=740887432614704&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

	</head>

  <body <?php body_class(); ?>>

    <!-- Google Analytics -->
    <?php get_template_part( 'includes/analytics' ); ?>

    <!-- Topbar -->
    <?php get_template_part( 'includes/topbar' ); ?>

    <!-- Header menu -->
    <nav class="site-header navbar navbar-expand-xl navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <span class="site-logo">HATCH</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php primary_nav(); ?>
        </div>
      </div>
    </nav>