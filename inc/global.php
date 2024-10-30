<?php
add_action('init','assign_global',1);
function assign_global(){
	
	global $hill_global;
	if(!isset($hill_global['color1'])){
		$hill_global['color1']='#0084d6';
	}
	if(!isset($hill_global['color2'])){
		$hill_global['color2']='#fff';
	}
	if(!isset($hill_global['color2'])){
		$hill_global['color3']='#eee';
	}
	//comman
	$hill_global['hill_link_color'] = $hill_global['color1'];
	$hill_global['hill_link_hover_color'] = $hill_global['color1'];
	//top
	$hill_global['hill_contact_info'] = '999999999999';
	$hill_global['hill_email_info'] = 'test@gmail.com';
	$hill_global['social_icon_section'] = 4;
	$hill_global['hill_social_icon_bg_color'] = $hill_global['color1'];
	$hill_global['hill_social_icon_bg_hover_color'] = $hill_global['color3'];
	$hill_global['hill_social_icon_color'] = $hill_global['color2'];
	$hill_global['hill_social_icon_hover_color'] = $hill_global['color1'];
	$hill_global['hill_top_bar_bg_color'] = $hill_global['color3'];
	$hill_global['hill_top_bar_text_color'] = $hill_global['color1'];
	$hill_global['display_social_top_icon'] = true;
	$hill_global['display_social_top_icon'] = true;
	$hill_global['hill_social_icon_list'] = array(
		"social_icon_facebook"=> array(
			"label"=>"Facebook",
			"icon"=>"fa fa-facebook"
		),
		"social_icon_twitter"=> array(
			"label"=>"Twitter",
			"icon"=>"fa fa-twitter"
		),
		"social_icon_pinterest"=> array(
			"label"=>"Pinterest",
			"icon"=>"fa fa-pinterest"
		),
		"social_icon_linkedin"=> array(
			"label"=>"Linkedin",
			"icon"=>"fa fa-linkedin"
		),
		"social_icon_youtube"=> array(
			"label"=>"Youtube",
			"icon"=>"fa fa-youtube"
		),
	);

	//header
	$hill_global['hill_header_layout'] = 'header2';
	$hill_global['hill_header_header_bg_color'] = $hill_global['color1'];
	$hill_global['hill_header_header_text_color'] = $hill_global['color3'];
	$hill_global['hill_header_header_nav_link_color'] = $hill_global['color2'];
	$hill_global['hill_header_header_nav_link_hover_color'] = $hill_global['color3'];
	//striky header
	$hill_global['hill_stricky_header'] = true;
	$hill_global['hill_mobile_stricky_header'] = true;
	//menu
	$hill_global['hill_header_menu_active_color'] = $hill_global['color3'];
	$hill_global['hill_header_desktop_submenu_bg_color'] = $hill_global['color3'];
	$hill_global['hill_header_desktop_submenu_text_color'] = $hill_global['color1'];
	//icon and button
	$hill_global['hill_display_search_icon'] = true;

	$hill_global['hill_display_cart_icon'] = true;
	$hill_global['hill_call_menu_btn'] = true;
	$hill_global['hill_call_menu_btn_title'] = 'Buy Now';
	$hill_global['hill_menu_btn_link'] = '#';
	//fonts
	
	$hill_global['hill_text_align'] = array(
						'left' => 'Left',
			        	'center' => 'Center',
			        	'right' => 'Right',
	);
	$hill_global['hill_vertical_align'] = array(
						'flex-start' => 'Top',
			        	'center' => 'Middel',
			        	'flex-end' => 'Bottom',
	);
	$hill_global['hill_body_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '15px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading1_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '30px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading2_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '26px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading3_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '22px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading4_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '15px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading5_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '12px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];
    $hill_global['hill_heading6_fontfamily'] = [
                'font-family'     => 'Roboto',
                'variant'         => 'regular',
                'font-style'      => 'normal',
                'color'           => $hill_global['color1'],
                'font-size'       => '10px',
                'line-height'     => '1.5',
                'letter-spacing'  => '0',
            ];

	//container layout
	$hill_global['hill_container_width_layout_dropdown'] = array(
				                                        'full_width' => 'Full Width',
				                                        'content_width' => 'Content Boxed',
				                                    );
	$hill_global['hill_container_width_layout'] = 'content_width';
	$hill_global['hill_container_width'] = 1100;

	//blog
	$hill_global['hill_display_blog_option'] = array(
												"description"=>array("class"=>"entry-content","text"=>"Excerpt"),
												"date"=>array("class"=>"posted-on","text"=>"Date"),
												"author"=>array("class"=>"byline","text"=>"Author"),
												"category"=>array("class"=>"cat-links","text"=>"Category"),
												"comments"=>array("class"=>"comments-link","text"=>"Comments"),
												"read_more_button"=>array("class"=>"read_btn","text"=>"Read More Button"),
												);
	$hill_global['hill_container_blog_layout'] = 'grid_view';
	$hill_global['hill_container_grid_view_col'] = '3';
	$hill_global['hill_container_grid_view_col_gap'] = 20;
	$hill_global['hill_excerpt_length'] = 20;
	//sidebar pos
	$hill_global['sidebar_position'] = 'right_sidebar';
	//button
	$hill_global['hill_button_bg_color'] = $hill_global['color1'];
	$hill_global['hill_button_bg_hover_color'] = $hill_global['color2'];
	$hill_global['hill_button_text_color'] = $hill_global['color2'];
	$hill_global['hill_button_texthover_color'] = $hill_global['color1'];
	$hill_global['hill_button_border_color'] = $hill_global['color2'];
	$hill_global['hill_button_border_hover_color'] = $hill_global['color1'];
	$hill_global['hill_borderwidth'] = '1';
	$hill_global['hill_button_border_radius'] = '5';
	$hill_global['hill_button_padding'] = '10px 15px';
	//scroll button
	$hill_global['hill_display_scroll_button'] = true;
	$hill_global['hill_scroll_button_bg_color'] = $hill_global['color1'];
	$hill_global['hill_icon_button_color'] = $hill_global['color2'];
	//footer
	$hill_global['hill_footer_bg_color'] = $hill_global['color1'];
	$hill_global['hill_footer_text_color'] = $hill_global['color2'];
	$hill_global['hill_footer_link_color'] = $hill_global['color2'];
	$hill_global['hill_footer_link_hover_color'] = $hill_global['color3'];
	$hill_global['hill_footer_customize']=false;
	$hill_global['hill_copyright_text'] = 'Proudly powered by WordPress | Theme: hill-tech by gravitymaster97';
	//breadcrumb
	$hill_global['hill_display_breadcrumb_section'] =true;
	$hill_global['hill_breadcrumb_bg_color'] = [
                'background-color'      => 'rgba(20,20,20,.8)',
                'background-image'      => '',
                'background-repeat'     => 'repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ];
	$hill_global['hill_breadcrumb_text_color'] =$hill_global['color2'];
	//banner section
	$hill_global['hill_banner_number_max'] =2;
	$hill_global['hill_banner_number'] = [
		[
			'hill_banner_image'=>'',
			'hill_banner_title'=>'Heading',
			'hill_banner_description'=>'Description',
			'hill_banner_button'=>'Button',
			'hill_banner_button_link'=>'#',
		],
	];
	$hill_global['hill_banner_text_align'] ='center';
	$hill_global['hill_banner_vertical_align'] ='center';
	$hill_global['hill_banner_heading_color'] =$hill_global['color2'];
	$hill_global['hill_banner_description_color'] =$hill_global['color2'];
	//about section
	$hill_global['hill_about_heading'] ='About';
	$hill_global['hill_about_sub_heading'] ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint';
	$hill_global['hill_about_title'] ='About Us';
	$hill_global['hill_about_sub_title'] ='About Us Sub Title';
	$hill_global['hill_about_description'] ='Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
	$hill_global['hill_about_bg_color'] =$hill_global['color1'];
	$hill_global['hill_about_text_color'] =$hill_global['color2'];
	//gallery
	$hill_global['hill_gallery_heading'] ='Gallery';
	$hill_global['hill_gallery_sub_heading'] ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint';
	$hill_global['hill_gallery_number_max'] =6;
	$hill_global['hill_gallery_number'] = [
		[
			'hill_gallery_image'=>'',
			'hill_gallery_title'=>'Engineering Accomplishments',
			'hill_gallery_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint',
			'hill_gallery_button_link'=>'#',
		],
		[
			'hill_gallery_image'=>'',
			'hill_gallery_title'=>'Engineering Accomplishments',
			'hill_gallery_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint',
			'hill_gallery_button_link'=>'#',
		],
		[
			'hill_gallery_image'=>'',
			'hill_gallery_title'=>'Engineering Accomplishments',
			'hill_gallery_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint',
			'hill_gallery_button_link'=>'#',
		],
	];
	$hill_global['hill_gallery_bg_color'] =$hill_global['color3'];
	$hill_global['hill_gallery_text_color'] =$hill_global['color1'];
	$hill_global['hill_gallery_per_number'] =3;
	//team
	$hill_global['social_array'] = array(
        'facebook'=>array('label'=>'Facebook','icon'=>'facebook'),
        'twitter'=>array('label'=>'Twitter','icon'=>'twitter'),
        'instagram'=>array('label'=>'Instagram','icon'=>'instagram'),
        'linkedin'=>array('label'=>'Linkedin','icon'=>'linkedin'),
    );
	$hill_global['hill_team_heading'] ='Our Team';
	$hill_global['hill_team_sub_heading'] ='Meet Our Exclusive Team Members';
	$hill_global['hill_team_number_max'] =4;
	$hill_global['hill_team_number'] = [
		[
			'hill_team_title'=>'Asle Jenny',
			'hill_team_description'=>'CEO, Co-Founder',
			'hill_team_button_link'=>'#',
		],
		[
			'hill_team_title'=>'Asle Jenny',
			'hill_team_description'=>'CEO, Co-Founder',
			'hill_team_button_link'=>'#',
		],
		[
			'hill_team_title'=>'Asle Jenny',
			'hill_team_description'=>'CEO, Co-Founder',
			'hill_team_button_link'=>'#',
		],
		[
			'hill_team_title'=>'Asle Jenny',
			'hill_team_description'=>'CEO, Co-Founder',
			'hill_team_button_link'=>'#',
		],
	];
	$hill_global['hill_team_text_color'] =$hill_global['color2'];
	$hill_global['hill_team_bg_color'] =$hill_global['color1'];
	$hill_global['hill_team_per_number'] =4;
	//service
	$hill_global['hill_service_heading'] ='Our Service';
	$hill_global['hill_service_sub_heading'] ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint';
	$hill_global['hill_service_number_max'] =3;
	$hill_global['hill_service_number'] = [
		[
			'hill_service_title'=>'Digital Marketing',
			'hill_service_description'=>'Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.',
			'hill_service_icon'=>'fa-desktop',
			'hill_service_button_link'=>'#',
		],
		[
			'hill_service_title'=>'Digital Marketing',
			'hill_service_description'=>'Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.',
			'hill_service_icon'=>'fa-desktop',
			'hill_service_button_link'=>'#',
		],
		[
			'hill_service_title'=>'Digital Marketing',
			'hill_service_description'=>'Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.',
			'hill_service_icon'=>'fa-desktop',
			'hill_service_button_link'=>'#',
		],
	];
	$hill_global['hill_service_bg_color'] =$hill_global['color2'];
	$hill_global['hill_service_text_color'] =$hill_global['color1'];
	$hill_global['hill_service_per_number'] =3;
	//gallery
	$hill_global['hill_tesimonial_heading'] ='Our Testimonial';
	$hill_global['hill_tesimonial_sub_heading'] ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint';
	$hill_global['hill_tesimonial_number_max'] =3;
	$hill_global['hill_tesimonial_number'] = [
		[
			'hill_tesimonial_image'=>'',
			'hill_tesimonial_title'=>'Robart Jason',
			'hill_tesimonial_designation'=>'Programmer',
			'hill_tesimonial_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
		],
		[
			'hill_tesimonial_image'=>'',
			'hill_tesimonial_title'=>'Robart Jason',
			'hill_tesimonial_designation'=>'Programmer',
			'hill_tesimonial_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
		],
		[
			'hill_tesimonial_image'=>'',
			'hill_tesimonial_title'=>'Robart Jason',
			'hill_tesimonial_designation'=>'Programmer',
			'hill_tesimonial_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
		],
		[
			'hill_tesimonial_image'=>'',
			'hill_tesimonial_title'=>'Robart Jason',
			'hill_tesimonial_designation'=>'Programmer',
			'hill_tesimonial_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
		],
	];
	$hill_global['hill_tesimonial_bg_color'] =$hill_global['color3'];
	$hill_global['hill_tesimonial_text_color'] =$hill_global['color1'];
	$hill_global['hill_tesimonial_per_number'] =2;
	//soponsors
	$hill_global['hill_sponsors_heading'] ='Our Testimonial';
	$hill_global['hill_sponsors_sub_heading'] ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint';
	$hill_global['hill_sponsors_number_max'] =4;
	$hill_global['hill_sponsors_number'] = [
		[
			'hill_sponsors_image'=>'',
			'hill_sponsors_link'=>'#'
		],
		[
			'hill_sponsors_image'=>'',
			'hill_sponsors_link'=>'#'
		],
		[
			'hill_sponsors_image'=>'',
			'hill_sponsors_link'=>'#'
		],
		[
			'hill_sponsors_image'=>'',
			'hill_sponsors_link'=>'#'
		],
	];
	$hill_global['hill_sponsors_bg_color'] =$hill_global['color1'];
	$hill_global['hill_sponsors_text_color'] =$hill_global['color3'];
	//default ordering
	$hill_global['hill_sortable_setting_default'] = ['banner','service','about','gallery','team','tesimonial','blog','sponsors'];
	//fade 
	$hill_global['hill_fade_duration']=1500;
}