<?php
function hill_customize_register_service( $wp_customize ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Service',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_service', $section_args );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_service_heading',
            'label'       => 'Service Heading',
            'section'     => 'hill_service',
            'default'     => $hill_global['hill_service_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_service_sub_heading',
            'label'       => 'Service Sub Heading',
            'section'     => 'hill_service',
            'default'     => $hill_global['hill_service_sub_heading'],
        ]
    );
    Kirki::add_field(
        'hill_service_notice',
        [
            'settings'    => 'hill_service_notice',
            'type'        => 'notice',
            'section'     => 'hill_service',
            'label'=> 'More than '.$hill_global['hill_service_number_max'].' Service Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_service_number',
            'label'    => 'Service',
            'section'  => 'hill_service',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Service',
            ],
            'button_label' => 'Add Service',
            'default'  => $hill_global['hill_service_number'],
            'fields'   => [
                'hill_service_icon'   => [
                    'type'        => 'text',
                    'label'       => 'Service Icon',
                    'description' => 'Copy Code from <a href="https://fontawesome.com/v4/icons/" target="_blank">Get Icon</a>',
                ],
                'hill_service_title'    => [
                    'type'        => 'text',
                    'label'       => 'Service Title',
                ],
                'hill_service_description' => [
                    'type'        => 'textarea',
                    'label'       => 'Service Description',
                ],
                'hill_service_button_link'    => [
                    'type'        => 'text',
                    'label'       => 'Button Link',
                ],

            ],
            'choices' => [
                            'limit' => $hill_global['hill_service_number_max']
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_service_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_service',
            'default'     => $hill_global['hill_service_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_service',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_service_text_color',
            'label'       => 'Color',
            'section'     => 'hill_service',
            'default'     => $hill_global['hill_service_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_service,.hill_service h3',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_service_per_number',
            'label'    => 'Columns Per Row',
            'section'  => 'hill_service',
            'default'  => $hill_global['hill_service_per_number'],
            'choices'  => [
                'min'  => 1,
                'max'  => 5,
            ],
        ]
    );

     
}
add_action( 'init', 'hill_customize_register_service',3 );
function hill_customize_css_service(){
    global $hill_global;
    $hill_service_per_number = get_theme_mod( 'hill_service_per_number',$hill_global['hill_service_per_number']);
    ?>
    <style type="text/css">
        .hill_service_slider_inner {
            display: grid;
            grid-template-columns: repeat(<?php echo $hill_service_per_number;?>, 1fr);
            gap: 20px;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'hill_customize_css_service');