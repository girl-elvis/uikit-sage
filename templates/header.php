<header class="banner">
  <div class="">
      
<!-- Menu button for phone -->
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

      <a class="uk-navbar-brand" href="<?= esc_url(home_url('/')); ?>"> <img  src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png"></a>
        

      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav uk-navbar-nav', 'container_class' => 'uk-navbar','walker' => new Walker_UIKIT()]);
      endif;
      ?>

    </nav>

  </div> 
</header>

<?php 
if (is_front_page()): 
  $slider = get_new_royalslider(1);
  if (strpos($slider, 'RoyalSlider Error') == false) {
    echo $slider;
  }
endif ?>




























