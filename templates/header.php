<header class="banner">
  <div class="container">
     <a class="brand" href="<?= esc_url(home_url('/')); ?>"> <span class=""><?php bloginfo('name'); ?></span></a>
<!-- <div class="strapline"><span class=""><?php bloginfo('description'); ?></span></div> -->

    <div class="uk-grid uk-grid-small" data-uk-grid-margin > 

      <div class="uk-visible-small"><button class="uk-button uk-float-right" data-uk-offcanvas="{target:'#mobmenu'}">Menu</button></div>

   <!-- Phone menu --> 
      <div class="uk-offcanvas" id="mobmenu">
      <nav class="uk-offcanvas-bar uk-offcanvas-bar-flip">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>%3$s</ul>']);
        endif;
        ?>
  
        <?php
        if (has_nav_menu('right_navigation')) :
          wp_nav_menu(['theme_location' => 'right_navigation',  'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>%3$s</ul>']);
        endif;
        ?>
      </nav>
  
    </div>
  <!-- END Phone menu -->
  
   

    <nav class="nav-primary uk-navbar">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'walker' => new Walker_UIKIT()]);
      endif;
      ?>

     
      <!--<div class="uk-width-medium-1-4">-->
    </nav>

  </div>
</header>
<div class="container">
