<?php
function hill_customize_register_bottom( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Buttons Options',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_global_button_option', $section_args ); 

	$button_element = 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button, .nav-previous a, .nav-next a, .buttons, .woocommerce a.button, .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button, .woocommerce button.button.alt.disabled, .more-link,.hill_call_btn a.hill_call_menu_btn';
    $button_element_hover = 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .wp-block-search .wp-block-search__button:hover, .nav-previous a:hover, .nav-next a:hover, .buttons:hover, .woocommerce a.button:hover, .woocommerce button:hover, .woocommerce .single-product button:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button:hover, .woocommerce button.button.alt.disabled:hover, .more-link:hover,.hill_call_btn a.hill_call_menu_btn:hover';

    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_bg_color'],
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'background-color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_bg_hover_color',
            'label'       => 'Background Hover Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_bg_hover_color'],
            'output' => [
                            [
                                'element'  => $button_element_hover,
                                'property' => 'background-color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_text_color',
            'label'       => 'Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_text_color'],
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_texthover_color',
            'label'       => 'Hover Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_texthover_color'],
            'output' => [
                            [
                                'element'  => $button_element_hover,
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_border_color',
            'label'       => 'Border Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_border_color'],
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'border-color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_button_border_hover_color',
            'label'       => 'Border Hover Color',
            'section'     => 'hill_global_button_option',
            'default'     => $hill_global['hill_button_border_hover_color'],
            'output' => [
                            [
                                'element'  => $button_element_hover,
                                'property' => 'border-color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_borderwidth',
            'label'    => 'Border Width',
            'section'  => 'hill_global_button_option',
            'default'  => $hill_global['hill_borderwidth'],
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'border-width',
                                'suffix'=>'px'
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_button_border_radius',
            'label'    => 'Border Radius',
            'section'  => 'hill_global_button_option',
            'default'  => $hill_global['hill_button_border_radius'],
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'border-radius',
                                'suffix'=>'px'
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'hill_button_padding',
            'label'    => 'Padding',
            'section'  => 'hill_global_button_option',
            'default'  => $hill_global['hill_button_padding'],
            'description'=> '15px 25px',
            'output' => [
                            [
                                'element'  => $button_element,
                                'property' => 'padding',
                            ]
                        ],
        ]
    );
   
   
        
                        
}
add_action( 'init', 'hill_customize_register_bottom',3 );