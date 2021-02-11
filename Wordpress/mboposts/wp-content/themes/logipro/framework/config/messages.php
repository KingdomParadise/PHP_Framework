<?php

return array(

	////////////////////////////////////////
	// Localized JS Message Configuration //
	////////////////////////////////////////

	/**
	 * Validation Messages
	 */
	'validation' => array(
		'alphabet'     => esc_attr__('Value needs to be Alphabet', 'logipro'),
		'alphanumeric' => esc_attr__('Value needs to be Alphanumeric', 'logipro'),
		'numeric'      => esc_attr__('Value needs to be Numeric', 'logipro'),
		'email'        => esc_attr__('Value needs to be Valid Email', 'logipro'),
		'url'          => esc_attr__('Value needs to be Valid URL', 'logipro'),
		'maxlength'    => esc_attr__('Length needs to be less than {0} characters', 'logipro'),
		'minlength'    => esc_attr__('Length needs to be more than {0} characters', 'logipro'),
		'maxselected'  => esc_attr__('Select no more than {0} items', 'logipro'),
		'minselected'  => esc_attr__('Select at least {0} items', 'logipro'),
		'required'     => esc_attr__('This is required', 'logipro'),
	),

	/**
	 * Import / Export Messages
	 */
	'util' => array(
		'import_success'    => esc_attr__('Import succeed, option page will be refreshed..', 'logipro'),
		'import_failed'     => esc_attr__('Import failed', 'logipro'),
		'export_success'    => esc_attr__('Export succeed, copy the JSON formatted options', 'logipro'),
		'export_failed'     => esc_attr__('Export failed', 'logipro'),
		'restore_success'   => esc_attr__('Restoration succeed, option page will be refreshed..', 'logipro'),
		'restore_nochanges' => esc_attr__('Options identical to default', 'logipro'),
		'restore_failed'    => esc_attr__('Restoration failed', 'logipro'),
	),

	/**
	 * Control Fields String
	 */
	'control' => array(
		// select2 select box
		'select2_placeholder' => esc_attr__('Select option(s)', 'logipro'),
		// fontawesome chooser
		'fac_placeholder'     => esc_attr__('Select an Icon', 'logipro'),
	),

);

/**
 * EOF
 */