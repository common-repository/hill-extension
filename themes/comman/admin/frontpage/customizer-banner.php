<?php
function hill_customize_register_banner(  ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Banner',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_banner', $section_args ); 

    Kirki::add_field(
        'hill_banner_notice',
        [
            'settings'    => 'hill_banner_notice',
            'type'        => 'notice',
            'section'     => 'hill_banner',
            'label'=> 'More than '.$hill_global['hill_banner_number_max'].' Banner Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_banner_number',
            'label'    => 'Banner',
            'section'  => 'hill_banner',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Banner',
            ],
            'button_label' => 'Add Banner',
            'default'  => $hill_global['hill_banner_number'],
            'fields'   => [
                'hill_banner_image'   => [
                    'type'        => 'image',
                    'label'       => 'Banner Image',
                ],
                'hill_banner_title'    => [
                    'type'        => 'text',
                    'label'       => 'Banner Title',
                ],
                'hill_banner_description' => [
                    'type'        => 'textarea',
                    'label'       => 'Banner Description',
                ],
                'hill_banner_button'    => [
                    'type'        => 'text',
                    'label'       => 'Button Text',
                ],
                'hill_banner_button_link'    => [
                    'type'        => 'text',
                    'label'       => 'Button Link',
                ],

            ],
            'choices' => [
                            'limit' => $hill_global['hill_banner_number_max']
                        ]
        ]
    );

    new \Kirki\Field\Select(
        [
            'settings'    => 'hill_banner_text_align',
            'label'       => 'Text Alignment',
            'section'     => 'hill_banner',
            'default'     => $hill_global['hill_banner_text_align'],
            'choices'     => $hill_global['hill_text_align'],
            'output' => [
                            [
                                'element'  => '.hill_banner_slider_hero_content',
                                'property' => 'justify-content',
                            ],
                            [
                                'element'  => '.hill_banner_slider_hero_content, .hill_banner_slider_hero_content h1, .hill_banner_slider_hero_content h3',
                                'property' => 'text-align',
                            ],
                        ],
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'hill_banner_vertical_align',
            'label'       => 'Vertical Alignment',
            'section'     => 'hill_banner',
            'default'     => $hill_global['hill_banner_vertical_align'],
            'choices'     => $hill_global['hill_vertical_align'],
            'output' => [
                            [
                                'element'  => '.hill_banner_slider_hero_content',
                                'property' => 'align-items',
                            ],
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_banner_heading_color',
            'label'       => 'Heading Color',
            'section'     => 'hill_banner',
            'default'     => $hill_global['hill_banner_heading_color'],
            'output' => [
                            [
                                'element'  => '.hill_banner_title',
                                'property' => 'color',
                            ]
                        ],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_banner_description_color',
            'label'       => 'Description Color',
            'section'     => 'hill_banner',
            'default'     => $hill_global['hill_banner_description_color'],
            'output' => [
                            [
                                'element'  => '.hill_banner_description',
                                'property' => 'color',
                            ]
                        ],
        ]
    );    
}
add_action( 'init', 'hill_customize_register_banner',3 );