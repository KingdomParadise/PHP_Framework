<?php
if ( ! class_exists( 'Kirki' ) ) {
	include_once( LOGIPRO_OZY_BASE_DIR . '/framework/kirki/kirki.php' );

	function ozy_logipro_kirki_configuration() {
		return array( 'url_path'     => get_template_directory_uri() . '/framework/kirki/' );
	}
	add_filter( 'kirki/config', 'ozy_logipro_kirki_configuration' );
}
if ( class_exists( 'Kirki' ) ) {
	Kirki::add_config( 'ozy_logipro', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'option',//'theme_mod',
		'option_name'	=> 'ozy_logipro',
		'disable_output'=> true
	) );

	Kirki::add_field( 'ozy_logipro', array(
		'type'        => 'code',
		'settings'    => 'ozy_logipro_custom_css',
		'label'       => esc_attr__( 'Add / Edit Custom CSS', 'logipro' ),
		'section'     => 'ozy_logipro_custom_css_section',
		'default'     => '/* add your custom CSS here */',
		'priority'    => 10,
		'transport'	=> 'postMessage',
		'js_vars'     => array(
			array(
				'element'  => '#logipro-footer-style',
				'function' => 'html'
			),
		),
		'choices'     => array(
			'language' => 'css',
			'theme'    => 'monokai',
			'height'   => 250,
		),
	) );
	
	Kirki::add_section( 'ozy_logipro_custom_script_section', array(
		'title'          => esc_attr__( 'Custom Script', 'logipro' ),
		'description'    => esc_attr__( 'Add custom Script here', 'logipro' ),
		'panel'          => '', // Not typically needed.
		'priority'       => 160,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
	
	Kirki::add_field( 'ozy_logipro', array(
		'type'        => 'code',
		'settings'    => 'ozy_logipro_custom_script',
		'label'       => esc_attr__( 'Add / Edit Custom Script', 'logipro' ),
		'section'     => 'ozy_logipro_custom_script_section',
		'default'     => '// add your custom Script here',
		'priority'    => 10,
		'transport'	=> 'postMessage',
		'js_vars'     => array(
			array(
				'element'  => '#logipro-footer-script',
				'function' => 'html'
			),
		),	
		'choices'     => array(
			'language' => 'js',
			'theme'    => 'monokai',
			'height'   => 250,
		),
	) );
	

	/* General options */
	include_once( LOGIPRO_OZY_BASE_DIR . '/functions/customizer/general-options.php' );

	/* Layout options */
	include_once( LOGIPRO_OZY_BASE_DIR . '/functions/customizer/layout.php' );

	/* Typography options */
	include_once( LOGIPRO_OZY_BASE_DIR . '/functions/customizer/typography.php' );
	
	/* Styling options */
	include_once( LOGIPRO_OZY_BASE_DIR . '/functions/customizer/styling.php' );
	
	/* Social icon options */
	include_once( LOGIPRO_OZY_BASE_DIR . '/functions/customizer/social.php' );	
}
?>