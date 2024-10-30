<?php
/*
* Plugin Name: Hill Extension
* Description: Import all the demos on your site
* Version: 1.0
* Copyright: 2020
* Text Domain: hill-extension
*/
define('HILL_EX_PLUGIN_DIR',plugins_url('', __FILE__));
define( 'HILL_EX_PLUGIN_DIR_PATH' , plugin_dir_path( __FILE__ ) );

require_once( HILL_EX_PLUGIN_DIR_PATH . 'inc/kirki/kirki.php');

use Kirki\Util\Helper;

require_once( HILL_EX_PLUGIN_DIR_PATH . 'inc/global.php');
require_once( HILL_EX_PLUGIN_DIR_PATH . 'inc/custom-function.php');


add_action('plugins_loaded', 'check_theme_option_hill');
function check_theme_option_hill(){
	$theme = wp_get_theme();
	$includetheme = array(
		'Hill Tech',
		'Hill Tech Pro',
	);
	if( in_array($theme->name, $includetheme)){
	    require_once(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/comman.php");
	}
	
}
add_action( 'wp_enqueue_scripts', 'hill_extenstion_scripts' );
function hill_extenstion_scripts() {
	wp_enqueue_style( 'hill-style', esc_url(HILL_EX_PLUGIN_DIR).'/assets/css/style.css' , array());
	wp_enqueue_style( 'hill-comman', esc_url(HILL_EX_PLUGIN_DIR).'/assets/css/comman.css' , array());
	wp_enqueue_style( 'hill-owl', esc_url(HILL_EX_PLUGIN_DIR).'/assets/libary/owl/assets/owl.carousel.min.css' , array());
	wp_enqueue_style( 'hill-owl-theme', esc_url(HILL_EX_PLUGIN_DIR).'/assets/libary/owl/assets/owl.theme.default.min.css' , array());
	wp_enqueue_script( 'hill-owl', esc_url(HILL_EX_PLUGIN_DIR). '/assets/libary/owl/owl.carousel.js', array('jquery'),true,true);
	wp_enqueue_style( 'hill-aos', esc_url(HILL_EX_PLUGIN_DIR).'/assets/libary/aos/aos.css' , array());
	wp_enqueue_script( 'hill-aos', esc_url(HILL_EX_PLUGIN_DIR). '/assets/libary/aos/aos.js', array('jquery'),true,true);
	wp_enqueue_script( 'hill-script', esc_url(HILL_EX_PLUGIN_DIR). '/assets/js/script.js', array('jquery'),true,true);
}
function hill_customizer_css() {
    wp_enqueue_style('hill-customize-controls-style',esc_url(HILL_EX_PLUGIN_DIR).'/assets/css/customizer-admin.css');
}
add_action( 'customize_controls_enqueue_scripts', 'hill_customizer_css',0 );