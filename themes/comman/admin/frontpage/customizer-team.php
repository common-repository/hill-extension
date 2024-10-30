<?php
function hill_customize_register_team( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Team',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_team', $section_args );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_team_heading',
            'label'       => 'Team Heading',
            'section'     => 'hill_team',
            'default'     => $hill_global['hill_team_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_team_sub_heading',
            'label'       => 'Team Sub Heading',
            'section'     => 'hill_team',
            'default'     => $hill_global['hill_team_sub_heading'],
        ]
    );
    Kirki::add_field(
        'hill_team_notice',
        [
            'settings'    => 'hill_team_notice',
            'type'        => 'notice',
            'section'     => 'hill_team',
            'label'=> 'More than '.$hill_global['hill_team_number_max'].' Team Need to <a href="'.HILL_PRO_LINK.'" target="_blank">Buy Premium Version</a>'
        ]
    );
    $team_arr_social =  [
                'hill_team_image'   => [
                    'type'        => 'image',
                    'label'       => 'Team Image',
                ],
                'hill_team_title'    => [
                    'type'        => 'text',
                    'label'       => 'Team Title',
                ],
                'hill_team_description' => [
                    'type'        => 'textarea',
                    'label'       => 'Team Description',
                ],
                'hill_team_button_link'    => [
                    'type'        => 'text',
                    'label'       => 'Button Link',
                ]
            ];
    foreach ($hill_global['social_array'] as $key_social_array => $value_social_array) {
        $team_arr_social['hill_team_'.$key_social_array.'_link']=[
            'type'        => 'text',
            'label'       => $value_social_array['label'].' Link ',
            'default'     => '#',
        ];
    }
    new \Kirki\Field\Repeater(
        [
            'settings' => 'hill_team_number',
            'label'    => 'Team',
            'section'  => 'hill_team',
            'row_label'    => [
                'type'  => 'field',
                'value' => 'Team',
            ],
            'default'  => $hill_global['hill_team_number'],
            'button_label' => 'Add Team',
            'fields'   => $team_arr_social,
            'choices' => [
                            'limit' => $hill_global['hill_team_number_max']
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_team_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_team',
            'default'     => $hill_global['hill_team_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_team',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_team_text_color',
            'label'       => 'Text Color',
            'section'     => 'hill_team',
            'default'     => $hill_global['hill_team_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_team,.hill_team h3,.hill_team .hill_team_description,.hill_team a',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_team_per_number',
            'label'    => 'Columns Per Row',
            'section'  => 'hill_team',
            'default'  => $hill_global['hill_team_per_number'],
            'choices'  => [
                'min'  => 1,
                'max'  => 5,
            ],
        ]
    );
     
}
add_action( 'init', 'hill_customize_register_team' ,3);
function hill_customize_css_team(){
    global $hill_global;
    $hill_team_per_number = get_theme_mod( 'hill_team_per_number',$hill_global['hill_team_per_number']);
    ?>
    <style type="text/css">
        .hill_team_slider_inner {
            display: grid;
            grid-template-columns: repeat(<?php echo $hill_team_per_number;?>, 1fr);
            gap: 20px;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'hill_customize_css_team');