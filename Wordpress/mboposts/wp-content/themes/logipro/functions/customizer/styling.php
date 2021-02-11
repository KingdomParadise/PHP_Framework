<?php
/**
* Styling Options
*/

/* Generic */
Kirki::add_panel( 'ozy_color_options_panel', array(
    'priority'    => 99,
    'title'       => esc_attr__( 'Styling Options', 'logipro' ),
    'description' => esc_attr__( 'Customize colors and background image options of your theme here.', 'logipro' ),
) );

Kirki::add_section( 'ozy_color_options_section_generic', array(
    'title'          => esc_attr__( 'General', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_background_color',
	'label'       => esc_attr__( 'Content Background', 'logipro' ),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_heading_color',
	'label'       => esc_attr__( 'Heading Color', 'logipro' ),
	'description' => esc_attr__('Default color for H1-H6 elements', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#352C66',
	'priority'    => 10,
	'alpha'       => false,
	//'transport'	  => 'postMessage'
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_heading_color2',
	'label'       => esc_attr__( 'Heading Color #2', 'logipro' ),
	'description' => esc_attr__('Alternate color for H1-H6 elements. Currently used for post heading.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_color',
	'label'       => esc_attr__( 'Content Color', 'logipro' ),
	'description' => esc_attr__('Font color of the content.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#352C66',
	'priority'    => 10,
	'alpha'       => false
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_color_alternate',
	'label'       => esc_attr__( 'Alternate Color #1', 'logipro' ),
	'description' => esc_attr__('Like link color, hover color and input elements active border.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#FAC033',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_color_alternate2',
	'label'       => esc_attr__( 'Alternate Color #2', 'logipro' ),
	'description' => esc_attr__('Like footer, footer sidebar title color, text color and seperator color.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#585558',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_color_alternate3',
	'label'       => esc_attr__( 'Alternate Color #3', 'logipro' ),
	'description' => esc_attr__('Like footer sidebar link color.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_color_alternate4',
	'label'       => esc_attr__( 'Alternate Color #4', 'logipro' ),
	'description' => esc_attr__('Like Blog meta info bar text.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => '#352C66',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_content_background_color_alternate',
	'label'       => esc_attr__( 'Alternate Background Color', 'logipro' ),
	'description' => esc_attr__('Like comments background color.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => 'rgba(48,48,48,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_separator_color',
	'label'       => esc_attr__( 'Separator / Border Color', 'logipro' ),
	'description' => esc_attr__('Used for, in page Seperators and Comments bottom border.', 'logipro'),
	'section'     => 'ozy_color_options_section_generic',
	'default'     => 'rgba(230,230,230,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

/* Primary Menu */
Kirki::add_section( 'ozy_color_options_section_primary_menu', array(
    'title'          => esc_attr__( 'Primary Menu', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_font_color',
	'label'       => esc_attr__( 'Font Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => '#9488D4',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_font_color_alternate',
	'label'       => esc_attr__( 'Font Color Alternate', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => '#ffffff',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_font_color_alternate2',
	'label'       => esc_attr__( 'Font Color Alternate #2', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => '#fac033',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_dropdown_background_color',
	'label'       => esc_attr__( 'Dropdown Background', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => '#352C66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_background_color',
	'label'       => esc_attr__( 'Header Background', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => 'rgba(255,255,255,0)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_background_color_on_scroll',
	'label'       => esc_attr__( 'Header Background On Scroll', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_separator_color_2',
	'label'       => esc_attr__( 'Separator Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => 'rgba(74,66,118,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_header_background_image',
	'label'       => esc_attr__( 'Background Image', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom page background image.', 'logipro'),
	'section'     => 'ozy_color_options_section_primary_menu',
	'default'     => '',
	'priority'    => 10,
) );

/* Primary Menu Classic */
Kirki::add_section( 'ozy_color_options_section_primary_menu_classic', array(
    'title'          => esc_attr__( 'Primary Menu Classic', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_font_color_classic',
	'label'       => esc_attr__( 'Font Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '#352c66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_font_color_hover_classic',
	'label'       => esc_attr__( 'Font Color Alternate', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '#fac033',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_dropdown_color_classic',
	'label'       => esc_attr__( 'Dropdown Font Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '#FFFFFF',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_dropdown_background_color_classic',
	'label'       => esc_attr__( 'Dropdown Background', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '#352c66',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_dropdown_background_color_hover_classic',
	'label'       => esc_attr__( 'Dropdown Background Color : Hover / Active', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '#fac033',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_background_color_classic',
	'label'       => esc_attr__( 'Header Background', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => 'rgba(255,255,255,0)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_background_color_on_scroll_classic',
	'label'       => esc_attr__( 'Header Background On Scroll', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_primary_menu_separator_color_2_classic',
	'label'       => esc_attr__( 'Separator Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => 'rgba(74,66,118,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_header_background_image_classic',
	'label'       => esc_attr__( 'Background Image', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom page background image.', 'logipro'),
	'section'     => 'ozy_color_options_section_primary_menu_classic',
	'default'     => '',
	'priority'    => 10,
) );

/* Footer */
Kirki::add_section( 'ozy_color_options_section_footer', array(
    'title'          => esc_attr__( 'Footer', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_1',
	'label'       => esc_attr__( 'Footer Widget Bar Background Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#ffffff',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_1_alternate',
	'label'       => esc_attr__( 'Footer Background Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#352C66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_5',
	'label'       => esc_attr__( 'Title Foreground Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#352C66',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_2',
	'label'       => esc_attr__( 'Foreground Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#A8A8A8',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_3',
	'label'       => esc_attr__( 'Alternate Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#8B7FC8',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_6',
	'label'       => esc_attr__( 'Alternate Color #2', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#2a2352',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_footer_color_4',
	'label'       => esc_attr__( 'Separator Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '#F0F0F0',
	'priority'    => 10,
	'alpha'       => false,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_footer_background_image',
	'label'       => esc_attr__( 'Background Image', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom page background image.', 'logipro'),
	'section'     => 'ozy_color_options_section_footer',
	'default'     => '',
	'priority'    => 10,
) );

/* Form */
Kirki::add_section( 'ozy_color_options_section_form', array(
    'title'          => esc_attr__( 'Form', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_font_color',
	'label'       => esc_attr__( 'Font Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => '#000000',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_font_color_hover',
	'label'       => esc_attr__( 'Font Color Hover', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => '#352c66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_background_color',
	'label'       => esc_attr__( 'Background Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => 'rgba(240,240,240,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_button_font_color',
	'label'       => esc_attr__( 'Font Color (Button)', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => 'rgba(255,255,255,1)',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_button_font_color_hover',
	'label'       => esc_attr__( 'Font Color : Hover / Active (Button)', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => '#352C66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_button_background_color',
	'label'       => esc_attr__( 'Background Color (Button)', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => '#352C66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_button_background_color_hover',
	'label'       => esc_attr__( 'Background Color : Hover / Active (Button)', 'logipro' ),
	'section'     => 'ozy_color_options_section_form',
	'default'     => '#FFFFFF',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

/* Form */
Kirki::add_section( 'ozy_color_options_section_form_cf7', array(
    'title'          => esc_attr__( 'Contact Form 7', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_font_color_cf7',
	'label'       => esc_attr__( 'Font Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_form_cf7',
	'default'     => '#352C66',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_form_background_color_cf7',
	'label'       => esc_attr__( 'Background Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_form_cf7',
	'default'     => '#FFFFFF',
	'priority'    => 10,
	'choices'     => array(
       'alpha' => true,
	),

) );

Kirki::add_field( 'ozy_logipro', array(
	'type'     => 'text',
	'settings' => 'ozy_logipro_form_padding_cf7',
	'label'    => esc_attr__( 'Field Padding', 'logipro' ),
	'section'  => 'ozy_color_options_section_form_cf7',
	'default' => '8px 0px',
	'description'  => esc_attr__('Please use 8px 10px if you like to use none transparent background for input fields', 'logipro'),
	'priority' => 10,
) );

/* Background */
Kirki::add_section( 'ozy_color_options_section_background_styling', array(
    'title'          => esc_attr__( 'Background', 'logipro' ),
    'panel'          => 'ozy_color_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'color',
	'settings'    => 'ozy_logipro_body_background_color',
	'label'       => esc_attr__( 'Background Color', 'logipro' ),
	'section'     => 'ozy_color_options_section_background_styling',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => false,
) );


Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'image',
	'settings'    => 'ozy_logipro_body_background_image',
	'label'       => esc_attr__( 'Custom Background Image', 'logipro' ),
	'description' => esc_attr__('Upload or choose custom page background image.', 'logipro'),
	'section'     => 'ozy_color_options_section_background_styling',
	'default'     => '',
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ozy_logipro_body_background_image_size',
	'label'       => esc_attr__( 'Background Image Size', 'logipro' ),
	'section'     => 'ozy_color_options_section_background_styling',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		''   => esc_attr__( '-not set-', 'logipro' ),
		'cover' => esc_attr__( 'cover', 'logipro' ),
		'contain'  => esc_attr__( 'contain', 'logipro' ),
	),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ozy_logipro_body_background_image_repeat',
	'label'       => esc_attr__( 'Background Image Repeat', 'logipro' ),
	'section'     => 'ozy_color_options_section_background_styling',
	'default'     => 'repeat',
	'priority'    => 10,
	'choices'     => array(
		'inherit'   => esc_attr__( 'inherit', 'logipro' ),
		'no-repeat' => esc_attr__( 'no-repeat', 'logipro' ),
		'repeat'  => esc_attr__( 'repeat', 'logipro' ),
		'repeat-x'  => esc_attr__( 'repeat-x', 'logipro' ),
		'repeat-y'  => esc_attr__( 'repeat-y', 'logipro' ),
	),
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ozy_logipro_body_background_image_attachment',
	'label'       => esc_attr__( 'Background Image Attachment', 'logipro' ),
	'section'     => 'ozy_color_options_section_background_styling',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		''   => esc_attr__( '-not set-', 'logipro' ),
		'fixed' => esc_attr__( 'fixed', 'logipro' ),
		'scroll'  => esc_attr__( 'scroll', 'logipro' ),
		'local'  => esc_attr__( 'local', 'logipro' )
	),
) );
?>