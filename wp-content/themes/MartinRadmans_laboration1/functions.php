<?php

function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menu('navmenu', 'Huvudmeny');
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
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), '', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_JS_script');
