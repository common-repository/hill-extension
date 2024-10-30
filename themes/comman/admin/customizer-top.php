<?php
function hill_customize_register_top(  ) {
	global $hill_global;

	$section_args = [
        'title'       => 'Top Bar',
        'panel'       => 'hill_header_section',
    ];
    new \Kirki\Section( 'hill_top_bar_section', $section_args );

    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_contact_info',
            'label'       => 'Phone',
            'section'     => 'hill_top_bar_section',
            'default'     => $hill_global['hill_contact_info'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_email_info',
            'label'       => 'Email',
            'section'     => 'hill_top_bar_section',
            'default'     => $hill_global['hill_email_info'],
        ]
    ); 
    new \Kirki\Field\Checkbox(
        [
            'settings'    => 'display_social_top_icon',
            'label'       => 'Display Social Icon',
            'section'     => 'hill_top_bar_section',
            'default'     => $hill_global['display_social_top_icon'],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_top_bar_bg_color',
            'label'       => 'Top Bar Background Color',
            'section'     => 'hill_top_bar_section',
            'default'     => $hill_global['hill_top_bar_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_top_bar',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_top_bar_text_color',
            'label'       => 'Top Bar Text Color',
            'section'     => 'hill_top_bar_section',
            'default'     => $hill_global['hill_top_bar_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_top_bar',
                                'property' => 'color',
                            ]
                        ]
        ]
    );    
            
                
}
add_action( 'init', 'hill_customize_register_top',3 );
