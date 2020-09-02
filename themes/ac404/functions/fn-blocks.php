<?php
// https://www.advancedcustomfields.com/resources/blocks/


// Remove the inbuilt block admin styles
add_filter( 'block_editor_settings' , 'remove_guten_wrapper_styles' );
function remove_guten_wrapper_styles( $settings ) {
    unset($settings['styles'][0]);

    return $settings;
}


//TODO: doesnt work 👇🏻... but i want it to 
// add_theme_support( 'disable-custom-font-sizes' );

// Allow style for the block admin editor
add_theme_support( 'editor-styles' );
// Enque that stylesheet
add_editor_style( get_template_directory_uri() . '/style/style.min.css' );



add_filter( 'allowed_block_types', 'apd_allowed_block_types' );
 
function apd_allowed_block_types( $allowed_blocks ) {
    return array(

        // the custom blocks
        // 'acf/image',
        // 'acf/text-editor',
        'acf/h2-heading',

        // the wp-blocks
        'core/heading',
        'core/paragraph',
        'core/list',
        // 'core/image',
        'core/cover',
        'core/quote',
        'core/video',
        'core/audio',
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
            'name' => 'h2-heading',
            'title' => __('h2 Heading'),
            'render_template'   => get_template_directory() . '/blocks/h2-heading/b-h2-heading.php',
          
            'category' => 'layout',
            'icon' => 'media-text',
            'keywords' => array('text', 'section'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'text'   => "This is a h2 heading",
                    )
                )
            )
        ));


        acf_register_block(array(
            'name' => 'text-editor',
            'title' => __('Text Editor'),
            'render_template'   => get_template_directory() . '/blocks/text-editor/b-text-editor.php',
            'enqueue_style'     => get_template_directory_uri() . '/blocks/text-editor/b-text-editor.min.css',
            'category' => 'layout',
            'icon' => 'media-text',
            'keywords' => array('text', 'section'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'content'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim.",
                      
                    )
                )
            )
        ));

        acf_register_block(array(
            'name' => 'image',
            'title' => __('Image'),
            'render_template'   => get_template_directory() . '/blocks/image/b-image.php',
            'enqueue_style'     => get_template_directory_uri() . '/blocks/image/b-image.min.css',
            'category' => 'layout',
            'icon' => 'format-image',
            'keywords' => array('image', 'section'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'image'   => "38",
                      'caption'  => "Your caption goes here"
                    )
                )
            )

        ));

    }
}