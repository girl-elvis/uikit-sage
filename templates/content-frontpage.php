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
	// check if the repeater field has rows of data
		if( have_rows('middle') ):
			echo  '<div><ul class="middle uk-grid uk-grid-collapse uk-grid-width-medium-1-3 uk-grid-match" data-uk-grid-match="{target:\'.pictureb\'}">';
			while ( have_rows('middle') ) : the_row();

				echo  '<li ><div class="pictureb">';

				 $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
				<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_sub_field('image')) ?>" />
				<?php

				echo  '</div></li>';
			endwhile;
			echo '</ul></div>';

		else :

// no rows found

		endif;
?>




<?php 
	// check if the repeater field has rows of data
		if( have_rows('definitions') ):
?>
			<div class="menu-what-is-container">'
			<ul id="menu-what-is" class="uk-grid uk-grid-small uk-grid-matchz uk-grid-width-medium-1-3" data-uk-grid-match="{target:'.uk-overlayz'}">

<?php
			$i = 1;
			while ( have_rows('definitions') ) : the_row();
				
				echo '<li ><div class="picturebox"><div class="" ><a  class="uk-h2"  data-uk-toggle="{target:\'.definition' . $i . '\', animation:\'uk-animation-fade\'}" >';
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