<?php

/**
 * Register support for Gutenberg wide images in your theme
 */
// function mytheme_setup() {
//   add_theme_support( 'align-wide' );
// }
// add_action( 'after_setup_theme', 'mytheme_setup' );

//turn this back to true in prod
// show_admin_bar(false);

//for page titles
add_theme_support('title-tag');

/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */

function wpdocs_enqueue_custom_admin_style() {
  wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/style/style-min.css', false, '1.0.0' );
  wp_enqueue_style( 'custom_wp_admin_css' );
}
// add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

// Scripts
require_once( get_template_directory() . '/functions/scripts.php' );

// Menus
require_once( get_template_directory() . '/functions/fn-menus.php' );

// Blog & Ecerpt
require_once( get_template_directory() . '/functions/fn-blog.php' );

//Guttenburg Blocks
require_once( get_template_directory() . '/functions/fn-blocks.php' );