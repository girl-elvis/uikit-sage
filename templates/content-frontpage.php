<?php the_content(); ?>

<?php 
  $menu = 'What Is';
  $menuParameters = array(  
    'echo' => false, 
    'container' => 'div',
    'menu_class' => 'uk-grid uk-grid-width-1-3',
    'before' => '<div class="uk-overlay uk-overlay-background"><div class="uk-overlay-panel uk-overlay-top" >',
    'after' => '</div></div>',
    // 'link_class' => 'uk-overlay-panel',
    'walker' => new Walker_UIKIT()
  );  
  $menuParameters['menu'] = $menu;
    if (wp_get_nav_menu_object($menu)) {
     //echo (wp_nav_menu( $menuParameters ) );

    }

    ?>


<?php 
$image = get_field('mid-image');
$size = 'large';
if( !empty($image) ): 

	echo '<div class="featured-home">';
	echo wp_get_attachment_image( $image, $size );
	echo '</div>';

 endif; 
 ?>






<?php 
	// check if the repeater field has rows of data
		if( have_rows('definitions') ):
?>
			<div class="menu-what-is-container">
			<ul id="menu-what-is" class="uk-grid uk-grid-small uk-grid-matchz uk-grid-width-medium-1-3" data-uk-grid-match="{target:'.uk-overlayz'}">

<?php
			$i = 1;
			while ( have_rows('definitions') ) : the_row();
				
				echo '<li ><div class="picturebox"><div class="" ><a href="javascript: document.body.scrollIntoView(false)" class="uk-h2"  data-uk-toggle="{target:\'.definition' . $i . '\', animation:\'uk-animation-fade\'}" >';
				the_sub_field('question');
	    		echo '<i class="uk-icon-arrow-circle-down"></i></a> ';
	    		echo '<div class="definition' . $i . ' uk-hidden">';
		    	the_sub_field('definition');
				echo '</div>    	</div></div></li>';
				$i= $i+1 ;
			endwhile;
		echo '</ul>	</div>';

		else :

		    // no rows found

		endif;
	?>