<?php

function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menus(array(
    'navmenu' => 'Huvudmeny',
    'pagemenu' => 'Pagemenu'
  ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Free clean-up of the head
function labb1_gratis_cleanup_head()
{
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_filter('oembed_dataparse', 'wp_filter_pre_oembed_result', 10);
  remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_filter('embed_oembed_discover', '__return_false');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_js_api');
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style');
  wp_dequeue_style('global-styles');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  wp_dequeue_style('classic-theme-styles');
  remove_action('wp_head', 'rest_output_link_wp_head');
}
add_action('wp_enqueue_scripts', 'labb1_gratis_cleanup_head', 100);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rel_canonical');

add_action('after_setup_theme', 'disable_block_widgets');
function disable_block_widgets()
{
  remove_theme_support('widgets-block-editor');
}

// Implement css,bootstrap and fonts to the theme
function enqueue_custom_stylesheets()
{
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheets');

// Implement js to the theme
function enqueue_JS_script()
{
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_JS_script');

// Register sidebar
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Sidebar 1',
    'id' => 'sidebar-1',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');

// Add so you can move between pages and the style for it
function labb1_nav_pages()
{
  return '
  <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
      <h2 class="screen-reader-text">Sidonumrering för inlägg</h2>
      %3$s
  </nav>';
}
add_filter('navigation_markup_template', 'labb1_nav_pages', 10, 2);

// Filter out img tag from content
function filter_content_images($content)
{
  // Ta bort alla <img>-taggar från innehållet
  $content = preg_replace('/<img[^>]+\>/i', '', $content);
  return $content;
}
add_filter('the_content', 'filter_content_images');

// Register custom sidebar menu
function labb1_register_menus()
{
  register_nav_menu('custom-sidebar-menu', __('Custom Sidebar Menu', 'textdomain'));
}
add_action('init', 'labb1_register_menus');

// Register custom widget for footer
function labb1_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Footer Kort om oss', 'textdomain'),
    'id'            => 'footer-1',
    'description'   => __('Add widgets here to appear in the Kort om oss section of the footer.', 'textdomain'),
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  register_sidebar(array(
    'name'          => __('Footer Kontaktuppgifter', 'textdomain'),
    'id'            => 'footer-2',
    'description'   => __('Add widgets here to appear in the Kontaktuppgifter section of the footer.', 'textdomain'),
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  register_sidebar(array(
    'name'          => __('Footer Social media', 'textdomain'),
    'id'            => 'footer-3',
    'description'   => __('Add widgets here to appear in the Social media section of the footer.', 'textdomain'),
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'labb1_widgets_init');
