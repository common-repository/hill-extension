<?php
//top icon
add_filter('hill_top_bar','hill_top_bar',10);
function hill_top_bar(){
	echo '<div class="hill_top_bar">';
	echo '<div class="hill-container">';
	echo '<div class="hill_top_innter_bar">';
	require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/top/contact_info.php' );
	require( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/top/social_icon.php' );
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
//hill_left_header_before
add_filter('hill_left_header_before','hill_left_header_before',10);
function hill_left_header_before(){
	global $hill_global;
	if(get_theme_mod('hill_header_layout',$hill_global['hill_header_layout'])=='header1'){
		echo '<div class="hill_left_header_before">';
		require( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/top/social_icon.php' );
		echo '</div>';
	}
}
//hill_left_header_before
add_filter('hill_center_header_before','hill_center_header_before',10);
function hill_center_header_before(){
	global $hill_global;
	if(get_theme_mod('hill_header_layout',$hill_global['hill_header_layout'])=='header1'){
		echo '<div class="right-hill-header">';
		echo '<div class="hill_right_header">';
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/cart.php' );
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/search.php' );
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/call_button.php' );
		echo '</div>';
		echo '</div>';
	}
}

//hill_right_header
add_filter('hill_right_header','hill_right_header',10);
function hill_right_header(){
	global $hill_global;
	if(get_theme_mod('hill_header_layout',$hill_global['hill_header_layout'])=='header2'){
		echo '<div class="right-hill-header">';
		echo '<div class="hill_right_header">';
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/cart.php' );
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/search.php' );
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/header/call_button.php' );
		echo '</div>';
		echo '</div>';
	}
}

//scoll button
add_filter('wp_footer','hill_footer_scroll_button',1);
function hill_footer_scroll_button(){
	global $hill_global;
	if(get_theme_mod('hill_display_scroll_button',$hill_global['hill_display_scroll_button'])==true){
		require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/scroll_button/scroll_button.php' );
	}
}
//breadcrumb
add_filter('hill_section_body','hill_section_body',10);
function hill_section_body(){
	echo '<div class="hill_section_body">';
	global $hill_global;
	if ( !is_front_page()){
		if(get_theme_mod('hill_display_breadcrumb_section',$hill_global['hill_display_breadcrumb_section'])==true){
			require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/breadcrumb/breadcrumb.php' );
		}
	}
	echo '</div>';
}
//blog
add_filter('hill_before_index_loop','hill_before_index_loop_div',100);
add_filter('hill_after_index_loop','hill_after_index_loop_div',100);
function hill_before_index_loop_div(){
	global $hill_global;
	echo '<div class="hill_index_content '.get_theme_mod( 'hill_container_blog_layout',$hill_global['hill_container_blog_layout']).'">';
}
function hill_after_index_loop_div(){
	echo '</div>';
}
//sidbar
function hill_sidebar_assign(){
    global $hill_global;
    $post_types = get_post_types(array('public' => true), 'objects');
    foreach ($post_types as $key_post_types => $value_post_types) {
    	if(is_singular( $value_post_types->name ) || ($value_post_types->name=='page' && is_home())){
    		$hill_global['sidebar_position'] = get_theme_mod('hill_post_sidebar_select_' . $value_post_types->name);
    	}
    }
}
add_action( 'wp', 'hill_sidebar_assign',3);

//frontend section
add_action( 'hill_section_body', 'hill_section_all_section',21);
function hill_section_all_section(){
	global $hill_global;
	if ( is_front_page() ){
		$hill_front_page_order = get_theme_mod( 'hill_sortable_setting', $hill_global['hill_sortable_setting_default']);
		
		foreach ( $hill_front_page_order as $val_hill_front_page_order ) {
			if($val_hill_front_page_order!='blog'){
				require_once( HILL_EX_PLUGIN_DIR_PATH.'themes/comman/front/frontpage/'.$val_hill_front_page_order.'.php' );
			}
		}
		if(!in_array('blog', $hill_front_page_order)){
			?>
			<style type="text/css">
				.hill-innner-body{
					display: none;
				}
			</style>
			<?php
		}
	}
}