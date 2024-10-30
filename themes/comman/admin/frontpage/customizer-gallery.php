<?php
function hill_customize_register_gallery(  ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Gallery',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_gallery', $section_args ); 
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_gallery_heading',
            'label'       => 'Gallery Heading',
            'section'     => 'hill_gallery',
            'default'     => $hill_global['hill_gallery_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_gallery_sub_heading',
            'label'       => 'Gallery Sub Heading',
            'section'     => 'hill_gallery',
            'default'     => $hill_global['hill_gallery_sub_heading'],
        ]
    );
    Kirki::add_field(
        'hill_gallery_notice',
        [
            'settings'    => 'hill_gallery_notice',
            'type'        => 'notice',
            'section'     => 'hill_gallery',
            'label'=> 'More than '.$hill_global['hill_gallery_number_max'].' Gallery Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_gallery_number',
            'label'    => 'Gallery',
            'section'  => 'hill_gallery',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Gallery',
            ],
            'default'  => $hill_global['hill_gallery_number'],
            'button_label' => 'Add Gallery',
            'fields'   => [
                'hill_gallery_image'   => [
                    'type'        => 'image',
                    'label'       => 'Gallery Image',
                ],
                'hill_gallery_title'    => [
                    'type'        => 'text',
                    'label'       => 'Gallery Title',
                ],
                'hill_gallery_description' => [
                    'type'        => 'textarea',
                    'label'       => 'Gallery Description',
                ],
                'hill_gallery_button_link'    => [
                    'type'        => 'text',
                    'label'       => 'Button Link',
                ],

            ],
            'choices' => [
                            'limit' => $hill_global['hill_gallery_number_max']
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_gallery_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_gallery',
            'default'     => $hill_global['hill_gallery_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_gallery',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_gallery_text_color',
            'label'       => 'Color',
            'section'     => 'hill_gallery',
            'default'     => $hill_global['hill_gallery_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_gallery,.hill_gallery h3',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_gallery_per_number',
            'label'    => 'Columns Per Row',
            'section'  => 'hill_gallery',
            'default'  => $hill_global['hill_gallery_per_number'],
            'choices'  => [
                'min'  => 1,
                'max'  => 5,
            ],
        ]
    );


     
}
add_action( 'init', 'hill_customize_register_gallery',3 );
function hill_customize_css_gallery(){
    global $hill_global;
    $hill_gallery_per_number = get_theme_mod( 'hill_gallery_per_number',$hill_global['hill_gallery_per_number']);
    ?>
    <style type="text/css">
        .hill_gallery_slider_inner {
            display: grid;
            grid-template-columns: repeat(<?php echo $hill_gallery_per_number;?>, 1fr);
            gap: 20px;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'hill_customize_css_gallery');