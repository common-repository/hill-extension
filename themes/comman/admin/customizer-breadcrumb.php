<?php
function hill_customize_register_breadcrumb() {
	global $hill_global;
    $section_args = [
        'title'       => 'Breadcrumb Options',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_breadcrumb_section', $section_args ); 
	new \Kirki\Field\Checkbox(
        [
            'settings'    => 'hill_display_breadcrumb_section',
            'label'       => 'Enable On Breadcrumb Entire Site',
            'section'     => 'hill_breadcrumb_section',
            'default'     => $hill_global['hill_display_breadcrumb_section'],
        ]
    );
    new \Kirki\Field\Background(
        [
            'settings'    => 'hill_breadcrumb_bg_color',
            'label'       => 'Background',
            'section'     => 'hill_breadcrumb_section',
            'default'     => $hill_global['hill_breadcrumb_bg_color'],
            'transport'   => 'auto',
            'output'      => [
                [
                    'element' => '.hill_breadcrumb_info',
                ],
            ],
            'active_callback' => [
                    [
                        'setting'  => 'hill_display_breadcrumb_section',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_breadcrumb_text_color',
            'label'       => 'Color',
            'section'     => 'hill_breadcrumb_section',
            'default'     => $hill_global['hill_breadcrumb_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_breadcrumb_info,.hill_breadcrumb_info a,.hill_breadcrumb_info h1',
                                'property' => 'color',
                            ]
                        ],
            'active_callback' => [
                    [
                        'setting'  => 'hill_display_breadcrumb_section',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
        ]
    );
         
          
                
                
}
add_action( 'init', 'hill_customize_register_breadcrumb',3 );