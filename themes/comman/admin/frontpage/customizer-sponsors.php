<?php
function hill_customize_register_sponsors(  ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Sponsors',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_sponsors', $section_args ); 
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_sponsors_heading',
            'label'       => 'Sponsors Heading',
            'section'     => 'hill_sponsors',
            'default'     => $hill_global['hill_sponsors_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_sponsors_sub_heading',
            'label'       => 'Sponsors Sub Heading',
            'section'     => 'hill_sponsors',
            'default'     => $hill_global['hill_sponsors_sub_heading'],
        ]
    );
    Kirki::add_field(
        'hill_sponsors_notice',
        [
            'settings'    => 'hill_sponsors_notice',
            'type'        => 'notice',
            'section'     => 'hill_sponsors',
            'label'=> 'More than '.$hill_global['hill_sponsors_number_max'].' Sponsors Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_sponsors_number',
            'label'    => 'Sponsors',
            'section'  => 'hill_sponsors',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Sponsors',
            ],
            'default'  => $hill_global['hill_sponsors_number'],
            'button_label' => 'Add Sponsors',
            'fields'   => [
                'hill_sponsors_image'   => [
                    'type'        => 'image',
                    'label'       => 'Sponsors Image',
                ],
                'hill_sponsors_link'   => [
                    'type'        => 'text',
                    'label'       => 'Sponsors Link',
                ],

            ],
            'choices' => [
                            'limit' => $hill_global['hill_sponsors_number_max']
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_sponsors_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_sponsors',
            'default'     => $hill_global['hill_sponsors_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_sponsors',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_sponsors_text_color',
            'label'       => 'Color',
            'section'     => 'hill_sponsors',
            'default'     => $hill_global['hill_sponsors_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_sponsors,.hill_sponsors h3',
                                'property' => 'color',
                            ]
                        ]
        ]
    );

     
}
add_action( 'init', 'hill_customize_register_sponsors',3 );