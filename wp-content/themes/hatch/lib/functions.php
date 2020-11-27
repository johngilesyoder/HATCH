<?php

/*------------------------------------*\
	Menus
\*------------------------------------*/

// Register Custom Navigation Walker
require_once 'wp_bootstrap_navwalker.php';

// Bootstrap primary navigation
function primary_nav()
{
  wp_nav_menu(
    array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => false,
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '<span>',
      'link_after'      => '</span>',
      'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
      'depth'           => 2,
      'walker'          => new wp_bootstrap_navwalker(),
    )
  );
}

function get_menu_by_location($location)
{
  if (empty($location)) return false;
  $locations = get_nav_menu_locations();
  if (!isset($locations[$location])) return false;
  $menu_obj = get_term($locations[$location], 'nav_menu');
  return $menu_obj;
}

function footer_links_1()
{
  $location = 'footer-links-1';
  get_menu_by_location($location);
  $menu_obj = get_menu_by_location($location);
  wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h3 class="links-header">' . esc_html($menu_obj->name) . '</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'));
}

function footer_links_2()
{
  $location = 'footer-links-2';
  get_menu_by_location($location);
  $menu_obj = get_menu_by_location($location);
  wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h3 class="links-header">' . esc_html($menu_obj->name) . '</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'));
}

function footer_links_3()
{
  $location = 'footer-links-3';
  get_menu_by_location($location);
  $menu_obj = get_menu_by_location($location);
  wp_nav_menu(array('theme_location' => $location, 'items_wrap' => '<h3 class="links-header">' . esc_html($menu_obj->name) . '</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'));
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'primary'),
    'footer-links-1' => __('Footer Links 1', 'footer-links-one'),
    'footer-links-2' => __('Footer Links 2', 'footer-links-two'),
    'footer-links-3' => __('Footer Links 3', 'footer-links-three')
  ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
  return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
  return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}


// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = 'page-' . sanitize_html_class($post->post_name);
  } elseif (is_singular()) {
    $classes[] = 'post-' . sanitize_html_class($post->post_name);
  }

  return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
  // Define Sidebar Widget Area 1
  register_sidebar(array(
    'name' => __('Widget Area 1', 'html5blank'),
    'description' => __('Description for this widget-area...', 'html5blank'),
    'id' => 'widget-area-1',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  // Define Sidebar Widget Area 2
  register_sidebar(array(
    'name' => __('Widget Area 2', 'html5blank'),
    'description' => __('Description for this widget-area...', 'html5blank'),
    'id' => 'widget-area-2',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

// Remove wp_head() injected Recent Comment styles
// function my_remove_recent_comments_style()
// {
//     global $wp_widget_factory;
//     remove_action('wp_head', array(
//         $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
//         'recent_comments_style'
//     ));
// }

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
  ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
  return 54;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
  return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
  global $post;
  if (function_exists($length_callback)) {
    add_filter('excerpt_length', $length_callback);
  }
  if (function_exists($more_callback)) {
    add_filter('excerpt_more', $more_callback);
  }
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

// Custom View Article link to Post
// function html5_blank_view_article($more)
// {
//     global $post;
//     return '... <a class="read-more" href="' . get_permalink($post->ID) . '">' . __('Read More', 'html5blank') . '</a>';
// }

// Remove Admin bar
function remove_admin_bar()
{
  return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
  return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
  $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
  return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
  $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
  $avatar_defaults[$myavatar] = "Custom Gravatar";
  return $avatar_defaults;
}

// Custom Comments Callback


/*------------------------------------*\
  Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
//add_action('init', 'hatch_localize_script'); // Localize script for the AJAX url
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
//add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'html5blank_conditional_styles'); // Add Conditional Theme Stylesheets
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
//add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
//add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]


// Add post format support
// ---------------------------------
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'status', 'video', 'audio'));


$metaboxes = array(
  'link_url' => array(
    'title' => __('link information', 'twentyeleven'),
    'applicableto' => 'post',
    'location' => 'normal',
    'display_condition' => 'post-format-link',
    'priority' => 'low',
    'fields' => array(
      'l_url' => array(
        'title' => __('link url:', 'twentyeleven'),
        'type' => 'text',
        'description' => '',
        'size' => 60
      )
    )
  )
);

add_action('admin_init', 'add_post_format_metabox');

function add_post_format_metabox()
{
  global $metaboxes;

  if (!empty($metaboxes)) {
    foreach ($metaboxes as $id => $metabox) {
      add_meta_box($id, $metabox['title'], 'show_metaboxes', $metabox['applicableto'], $metabox['location'], $metabox['priority'], $id);
    }
  }
}

function show_metaboxes($post, $args)
{
  global $metaboxes;

  $custom = get_post_custom($post->ID);
  $fields = $tabs = $metaboxes[$args['id']]['fields'];

  /** Nonce **/
  $output = '<input type="hidden" name="post_format_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

  if (sizeof($fields)) {
    foreach ($fields as $id => $field) {
      switch ($field['type']) {
        default:
        case "text":

          $output .= '<label for="' . $id . '">' . $field['title'] . '</label><input id="' . $id . '" type="text" name="' . $id . '" value="' . $custom[$id][0] . '" size="' . $field['size'] . '" />';

          break;
      }
    }
  }

  echo $output;
}

add_action('save_post', 'save_metaboxes');

function save_metaboxes($post_id)
{
  global $metaboxes;

  // verify nonce
  if (!wp_verify_nonce($_POST['post_format_meta_box_nonce'], basename(__FILE__)))
    return $post_id;

  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return $post_id;

  // check permissions
  if ('page' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id))
      return $post_id;
  } elseif (!current_user_can('edit_post', $post_id)) {
    return $post_id;
  }

  $post_type = get_post_type();

  // loop through fields and save the data
  foreach ($metaboxes as $id => $metabox) {
    // check if metabox is applicable for current post type
    if ($metabox['applicableto'] == $post_type) {
      $fields = $metaboxes[$id]['fields'];

      foreach ($fields as $id => $field) {
        $old = get_post_meta($post_id, $id, true);
        $new = $_POST[$id];

        if ($new && $new != $old) {
          update_post_meta($post_id, $id, $new);
        } elseif ('' == $new && $old || !isset($_POST[$id])) {
          delete_post_meta($post_id, $id, $old);
        }
      }
    }
  }
}

add_action('admin_print_scripts', 'display_metaboxes', 1000);

function display_metaboxes()
{
  global $metaboxes;
  if (get_post_type() == "post") :
?>
    <script type="text/javascript">
      // <![CDATA[
      $ = jQuery;

      <?php
      $formats = $ids = array();
      foreach ($metaboxes as $id => $metabox) {
        array_push($formats, "'" . $metabox['display_condition'] . "': '" . $id . "'");
        array_push($ids, "#" . $id);
      }
      ?>

      var formats = {
        <?php echo implode(',', $formats); ?>
      };
      var ids = "<?php echo implode(',', $ids); ?>";

      function displayMetaboxes() {
        // Hide all post format metaboxes
        jQuery(ids).hide();
        // Get current post format
        var selectedElt = jQuery("input[name='post_format']:checked").attr("id");

        // If exists, fade in current post format metabox
        if (formats[selectedElt])
          jQuery("#" + formats[selectedElt]).fadeIn();
      }

      jQuery(function() {
        // Show/hide metaboxes on page load
        displayMetaboxes();

        // Show/hide metaboxes on change event
        jQuery("input[name='post_format']").change(function() {
          displayMetaboxes();
        });
      });

      // ]]>
    </script>
<?php
  endif;
}

function SearchFilter($query)
{
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}

add_filter('pre_get_posts', 'SearchFilter');


// Enable Options Page
// -------------------
if (function_exists('acf_add_options_page')) {

  acf_add_options_page();
}
