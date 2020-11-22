<?php get_header();?>

<div class="content-layout ">


  <h1>Blog</h1>

  <p>Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et,
    porttitor at sem.</p>

  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a
    pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada.</p>



  <div class="s-blogs">

    <?php if ( have_posts() ) : ?>

    <!-- Add the pagination functions here. -->

    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post();  ?>

    <!-- the rest of your theme's main loop -->
    <div class="s-blog">
      <a href=" <?php echo get_permalink(); ?>">
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


          <h2 class=""><?php the_title()?></h2>
          <p><?php the_excerpt()?></p>
      </a>
      <p><a href=" <?php echo get_permalink(); ?>">read more &rarr; </a></p>

    </div>
  </div>


  <?php endwhile; ?>
  <!-- End of the main loop -->
</div>
<!-- Add the pagination functions here. -->


<div class="pagination">


  <div class="nav-previous alignleft"><?php previous_posts_link( '&#8592;  Newer posts' ); ?></div>
  <div class="nav-next alignright"><?php next_posts_link( 'Older posts  &#8594;' ); ?></div>

</div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>






</div>

<?php get_footer();?>