<?php
function hill_customize_register_social_icon( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Social Media Icons',
        'panel'       => 'hill_header_section',
    ];
    new \Kirki\Section( 'hill_social_section', $section_args );
    foreach($hill_global['hill_social_icon_list'] as $key_hill_social_icon_list=>$val_hill_social_icon_list){
        new \Kirki\Field\Text(
            [
                'settings'    => $key_hill_social_icon_list,
                'label'       => $val_hill_social_icon_list['label'],
                'section'     => 'hill_social_section',
                'default'     => '#',
            ]
        );
    }
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_social_icon_bg_color',
            'label'       => 'Icon Background Color',
            'section'     => 'hill_social_section',
            'default'     => $hill_global['hill_social_icon_bg_color'],
            'output' => [
                            [
                                'element'  => 'a.social_icon',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_social_icon_bg_hover_color',
            'label'       => 'Icon Background Hover Color',
            'section'     => 'hill_social_section',
            'default'     => $hill_global['hill_social_icon_bg_hover_color'],
            'output' => [
                            [
                                'element'  => 'a.social_icon:hover',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_social_icon_color',
            'label'       => 'Icon Color',
            'section'     => 'hill_social_section',
            'default'     => $hill_global['hill_social_icon_color'],
            'output' => [
                            [
                                'element'  => 'a.social_icon',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_social_icon_hover_color',
            'label'       => 'Icon Hover Color',
            'section'     => 'hill_social_section',
            'default'     => $hill_global['hill_social_icon_hover_color'],
            'output' => [
                            [
                                'element'  => 'a.social_icon:hover',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
                
}
add_action( 'init', 'hill_customize_register_social_icon',3 );