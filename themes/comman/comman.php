<?php

$sectionarr = array(
	"hill_header_section"=>"Header Options",
	"hill_global_panel"=>"Global Options",
	"hill_frontpage_section"=>"Front Page Options",
	"hill_sidebar_panel"=>"Sidebar Options",
);
foreach ($sectionarr as $key_sectionarr => $value_sectionarr) {
	new \Kirki\Panel(
	    $key_sectionarr,
	    [
	      'title'       => $value_sectionarr,
	      'priority'   => 1, 
	    ]
	);
}

include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/front/front-action.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-header.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-top.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-stricky_header.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-social-icon.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-fonts.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-container.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-blog.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-scroll_button.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-sidebar.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-footer.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-breadcrumb.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-button.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/customizer-frontpage-order.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-banner.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-service.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-about.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-gallery.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-team.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-tesimonial.php");
include(HILL_EX_PLUGIN_DIR_PATH . "themes/comman/admin/frontpage/customizer-sponsors.php");

function mytheme_customize_register( $wp_customize ) {

  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  //$wp_customize->remove_panel( 'nav_menus');
  $wp_customize->remove_section( 'static_front_page');

}
add_action( 'customize_register', 'mytheme_customize_register',50 );

add_action( 'customize_register', function( $wp_customize ) {
	



class Kirki_Controls_Notice_Control extends Kirki\Control\Base {
		public $type = 'notice';
		public function render_content() { 
			$saved_value = $this->value();
			if(HILL_TYPE=='no'){
			?>
			<div class="bannlermil">
				<?php echo $this->label;?>
			</div>
			<?php
			}
		}
	}

	// Register our custom control with Kirki.
	add_filter( 'kirki_control_types', function( $controls ) {
		$controls['notice'] = 'Kirki_Controls_Notice_Control';
		return $controls;
	} );

} );

add_action( 'init', 'hill_prose');
function hill_prose(){
	if(HILL_TYPE=='no'){
		new \Kirki\Section(
			'hill_pro',
			[
				'title'       => 'Get Premium',
				'type'        => 'link',
				'button_text' => 'Buy',
				'button_url'  => HILL_PRO_LINK,
				'priority'   => 0, 
			]
		);
	}
	new \Kirki\Section(
			'hill_doc',
			[
				'title'       => 'Documentation',
				'type'        => 'link',
				'button_text' => 'View',
				'button_url'  => HILL_DOC_LINK,
				'priority'   => 0, 
			]
		);
}