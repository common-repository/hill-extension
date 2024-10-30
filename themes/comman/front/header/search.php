<?php 
global $hill_global; 
if(get_theme_mod( 'hill_display_search_icon',$hill_global['hill_display_search_icon'])==true){ ?>
	<div id="hill_search" class="hill_search">
	<a href="#" class="hill_search_icon hill_icon_header">	
		<i class="fa fa-search fa-lg seachicon" aria-hidden="true"></i>
	</a>								
	<div class="hill_searchform">
		<div class="hill_searchform_inner">
			<a href="#" class="hill_search_close"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a>
	        <form id="hill_search_form" class="hill_search_form" action="">
		        <input type="text" class="s" id="s" name="s" placeholder="keywords...">
		        <button type="submit" class="hill_search_model_button"><i class="fa fa-search"></i></button>
	        </form>
        </div>										    
	</div>
</div>
<?php
}