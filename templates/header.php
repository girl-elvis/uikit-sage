<header class="banner">
  <div class="">
      


   <!-- Phone menu --> 
      <div class="uk-offcanvas" id="mobmenu">
        <nav class="uk-offcanvas-bar uk-offcanvas-bar-flip">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'items_wrap' => '<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>%3$s</ul>', 'depth' => 1]);
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


<div class="uk-navbar">
      <?php 

      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav uk-navbar-nav', 'container' => '','walker' => new Walker_UIKIT()]);
      endif;
    //wp_nav_menu(['menu' => 'Download', 'menu_class' => 'nav uk-navbar-nav uk-navbar-flip', 'container' => '','walker' => new Walker_UIKIT()]);



?>


</div>
<?php
//tagline on tablet/dt
echo '<div class="tagline uk-float-right uk-text-right uk-hidden-small"><h2 class="uk-margin-bottom-remove">' . get_bloginfo('description') . ' </h2><h3 class="uk-margin-remove">Greening Innovation and Urban Agriculture in the Context of Forced Displacement</h3></div>'; 
?>
<!--   <div class="uk-navbar-flip">
   <figure class="uk-overlay brochure uk-overlay-hover">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/booklet.jpg" width="112" height="76" alt="">
    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-overlay-icon"></div>
    <a class="uk-position-cover" href=""></a>
</figure>
</div>  -->
<?php




      
      //tagline on mob
      echo '<div class="tagline-sm uk-float-right uk-text-right uk-visible-small"><h3 class="uk-margin-bottom-remove">' . get_bloginfo('description') . ' </h3><h4 class="uk-margin-remove">Greening Innovation and Urban Agriculture in the Context of Forced Displacement</h4></div>'; 

      ?>
   
    </nav>


  </div> 
</header>


