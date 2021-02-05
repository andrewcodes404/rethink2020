<?php


// Allow style for the block admin editor
// Get your styles into the block editor
add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_style( 'all style for admin', get_stylesheet_directory_uri() . "/style/style.min.css", false, '1.0', 'all' );
	wp_enqueue_script('tiny-slider_init', get_template_directory_uri() . '/style/deny-list-blocks.js', '', '', true);
} );


add_filter( 'allowed_block_types', 'apd_allowed_block_types' );
 
function apd_allowed_block_types( $allowed_blocks ) {
    return array(

        'acf/cta',
        'acf/carousel-sponsors',
        'acf/carousel-partners',
        'acf/carousel-speakers',
        'acf/carousel-adv-com',
        'acf/space-invader',

        'acf/partners-co-organiser',
        'acf/partners-sus-partner',
        'acf/partners-content-partner',
        'acf/partners-corp-supporter',
        'acf/partners-event-partner',
        'acf/partners-comm-partner',
        'acf/partners-ngo-partner',
        'acf/partners-supporting-org',
        'acf/partners-sus-supplier',
        'acf/partners-media-partner',

        'acf/partners-green',
        'acf/partners-strategic',
        'acf/partners-insight',
        'acf/partners-charity',
        
        'acf/sponsors-tier1',
        'acf/sponsors-tier2',
        'acf/sponsors-tier3',
        'acf/sponsors-showcase',
        


        // the wp-blocks
        'core/heading',
        'core/paragraph',
        'core/list',
        'core/image',
        'core/embed',
        'core/code',
        'core/quote',
        // 'core/video',
        // 'core/embed[3]',
        // 'core/audio',
        'core/separator',
        // 'core/spacer',
    );
}


function create_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'partner-blocks',
				'title' => __( 'Partner Blocks', 'partner-blocks' ),
            ),
            array(
				'slug' => 'sponsor-blocks',
				'title' => __( 'Sponsor Blocks', 'sponsor-blocks' ),
			),
            array(
				'slug' => 'carousel-blocks',
				'title' => __( 'Carousel Blocks', 'carousel-blocks' ),
            ),
            
		)
	);
}
add_filter( 'block_categories', 'create_block_category', 10, 2);


add_action('acf/init', 'apd_register_blocks');

