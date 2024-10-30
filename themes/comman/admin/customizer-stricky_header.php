<?php
function hill_customize_register_stricky_header(  ) {
	global $hill_global;

	$section_args = [
        'title'       => 'Stricky Header',
        'panel'       => 'hill_header_section',
    ];
    new \Kirki\Section( 'hill_stricky_header_section', $section_args );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'hill_stricky_header',
            'label'       => 'Enable',
            'section'     => 'hill_stricky_header_section',
            'default'     => $hill_global['hill_stricky_header'],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'hill_mobile_stricky_header',
            'label'       => 'Enable Mobile',
            'section'     => 'hill_stricky_header_section',
            'default'     => $hill_global['hill_mobile_stricky_header'],
        ]
    );
    

                
}
add_action( 'init', 'hill_customize_register_stricky_header',3 );

function hill_header_type_hill_stricky_header($string){
    global $hill_global;
    if(get_theme_mod( 'hill_stricky_header',$hill_global['hill_stricky_header'])==true){
        $string .=" enable_stricky" ;
    }
    $string .=" ".get_theme_mod('hill_header_layout',$hill_global['hill_header_layout']);
    return $string;
      
}
add_action( 'hill_header_type', 'hill_header_type_hill_stricky_header',10 );
function hill_stricky_header_head(){
    global $hill_global;
   ?>
   <style type="text/css">
    @media only screen and (max-width: 767px) {
       <?php
        if(get_theme_mod( 'hill_mobile_stricky_header',$hill_global['hill_mobile_stricky_header'])==''){
        ?>
        .hill-is-sticky-menu.enable_stricky{
            position: inherit;
        }
       <?php
         }
       ?>
   }
   </style>
   <?php
      
}
add_action( 'wp_head', 'hill_stricky_header_head',10 );


