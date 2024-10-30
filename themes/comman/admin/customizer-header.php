<?php
function hill_customize_register_header( ) {
    global $hill_global;

    $section_args = [
        'title'       => 'Header Layout Settings',
        'panel'       => 'hill_header_section',
    ];
    new \Kirki\Section( 'hill_header_layouts', $section_args );

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'hill_header_layout',
            'label'       => 'Choose Header Layout',
            'section'     => 'hill_header_layouts',
            'default'    => $hill_global['hill_header_layout'],
            'choices'     => array(
                'header1'  => HILL_EX_PLUGIN_DIR . '/assets/images/header1.png',
                'header2'  => HILL_EX_PLUGIN_DIR . '/assets/images/header2.png',
            ),
        ]
    );
    new \Kirki\Field\Checkbox(
        [
            'settings'    => 'hill_display_cart_icon',
            'label'       => 'Display Cart Icon',
            'section'     => 'hill_header_layouts',
            'default'     => $hill_global['hill_display_cart_icon'],
        ]
    );
    new \Kirki\Field\Checkbox(
        [
            'settings'    => 'hill_display_search_icon',
            'label'       => 'Display Search Icon',
            'section'     => 'hill_header_layouts',
            'default'     => $hill_global['hill_display_search_icon'],
        ]
    );
    new \Kirki\Field\Checkbox(
        [
            'settings'    => 'hill_call_menu_btn',
            'label'       => 'Display Header Menu Button',
            'section'     => 'hill_header_layouts',
            'default'     => $hill_global['hill_call_menu_btn'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_call_menu_btn_title',
            'label'       => 'Display Header Menu Title',
            'section'     => 'hill_header_layouts',
            'default'     => $hill_global['hill_call_menu_btn_title'],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'hill_menu_btn_link',
            'label'       => 'Text Link',
            'section'     => 'hill_header_layouts',
            'default'     => $hill_global['hill_menu_btn_link'],
        ]
    );

            
    $section_args = [
        'title'       => 'Header Color',
        'panel'       => 'hill_header_section',
    ];
    new \Kirki\Section( 'hill_header_color', $section_args ); 

    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_header_bg_color',
            'label'       => 'Backgroun Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_header_bg_color'],
            'output' => [
                            [
                                'element'  => '.site-header',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_header_text_color',
            'label'       => 'Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_header_text_color'],
            'output' => [
                            [
                                'element'  => '.site-header',
                                'property' => 'color',
                            ]
                        ]
        ]
    ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_header_nav_link_color',
            'label'       => 'Menu Link Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_header_nav_link_color'],
            'output' => [
                            [
                                'element'  => '.main-navigation li a,.hill_icon_header,.site-title a',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_header_nav_link_hover_color',
            'label'       => 'Menu Link Hover Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_header_nav_link_hover_color'],
            'output' => [
                            [
                                'element'  => '.main-navigation li a:hover,body .hill_icon_header:hover,.site-title a:hover',
                                'property' => 'color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_menu_active_color',
            'label'       => 'Menu Active Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_menu_active_color'],
            'output' => [
                            [
                                'element'  => '.main-navigation .current-menu-item a',
                                'property' => 'color',
                            ]
                        ]
        ]
    ); 
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_desktop_submenu_bg_color',
            'label'       => 'Desktop Submenu Background Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_desktop_submenu_bg_color'],
            'output' => [
                            [
                                'element'  => '.main-navigation .sub-menu',
                                'property' => 'background-color',
                            ]
                        ]
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'hill_header_desktop_submenu_text_color',
            'label'       => 'Desktop Submenu Text Color',
            'section'     => 'hill_header_color',
            'default'     => $hill_global['hill_header_desktop_submenu_text_color'],
            'output' => [
                            [
                                'element'  => '.main-navigation .sub-menu li a',
                                'property' => 'color',
                            ]
                        ]
        ]
    );           
}
add_action( 'init', 'hill_customize_register_header',3);