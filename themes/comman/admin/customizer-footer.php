<?php
function hill_customize_register_footer( ) {
	global $hill_global;
	$section_args = [
        'title'       => 'Footer Options',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_footer_section', $section_args ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_footer_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_footer_section',
            'default'     => $hill_global['hill_footer_bg_color'],
            'output' => [
                            [
                                'element'  => 'footer#colophon',
                                'property' => 'background-color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_footer_text_color',
            'label'       => 'Color',
            'section'     => 'hill_footer_section',
            'default'     => $hill_global['hill_footer_text_color'],
            'output' => [
                            [
                                'element'  => 'footer#colophon',
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_footer_link_color',
            'label'       => 'Link Color',
            'section'     => 'hill_footer_section',
            'default'     => $hill_global['hill_footer_link_color'],
            'output' => [
                            [
                                'element'  => 'footer#colophon a',
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_footer_link_hover_color',
            'label'       => 'Link Color Hover',
            'section'     => 'hill_footer_section',
            'default'     => $hill_global['hill_footer_link_hover_color'],
            'output' => [
                            [
                                'element'  => 'footer#colophon a:hover',
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'hill_footer_customize',
            'label'       => 'Customize Copyright Text',
            'section'     => 'hill_footer_section',
            'default'     => $hill_global['hill_footer_customize'],
        ]
    );
    Kirki::add_field(
        'hill_footer_customize_notice',
        [
            'settings'    => 'hill_footer_customize_notice',
            'type'        => 'notice',
            'section'     => 'hill_footer_section',
            'label'=> 'Customize Copyright Text Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>',
            'active_callback' => [
                                    [
                                        'setting'  => 'hill_footer_customize',
                                        'operator' => '==',
                                        'value'    => true,
                                    ]
                                ],
        ]
    );
    if(HILL_TYPE=='yes'){
        new \Kirki\Field\Textarea(
            [
                'settings'    => 'hill_copyright_text',
                'label'       => 'Copyright Text',
                'section'     => 'hill_footer_section',
                'default'     => $hill_global['hill_copyright_text'],
                'active_callback' => [
                                        [
                                            'setting'  => 'hill_footer_customize',
                                            'operator' => '==',
                                            'value'    => true,
                                        ]
                                    ],
            ]
        );
    }

                
}
add_action( 'init', 'hill_customize_register_footer',3 );