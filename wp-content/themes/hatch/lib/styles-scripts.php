<?php

// Load global scripts (header.php)
function html5blank_header_scripts()
{
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('jquery-new', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
    wp_enqueue_script('jquery-new'); // Enqueue it!

    wp_register_script('modernizr3.6.0', get_template_directory_uri() . '/src/asset/js/lib/modernizr-3.6.0.min.js', array(), '3.6.0'); // Modernizr
    wp_enqueue_script('modernizr3.6.0'); // Enqueue it!

    wp_register_script('hatch-scripts', get_template_directory_uri() . '/dist/asset/js/bundle-min.js', array(), '1.0', true);
    wp_enqueue_script('hatch-scripts'); // Enqueue it!

    wp_register_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-popper'); // Enqueue it!

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap'); // Enqueue it!

  }
}

// Load conditional scripts
function html5blank_conditional_scripts()
{
  if (is_front_page()) {

    wp_register_script('home', get_template_directory_uri() . '/dist/asset/js/home-min.js', array(), '2.0', true); // Home scripts

    // Create array to pass to the localization script (below)
    $translation_array = array(
      'tile' => hatch_get_tiles(),
      'carousel' => hatch_get_carousel()
    );

    // Make template markup available to JavaScript as an object
    wp_localize_script('home', 'template', $translation_array);
    wp_enqueue_script('home'); // Enqueue it!

  }

  if (is_page_template('template-registration.php') || is_page_template('template-registration-europe.php')) {

    wp_register_script('registration', get_template_directory_uri() . '/dist/asset/js/registration-min.js', array(), '1.0.1'); // registration
    wp_enqueue_script('registration'); // Enqueue it!

  }

  if (is_page_template('template-becauseofhatchsurvey.php')) {

    wp_register_script('becauseofhatch-survey', get_template_directory_uri() . '/dist/asset/js/becauseofhatch-survey-min.js', array(), '1.2.2');
    wp_enqueue_script('becauseofhatch-survey'); // Enqueue it!

  }

  if (is_page_template('template-labs-voting.php')) {

    wp_register_script('labs-voting', get_template_directory_uri() . '/dist/asset/js/labs-voting-min.js', array(), '1.0.4');
    wp_enqueue_script('labs-voting'); // Enqueue it!

    wp_register_script('read-more', get_template_directory_uri() . '/src/asset/js/lib/readmore.min.js', array(), '1.0.0');
    wp_enqueue_script('read-more'); // Enqueue it!

  }

  if (is_page_template('template-hatching-a-better-world.php')) {

    wp_register_script('hatching-better-world', get_template_directory_uri() . '/dist/asset/js/hatching-better-world-min.js', array(), '1.0.4');
    wp_enqueue_script('hatching-better-world'); // Enqueue it!

    wp_register_script('read-more', get_template_directory_uri() . '/src/asset/js/lib/readmore.min.js', array(), '1.0.0');
    wp_enqueue_script('read-more'); // Enqueue it!

  }

  if (is_singular('reunion')) {

    wp_register_script('reunion', get_template_directory_uri() . '/dist/asset/js/reunion-min.js', array(), '1.0.1'); // registration
    wp_enqueue_script('reunion'); // Enqueue it!

  }
}

// Load global styles
function html5blank_styles() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    wp_register_style('styles', get_template_directory_uri() . '/dist/asset/css/bundle.css', array(), '1.5.1', 'all');
    wp_enqueue_style('styles'); // Enqueue it!

    wp_register_style('materialIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all');
    wp_enqueue_style('materialIcons'); // Enqueue it!
  }
}

// Load conditional styles
function html5blank_conditional_styles() {

}
