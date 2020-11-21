<?php
//using "apd_" to prevent clashes with other functions
function apd_custom_theme_styles()
{

    // internal style sheet
    wp_enqueue_style('style_custom_css', get_template_directory_uri() . '/style/style.min.css');

    ///google fonts
    // wp_enqueue_style('gfonts_css', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500');

    ///Adobe fonts
    // wp_enqueue_style('adobe_fonts', 'https://use.typekit.net/ftu0cki.css');

    //aos animation css
    wp_enqueue_style('aos_animate_css', get_template_directory_uri() . '/style/style-aos-animation.css');

}

add_action('wp_enqueue_scripts', 'apd_custom_theme_styles'); 
?>