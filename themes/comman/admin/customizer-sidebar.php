<?php
function hill_customize_register_sidebar( ) {
	global $hill_global;
    


        $post_types = get_post_types(array('public' => true), 'objects');
        foreach ($post_types  as $post_type) {
            $section_args = [
                'title'       => $post_type->label .' Sidebar',
                'panel'       => 'hill_sidebar_panel',
            ];
            new \Kirki\Section( 'hill_sidebar_section_' .$post_type->name, $section_args );
            new \Kirki\Field\Radio_Image(
                [
                    'settings'    => 'hill_post_sidebar_select_'.$post_type->name,
                    'label'       => $post_type->label . ' Layout:',
                    'section'     => 'hill_sidebar_section_'.$post_type->name,
                    'default'     => $hill_global['sidebar_position'],
                    'choices'     => [
                                        'no_sidebar'  => HILL_EX_PLUGIN_DIR . '/assets/images/full.png',
                                        'left_sidebar'  => HILL_EX_PLUGIN_DIR . '/assets/images/left.png',
                                        'right_sidebar'  => HILL_EX_PLUGIN_DIR . '/assets/images/right.png',
                                     ],
                ]
            );
            new \Kirki\Field\Number(
                [
                    'settings' => 'hill_post_sidebar_width_' . $post_type->name,
                    'label'    => $post_type->label . ' Sidebar Width:',
                    'section'  => 'hill_sidebar_section_'.$post_type->name,
                    'description' => 'in %',
                    'default'  => '30',
                ]
            );

        } 
                
}
add_action( 'init', 'hill_customize_register_sidebar',3 );
function hill_customize_css_sidebar(){
    global $hill_global;
    $post_types = get_post_types(array('public' => true), 'objects');
    ?>
    <style type="text/css">
        <?php
        foreach ($post_types as $key_post_types => $value_post_types) {
            if(is_singular( $value_post_types->name )){
                ?>
                .hill-container-main #secondary{
                    width:<?php echo get_theme_mod('hill_post_sidebar_width_' . $value_post_types->name,30);?>%;
                }
                .hill-container-main #primary{
                     width:<?php echo (100-get_theme_mod('hill_post_sidebar_width_' . $value_post_types->name,30));?>%;
                }
                <?php
            }
        }
        ?>
    </style>
    <?php
}
add_action( 'wp_head', 'hill_customize_css_sidebar');