<?php

return array(
	'id'          => 'ozy_logipro_meta_post',
	'types'       => array('post'),
	'title'       => esc_attr__('Post Options', 'logipro'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type' => 'radiobutton',
			'name' => 'ozy_logipro_meta_post_item_size',
			'label' => esc_attr__('Item Size', 'logipro'),
			'items' => array(
				array(
					'value' => 'block5',
					'label' => '5 Blocks',
				),
				array(
					'value' => 'block4',
					'label' => '4 Blocks',
				),				
				array(
					'value' => 'block3',
					'label' => '3 Blocks',
				),
				array(
					'value' => 'block2',
					'label' => '2 Blocks',
				),
				array(
					'value' => 'block1',
					'label' => '1 Block',
				)				
			),
			'default' => 'block1'
		),			
	),	
);

/**
 * EOF
 */