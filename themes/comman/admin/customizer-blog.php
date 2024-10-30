<?php
function hill_customize_register_blog( ) {
	global $hill_global;
    $section_args = [
        'title'       => 'Blog Layout',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_global_blog_section', $section_args );

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'hill_container_blog_layout',
            'label'       => 'Choose Blogs Layout',
            'section'     => 'hill_global_blog_section',
            'default'     => $hill_global['hill_container_blog_layout'],
            'choices'     => [
                                'grid_view'  => HILL_EX_PLUGIN_DIR . '/assets/images/blog-grid-view.png',
                                'full_list_view'  => HILL_EX_PLUGIN_DIR . '/assets/images/blog-list-view.png',
                             ],
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'hill_container_grid_view_col',
            'label'       => 'Columns',
            'section'     => 'hill_global_blog_section',
            'default'     => $hill_global['hill_container_grid_view_col'],
            'choices'     => [
                                '1' => '1',
                                '2' => '2',
                                '3' => '3',
                            ],
            'active_callback' => [
                    [
                        'setting'  => 'hill_container_blog_layout',
                        'operator' => '==',
                        'value'    => 'grid_view',
                    ]
                ],
        ]
    );
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_container_grid_view_col_gap',
            'label'    => 'Columns Gap',
            'section'  => 'hill_global_blog_section',
            'default'  => $hill_global['hill_container_grid_view_col_gap'],
            'active_callback' => [
                                    [
                                        'setting'  => 'hill_container_width_layout',
                                        'operator' => '==',
                                        'value'    => 'content_width',
                                    ]
                                ],
        ]
    );
          
    foreach ($hill_global['hill_display_blog_option'] as $key_hill_display_blog_option => $value_hill_display_blog_option) {
        new \Kirki\Field\Checkbox(
            [
                'settings'    => 'hill_container_'.$key_hill_display_blog_option,
                'label'       => 'Display '.$value_hill_display_blog_option['text'],
                'section'     => 'hill_global_blog_section',
                'default'     => true,
            ]
        );
    }
    new \Kirki\Field\Number(
        [
            'settings' => 'hill_excerpt_length',
            'label'    => 'Blog Page Excerpt Length (words)',
            'section'  => 'hill_global_blog_section',
            'default'  => $hill_global['hill_excerpt_length'],
            'choices'  => [
                'min'   => 10,
                'max'   => 500,
                'step'  => 5,
            ],
        ]
    );

               
}
add_action( 'init', 'hill_customize_register_blog',3 );
function hill_customize_css_blog(){
    global $hill_global;
	?>
	<style type="text/css">
		
        <?php
        if(get_theme_mod('hill_container_blog_layout',$hill_global['hill_container_blog_layout'])=='grid_view'){
        ?>
        .hill_index_content.grid_view{
            display: grid;
            grid-template-columns: repeat(<?php echo esc_attr(get_theme_mod('hill_container_grid_view_col',$hill_global['hill_container_grid_view_col'])); ?>, 1fr);
            grid-column-gap: <?php echo esc_attr(get_theme_mod('hill_container_grid_view_col_gap',$hill_global['hill_container_grid_view_col_gap'])); ?>px;
        }
        <?php    
        }
        foreach ($hill_global['hill_display_blog_option'] as $key_hill_display_blog_option => $value_hill_display_blog_option) {
            if(get_theme_mod('hill_container_'.$key_hill_display_blog_option,true)==false){
        ?>
            .hill_index_content.grid_view .<?php echo $value_hill_display_blog_option['class']?>,.hill_index_content.full_list_view .<?php echo $value_hill_display_blog_option['class']?>{
                display:none;
            }
        <?php
            }
        }
        ?>
        
	</style>
	<?php
}
add_action( 'wp_head', 'hill_customize_css_blog');