<?php  define( 'WP_USE_THEMES', false );  get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php include "inc/fp-hero.php";?>

<div class="content-layout">

  <?php the_content(); ?>

  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</div>
<?php get_footer();?>