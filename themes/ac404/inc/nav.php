<div class="s-nav-wrapper">

  <nav class="s-nav">
    <div class="s-nav__logo">
      <?php echo file_get_contents( get_theme_file_uri( 'images/svg/logo.svg' ) ); ?>
    </div>



    <?php 
        wp_nav_menu( array(
            'menu' => 'navigation', 
            'menu_class' => 's-nav__menu',
            'container' => "",
        ) );
   ?>

  </nav>
</div>