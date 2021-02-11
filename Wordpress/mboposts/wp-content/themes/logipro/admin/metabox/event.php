<?php

return array(
	'id'          => 'ozy_logipro_meta_event',
	'types'       => array('ozy_event'),
	'title'       => esc_attr('Event Options', 'logipro'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type'      => 'textbox',
			'name'      => 'ozy_logipro_meta_event_dates',
			'label'     => esc_attr('Event Dates', 'logipro'),
		),
		array(
			'type'      => 'textbox',
			'name'      => 'ozy_logipro_meta_event_sub_title',
			'label'     => esc_attr('Sub Title', 'logipro'),
		)		
	),
);

/**
 * EOF
 */