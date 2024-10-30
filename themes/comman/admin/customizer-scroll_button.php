<?php
function hill_customize_register_scroll_button() {
	global $hill_global;
    $section_args = [
        'title'       => 'Scroll To Top',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_scroll_button_section', $section_args );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'hill_display_scroll_button',
            'label'       => 'Display Scroll Button',
            'section'     => 'hill_scroll_button_section',
            'default'     => $hill_global['hill_display_scroll_button'],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_scroll_button_bg_color',
            'label'       => 'Backgroun Color',
            'section'     => 'hill_scroll_button_section',
            'default'     => $hill_global['hill_scroll_button_bg_color'],
            'output' => [
                            [
                                'element'  => '.scrolling-btn',
                                'property' => 'background-color',
                            ]
                        ],
            'active_callback' => [
                    [
                        'setting'  => 'hill_display_scroll_button',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_icon_button_color',
            'label'       => 'Color',
            'section'     => 'hill_scroll_button_section',
            'default'     => $hill_global['hill_icon_button_color'],
            'output' => [
                            [
                                'element'  => '.scrolling-btn',
                                'property' => 'color',
                            ]
                        ],
            'active_callback' => [
                    [
                        'setting'  => 'hill_display_scroll_button',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
        ]
    ); 
   
}
add_action( 'init', 'hill_customize_register_scroll_button',3 );