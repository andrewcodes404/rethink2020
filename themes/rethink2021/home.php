<?php get_header();?>

<div class="content-layout ">



  <?php 

    global $post;
    $page_for_posts_id = get_option('page_for_posts');
    if ( $page_for_posts_id ) : 
    $post = get_page($page_for_posts_id);
    setup_postdata($post);
    ?>

  <div id="post-<?php the_ID(); ?>">
    <div>
      <h1> <?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>

  <?php rewind_posts(); endif; ?>


  <div class="s-blogs">

    <?php if ( have_posts() ) : ?>

    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post();  ?>

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
  <!-- Add the pagination functions here. -->


  <div class="pagination">

    <div class="nav-previous alignleft"><?php previous_posts_link( '&#8592;  newer posts' ); ?></div>
    <div class="nav-next alignright"><?php next_posts_link( 'older posts  &#8594;' ); ?></div>

  </div>

  <?php else : ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>



</div>

<?php get_footer();?>