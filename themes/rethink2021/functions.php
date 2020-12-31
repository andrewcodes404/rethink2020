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


// Image sizes
add_image_size( 'carousel', 400, 400 );



//remove yoast from CPTs

function my_remove_wp_seo_meta_box_speakers() {
	remove_meta_box('wpseo_meta', 'speaker-items', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box_speakers', 100);


function my_remove_wp_seo_meta_box_partners() {
	remove_meta_box('wpseo_meta', 'partner-items', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box_partners', 100);


function my_remove_wp_seo_meta_box_sponsers() {
	remove_meta_box('wpseo_meta', 'sponser-items', 'normal');
}
add_action('add_meta_boxes', 'my_remove_wp_seo_meta_box_sponsers', 100);






/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */

// function wpdocs_enqueue_custom_admin_style() {
//   wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/style/style-min.css', false, '1.0.0' );
//   wp_enqueue_style( 'custom_wp_admin_css' );
// }
// add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );


// Add JS to the wp-admin

// function tiny_slider_in_admin() {
//   wp_enqueue_script('tiny-slider-admin', get_template_directory_uri() . '/js/tiny-slider.min.js', '', '', true);
// }

// add_action('enqueue_block_editor_assets', 'tiny_slider_in_admin');


// function tiny_slider_init_in_admin() {
//   wp_enqueue_script('tiny-slider-init-admin', get_template_directory_uri() . '/js/tiny-slider_init.js', '', '', true);
// }

// add_action('enqueue_block_editor_assets', 'tiny_slider_init_in_admin');


require_once( get_template_directory() . '/functions/fn-stylesheets.php' );

// Scripts
require_once( get_template_directory() . '/functions/fn-js.php' );

// Menus
require_once( get_template_directory() . '/functions/fn-menus.php' );

// Blog & Ecerpt
require_once( get_template_directory() . '/functions/fn-blog.php' );

//Guttenburg Blocks
require_once( get_template_directory() . '/functions/fn-blocks.php' );