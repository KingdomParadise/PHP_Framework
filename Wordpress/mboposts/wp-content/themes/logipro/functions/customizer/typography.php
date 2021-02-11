<?php
/**
* Typography Options
*/


Kirki::add_panel( 'ozy_typography_options_panel', array(
    'priority'    => 99,
    'title'       => esc_attr__( 'Typography Options', 'logipro' ),
    'description' => esc_attr__( 'Customize typography options of your theme here.', 'logipro' ),
) );

/* Extended Typography Options */
Kirki::add_section( 'ozy_typography_options_section_extended', array(
    'title'          => esc_attr__( 'Extended Parameters', 'logipro' ),
    'panel'          => 'ozy_typography_options_panel', // Not typically needed.
    'priority'       => 159,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'     => 'text',
	'settings' => 'ozy_logipro_typography_google_param',
	'label'    => esc_attr( 'Extended Parameters', 'logipro' ),
	'section'  => 'ozy_typography_options_section_extended',
	'default'	=> ':100,200,300,400,500,600,700,800,900',
	'description'  => esc_attr__( 'Add extra parameters here. By this option, you can load non-latin charset or more types byt available parameters. Use like ":400,100,300,700".', 'logipro' ),
	'priority' => 10,
) );

/* Content Typography */
Kirki::add_section( 'ozy_typography_options_section_content', array(
    'title'          => esc_attr__( 'Content', 'logipro' ),
    'panel'          => 'ozy_typography_options_panel', // Not typically needed.
    'priority'       => 159,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_font',
	'label'       => esc_attr__( 'Content', 'logipro' ),
	'section'     => 'ozy_typography_options_section_content',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
		'variant'        => 'regular',		
		'font-size'      => '16px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_button_typography_font',
	'label'       => esc_attr__( 'Button / Link Button Font', 'logipro' ),
	'description' => esc_attr__( 'Only font family will be used from this option.', 'logipro' ),
	'section'     => 'ozy_typography_options_section_content',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_footer_typography_font',
	'label'       => esc_attr__( 'Footer Font', 'logipro' ),
	'description' => esc_attr__( 'Only font family will be used from this option.', 'logipro' ),
	'section'     => 'ozy_typography_options_section_content',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
		'variant'        => 'regular',		
		'font-size'      => '14px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'none'
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_alternate_title_typography_font',
	'label'       => esc_attr__( 'Alternate Title', 'logipro' ),
	'description' => esc_attr__( 'Only font family will be used from this option.', 'logipro' ),
	'section'     => 'ozy_typography_options_section_content',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
	),
	'priority'    => 10
) );

/* Heading Typography */
Kirki::add_section( 'ozy_typography_options_section_heading', array(
    'title'          => esc_attr__( 'Heading', 'logipro' ),
    'panel'          => 'ozy_typography_options_panel', // Not typically needed.
    'priority'       => 159,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font',
	'label'       => esc_attr__( 'H1', 'logipro' ),
	'description' => esc_attr__( 'This font face option will be used for all H1 - H6 tags.', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
		'variant'        => '700',		
		'font-size'      => '40px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font_h2',
	'label'       => esc_attr__( 'H2', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-size'      => '36px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font_h3',
	'label'       => esc_attr__( 'H3', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-size'      => '30px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font_h4',
	'label'       => esc_attr__( 'H4', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-size'      => '20px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font_h5',
	'label'       => esc_attr__( 'H5', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-size'      => '16px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_heading_font_h6',
	'label'       => esc_attr__( 'H6', 'logipro' ),
	'section'     => 'ozy_typography_options_section_heading',
	'default'     => array(
		'font-size'      => '12px',
		'font-weight'	 => 'normal',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

/* Primary Menu Typography */
Kirki::add_section( 'ozy_typography_options_section_primary_menu', array(
    'title'          => esc_attr__( 'Primary Menu', 'logipro' ),
    'panel'          => 'ozy_typography_options_panel', // Not typically needed.
    'priority'       => 159,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_primary_menu_font',
	'label'       => esc_attr__( 'Menu Typography', 'logipro' ),
	'section'     => 'ozy_typography_options_section_primary_menu',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
		'variant'        => 'regular',		
		'font-size'      => '14px',
		'font-weight'	 => 'normal',
		//'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );

/* Primary Menu Typography */
Kirki::add_section( 'ozy_typography_options_section_primary_menu_classic', array(
    'title'          => esc_attr__( 'Primary Menu Classic', 'logipro' ),
    'panel'          => 'ozy_typography_options_panel', // Not typically needed.
    'priority'       => 159,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'typography',
	'settings'    => 'ozy_logipro_typography_primary_menu_font_classic',
	'label'       => esc_attr__( 'Menu Typography', 'logipro' ),
	'section'     => 'ozy_typography_options_section_primary_menu_classic',
	'default'     => array(
		'font-family'    => 'Libre Franklin',
		'variant'        => 'regular',		
		'font-size'      => '12px',
		'font-weight'	 => 'normal',
		//'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10
) );
?>