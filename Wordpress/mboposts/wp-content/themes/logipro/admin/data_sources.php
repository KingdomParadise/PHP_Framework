<?php
VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_list_wp_menus');

function vp_bind_ozy_logipro_list_wp_menus($value) {
	$result = array(
		array('value' => '-1', 'label' => esc_attr__('-Use Generic-', 'logipro'))		
	);
	$menus = get_terms('nav_menu');
	foreach($menus as $menu) {
		array_push($result, array('value' => $menu->slug, 'label' => $menu->name));		
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_get_font_weight_list');

function vp_get_font_weight_list()
{
	return array(array('value'=>'100', 'label' => '100'), array('value'=>'200', 'label' => '200'), array('value'=>'300', 'label' => '300'), array('value'=>'400', 'label' => '400'), array('value'=>'500', 'label' => '500'), array('value'=>'600', 'label' => '600'), array('value'=>'700', 'label' => '700'), array('value'=>'800', 'label' => '800'), array('value'=>'900', 'label' => '900'));
}

VP_Security::instance()->whitelist_function('vp_get_font_letter_spacing_list');

function vp_get_font_letter_spacing_list()
{
	return array(array('value'=>'normal', 'label' => 'normal'), array('value'=>'-5', 'label' => '-5'), array('value'=>'-4', 'label' => '-4'), array('value'=>'-3', 'label' => '-3'), array('value'=>'-2', 'label' => '-2'), array('value'=>'-1', 'label' => '-1'), array('value'=>'1', 'label' => '1'), array('value'=>'2', 'label' => '2'), array('value'=>'3', 'label' => '3'), array('value'=>'4', 'label' => '4'), array('value'=>'5', 'label' => '5'));
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_sidebars');

function vp_bind_ozy_logipro_sidebars() {
	$wp_posts = get_posts(array(
		'posts_per_page' => -1,
		'post_type' => 'ozy_sidebars'
	));

	$result = array();
	foreach ($wp_posts as $post)
	{
		$result[] = array('value' => $post->post_name, 'label' => $post->post_title);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_sidebars_kirki');

function vp_bind_ozy_logipro_sidebars_kirki() {
	$wp_posts = get_posts(array(
		'posts_per_page' => -1,
		'post_type' => 'ozy_sidebars'
	));

	$result = array('0' => '--select--');
	foreach ($wp_posts as $post)
	{
		$result[$post->post_name] = $post->post_title;
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_cf7_forms_kirki');

function vp_bind_ozy_logipro_cf7_forms_kirki() {
	$cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );

	$contact_forms = array();
	$contact_forms[ 0 ] = '--select--';
	if ( $cf7 ) {
		foreach ( $cf7 as $cform ) {
			$contact_forms[ $cform->ID ] = $cform->post_title;
		}
	} else {
		$contact_forms[ 0 ] = esc_attr__( 'No contact forms found', 'logipro' );
	}	
	return $contact_forms;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_pages');

function vp_bind_ozy_logipro_pages() {
	$wp_pages = get_pages(array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'number'	=> 1000
	));

	$result = array();
	foreach ($wp_pages as $page)
	{
		$result[] = array('value' => $page->ID, 'label' => $page->post_title);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_pages_kirki');

function vp_bind_ozy_logipro_pages_kirki() {
	$wp_pages = get_pages(array(
		'post_type' => 'page',
		'post_status' => 'publish'
	));

	$result = array('0' => '--select--');
	foreach ($wp_pages as $page)
	{
		$result[$page->ID] = $page->post_title;
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_image_gallery_categories');

function vp_bind_ozy_logipro_image_gallery_categories() {

	$arr = get_terms( 'image_gallery_category', array('hide_empty' => false ) );
	$result = array(array('value' => '-1', 'label' => esc_attr__('All', 'logipro')));
	foreach ($arr as $item)
	{
		if(isset($item->name) && $item->term_id) $result[] = array('value' => $item->term_id, 'label' => $item->name);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_image_gallery_categories_raw');

function vp_bind_ozy_logipro_image_gallery_categories_raw() {

	$arr = get_terms( 'image_gallery_category', array('hide_empty' => false ) );
	$result = array();
	foreach ($arr as $item)
	{
		if(isset($item->name) && $item->term_id) $result[] = array('value' => $item->term_id, 'label' => $item->name);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_video_gallery_categories');

function vp_bind_ozy_logipro_video_gallery_categories() {

	$arr = get_terms( 'video_gallery_category', array('hide_empty' => false ) );
	$result = array(array('value' => '-1', 'label' => esc_attr__('All', 'logipro')));
	foreach ($arr as $item)
	{
		if(isset($item->name) && $item->term_id) $result[] = array('value' => $item->term_id, 'label' => $item->name);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_blog_categories');

function vp_bind_ozy_logipro_blog_categories() {

	$arr = get_terms( 'category', array('hide_empty' => false ) );
	$result = array(array('value' => '-1', 'label' => esc_attr__('All', 'logipro')));
	foreach ($arr as $item)
	{
		$result[] = array('value' => $item->term_id, 'label' => $item->name);
	}
	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_revolution_slider');

function vp_bind_ozy_logipro_revolution_slider() {

	$result = array();
	
	if(class_exists('RevSliderFront')) {
		
		$result[] = array('value' => '-1', 'label' => esc_attr__('-Not in Use-', 'logipro'));
		
		global $wpdb, $table_prefix;
			
		$revsldr = $wpdb->get_results($wpdb->prepare("SELECT ID, title, alias FROM {$table_prefix}revslider_sliders where ID>%d", 0));
		
		$revsldr_alias = array();
		if ($revsldr) {
			foreach ( $revsldr as $revsldr_slide ) {
				$result[] = array('value' => $revsldr_slide->alias, 'label' => $revsldr_slide->title);
			}
		}
		
	} else {
		$result[] = array('value' => '-1', 'label' => esc_attr__('-Revolution Slider is not activated-', 'logipro'));
	}

	return $result;
}

VP_Security::instance()->whitelist_function('vp_bind_ozy_logipro_master_slider');

function vp_bind_ozy_logipro_master_slider() {

	$result = array();
	
	if( function_exists( 'masterslider' ) ) {
		
		$result[] = array('value' => '-1', 'label' => esc_attr__('-Not in Use-', 'logipro'));
		
		global $wpdb, $table_prefix;
			
		$revsldr = $wpdb->get_results($wpdb->prepare("SELECT ID, title FROM {$table_prefix}masterslider_sliders where ID>%d", 0));
		
		$revsldr_alias = array();
		if ($revsldr) {
			foreach ( $revsldr as $revsldr_slide ) {
				$result[] = array('value' => $revsldr_slide->ID, 'label' => $revsldr_slide->title);
			}
		}
		
	} else {
		$result[] = array('value' => '-1', 'label' => esc_attr__('-Master Slider is not activated-', 'logipro'));
	}

	return $result;
}

VP_Security::instance()->whitelist_function('vp_font_preview');

function vp_font_preview($face, $style, $weight, $size, $line_height)
{
	$gwf   = new VP_Site_GoogleWebFont();
	$gwf->add($face, $style, $weight);
	$links = $gwf->get_font_links();
	$link  = reset($links);
	$dom   = <<<EOD
<link href='$link' rel='stylesheet' type='text/css'>
<p style="padding: 0 10px 0 10px; font-family: $face; font-style: $style; font-weight: $weight; font-size: {$size}px; line-height: {$line_height}em;">
	Grumpy wizards make toxic brew for the evil Queen and Jack
</p>
EOD;
	return $dom;
}

VP_Security::instance()->whitelist_function('vp_font_preview_simple');

function vp_font_preview_simple($face, $style, $weight = '700')
{
	$gwf   = new VP_Site_GoogleWebFont();
	$gwf->add($face, $style, $weight);
	$links = $gwf->get_font_links();
	$link  = reset($links);
	$dom   = <<<EOD
<link href='$link' rel='stylesheet' type='text/css'>
<p style="padding: 0 10px 0 10px; font-family: $face; font-style: $style; font-weight: $weight; font-size: 26px; line-height: 33px;">
	Grumpy wizards make toxic brew for the evil Queen and Jack
</p>
EOD;
	return $dom;
}