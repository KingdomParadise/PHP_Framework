<?php
/**
* Layout Options
*/

/* Primary Menu / Logo */
Kirki::add_panel( 'ozy_layout_options_panel', array(
    'priority'    => 99,
    'title'       => esc_attr__( 'Layout Options', 'logipro' ),
    'description' => esc_attr__( 'Customize menu, logo, footer, content, page and more options here.', 'logipro' ),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio',
	'settings'    => 'ozy_logipro_primary_menu_type',
	'label'       => esc_attr__( 'Menu Type', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => 'classic',
	'choices'     => array(
		'dropdown'  => esc_attr__('Dropdown', 'logipro'),
		'classic'  => esc_attr__('Classic', 'logipro')
	),	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio',
	'settings'    => 'ozy_logipro_primary_menu_align',
	'label'       => esc_attr__( 'Menu Align', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => 'right',
	'choices'     => array(
		'right'  => esc_attr__('Right', 'logipro'),
		'left'  => esc_attr__('Left', 'logipro')
	),
	'active_callback'    => array(
		array(
			'setting'  => 'ozy_logipro_primary_menu_type',
			'operator' => '==',
			'value'    => 'classic',
		),
	)	
) );

Kirki::add_section( 'ozy_layout_options_section_primary_menu', array(
    'title'          => esc_attr__( 'Primary Menu / Logo', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'slider',
	'settings'    => 'ozy_logipro_primary_menu_height',
	'label'       => esc_attr__( 'Menu / Logo Height', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'description' => esc_attr__( 'Set this value to fit at least same as your logo height for perfect results', 'logipro'),
	'priority'    => 10,
	'default'     => 130,
	'choices'     => array(
		'min'  => '90',
		'max'  => '240',
		'step' => '1',
	),	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_use_custom_logo_separator',
	'label'       => '',
	'section'     => 'ozy_layout_options_section_primary_menu',
	'default'     => '<hr/>',
	'priority'    => 10,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio',
	'settings'    => 'ozy_logipro_primary_menu_contact_info',
	'label'       => esc_attr__( 'Menu Side Contact Info', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => '-1',
	'choices'     => array(
		'1'  => esc_attr__('Show', 'logipro'),
		'-1'  => esc_attr__('Hide', 'logipro')
	),	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_primary_menu_contact_info_title',
	'label'       => esc_attr__( 'Menu Side Contact Info Title', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => '+1-702-894-8177',
	'active_callback'    => array(
		array(
			'setting'  => 'ozy_logipro_primary_menu_contact_info',
			'operator' => '==',
			'value'    => '1',
		),
	)	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_primary_menu_contact_info_sub_title',
	'label'       => esc_attr__( 'Menu Side Contact Info Sub Title', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => 'info@logiprowp.com',
	'active_callback'    => array(
		array(
			'setting'  => 'ozy_logipro_primary_menu_contact_info',
			'operator' => '==',
			'value'    => '1',
		),
	)	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_use_custom_logo_separator1',
	'label'       => '',
	'section'     => 'ozy_layout_options_section_primary_menu',
	'default'     => '<hr/>',
	'priority'    => 10,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio',
	'settings'    => 'ozy_logipro_primary_menu_search',
	'label'       => esc_attr__( 'Search Button / Box', 'logipro' ),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => '1',
	'choices'     => array(
		'1'  => esc_attr__('On', 'logipro'),
		'-1'  => esc_attr__('Off', 'logipro')
	),	
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_use_custom_logo_separator2',
	'label'       => '',
	'section'     => 'ozy_layout_options_section_primary_menu',
	'default'     => '<hr/>',
	'priority'    => 10,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_use_custom_logo',
	'label'       => esc_attr__( 'Use Custom Logo', 'logipro' ),
	'description' => esc_attr__('Please upload custom logo images for your site, one for regular one for retina screens which mighy be 2x larger', 'logipro'),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_custom_logo',
	'label'       => esc_attr__( 'Custom Logo', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom logo image.', 'logipro'),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'default'     => '',
	'priority'    => 10,
	'default'	=> LOGIPRO_OZY_BASE_URL . 'images/logo.png',
	'active_callback' => 'ozy_logipro_admin_check_if_custom_logo_is_on'
) );

function superminimal_customizer_live_preview() {
	wp_enqueue_script( 'superminimal_css_preview', LOGIPRO_OZY_BASE_URL . '/scripts/admin/customizer.js', array( 'customize-preview', 'jquery' ) );	
}
add_action( 'customize_preview_init', 'superminimal_customizer_live_preview' );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_custom_logo_retina',
	'label'       => esc_attr__( 'Custom Logo Retina', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom 2x bigger logo.', 'logipro'),
	'section'     => 'ozy_layout_options_section_primary_menu',
	'default'     => '',
	'priority'    => 10,
	'default'	=> LOGIPRO_OZY_BASE_URL . 'images/logo@2x.png',
	'active_callback' => 'ozy_logipro_admin_check_if_custom_logo_is_on'
) );

function ozy_logipro_admin_check_if_custom_logo_is_on() {
	return logipro_ozy_get_theme_mod('use_custom_logo') ? true : false;
}

/* Footer */

Kirki::add_section( 'ozy_layout_options_section_footer', array(
    'title'          => esc_attr__( 'Footer', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_section_footer_copyright_text',
	'label'       => esc_attr__( 'Footer Text', 'logipro' ),
	'description' => esc_attr__( 'Please enter your text here.', 'logipro'),	
	'section'     => 'title_tagline',
	'default'     => '',
	'priority'    => 10,
	'default'	=> esc_attr__( '&copy; Copyright 2021 - LogiPro WordPress Theme', 'logipro'),
	'transport'	=> 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => '#footer-copyright>span',
			'function' => 'html'
		),
	),
) );

if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE")){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
	if(!empty($languages)){
		foreach($languages as $l){
			if($l['language_code'] != 'en') {

				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'text',
					'settings'    => 'ozy_logipro_section_footer_copyright_text' . $l['language_code'],
					'label'       => esc_attr__( 'Footer Text', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'description' => esc_attr__( 'Please enter your text here.', 'logipro'),	
					'section'     => 'title_tagline',
					'default'     => '',
					'priority'    => 10,
					'default'	=> esc_attr__( '&copy; Copyright 2021 - LogiPro WordPress Theme', 'logipro'),
					'transport'	=> 'postMessage',
					'js_vars'     => array(
						array(
							'element'  => '#footer-copyright>span',
							'function' => 'html'
						),
					),
				) );
			}
		}
	}
}

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_section_footer_social_icons',
	'label'       => esc_attr__( 'Show Social Icons?', 'logipro' ),
	'description' => esc_attr__( 'Set visibility options of footer social icon list.', 'logipro'),
	'section'     => 'ozy_layout_options_section_footer',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_section_footer_our_partners',
	'label'       => esc_attr__( 'Show Our Partners Slider?', 'logipro' ),
	'description' => esc_attr__( 'Set visibility options of footer our partners slider.', 'logipro'),
	'section'     => 'ozy_layout_options_section_footer',
	'priority'    => 10,
	'default'     => '0',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'repeater',
	'settings'    => 'ozy_logipro_section_footer_clients',
	'label'       => esc_attr__( 'Our Partners', 'logipro' ),
	'description' => esc_attr__( 'Upload images to build a carousel in the footer. For best results make sure all images height set to 100px.', 'logipro'),
	'section'     => 'ozy_layout_options_section_footer',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Carousel Image', 'logipro' ),
	),	
	'fields' => array(
		'clients_carousel_image' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Image', 'logipro' ),
			'description' => esc_attr__( 'Please upload / select an image for your carousel', 'logipro' ),
			'default'     => '',
		)
	)	
) );