function apd_register_blocks()
{
    // check function exists
    if (function_exists('acf_register_block')) {

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

        acf_register_block(array(
            'name' => 'space-invader',
            'title' => __('Space Invader'),
            'render_template'   => get_template_directory() . '/blocks/b-space-invader.php',
            'category' => 'design',
            'icon' => 'button',
            'keywords' => array('space', 'margin', 'padding'),
            'post_types' => array('post', 'page'),
            'mode' => 'auto',
          
        ));

        // Partners --- Partners --- Partners --- Partners --- 
        // Partners --- Partners --- Partners --- Partners --- 
        // Partners --- Partners --- Partners --- Partners --- 

        // coOrganiser : Co-Organiser
        // green : Green Finance Partner
        // susPartner : Sustainability Partner
        // contentPartner : Content Partner
        // strategic : Strategic Partner
        // insight : Insight & Strategy Partner
        // corpSupporter : Corporate Supporter
        // charity : Charity Partners
        // ngoPartner : NGO Partner
        // commPartner : Community Partner
        // supportingOrg : Supporting Organisation
        // mediaPartner : Media Partner
        // susSupplier : Sustainable Supplier


        acf_register_block(array(
            'name' => 'partners-charity',
            'title' => __('Charity Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--charity.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));



        acf_register_block(array(
            'name' => 'partners-insight',
            'title' => __('Insight & Strategy Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--insight.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));




        acf_register_block(array(
            'name' => 'partners-strategic',
            'title' => __('Strategic Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--strategic.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));



        acf_register_block(array(
            'name' => 'partners-green',
            'title' => __('Green Finance Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--green.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));



      
        acf_register_block(array(
            'name' => 'partners-co-organiser',
            'title' => __('Co-Organisers'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--co-organiser.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));


        acf_register_block(array(
            'name' => 'partners-sus-partner',
            'title' => __('Sustainability Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--sus-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));


        acf_register_block(array(
            'name' => 'partners-content-partner',
            'title' => __('Content Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--content-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));
        acf_register_block(array(
            'name' => 'partners-corp-supporter',
            'title' => __('Corporate Supporters'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--corp-supporter.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));
        acf_register_block(array(
            'name' => 'partners-event-partner',
            'title' => __('Event Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--event-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));

        acf_register_block(array(
            'name' => 'partners-supporting-org',
            'title' => __('Supporting Organisations'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--supporting-org.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));


        acf_register_block(array(
            'name' => 'partners-comm-partner',
            'title' => __('Community Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--comm-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));
        acf_register_block(array(
            'name' => 'partners-ngo-partner',
            'title' => __('NGO Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--ngo-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));

        acf_register_block(array(
            'name' => 'partners-sus-supplier',
            'title' => __('Sustainable Suppliers'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--sus-supplier.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));
        acf_register_block(array(
            'name' => 'partners-media-partner',
            'title' => __('Media Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-partners--media-partner.php',
            'category' => 'partner-blocks',
            'icon' => 'groups',
            'keywords' => array('partners'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));



        // Sponsors --- Sponsors --- Sponsors --- Sponsors --- 
        // Sponsors --- Sponsors --- Sponsors --- Sponsors --- 
        // Sponsors --- Sponsors --- Sponsors --- Sponsors --- 

        acf_register_block(array(
            'name' => 'sponsors-tier1',
            'title' => __('Tier 1'),
            'render_template'   => get_template_directory() . '/blocks/b-sponsors--tier1.php',
            'category' => 'sponsor-blocks',
            'icon' => 'awards',
            'keywords' => array('sponsors'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));

        acf_register_block(array(
            'name' => 'sponsors-tier2',
            'title' => __('Tier 2'),
            'render_template'   => get_template_directory() . '/blocks/b-sponsors--tier2.php',
            'category' => 'sponsor-blocks',
            'icon' => 'awards',
            'keywords' => array('sponsors'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));

        acf_register_block(array(
            'name' => 'sponsors-tier3',
            'title' => __('Tier 3'),
            'render_template'   => get_template_directory() . '/blocks/b-sponsors--tier3.php',
            'category' => 'sponsor-blocks',
            'icon' => 'awards',
            'keywords' => array('sponsors'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));


        acf_register_block(array(
            'name' => 'sponsors-showcase',
            'title' => __('Solutions Showcase'),
            'render_template'   => get_template_directory() . '/blocks/b-sponsors--showcase.php',
            'category' => 'sponsor-blocks',
            'icon' => 'awards',
            'keywords' => array('sponsors'),
            'post_types' => array('post', 'page'),
            'mode' => 'preview',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                )
            )
        ));












        // Carousels --- Carousels --- Carousels --- Carousels --- 
        // Carousels --- Carousels --- Carousels --- Carousels --- 
        // Carousels --- Carousels --- Carousels --- Carousels --- 


        acf_register_block(array(
            'name' => 'carousel-speakers',
            'title' => __('Speakers'),
            'render_template'   => get_template_directory() . '/blocks/b-carousel-speakers.php',
            'category' => 'carousel-blocks',
            'icon' => 'images-alt2',
            'keywords' => array('carousel', 'slider'),
            'post_types' => array('post', 'page'),
            'mode' => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'edit',
                    'carousel-items' => array(
                        
                    )
                )
            )
        ));

        acf_register_block(array(
            'name' => 'carousel-partners',
            'title' => __('Partners'),
            'render_template'   => get_template_directory() . '/blocks/b-carousel--partners.php',
            'category' => 'carousel-blocks',
            'icon' => 'images-alt2',
            'keywords' => array('carousel', 'slider'),
            'post_types' => array('post', 'page'),
            'mode' => 'edit',
          
        ));

        acf_register_block(array(
            'name' => 'carousel-sponsors',
            'title' => __('Sponsors'),
            'render_template'   => get_template_directory() . '/blocks/b-carousel--sponsors.php',
            'category' => 'carousel-blocks',
            'icon' => 'images-alt2',
            'keywords' => array('carousel', 'slider'),
            'post_types' => array('post', 'page'),
            'mode' => 'edit',
          
        ));


        acf_register_block(array(
            'name' => 'carousel-adv-com',
            'title' => __('Advisory Com'),
            'render_template'   => get_template_directory() . '/blocks/b-carousel--adv-com.php',
            'category' => 'carousel-blocks',
            'icon' => 'images-alt2',
            'keywords' => array('carousel', 'slider'),
            'post_types' => array('post', 'page'),
            'mode' => 'edit',
          
        ));

     


    }
}