<?php get_header();?>

<div class="content-layout">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- 
    <h1> <?php the_title() ?> </h1>
    <?php the_content(); ?> -->

    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>



    <?php 
// the query



$the_query = new WP_Query( array(
    'post_type' => 'session' , 
    'meta_key'  => 'time_start',
    'order' => 'ASC',
    'orderby'   => 'meta_value',) ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <p><?php the_title(); ?></p>


    <p> <?php the_field('time_start')?></p>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>



</div>




<?php get_footer();?>