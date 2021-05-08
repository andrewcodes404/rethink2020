<?php

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



//Remove category from posts home

function exclude_category( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
	$query->set( 'cat', '-21' );
	}
	}
add_action( 'pre_get_posts', 'exclude_category' );



// Add menu order to posts

add_action( 'admin_init', 'posts_order_wpse_91866' );

function posts_order_wpse_91866() 
{
    add_post_type_support( 'post', 'page-attributes' );
}


//ACF 

// create options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


// Import more functions


require_once( get_template_directory() . '/functions/fn-stylesheets.php' );

// Scripts
require_once( get_template_directory() . '/functions/fn-js.php' );

// Menus
require_once( get_template_directory() . '/functions/fn-menus.php' );

// Blog & Ecerpt
require_once( get_template_directory() . '/functions/fn-blog.php' );

//Guttenburg Blocks
require_once( get_template_directory() . '/functions/fn-blocks.php' );