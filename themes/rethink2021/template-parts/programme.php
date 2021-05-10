<?php  
    $the_queryDayOne = new WP_Query( array(
        'post_type' => 'session' , 
        'meta_key'  => 'time_start',
        'order' => 'ASC',
        'orderby'   => 'meta_value',
        
        'meta_query' => array(
            'relation'		=> 'AND',
            array(
                'key' => 'location',
                'value' => $args['data']['location_value'],
                ),
            array(
                'key' => 'day',
                'value' => 'day1',
                ),
        )
        )    
    );


    $the_queryDayTwo = new WP_Query( array(
        'post_type' => 'session' , 
        'meta_key'  => 'time_start',
        'order' => 'ASC',
        'orderby'   => 'meta_value',
        
        'meta_query' => array(
            'relation'		=> 'AND',
            array(
                'key' => 'location',
                'value' => $args['data']['location_value'],
                ),
            array(
                'key' => 'day',
                'value' => 'day2',
                ),
        )
        )    
    );
 ?>



<?php if (is_admin()) {
    echo '<p class="b-programme-hint"> <code >hint: this is the ' .  $args["data"]["title"] . ' PROGRAMME block</code></p>';
    }
?>


<div class="programme-wrapper">
<div class="programme">

    <div class="b-programme__day  b-programme__day--<?php echo $args['data']['location_value']?>">

        <?php if ( $the_queryDayOne->have_posts() ) : ?>

        
            <h4>Day 1 - 05 Oct 2021</h4>
            <?php while ( $the_queryDayOne->have_posts() ) : $the_queryDayOne->the_post(); ?>
            <?php $post_id = get_the_ID();?>
           
           
            <div class="b-programme__session">
                <p><?php the_field('time_start', $post_id)?> : <?php the_title(); ?></p>

                <p>day - <?php the_field('day', $post_id)?> </p>
                <p>time_start - <?php the_field('time_start', $post_id)?> </p>
                <p>time_end - <?php the_field('time_end', $post_id)?> </p>
                <p>duration - <?php the_field('duration', $post_id)?> </p>
                <p>mandatory  - <?php  if ( get_field('mandatory', $post_id)) {echo "true";} else {echo "false";}?> </p>
                <p>display_priority - <?php the_field('display_priority', $post_id)?> </p>
                
                <p>category - <?php the_field('category', $post_id)?> </p>

                <p>sdg - <?php the_field('sdg', $post_id)?> </p>
                <p>presentation_type' - <?php the_field('presentation_type', $post_id)?> </p>

                <p>speakers - <?php the_field('speakers', $post_id)?> </p>
            </div>



            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
       
        <?php endif; ?>

    </div>




    <div class="b-programme__day  b-programme__day--<?php echo $args['data']['location_value']?>">

        <?php if ( $the_queryDayTwo->have_posts() ) : ?>

           
                <h4>Day 2 - 06 Oct 2021</h4>
                <?php while ( $the_queryDayTwo->have_posts() ) : $the_queryDayTwo->the_post(); ?>

                <?php $post_id = get_the_ID();?>

                <div class="b-programme__session">
                      <p><?php the_field('time_start', $post_id)?> : <?php the_title(); ?></p>
                </div>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

   

</div>


</div>
