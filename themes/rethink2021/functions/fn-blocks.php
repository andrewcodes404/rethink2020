<?php
// https://www.advancedcustomfields.com/resources/blocks/


// Remove the inbuilt block admin styles

function remove_guten_wrapper_styles( $settings ) {
    unset($settings['styles'][0]);

    return $settings;
}

add_filter( 'block_editor_settings' , 'remove_guten_wrapper_styles' );


//TODO: doesnt work 👇🏻... but i want it to 
// add_theme_support( 'disable-custom-font-sizes' );

// Allow style for the block admin editor
add_theme_support( 'editor-styles' );
// Enque that stylesheet
add_editor_style( get_template_directory_uri() . '/style/style.min.css' );


add_filter( 'allowed_block_types', 'apd_allowed_block_types' );
 
function apd_allowed_block_types( $allowed_blocks ) {
    return array(

        'acf/cta',

        // the wp-blocks
        'core/heading',
        'core/paragraph',
        'core/list',
        'core/image',
        // 'core/cover',
        'core/quote',
        // 'core/video',
        // 'core/audio',
        'core/separator',
        'core/spacer',
    );
}


add_action('acf/init', 'apd_register_blocks');

function apd_register_blocks()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        // register blocks here...

        acf_register_block(array(
            'name' => 'cta',
            'title' => __('Call to action (CTA)'),
            'render_template'   => get_template_directory() . '/blocks/b-cta.php',
          
            'category' => 'layout',
            'icon' => 'media-text',
            'keywords' => array('cta', 'call to action', 'link', 'download'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'text'   => "This is a CTA",
                    )
                )
            )
        ));


    }
}