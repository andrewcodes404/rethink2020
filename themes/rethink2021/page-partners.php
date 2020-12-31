<?php get_header();?>

<div class="content-layout">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title()?></h1>
  <?php the_content(); ?>

  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

  <!-- <?php  $the_query = new WP_Query( array ('post_type' => 'partner-items', 'posts_per_page' => -1 ) ); ?>
  <?php if ( $the_query->have_posts() ) : ?>

  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div>
    <h2><?php the_title(); ?></h2>
  </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

  <?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?> -->

</div>

<?php get_footer();?>