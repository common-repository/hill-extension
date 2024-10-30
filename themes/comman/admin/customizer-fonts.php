<?php
function hill_customize_register_fonts( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Fonts & Typography',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_global_body_section', $section_args );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_link_color',
            'label'       => 'Link Color',
            'section'     => 'hill_global_body_section',
            'default'     => $hill_global['hill_link_color'],
            'output' => [
                            [
                                'element'  => 'a',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_link_hover_color',
            'label'       => 'Link Hover Color',
            'section'     => 'hill_global_body_section',
            'default'     => $hill_global['hill_link_hover_color'],
            'output' => [
                            [
                                'element'  => 'a:hover',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_body_fontfamily',
            'label'       => 'Body',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_body_fontfamily'],
            'output'      => [
                [
                    'element' => 'body',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading1_fontfamily',
            'label'       => 'H1',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading1_fontfamily'],
            'output'      => [
                [
                    'element' => 'h1',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading2_fontfamily',
            'label'       => 'H2',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading2_fontfamily'],
            'output'      => [
                [
                    'element' => 'h2',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading3_fontfamily',
            'label'       => 'H3',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading3_fontfamily'],
            'output'      => [
                [
                    'element' => 'h3',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading4_fontfamily',
            'label'       => 'H4',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading4_fontfamily'],
            'output'      => [
                [
                    'element' => 'h4',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading5_fontfamily',
            'label'       => 'H5',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading5_fontfamily'],
            'output'      => [
                [
                    'element' => 'h5',
                ],
            ],
        ]
    );
    new \Kirki\Field\Typography(
        [
            'settings'    => 'hill_heading6_fontfamily',
            'label'       => 'H6',
            'section'     => 'hill_global_body_section',
            'transport'   => 'auto',
            'default'     => $hill_global['hill_heading6_fontfamily'],
            'output'      => [
                [
                    'element' => 'h6',
                ],
            ],
        ]
    );

 
            
            
                
}
add_action( 'init', 'hill_customize_register_fonts',3 );