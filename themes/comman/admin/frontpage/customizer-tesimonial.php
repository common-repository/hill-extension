<?php
function hill_customize_register_tesimonial(  ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Tesimonial',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_tesimonial', $section_args );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_tesimonial_heading',
            'label'       => 'Tesimonial Heading',
            'section'     => 'hill_tesimonial',
            'default'     => $hill_global['hill_tesimonial_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_tesimonial_sub_heading',
            'label'       => 'Tesimonial Sub Heading',
            'section'     => 'hill_tesimonial',
            'default'     => $hill_global['hill_tesimonial_sub_heading'],
        ]
    );
    Kirki::add_field(
        'hill_tesimonial_notice',
        [
            'settings'    => 'hill_tesimonial_notice',
            'type'        => 'notice',
            'section'     => 'hill_tesimonial',
            'label'=> 'More than '.$hill_global['hill_tesimonial_number_max'].' Tesimonial Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
            
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_tesimonial_number',
            'label'    => 'Tesimonial',
            'section'  => 'hill_tesimonial',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Tesimonial',
            ],
            'button_label' => 'Add Tesimonial',
            'default'  => $hill_global['hill_tesimonial_number'],
            'fields'   => [
                'hill_tesimonial_image'   => [
                    'type'        => 'image',
                    'label'       => 'Tesimonial Image',
                ],
                'hill_tesimonial_title'    => [
                    'type'        => 'text',
                    'label'       => 'Tesimonial Title',
                ],
                'hill_tesimonial_designation'    => [
                    'type'        => 'text',
                    'label'       => 'Tesimonial Designation',
                ],
                'hill_tesimonial_description' => [
                    'type'        => 'textarea',
                    'label'       => 'Tesimonial Description',
                ],

            ],
            'choices' => [
                            'limit' => $hill_global['hill_tesimonial_number_max']
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_tesimonial_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_tesimonial',
            'default'     => $hill_global['hill_tesimonial_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_tesimonial',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_tesimonial_text_color',
            'label'       => 'Text Color',
            'section'     => 'hill_tesimonial',
            'default'     => $hill_global['hill_tesimonial_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_tesimonial,.hill_tesimonial h3',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_tesimonial_per_number',
            'label'    => 'Columns Per Row',
            'section'  => 'hill_tesimonial',
            'default'  => $hill_global['hill_tesimonial_per_number'],
            'choices'  => [
                'min'  => 1,
                'max'  => 5,
            ],
        ]
    );
    
}
add_action( 'init', 'hill_customize_register_tesimonial',3 );
function hill_customize_css_tesimonial(){
    global $hill_global;
    $hill_tesimonial_per_number = get_theme_mod( 'hill_tesimonial_per_number',$hill_global['hill_tesimonial_per_number']);
    ?>
    <style type="text/css">
        .hill_tesimonial_slider_inner {
            display: grid;
            grid-template-columns: repeat(<?php echo $hill_tesimonial_per_number;?>, 1fr);
            grid-column-gap: 20px;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'hill_customize_css_tesimonial');