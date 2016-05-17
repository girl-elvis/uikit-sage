<header class="banner">
  <div class="">
      


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

      <h1 class="uk-visible-small"><a class="uk-navbar-brand" href="<?= esc_url(home_url('/')); ?>"> <?php bloginfo('name'); ?></a></h1>
       <a class="uk-navbar-brand uk-hidden-small" href="<?= esc_url(home_url('/')); ?>"> <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png"></a>
        <!-- Menu button for phone -->
      <div class="uk-visible-small mobmenu-button"><button class="uk-button uk-float-right" data-uk-offcanvas="{target:'#mobmenu'}">Menu</button></div>

      <?php //tagline on tablet/dt
echo '<div class="tagline uk-float-right uk-position-bottom-right uk-text-right uk-hidden-small"><h2 class="uk-margin-bottom-remove">' . get_bloginfo('description') . ' </h2><h3 class="uk-margin-remove">Greening Innovation and Urban Agriculture in the Context of Forced Displacement</h3></div>'; 


      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav uk-navbar-nav', 'container_class' => 'uk-navbar','walker' => new Walker_UIKIT()]);
      endif;
      
      //tagline on mob
      echo '<div class="tagline-sm uk-float-right uk-text-right uk-visible-small"><h3 class="uk-margin-bottom-remove">' . get_bloginfo('description') . ' </h3><h4 class="uk-margin-remove">Greening Innovation and Urban Agriculture in the Context of Forced Displacement</h4></div>'; 

      ?>
   
    </nav>

  </div> 
</header>

<?php 
// if (is_front_page()): 
//   $slider = get_new_royalslider(1);
//   if (strpos($slider, 'RoyalSlider Error') == false) {
//     //echo $slider;
//   }
// endif 
?>

