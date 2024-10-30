<?php
function hill_customize_register_container( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Container',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_global_container_section', $section_args );
    new \Kirki\Field\Select(
        [
            'settings'    => 'hill_container_width_layout',
            'label'       => 'Page Layouts',
            'section'     => 'hill_global_container_section',
            'default'     => $hill_global['hill_container_width_layout'],
            'choices'     => $hill_global['hill_container_width_layout_dropdown'],
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_container_width',
            'label'    => 'Container Contact Width',
            'section'  => 'hill_global_container_section',
            'default'  => $hill_global['hill_container_width'],
            'active_callback' => [
                                    [
                                        'setting'  => 'hill_container_width_layout',
                                        'operator' => '==',
                                        'value'    => 'content_width',
                                    ]
                                ],
        ]
    );

                
}
add_action( 'init', 'hill_customize_register_container' ,3);
function hill_customize_css_container(){
    global $hill_global;
	?>
	<style type="text/css">
		.hill-container{
            <?php
            if(get_theme_mod('hill_container_width_layout',$hill_global['hill_container_width_layout'])=='content_width'){
                ?>
                max-width:<?php echo esc_attr(get_theme_mod('hill_container_width',$hill_global['hill_container_width'])); ?>px;
                <?php
            }else{
                ?>
                max-width:100%;
                <?php
            }
            ?>
        }
	</style>
	<?php
}
add_action( 'wp_head', 'hill_customize_css_container');