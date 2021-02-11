<?php

return array(
	'id'          => 'ozy_logipro_meta_page',
	'types'       => array('page'),
	'title'       => esc_attr__('Page Options', 'logipro'),
	'priority'    => 'high',
	'template'    => array(
		/*array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_transparent_menu',
			'label' => esc_attr__('Use Alternate Menu', 'logipro'),
			'description' => esc_attr__('Check this option to use second form of menu layout even on scroll event.', 'logipro'),
			'default' => '1'
		),*/
		array(
			'type' => 'select',
			'name' => 'ozy_logipro_meta_page_custom_menu',
			'label' => esc_attr__('Custom Menu', 'logipro'),
			'description' => esc_attr__('You can select a custom menu for this page.', 'logipro'),
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value' => 'vp_bind_ozy_logipro_list_wp_menus',
					),
				),
			),
			'default' => '-1',
		),
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_side_navigation',
			'label' => esc_attr__('Display Side Navigation', 'logipro'),
			'description' => esc_attr__('Requires rows with Row ID and Row Caption set.', 'logipro'),
			'default' => '-1'
		),			
		array(
			'type' => 'select',
			'name' => 'ozy_logipro_meta_page_revolution_slider',
			'label' => esc_attr__('Revolution Header Slider', 'logipro'),
			'description' => esc_attr__('You can select a header slider if you have installed and activated Revolution Slider which comes bundled with your theme.', 'logipro'),
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value' => 'vp_bind_ozy_logipro_revolution_slider',
					),
				),
			),
			'default' => '{{first}}',
		),
		array(
			'type' => 'select',
			'name' => 'ozy_logipro_meta_page_master_slider',
			'label' => esc_attr__('Master Header Slider', 'logipro'),
			'description' => esc_attr__('You can select a header slider if you have installed and activated Master Slider which comes bundled with your theme.', 'logipro'),
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value' => 'vp_bind_ozy_logipro_master_slider',
					),
				),
			),
			'default' => '{{first}}',
		),		


		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_footer_slider',
			'label' => esc_attr__('Use Footer Slider', 'logipro'),
			'description' => esc_attr__('You can use footer slider with header slider too.', 'logipro'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'ozy_logipro_meta_page_use_footer_slider_group',
			'title'     => esc_attr__('Footer Slider', 'logipro'),
			'dependency' => array(
				'field'    => 'ozy_logipro_meta_page_use_footer_slider',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'select',
					'name' => 'ozy_logipro_meta_page_revolution_footer_slider',
					'label' => esc_attr__('Revolution Footer Slider', 'logipro'),
					'description' => esc_attr__('You can select a footer slider if you have installed and activated Revolution Slider which comes bundled with your theme.', 'logipro'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value' => 'vp_bind_ozy_logipro_revolution_slider',
							),
						),
					),
					'default' => '{{first}}',
				),
				array(
					'type' => 'select',
					'name' => 'ozy_logipro_meta_page_master_footer_slider',
					'label' => esc_attr__('Master Footer Slider', 'logipro'),
					'description' => esc_attr__('You can select a footer slider if you have installed and activated Master Slider which comes bundled with your theme.', 'logipro'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value' => 'vp_bind_ozy_logipro_master_slider',
							),
						),
					),
					'default' => '{{first}}',
				),				
			),
		),

		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_no_menu_space',
			'label' => esc_attr__('No Menu Space', 'logipro'),
			'description' => esc_attr__('If this option checked, your page content top will set to "0", not the bottom point of primary menu.', 'logipro'),
		),

		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_disable_loader',
			'label' => esc_attr__('Disable Loading Screen', 'logipro'),
			'description' => esc_attr__('Loading screen and page transition on this page will be disable.', 'logipro'),
		),
		array(
			'type' => 'radiobutton',
			'name' => 'ozy_logipro_meta_page_hide_footer_widget_bar',
			'label' => esc_attr__('Footer Bars Visiblity', 'logipro'),
			'description' => esc_attr__('By this option you can hide footer bars as you wish.', 'logipro'),
			'items' => array(
				array(
					'value' => '-1',
					'label' => esc_attr__('All Visible', 'logipro'),
				),
				array(
					'value' => '1',
					'label' => esc_attr__('Hide Widget Bar', 'logipro'),
				),
				array(
					'value' => '2',
					'label' => esc_attr__('Hide Widget Bar and Footer', 'logipro'),
				),
			),
			'default' => array(
				'-1',
			),
		),
		


		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_hide_title',
			'label' => esc_attr__('Hide Page Title', 'logipro'),
			'description' => esc_attr__('Page title will not be shown on the page.', 'logipro'),
		),
		
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_no_content_padding',
			'label' => esc_attr__('No content top padding', 'logipro'),
			'description' => esc_attr__('Check this option to disable the padding top of your content (after page title).', 'logipro'),
		),		
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_custom_title',
			'label' => esc_attr__('Custom Header/Title', 'logipro'),
			'description' => esc_attr__('There are several options to help you customize your page header.', 'logipro'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'ozy_logipro_meta_page_use_custom_title_group',
			'title'     => esc_attr__('Custom Header/Title Options', 'logipro'),
			'dependency' => array(
				'field'    => 'ozy_logipro_meta_page_use_custom_title',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(	
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_custom_title_position',
					'label' => esc_attr__('Title Position', 'logipro'),
					'items' => array(
						array(
							'value' => 'left',
							'label' => esc_attr__('Left', 'logipro'),
						),
						array(
							'value' => 'right',
							'label' => esc_attr__('Right', 'logipro'),
						),
						array(
							'value' => 'center',
							'label' => esc_attr__('Center', 'logipro'),
						),
					),
					'default' => array(
						'center',
					),
				),			
				array(
					'type'      => 'textbox',
					'name'      => 'ozy_logipro_meta_page_custom_title',
					'label'     => esc_attr__('Page Title', 'logipro'),
				),
				array(
					'type'      => 'color',
					'name'      => 'ozy_logipro_meta_page_custom_title_color',
					'label'     => esc_attr__('Title Color', 'logipro'),
					'default' => '',
					'format' => 'rgba'
				),				
				array(
					'type'      => 'textbox',
					'name'      => 'ozy_logipro_meta_page_custom_sub_title',
					'label'     => esc_attr__('Sub Title', 'logipro'),
				),
				array(
					'type'      => 'color',
					'name'      => 'ozy_logipro_meta_page_custom_sub_title_color',
					'label'     => esc_attr__('Sub Title Color', 'logipro'),
					'default' => '',
					'format' => 'rgba'
				),				
				array(
					'type'      => 'color',
					'name'      => 'ozy_logipro_meta_page_custom_title_bgcolor',
					'label'     => esc_attr__('Header Background Color', 'logipro'),
					'default' => '',
					'format' => 'rgba'
				),				
				array(
					'type'      => 'upload',
					'name'      => 'ozy_logipro_meta_page_custom_title_bg',
					'label'     => esc_attr__('Header Image', 'logipro'),
					'description'=> esc_attr__('Please use images like 1600px, 2000px wide and have a minimum height like 475px for good results.', 'logipro'),
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_custom_title_bg_x_position',
					'label' => esc_attr__('Background X-Position', 'logipro'),
					'items' => array(
						array(
							'value' => 'left',
							'label' => esc_attr__('Left', 'logipro'),
						),
						array(
							'value' => 'right',
							'label' => esc_attr__('Right', 'logipro'),
						),
						array(
							'value' => 'center',
							'label' => esc_attr__('Center', 'logipro'),
						),
						array(
							'value' => 'top',
							'label' => esc_attr__('Top', 'logipro'),
						),
						array(
							'value' => 'bottom',
							'label' => esc_attr__('Bottom', 'logipro'),
						),
					),
					'default' => array(
						'left',
					),
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_custom_title_bg_y_position',
					'label' => esc_attr__('Background Y-Position', 'logipro'),
					'items' => array(
						array(
							'value' => 'left',
							'label' => esc_attr__('Left', 'logipro'),
						),
						array(
							'value' => 'right',
							'label' => esc_attr__('Right', 'logipro'),
						),
						array(
							'value' => 'center',
							'label' => esc_attr__('Center', 'logipro'),
						),
						array(
							'value' => 'top',
							'label' => esc_attr__('Top', 'logipro'),
						),
						array(
							'value' => 'bottom',
							'label' => esc_attr__('Bottom', 'logipro'),
						),
					),
					'default' => array(
						'top',
					),
				),				
				array(
					'type'      => 'textbox',
					'name'      => 'ozy_logipro_meta_page_custom_title_height',
					'label'     => esc_attr__('Header Height', 'logipro'),
					'description'=> esc_attr__('Height of your header in pixels? Don\'t include "px" in the string. e.g. 400', 'logipro'),
					'default'	=> 170,
					'validation' => 'numeric'
				),				
			),
		),
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_hide_content',
			'label' => esc_attr__('Hide Page Content', 'logipro'),
			'description' => esc_attr__('Page content will not be shown. Supposed to use with Video backgrounds or Fullscreen sliders.', 'logipro'),
		),		
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_sidebar',
			'label' => esc_attr__('Use Custom Sidebar', 'logipro'),
			'description' => esc_attr__('You can use custom sidebar individually.', 'logipro'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'ozy_logipro_meta_page_sidebar_group',
			'title'     => esc_attr__('Custom Sidebar', 'logipro'),
			'dependency' => array(
				'field'    => 'ozy_logipro_meta_page_use_sidebar',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'radioimage',
					'name' => 'ozy_logipro_meta_page_sidebar_position',
					'label' => esc_attr__('Sidebar Position', 'logipro'),
					'description' => esc_attr__('Select one of available header type.', 'logipro'),
					'item_max_width' => '86',
					'items' => array(
						array(
							'value' => 'full',
							'label' => esc_attr__('No Sidebar', 'logipro'),
							'img' => LOGIPRO_OZY_BASE_URL . 'admin/images/full-width.png',
						),
						array(
							'value' => 'left',
							'label' => esc_attr__('Left Sidebar', 'logipro'),
							'img' => LOGIPRO_OZY_BASE_URL . 'admin/images/left-sidebar.png',
						),
						array(
							'value' => 'right',
							'label' => esc_attr__('Right Sidebar', 'logipro'),
							'img' => LOGIPRO_OZY_BASE_URL . 'admin/images/right-sidebar.png',
						)
					),
					'default' => '{{first}}',
				),			
				array(
					'type' => 'select',
					'name' => 'ozy_logipro_meta_page_sidebar',
					'label' => esc_attr__('Sidebar', 'logipro'),
					'items' => array(
						'data' => array(
							array(
								'source' => 'function',
								'value' => 'vp_bind_ozy_logipro_sidebars',
							),
						),
					),
				),											
			),
		),
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_custom_style',
			'label' => esc_attr__('Use Custom Style', 'logipro'),
			'description' => esc_attr__('Options to customize your page individually.', 'logipro'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'ozy_logipro_meta_page_layout_group',
			'title'     => esc_attr__('Layout Styling', 'logipro'),
			'dependency' => array(
				'field'    => 'ozy_logipro_meta_page_use_custom_style',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(					
				array(
					'type' => 'color',
					'name' => 'ozy_logipro_meta_page_layout_ascend_background',
					'label' => esc_attr__('Background Color', 'logipro'),
					'description' => esc_attr__('This option will affect, main wrapper\'s background color.', 'logipro'),
					'default' => 'rgba(255,255,255,1)',
					'format' => 'rgba',
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_layout_transparent_background',
					'label' => esc_attr__('Transparent Content Background', 'logipro'),
					'description' => esc_attr__('If you want, you can use transparent background for your content.', 'logipro'),
					'default' => '0',
				)														
			),
		),
				
		array(
			'type' => 'toggle',
			'name' => 'ozy_logipro_meta_page_use_custom_background',
			'label' => esc_attr__('Use Custom Background', 'logipro'),
			'description' => esc_attr__('Lots of options to customize your page background individually.', 'logipro'),
		),		
		array(
			'type'      => 'group',
			'repeating' => false,
			'name'      => 'ozy_logipro_meta_page_background_group',
			'title'     => esc_attr__('Background Styling', 'logipro'),
			'dependency' => array(
				'field'    => 'ozy_logipro_meta_page_use_custom_background',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(					
				array(
					'type' => 'upload',
					'name' => 'ozy_logipro_meta_page_background_image',
					'label' => esc_attr__('Custom Background Image', 'logipro'),
					'description' => esc_attr__('Upload or choose custom page background image.', 'logipro'),
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_background_image_size',
					'label' => esc_attr__('Background Image Size', 'logipro'),
					'description' => esc_attr__('Only available on browsers which supports CSS3.', 'logipro'),
					'items' => array(
						array(
							'value' => '',
							'label' => esc_attr__('-not set-', 'logipro'),
						),			
						array(
							'value' => 'cover',
							'label' => esc_attr__('cover', 'logipro'),
						),
						array(
							'value' => 'contain',
							'label' => esc_attr__('contain', 'logipro'),
						)
					),
					'default' => '{{first}}',
				),

				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_background_image_pos_x',
					'label' => esc_attr__('Background Position X', 'logipro'),
					'items' => array(
						array(
							'value' => 'left',
							'label' => esc_attr__('left', 'logipro'),
						),			
						array(
							'value' => 'center',
							'label' => esc_attr__('center', 'logipro'),
						),
						array(
							'value' => 'right',
							'label' => esc_attr__('right', 'logipro'),
						)
					),
					'default' => 'left',
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_background_image_pos_y',
					'label' => esc_attr__('Background Position Y', 'logipro'),
					'items' => array(
						array(
							'value' => 'top',
							'label' => esc_attr__('top', 'logipro'),
						),			
						array(
							'value' => 'center',
							'label' => esc_attr__('center', 'logipro'),
						),
						array(
							'value' => 'bottom',
							'label' => esc_attr__('bottom', 'logipro'),
						)
					),
					'default' => 'top',
				),				
				
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_background_image_repeat',
					'label' => esc_attr__('Background Image Repeat', 'logipro'),
					'items' => array(
						array(
							'value' => 'inherit',
							'label' => esc_attr__('inherit', 'logipro'),
						),			
						array(
							'value' => 'no-repeat',
							'label' => esc_attr__('no-repeat', 'logipro'),
						),
						array(
							'value' => 'repeat',
							'label' => esc_attr__('repeat', 'logipro'),
						),
						array(
							'value' => 'repeat-x',
							'label' => esc_attr__('repeat-x', 'logipro'),
						),
						array(
							'value' => 'repeat-y',
							'label' => esc_attr__('repeat-y', 'logipro'),
						)
					),
					'default' => '{{first}}',
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_page_background_image_attachment',
					'label' => esc_attr__('Background Image Attachment', 'logipro'),
					'items' => array(
						array(
							'value' => '',
							'label' => esc_attr__('-not set-', 'logipro'),
						),			
						array(
							'value' => 'fixed',
							'label' => esc_attr__('fixed', 'logipro'),
						),
						array(
							'value' => 'scroll',
							'label' => esc_attr__('scroll', 'logipro'),
						),
						array(
							'value' => 'local',
							'label' => esc_attr__('local', 'logipro')
						)
					),
					'default' => '{{first}}',
				),										
				array(
					'type' => 'color',
					'name' => 'ozy_logipro_meta_page_background_color',
					'label' => esc_attr__('Background Color', 'logipro'),
					'description' => esc_attr__('This option will affect only page background.', 'logipro'),
					'default' => '#ffffff',
					'format' => 'hex',
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_background_use_gmap',
					'label' => esc_attr__('Use Google Map', 'logipro'),
					'description' => esc_attr__('Instead of using a static background, you can use a Google Map as background.', 'logipro'),
				),					
				array(
					'type'      => 'group',
					'repeating' => false,
					'name'      => 'ozy_logipro_meta_page_background_gmap_group',
					'title'     => esc_attr__('Google Map', 'logipro'),
					'dependency' => array(
						'field'    => 'ozy_logipro_meta_page_background_use_gmap',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(					
						array(
							'type' => 'textbox',
							'name' => 'ozy_logipro_meta_page_background_gmap_address',
							'label' => esc_attr__('iFrame Src', 'logipro'),
							'description' => esc_attr__('Enter src attribute of your Google Map iFrame.', 'logipro'),
						)												
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_background_use_slider',
					'label' => esc_attr__('Use Background Slider', 'logipro'),
					'description' => esc_attr__('Instead of using a static background, you can use background image slider.', 'logipro'),
				),					
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable' => true,
					'name'      => 'ozy_logipro_meta_page_background_slider_group',
					'title'     => esc_attr__('Slider Image', 'logipro'),
					'dependency' => array(
						'field'    => 'ozy_logipro_meta_page_background_use_slider',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(					
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_slider_image',
							'label' => esc_attr__('Slider Image', 'logipro'),
							'description' => esc_attr__('Upload or choose custom background image.', 'logipro'),
						)												
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_background_use_video_self',
					'label' => esc_attr__('Use Self Hosted Video', 'logipro'),
					'description' => esc_attr__('Instead of using a static background, you can use self hosted video.', 'logipro'),
				),					
				array(
					'type'      => 'group',
					'repeating' => false,
					'sortable' => false,
					'name'      => 'ozy_logipro_meta_page_background_video_self_group',
					'title'     => esc_attr__('Self Hosted Video', 'logipro'),
					'dependency' => array(
						'field'    => 'ozy_logipro_meta_page_background_use_video_self',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(					
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_self_image',
							'label' => esc_attr__('Poster Image', 'logipro'),
							'description' => esc_attr__('Upload or choose a poster image.', 'logipro'),
						),
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_self_mp4',
							'label' => esc_attr__('MP4 File', 'logipro'),
							'description' => esc_attr__('Upload or choose a MP4 file.', 'logipro'),
						),
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_self_webm',
							'label' => esc_attr__('WEBM File', 'logipro'),
							'description' => esc_attr__('Upload or choose a WEBM file.', 'logipro'),
						),
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_self_ogv',
							'label' => esc_attr__('OGV File', 'logipro'),
							'description' => esc_attr__('Upload or choose an OGV file.', 'logipro'),
						)
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_background_use_video_youtube',
					'label' => esc_attr__('Use YouTube Video', 'logipro'),
					'description' => esc_attr__('Instead of using a static background, you can use YouTube video.', 'logipro'),
				),					
				array(
					'type'      => 'group',
					'repeating' => false,
					'sortable' => false,
					'name'      => 'ozy_logipro_meta_page_background_video_youtube_group',
					'title'     => esc_attr__('YouTube Video', 'logipro'),
					'dependency' => array(
						'field'    => 'ozy_logipro_meta_page_background_use_video_youtube',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(					
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_youtube_image',
							'label' => esc_attr__('Poster Image', 'logipro'),
							'description' => esc_attr__('Upload or choose a poster image.', 'logipro'),
						),
						array(
							'type' => 'textbox',
							'name' => 'ozy_logipro_meta_page_background_video_youtube_id',
							'label' => esc_attr__('YouTube Video ID', 'logipro'),
							'description' => esc_attr__('Enter YouTube video ID. http://www.youtube.com/watch?v=<span style="color:red;">mYKA-VokOtA</span> text marked with red is the ID you have to be looking for.', 'logipro'),
						)
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'ozy_logipro_meta_page_background_use_video_vimeo',
					'label' => esc_attr__('Use Vimeo Video', 'logipro'),
					'description' => esc_attr__('Instead of using a static background, you can use Vimeo video.', 'logipro'),
				),					
				array(
					'type'      => 'group',
					'repeating' => false,
					'sortable' => false,
					'name'      => 'ozy_logipro_meta_page_background_video_vimeo_group',
					'title'     => esc_attr__('Vimeo Video', 'logipro'),
					'dependency' => array(
						'field'    => 'ozy_logipro_meta_page_background_use_video_vimeo',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(					
						array(
							'type' => 'upload',
							'name' => 'ozy_logipro_meta_page_background_video_vimeo_image',
							'label' => esc_attr__('Poster Image', 'logipro'),
							'description' => esc_attr__('Upload or choose a poster image.', 'logipro'),
						),
						array(
							'type' => 'textbox',
							'name' => 'ozy_logipro_meta_page_background_video_vimeo_id',
							'label' => esc_attr__('Vimeo Video ID', 'logipro'),
							'description' => esc_attr__('Enter Vimeo video ID. http://vimeo.com/<span style="color:red;">71964690</span> text marked with red is the ID you have to be looking for.', 'logipro'),
						)
					),
				)
			),
		),
		array(
			'type' => 'radiobutton',
			'name' => 'ozy_logipro_meta_page_page_model',
			'label' => esc_attr__('Default Page Model', 'logipro'),
			'items' => array(
				array(
					'value' => 'generic',
					'label' => esc_attr__('Use From Theme Options', 'logipro'),
				),			
				array(
					'value' => 'boxed',
					'label' => esc_attr__('Boxed', 'logipro'),
				),
				array(
					'value' => 'full',
					'label' => esc_attr__('Full', 'logipro'),
				),
			),
			'default' => array(
				'{{first}}',
			),
		)				
	),	
);

/**
 * EOF
 */