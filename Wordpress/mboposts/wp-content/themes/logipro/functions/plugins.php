<?php

require_once(LOGIPRO_OZY_BASE_DIR . 'functions/classes/tgm-plugin-activation.php');

/**
* TGM Plugin activator
*/
function logipro_register_required_plugins() {
	$ext_plugin_path = logipro_settings(); if($ext_plugin_path == false) return;
	$plugins = array(
		array(
			'name'     	=> 'LogiPro Essentials',
			'slug'     	=> 'frv-logipro-essentials',
			'source'   	=> $ext_plugin_path . 'frv-logipro-essentials.zip',
			'required' 	=> true,
			'force_deactivation' => true,
			'version'	=> '1.8'
		),array(
			'name'     	=> 'Revolution Slider',
			'slug'     	=> 'revslider',
			'source'   	=> $ext_plugin_path . 'revslider.zip',
			'required' 	=> true,
			'force_deactivation' => true,
			'version'	=> '6.3.6'
		),array(
			'name'     	=> 'WPBakery Page Builder',
			'slug'     	=> 'js_composer',
			'source'   	=> $ext_plugin_path . 'js_composer.zip',
			'required' 	=> true,
			'force_deactivation' => true,
			'version'	=> '6.5.0'
		),array(
			'name'     	=> 'MailChimp Widget',
			'slug'     	=> 'mailchimp-widget',
			'source'   	=> $ext_plugin_path . 'mailchimp-widget.zip',
			'required' 	=> false,
			'force_deactivation' => true,
			'version'	=> '2.0.8'
		),array(
			'name'     	=> 'Envato Market',
			'slug'     	=> 'envato-market',
			'source'   	=> $ext_plugin_path . 'envato-market.zip',
			'required' 	=> false,
			'force_deactivation' => true,
			'version'	=> '2.0.6'
		),array(
			'name'     	=> 'Contact Form 7',
			'slug'     	=> 'contact-form-7',
			'required' 	=> false,
			'version'	=> '5.3.2',
			'force_deactivation' => true,
		),array(
			'name'     	=> 'FreeVision Tracker',
			'slug'     	=> 'freevision-tracker',
			'source'   	=> $ext_plugin_path . 'freevision-tracker.zip',
			'required' 	=> false,
			'force_deactivation' => true,
			'version'	=> '1.9'
		)
	);

	$config = array(
		'id'           => 'logipro',             	// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      	// Default absolute path to bundled plugins.
		'menu'         => 'install-required-plugins', // Menu slug.
		'has_notices'  => true,                    	// Show admin notices or not.
		'dismissable'  => true,                    	// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      	// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   	// Automatically activate plugins after installation or not.
		'message'      => '',                      	// Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action('tgmpa_register', 'logipro_register_required_plugins');

?>
