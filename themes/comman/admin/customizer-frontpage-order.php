<?php
function hill_customize_page_order(  ) {
	global $hill_global;

	$section_args = [
        'title'       => 'Front Section Hide/Show and Order',
        'panel'       => 'hill_global_panel',
    ];
    new \Kirki\Section( 'hill_front_page_order', $section_args ); 
    new \Kirki\Field\Sortable(
        [
            'settings' => 'hill_sortable_setting',
            'label'    => 'Ordering and Hide/Show Section',
            'section'  => 'hill_front_page_order',
            'default'  => $hill_global['hill_sortable_setting_default'],
            'priority' => 10,
            'choices'  => [
                'banner' => 'Banner',
                'service' => 'Service',
                'about' => 'About',
                'gallery' => 'Gallery',
                'team' => 'Team',
                'tesimonial' => 'Tesimonial',
                'blog' => 'Blog',
                'sponsors'=>'Sponsors'
            ],
        ]
    );        
}
add_action( 'init', 'hill_customize_page_order',3 );
