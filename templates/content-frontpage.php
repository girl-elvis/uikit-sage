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

<div><ul class="middle uk-grid uk-grid-collapse uk-grid-width-medium-1-3 uk-grid-match" data-uk-grid-match="{target:'.pictureb'}">
<li ><div class="pictureb"></div></li>
<li ><div class="pictureb"><img src="http://lemontree/wp-content/uploads/2016/05/small-soil-image.jpg"></div></li>
<li ><div class="pictureb"></div></li>
</ul></div>




    <div class="menu-what-is-container">
    	<ul id="menu-what-is" class="uk-grid uk-grid-small uk-grid-matchz uk-grid-width-medium-1-3" data-uk-grid-match="{target:'.uk-overlayz'}">
    		<li ><div class="picturebox"><div class="" ><a  class="uk-h2"  data-uk-toggle="{target:'.definition1', animation:'uk-animation-fade'}" >Greening innovation <i class="uk-icon-arrow-circle-down"></i></a> 
    		<div class="definition1 uk-hidden"><p>
    			is change; a breathing, growing, living process that makes our landscapes and living spaces ecologically resilient and sustainable. 
    			</p><p>It uses environmentally friendly, climate-smart technologies and practices to grow food, plant trees, produce energy, and to convert our wastes into resources using productive closed- loop systems that actually build rather than exploit their natural resources base. 
    			</p><p>It also learns from the local experience, respecting the everyday inventive responses of people and communities, and their original contributions to greening.
</p></div>

    	</div></div></li>
			<li >
				<div class="picturebox">
					<div class="" >
						<a  class="uk-h2"  data-uk-toggle="{target:'.definition2', animation:'uk-animation-fade'}" >Urban agriculture <i class="uk-icon-arrow-circle-down"></i></a>
						<div class="definition2 uk-hidden"><p>
    			is the growing of plants and the raising of animals within and around cities and other settlements
    		</p><p>Its most striking feature is how the practice is integrated into the urban economy and fabric itself and thus embedded in – and interacting with – the urban ecosystem. 
    	</p><p>In the context of forced displacement, urban agriculture (UA) has a clear role to play from the earliest stages of a crisis, through refugee camp and crisis-city settings, to resettlement or returnees, but whatever the case, facilitating the transition from food insecurity, to food security, then food sovereignty is always the goal.
</p></div>
</div></div></li>


			<li ><div class="picturebox">
				<div class="" >
					<a   class="uk-h2"  data-uk-toggle="{target:'.definition3', animation:'uk-animation-fade'}" >Forced Displacement <i class="uk-icon-arrow-circle-down"></i></a>
					<div class="definition3 uk-hidden"><p>
					    			refers to the situations of people who leave or flee their homes due to conflict, violence, persecution or human rights violations. 
					    				</p><p>Globally, there are now almost 20 million refugees and 40 million internally displaced persons (IDPs) – and most are hosted in developing countries. 
					    					</p><p>Many of these refugees and IDPs don’t have access to land, property, housing, livelihoods, urban services and accountable and responsive governance. 
					    						</p>
<p>In this report we use the term ‘refugees’ synonymously with IDPs.</p>
					    					</div>

				</div></div></li>
		</ul>
	</div> 