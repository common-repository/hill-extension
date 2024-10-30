<?php
function hill_customize_register_about() {
	global $hill_global;
    $section_args = [
        'title'       => 'About Us',
        'panel'       => 'hill_frontpage_section',
    ];
    new \Kirki\Section( 'hill_about', $section_args );

    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_about_heading',
            'label'       => 'About Heading',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_about_sub_heading',
            'label'       => 'About Sub Heading',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_sub_heading'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_about_title',
            'label'       => 'About Title',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_title'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_about_sub_title',
            'label'       => 'About Sub Title',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_sub_title'],
        ]
    );
     new \Kirki\Field\Image(
        [
            'settings'    => 'hill_about_image',
            'label'       => 'About Image',
            'section'     => 'hill_about',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'hill_about_description',
            'label'       => 'About Description',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_description'],
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_about_bg_color',
            'label'       => 'Background Color',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_bg_color'],
            'output' => [
                            [
                                'element'  => '.hill_about',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_about_text_color',
            'label'       => 'Text Color',
            'section'     => 'hill_about',
            'default'     => $hill_global['hill_about_text_color'],
            'output' => [
                            [
                                'element'  => '.hill_about,.hill_about h3,.hill_about h4',
                                'property' => 'color',
                            ]
                        ]
        ]
    ); 

 

}
add_action( 'init', 'hill_customize_register_about',3);