/* Content Page Post */

Kirki::add_section( 'ozy_logipro_section_content_page_post', array(
    'title'          => esc_attr__( 'Content / Page / Post', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_page_pointers_separator',
	'label'       => '',
	'section'     => 'ozy_logipro_section_content_page_post',
	'default'     => '<h3>' . esc_attr__( 'CUSTOM PAGE POINTERS', 'logipro' ) . '</h3><hr/>',
	'priority'    => 10,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_page_404_page_id',
	'label'       => esc_attr__( '404 Page', 'logipro' ),
	'description' => esc_attr__( 'Select a page to use as custom 404 page.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
	'choices'	  => vp_bind_ozy_logipro_pages_kirki(),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_page_blog_page_id',
	'label'       => esc_attr__( 'Blog Page', 'logipro' ),
	'description' => esc_attr__( 'Select a page to use as custom Blog page.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
	'choices'	  => vp_bind_ozy_logipro_pages_kirki(),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_page_pageoptions_separator',
	'label'       => '',
	'section'     => 'ozy_logipro_section_content_page_post',
	'default'     => '<h3>' . esc_attr__( 'PAGE', 'logipro' ) . '</h3><hr/>' . wp_kses(__('To create a dynamic sidebar, first make sure "LogiPro Theme Essentials" plugins installed and activated, then please open <a href="edit.php?post_type=ozy_sidebars">Sidebars</a> section.', 'logipro'), array('a' => array('href' => array()))),
	'priority'    => 10,
) );


Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio-image',
	'settings'    => 'ozy_logipro_page_page_sidebar_position',
	'label'       => esc_attr__( 'Default Sidebar Position', 'logipro' ),
	'description' => esc_attr__( 'Select one of available sidebar position.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => 'full',
	'choices'	  => array('full' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/1c.png',
						'left' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/2cl.png',
						'right' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/2cr.png')
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_page_page_sidebar_id',
	'label'       => esc_attr__( 'Default Sidebar', 'logipro' ),
	'description' => esc_attr__( 'This option could be overriden individually by Page Options panel.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
	'choices'	  => vp_bind_ozy_logipro_sidebars_kirki(),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_page_page_comment',
	'label'       => esc_attr__( 'Comments Section', 'logipro' ),
	'description' => esc_attr__('Enable / Disable comment section on the pages', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '0',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_page_page_author',
	'label'       => esc_attr__( 'Author Section', 'logipro' ),
	'description' => esc_attr__('Enable / Disable author section on the pages', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '0',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_page_blogoptions_separator',
	'label'       => '',
	'section'     => 'ozy_logipro_section_content_page_post',
	'default'     => '<h3>' . esc_attr__( 'BLOG', 'logipro' ) . '</h3><hr/>' . wp_kses(__('To create a dynamic sidebar, first make sure "LogiPro Theme Essentials" plugins installed and activated, then please open <a href="edit.php?post_type=ozy_sidebars">Sidebars</a> section.', 'logipro'), array('a' => array('href' => array()))),
	'priority'    => 10,
) );


Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio-image',
	'settings'    => 'ozy_logipro_page_blog_sidebar_position',
	'label'       => esc_attr__( 'Default Sidebar Position', 'logipro' ),
	'description' => esc_attr__( 'Select one of available sidebar position.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => 'full',
	'choices'	  => array('full' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/1c.png',
						'left' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/2cl.png',
						'right' => LOGIPRO_OZY_BASE_URL . 'framework/kirki/assets/images/2cr.png')
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_page_blog_sidebar_id',
	'label'       => esc_attr__( 'Default Sidebar', 'logipro' ),
	'description' => esc_attr__( 'This option could be overriden individually by Page Options panel.', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
	'choices'	  => vp_bind_ozy_logipro_sidebars_kirki(),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_page_blog_comment',
	'label'       => esc_attr__( 'Comments Section', 'logipro' ),
	'description' => esc_attr__('Enable / Disable comment section on the pages', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_page_blog_author',
	'label'       => esc_attr__( 'Author Section', 'logipro' ),
	'description' => esc_attr__('Enable / Disable author section on the pages', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_page_blog_share',
	'label'       => esc_attr__( 'Share Buttons', 'logipro' ),
	'description' => esc_attr__('Enable / Disable share buttons for post', 'logipro'),
	'section'     => 'ozy_logipro_section_content_page_post',
	'priority'    => 10,
	'default'     => '1',
) );

/* Miscellaneous */

Kirki::add_section( 'ozy_logipro_section_miscellaneous', array(
    'title'          => esc_attr__( 'Miscellaneous', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'custom',
	'settings'    => 'ozy_logipro_page_miscoptions_separator',
	'label'       => '',
	'section'     => 'ozy_logipro_section_miscellaneous',
	'default'     => '<h3>' . esc_attr__( 'FANCY BOX (LIGHTBOX)', 'logipro' ) . '</h3><hr/>',
	'priority'    => 10,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_fancbox_media',
	'label'       => esc_attr__( 'Video Support', 'logipro' ),
	'description' => esc_attr__('By enabling this option Fancybox will start to support popular media links.', 'logipro'),
	'section'     => 'ozy_logipro_section_miscellaneous',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_fancbox_thumbnail',
	'label'       => esc_attr__( 'Thumbnail', 'logipro' ),
	'description' => esc_attr__('Enable this option to show thumnails under your Fancybox window.', 'logipro'),
	'section'     => 'ozy_logipro_section_miscellaneous',
	'priority'    => 10,
	'default'     => '0',
) );

/* Countdown */

Kirki::add_section( 'ozy_logipro_section_countdown', array(
    'title'          => esc_attr__( 'Countdown Page', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_countdown_year',
	'label'       => esc_attr__( 'End Year', 'logipro' ),
	'description' => esc_attr__( 'Enter the Year of the date counter will count to.', 'logipro'),
	'section'     => 'ozy_logipro_section_countdown',
	'priority'    => 10,
	'default'     => date('Y', time()),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_countdown_month',
	'label'       => esc_attr__( 'End Month', 'logipro' ),
	'description' => esc_attr__( 'Enter the Month of the date counter will count to.', 'logipro'),
	'section'     => 'ozy_logipro_section_countdown',
	'priority'    => 10,
	'default'     => date('m', time()),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_countdown_day',
	'label'       => esc_attr__( 'End Day', 'logipro' ),
	'description' => esc_attr__( 'Enter the Day of the date counter will count to.', 'logipro'),
	'section'     => 'ozy_logipro_section_countdown',
	'priority'    => 10,
	'default'     => '15',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_countdown_hour',
	'label'       => esc_attr__( 'End Hour', 'logipro' ),
	'description' => esc_attr__( 'Enter the Hour of the date counter will count to. Use 24 hour format.', 'logipro'),
	'section'     => 'ozy_logipro_section_countdown',
	'priority'    => 10,
	'default'     => '12',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_countdown_minute',
	'label'       => esc_attr__( 'End Minute', 'logipro' ),
	'description' => esc_attr__( 'Enter the Minute of the date counter will count to.', 'logipro'),
	'section'     => 'ozy_logipro_section_countdown',
	'priority'    => 10,
	'default'     => '12',
) );

/* Request A Rate */

Kirki::add_section( 'ozy_logipro_section_request_a_rate', array(
    'title'          => esc_attr__( 'Request A Rate', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_request_a_rate_form',
	'label'       => esc_attr__( 'Show Request A Rate form?', 'logipro' ),
	'description' => esc_attr__('By enabling this option you can activate Request A Rate form.', 'logipro'),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => '-1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_request_a_rate_menu_title',
	'label'       => esc_attr__( 'Menu Title', 'logipro' ),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => esc_html('REQUEST A RATE', 'logipro'),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_request_a_rate_title',
	'label'       => esc_attr__( 'Title', 'logipro' ),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => esc_html('Need a quotation?', 'logipro'),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'textarea',
	'settings'    => 'ozy_logipro_request_a_rate_description',
	'label'       => esc_attr__( 'Description', 'logipro' ),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => esc_html('Dear Customers, if you wish to receive a quotation, we kindly ask you to fill in below form. Once the form has been duly filled and submitted, the rates will be quoted to you.', 'logipro'),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_request_a_rate_cf7_form_id',
	'label'       => esc_attr__( 'Contact Form 7', 'logipro' ),
	'description' => esc_attr__( 'Select an available Contact Form 7 form.', 'logipro'),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => '',
	'choices'	  => vp_bind_ozy_logipro_cf7_forms_kirki(),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_request_a_rate_custom_shortcode',
	'label'       => esc_attr__( 'or Use Custom Shortcode', 'logipro' ),
	'description' => esc_attr__( 'When this field filled Contact Form 7 option selection will be ignored and shortcode in this field will be rendered.', 'logipro'),
	'section'     => 'ozy_logipro_section_request_a_rate',
	'priority'    => 10,
	'default'     => '',
) );

if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE")){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
	if(!empty($languages)){
		foreach($languages as $l){
			if($l['language_code'] != 'en') {
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'toggle',
					'settings'    => 'ozy_logipro_request_a_rate_form_' . $l['language_code'],
					'label'       => esc_attr__( 'Show Request A Rate form?', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'description' => esc_attr__('By enabling this option you can activate Request A Rate form.', 'logipro'),
					'section'     => 'ozy_logipro_section_request_a_rate',
					'priority'    => 10,
					'default'     => '1',
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'text',
					'settings'    => 'ozy_logipro_request_a_rate_menu_title_' . $l['language_code'],
					'label'       => esc_attr__( 'Menu Title', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_request_a_rate',
					'priority'    => 10,
					'default'     => esc_html('REQUEST A RATE', 'logipro'),
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'text',
					'settings'    => 'ozy_logipro_request_a_rate_title_' . $l['language_code'],
					'label'       => esc_attr__( 'Title', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_request_a_rate',
					'priority'    => 10,
					'default'     => esc_html('Need a quotation?', 'logipro'),
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'textarea',
					'settings'    => 'ozy_logipro_request_a_rate_description_' . $l['language_code'],
					'label'       => esc_attr__( 'Description', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_request_a_rate',
					'priority'    => 10,
					'default'     => esc_html('Dear Customers, if you wish to receive a quotation, we kindly ask you to fill in below form. Once the form has been duly filled and submitted, the rates will be quoted to you.', 'logipro'),
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'select',
					'settings'    => 'ozy_logipro_request_a_rate_cf7_form_id_' . $l['language_code'],
					'label'       => esc_attr__( 'Contact Form 7', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'description' => esc_attr__( 'Select an available Contact Form 7 form.', 'logipro'),
					'section'     => 'ozy_logipro_section_request_a_rate',
					'priority'    => 10,
					'default'     => '1',
					'choices'	  => vp_bind_ozy_logipro_cf7_forms_kirki(),
				) );				
			}
		}
	}
}

/* Primary Menu Extended Info Bar */

Kirki::add_section( 'ozy_logipro_section_menu_extended_info_bar', array(
    'title'          => esc_attr__( 'Menu Extended Info Bar', 'logipro' ),
    'panel'          => 'ozy_layout_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_show',
	'label'       => esc_attr__( 'Show Info Bar?', 'logipro' ),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => '0',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_social_icons',
	'label'       => esc_attr__( 'Show Social Icons?', 'logipro' ),
	'description' => esc_attr__('By enabling this option you can show social icons on extension bar of primary menu.', 'logipro'),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'textarea',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_box_1',
	'label'       => esc_attr__( 'Box #1', 'logipro' ),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => 
'<p><span>Phone:</span> +1-702-894-8177<br>
info@logiprowp.com</p>
<br/>
<p><span>LogiPro Opening Hours:</span><br>
08:00 - 20:00</p>',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'textarea',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_box_2',
	'label'       => esc_attr__( 'Box #2', 'logipro' ),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => 'Headquarter: Global Logistic, London 4-5 Spring St, London',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'textarea',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_box_3',
	'label'       => esc_attr__( 'Box #3', 'logipro' ),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => 
'<p>- <a href="#">Italia Office</a></p>
<p>- <a href="#">Belgium Office</a></p>
<p>- <a href="#">Denmark Office</a></p>
<p>- <a href="#">Germany Office</a></p>
<p>- <a href="#">Netherland Office</a></p>',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'textarea',
	'settings'    => 'ozy_logipro_menu_extended_info_bar_box_4',
	'label'       => esc_attr__( 'Box #4', 'logipro' ),
	'section'     => 'ozy_logipro_section_menu_extended_info_bar',
	'priority'    => 10,
	'default'     => '',
) );

if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE")){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
	if(!empty($languages)){
		foreach($languages as $l){
			if($l['language_code'] != 'en') {

				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'toggle',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_show_' . $l['language_code'],
					'label'       => esc_attr__( 'Show Info Bar?', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '1',
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'toggle',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_social_icons_' . $l['language_code'],
					'label'       => esc_attr__( 'Show Request A Rate form?', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'description' => esc_attr__('By enabling this option you can activate Request A Rate form.', 'logipro'),
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '1',
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'textarea',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_box_1_' . $l['language_code'],
					'label'       => esc_attr__( 'Box #1', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '',
				) );

				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'textarea',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_box_2_' . $l['language_code'],
					'label'       => esc_attr__( 'Box #2', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '',
				) );		

				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'textarea',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_box_3_' . $l['language_code'],
					'label'       => esc_attr__( 'Box #3', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '',
				) );
				
				Kirki::add_field( 'ozy_logipro', array(
					'type'        => 'textarea',
					'settings'    => 'ozy_logipro_menu_extended_info_bar_box_4_' . $l['language_code'],
					'label'       => esc_attr__( 'Box #4', 'logipro' ) . ' (' . $l['native_name'] . ')',
					'section'     => 'ozy_logipro_section_menu_extended_info_bar',
					'priority'    => 10,
					'default'     => '',
				) );
							
			}
		}
	}
}
?>