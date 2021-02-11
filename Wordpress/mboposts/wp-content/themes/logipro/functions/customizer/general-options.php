<?php
/**
* General Options
*/

Kirki::add_section( 'ozy_logipro_general_options_section', array(
    'title'          => esc_attr__( 'General Options', 'logipro' ),
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
	'priority'    => 98,
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_back_to_top_button',
	'label'       => esc_attr__( 'Back To Top Button', 'logipro' ),
	'description' => esc_attr__( 'Enable / Disable Back To Top Button globally.', 'logipro'),
	'section'     => 'ozy_logipro_general_options_section',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_disable_animsition',
	'label'       => esc_attr__( 'Disable Loading Screen', 'logipro' ),
	'description' => esc_attr__( 'Loading screen and page transition on this page will be disable.', 'logipro'),
	'section'     => 'ozy_logipro_general_options_section',
	'priority'    => 10,
	'default'     => '0',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_alternative_date_format',
	'label'       => esc_attr__( 'Alternative Date Format', 'logipro' ),
	'description' => wp_kses(__('<a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">Documentation on date and time formatting.</a>', 'logipro'),array('a' => array('href' => array(), 'target' => array()))),
	'section'     => 'ozy_logipro_general_options_section',
	'priority'    => 10,
	'default'     => 'l F j, Y',
) );

?>