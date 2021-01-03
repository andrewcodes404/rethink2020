<?php  

    $the_query = new WP_Query( array (
      'post_type' => $args['data']['post_type'], 
      'posts_per_page' => -1, 
      'meta_key'		=> $args['data']['meta-key'],
      'meta_value'	=> $args['data']['meta_value'], 
    )); 
 
  if ( $the_query->have_posts() ) : ?>

<div class="s-cards-wrapper  s-cards-wrapper--<?php echo $args['data']['meta_value']?>">

  <div class="s-cards s-cards--<?php echo $args['data']['meta_value']?>">

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php $post_id = get_the_ID();?>

    <div class="s-card">

      <div class="s-card__logo">

        <?php 
          $image = get_field('image', $post_id);
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
        
          if( $image ) {
          echo wp_get_attachment_image( $image, $size );
          } ?>
      </div>

      <div class="s-modal-wrapper">
        <div class="s-modal">

          <div class="s-modal__close-btn">
            <div class="s-modal__close-btn__svg">
              <?php echo file_get_contents( get_theme_file_uri( 'images/svg/close2.svg' ) ); ?>
            </div>
          </div>

          <div class="s-modal__logo">
            <?php 
              $image = get_field('image', $post_id);
              $size = 'full'; // (thumbnail, medium, large, full or custom size)
              if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
              } ?>
          </div>

          <div class="s-modal__socials">
            <?php if( get_field('website', $post_id) ): ?>
            <div class="s-modal__social s-modal__social--linkedin">
              <a href="<?php the_field('website'); ?>" target="_blank" rel="noopener noreferrer">
                WWW
              </a>
            </div>
            <?php endif; ?>

            <?php if( get_field('linkedin', $post_id) ): ?>
            <div class="s-modal__social">
              <a href="<?php the_field('linkedin'); ?>" target="_blank" rel="noopener noreferrer">
                <?php echo file_get_contents( get_theme_file_uri( 'images/svg/linkedin.svg' ) ); ?>
              </a>
            </div>
            <?php endif; ?>

            <?php if( get_field('facebook', $post_id) ): ?>
            <div class="s-modal__social">
              <a href="<?php the_field('facebook'); ?>" target="_blank" rel="noopener noreferrer">
                <?php echo file_get_contents( get_theme_file_uri( 'images/svg/facebook.svg' ) ); ?>
              </a>
            </div>
            <?php endif; ?>

            <?php if( get_field('twitter', $post_id) ): ?>
            <div class="s-modal__social">
              <a href="<?php the_field('twitter'); ?>" target="_blank" rel="noopener noreferrer">
                <?php echo file_get_contents( get_theme_file_uri( 'images/svg/twitter.svg' ) ); ?>
              </a>
            </div>
            <?php endif; ?>

            <?php if( get_field('instagram', $post_id) ): ?>
            <div class="s-modal__social">
              <a href="<?php the_field('instagram'); ?>" target="_blank" rel="noopener noreferrer">
                <?php echo file_get_contents( get_theme_file_uri( 'images/svg/insta.svg' ) ); ?>
              </a>
            </div>
            <?php endif; ?>
          </div>

          <div class="s-modal__desc">
            <?php the_field("description", $post_id)?>
          </div>
        </div>
      </div>


    </div>


    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
  </div>

</div>
<?php endif; ?>