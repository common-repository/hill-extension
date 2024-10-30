<?php 
global $hill_global; 
if(get_theme_mod( 'hill_call_menu_btn',$hill_global['hill_call_menu_btn'])==true){ ?>
	<div class="hill_call_btn">
		<a class="hill_call_menu_btn" href="<?php echo esc_attr(get_theme_mod( 'hill_menu_btn_link',$hill_global['hill_menu_btn_link'])); ?>"><?php echo esc_html(get_theme_mod( 'hill_call_menu_btn_title',$hill_global['hill_call_menu_btn_title'])); ?></a>
	</div> 	
<?php } ?>