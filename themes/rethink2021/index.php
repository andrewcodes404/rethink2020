<?php 
/*
Template Name: On Demand
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content-layout">
    <h1><?php the_title()?></h1>
    <?php the_content(); ?>

    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>



    <?php 
// the query
$the_query = new WP_Query( array( 'category_name' => 'rt20ondemand' )); ?>


    <div class="s-blogs">

        <?php if ( $the_query->have_posts() ) : ?>

        <!-- Start of the main loop. -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <!-- the rest of your theme's main loop -->
        <div class="s-blog">
            <div class="s-blog__img">
                <?php 
            $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                echo wp_get_attachment_image( 
                    $post_thumbnail_id,
                    false,
                    $size,                                     
                    array ('title' => $image['title'], 'alt' => $image['alt']));
        ?>
            </div>

            <div class="s-blog__text">
                <h3 class=""><?php the_title()?></h3>
                <p><?php the_excerpt()?></p>
                <p><a href=" <?php echo get_permalink(); ?>">read more &rarr; </a></p>
            </div>
        </div>

        <?php endwhile; ?>
        <!-- End of the main loop -->
    </div>


    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>