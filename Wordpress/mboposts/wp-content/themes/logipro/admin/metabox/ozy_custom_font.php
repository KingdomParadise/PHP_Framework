<?php

return array(
	'id'          => 'ozy_logipro_meta_font',
	'types'       => array('ozy_fonts'),
	'title'       => esc_attr__('Font Options', 'logipro'),
	'priority'    => 'high',
	'template'    => array(

		array(
			'type'      => 'group',
			'repeating' => true,
			'length'    => 1,
			'name'      => 'ozy_logipro_meta_font_group',
			'title'     => esc_attr__('Custom Font', 'logipro'),
			'fields'    => array(	
				array(
					'type' => 'textbox',
					'name' => 'ozy_logipro_meta_font_id',
					'label' => esc_attr__('Font Identifier', 'logipro'),
					'description' => esc_attr__('Exact name of the font. * Font type name', 'logipro'),
					'default' => '',
					'validation' => 'required'
				),	
				array(
					'type' => 'upload',
					'name' => 'ozy_logipro_meta_font_eot',
					'label' => esc_attr__('EOT File', 'logipro'),
					'description' => esc_attr__('Upload or choose a EOT font file.', 'logipro'),
					'validation' => 'required'
				),
				array(
					'type' => 'upload',
					'name' => 'ozy_logipro_meta_font_woff',
					'label' => esc_attr__('WOFF File', 'logipro'),
					'description' => esc_attr__('Upload or choose a WOFF font file.', 'logipro'),
					'validation' => 'required'
				),
				array(
					'type' => 'upload',
					'name' => 'ozy_logipro_meta_font_ttf',
					'label' => esc_attr__('TTF File', 'logipro'),
					'description' => esc_attr__('Upload or choose an TTF font file.', 'logipro'),
					'validation' => 'required'
				),
				array(
					'type' => 'upload',
					'name' => 'ozy_logipro_meta_font_svg',
					'label' => esc_attr__('SVG File', 'logipro'),
					'description' => esc_attr__('Upload or choose an SVG font file.', 'logipro'),
					'validation' => 'required'
				),		
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_font_weight',
					'label' => esc_attr__('Font Weight', 'logipro'),
					'items' => array(
						array(
							'value' => 'normal',
							'label' => 'Normal',
						),
						array(
							'value' => '100',
							'label' => '100',
						),
						array(
							'value' => '200',
							'label' => '200',
						),
						array(
							'value' => '300',
							'label' => '300',
						),
						array(
							'value' => '400',
							'label' => '400',
						),
						array(
							'value' => '500',
							'label' => '500',
						),
						array(
							'value' => '600',
							'label' => '600',
						),
						array(
							'value' => '700',
							'label' => '700',
						),
						array(
							'value' => '800',
							'label' => '800',
						),
						array(
							'value' => '900',
							'label' => '900',
						),																																
					),
					'validation' => 'required',
					'default' => array(
						'normal',
					),
				),
				array(
					'type' => 'radiobutton',
					'name' => 'ozy_logipro_meta_font_style',
					'label' => esc_attr__('Font Style', 'logipro'),
					'items' => array(
						array(
							'value' => 'normal',
							'label' => 'Normal',
						),
						array(
							'value' => 'italic',
							'label' => 'Italic',
						),
						array(
							'value' => 'oblique',
							'label' => 'Oblique',
						)																															
					),
					'validation' => 'required',
					'default' => array(
						'normal',
					),
				)
			)
		)				
	),	
);

/**
 * EOF
 */