<?php

return array(
	'id'          => 'ozy_tracking_meta',
	'types'       => array('ozy_tracking'),
	'title'       => esc_attr__('Tracking Parameters', 'freevision-tracker'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type'      => 'group',
			'repeating' => true,
			'length'    => 1,
			'name'      => 'movement_group',
			'title'     => esc_attr__('Movements', 'freevision-tracker'),
			'fields'    => array(	
				array(
					'type' => 'select',
					'name' => 'movement_status',
					'label' => esc_attr__('Status', 'freevision-tracker'),
					'items' => array(
						array(
							'value' => 'Departed',
							'label' => 'Departed',
						),
						array(
							'value' => 'In-Transit',
							'label' => 'In Transit',
						),
						array(
							'value' => 'Arrived',
							'label' => 'Arrived',
						),
						array(
							'value' => 'Delivered',
							'label' => 'Delivered',
						),							
					),
					'validation' => 'required',
					'default' => array(
						'normal',
					),
				),			
				array(
					'type' => 'textbox',
					'name' => 'movement_location',
					'label' => esc_attr__('Location', 'freevision-tracker'),
				),	
				array(
					'type' => 'textbox',
					'name' => 'movement_message',
					'label' => esc_attr__('Message', 'freevision-tracker'),
				),
				array(
					'type' => 'date',
					'name' => 'movement_date',
					'label' => esc_attr__('Date', 'freevision-tracker'),
					'format' => 'yy-mm-dd',
				),
				array(
					'type' => 'textbox',
					'name' => 'movement_time',
					'label' => esc_attr__('Time', 'freevision-tracker'),
					'description' => esc_attr__('Enter your values like 10:45', 'freevision-tracker'),
					'validation' => 'maxlength[5]'
				),
			)
		),	
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'sf_group',
			'title'     => esc_attr__('Shipment Facts', 'freevision-tracker'),
			'fields'    => array(
				array(
					'type' => 'toggle',
					'name' => 'tracking_sf_show',
					'label' => esc_attr__('Show Shipment Facts section?', 'freevision-tracker'),
					'description' => esc_attr__('If this option checked, shipment facts section will be shown on frontend.', 'logipro'),
				),			
				array(
					'type' => 'date',
					'name' => 'tracking_sf_ship_date',
					'label' => esc_attr__('Ship Date', 'freevision-tracker'),
					'format' => 'yy-mm-dd',
				),
				array(
					'type' => 'date',
					'name' => 'tracking_sf_estimated_delivery_date',
					'label' => esc_attr__('Estimated Delivery Date', 'freevision-tracker'),
					'format' => 'yy-mm-dd',
				),
				array(
					'type' => 'select',
					'name' => 'tracking_sf_shipping_status',
					'label' => esc_attr__('Shipping Status', 'freevision-tracker'),
					'items' => array(
						array(
							'value' => 'Departed',
							'label' => 'Departed',
						),
						array(
							'value' => 'In-Transit',
							'label' => 'In Transit',
						),
						array(
							'value' => 'Arrived',
							'label' => 'Arrived',
						),
						array(
							'value' => 'Delivered',
							'label' => 'Delivered',
						),							
					),
					'validation' => 'required',
					'default' => array(
						'normal',
					),
				),					
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_courier',
					'label' => esc_attr__('Courier', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_payment_mode',
					'label' => esc_attr__('Payment Mode', 'freevision-tracker'),
				),
				array(
					'type' => 'textarea',
					'name' => 'tracking_sf_special_handling_section',
					'label' => esc_attr__('Special Handling Section', 'freevision-tracker'),
				),
				array(
					'type' => 'textarea',
					'name' => 'tracking_sf_description',
					'label' => esc_attr__('Description', 'freevision-tracker'),
				),				
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_quantity',
					'label' => esc_attr__('Quantity', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_size',
					'label' => esc_attr__('Size', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_weight',
					'label' => esc_attr__('Weight', 'freevision-tracker'),
				),	
				array(
					'type' => 'textbox',
					'name' => 'tracking_sf_total_freight',
					'label' => esc_attr__('Total Freight', 'freevision-tracker'),
				),
			),
		),		
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'sender_group',
			'title'     => esc_attr__('Sender', 'freevision-tracker'),
			'fields'    => array(	
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_name',
					'label' => esc_attr__('Sender\'s Name', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_company',
					'label' => esc_attr__('Company', 'freevision-tracker'),
				),
				array(
					'type' => 'textarea',
					'name' => 'tracking_sender_address',
					'label' => esc_attr__('Address', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_country',
					'label' => esc_attr__('Country', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_city',
					'label' => esc_attr__('City', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_state',
					'label' => esc_attr__('State/Province', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_postal_code',
					'label' => esc_attr__('Postal Code', 'freevision-tracker'),
				),	
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_telephone',
					'label' => esc_attr__('Telephone', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_sender_email',
					'label' => esc_attr__('E-Mail', 'freevision-tracker'),
					'validation ' => 'emaiL'
				),
			),
		),		
		
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'receiver_group',
			'title'     => esc_attr__('Receiver', 'freevision-tracker'),
			'fields'    => array(	
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_name',
					'label' => esc_attr__('Receiver\'s Name', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_company',
					'label' => esc_attr__('Company', 'freevision-tracker'),
				),
				array(
					'type' => 'textarea',
					'name' => 'tracking_receiver_address',
					'label' => esc_attr__('Address', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_country',
					'label' => esc_attr__('Country', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_city',
					'label' => esc_attr__('City', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_state',
					'label' => esc_attr__('State/Province', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_postal_code',
					'label' => esc_attr__('Postal Code', 'freevision-tracker'),
				),	
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_telephone',
					'label' => esc_attr__('Telephone', 'freevision-tracker'),
				),
				array(
					'type' => 'textbox',
					'name' => 'tracking_receiver_email',
					'label' => esc_attr__('E-Mail', 'freevision-tracker'),
					'validation ' => 'emaiL'
				),
			),
		),
	)
);

/**
 * EOF
 */