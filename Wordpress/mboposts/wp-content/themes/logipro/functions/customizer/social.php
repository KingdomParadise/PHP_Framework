<?php
/**
* Social Icon Options
*/

/* Social Icons */
Kirki::add_panel( 'ozy_social_options_panel', array(
    'priority'    => 99,
    'title'       => esc_attr__( 'Social', 'logipro' ),
    'description' => esc_attr__( 'Define and arrange social icons/links here.', 'logipro' ),
) );

Kirki::add_section( 'ozy_layout_options_section_social_accounts', array(
    'title'          => esc_attr__( 'Accounts', 'logipro' ),
    'panel'          => 'ozy_social_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_fivehundredpx',
	'label'       => esc_attr__( '500px', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_behance',
	'label'       => esc_attr__( 'Behance', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_blogger',
	'label'       => esc_attr__( 'Blogger', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_delicious',
	'label'       => esc_attr__( 'Delicious', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_deviantart',
	'label'       => esc_attr__( 'DeviantArt', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_digg',
	'label'       => esc_attr__( 'Digg', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_dribble',
	'label'       => esc_attr__( 'Dribble', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_email',
	'label'       => esc_attr__( 'E-Mail', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '#',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_facebook',
	'label'       => esc_attr__( 'Facebook', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '#',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_flickr',
	'label'       => esc_attr__( 'Flickr', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_forrst',
	'label'       => esc_attr__( 'Forrst', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_foursquare',
	'label'       => esc_attr__( 'Foursquare', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_github',
	'label'       => esc_attr__( 'Github', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_googleplus',
	'label'       => esc_attr__( 'Google+', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_instagram',
	'label'       => esc_attr__( 'Instagram', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '#',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_lastfm',
	'label'       => esc_attr__( 'Last.FM', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_linkedin',
	'label'       => esc_attr__( 'LinkedIn', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_myspace',
	'label'       => esc_attr__( 'MySpace', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_pinterest',
	'label'       => esc_attr__( 'Pinterest', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_rss',
	'label'       => esc_attr__( 'RSS', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_soundcloud',
	'label'       => esc_attr__( 'SoundCloud', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_stumbleupon',
	'label'       => esc_attr__( 'StumbleUpon', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_tumblr',
	'label'       => esc_attr__( 'Tumblr', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_twitter',
	'label'       => esc_attr__( 'Twitter', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '#',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_vimeo',
	'label'       => esc_attr__( 'Vimeo', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_wordpress',
	'label'       => esc_attr__( 'WordPress', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_yahoo',
	'label'       => esc_attr__( 'Yahoo!', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'text',
	'settings'    => 'ozy_logipro_social_accounts_youtube',
	'label'       => esc_attr__( 'YouTube', 'logipro' ),
	'section'     => 'ozy_layout_options_section_social_accounts',
	'priority'    => 10,
	'default'     => '',
) );

/* General */

Kirki::add_section( 'ozy_layout_options_section_social_general', array(
    'title'          => esc_attr__( 'General', 'logipro' ),
    'panel'          => 'ozy_social_options_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'toggle',
	'settings'    => 'ozy_logipro_social_use',
	'label'       => esc_attr__( 'Social Share Buttons', 'logipro' ),
	'description' => esc_attr__( 'Enable / Disable the social share buttons.', 'logipro'),
	'section'     => 'ozy_layout_options_section_social_general',
	'priority'    => 10,
	'default'     => '1',
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_social_icon_order',
	'label'       => esc_attr__( 'Icon List / Order', 'logipro' ),
	'description' => esc_attr__('Select visible icons and sort.', 'logipro'),
	'section'     => 'ozy_layout_options_section_social_general',
	'priority'    => 10,
	'multiple'    => 30,
	'default'     => array('email', 'facebook', 'instagram', 'twitter'),
	'choices'	  => vp_get_social_medias_single_arr()
) );

Kirki::add_field( 'ozy_logipro', array(
	'type'        => 'select',
	'settings'    => 'ozy_logipro_social_icon_target',
	'label'       => esc_attr__( 'Target Window', 'logipro' ),
	'description' => esc_attr__('Where the links will be opened?', 'logipro'),
	'section'     => 'ozy_layout_options_section_social_general',
	'priority'    => 10,
	'multiple'    => 0,
	'default'     => '_blank',
	'choices'	  => array('_blank' => '_blanK', '_self' => '_self', '_parent' => '_parent')
) );

?>