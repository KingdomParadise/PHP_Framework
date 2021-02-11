<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta charset="<?php esc_attr(bloginfo( 'charset' )); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />       
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
	<?php wp_head(); /* this is used by many Wordpress features and for plugins to work proporly */ ?>
</head>

<body <?php body_class(); ?>>	
	<?php 
	/* Animsition */
	if(logipro_get_ozy_data('is_animsition_active')) echo '<div class="animsition">';
	echo '<div id="body-bg-wrapper">';	
	/* Include Primary Menu */
	logipro_ozy_include_primary_menu();
    ?>        
    <div class="none">
        <p><a href="#content"><?php esc_attr_e('Skip to Content', 'logipro'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
    </div><!--.none-->
    <?php
		if(logipro_get_ozy_data('hide_everything_but_content') <= 0): 

		$header_slider_class = $footer_slider_class = '';
		logipro_ozy_header_footer_slider_class($header_slider_class, $footer_slider_class);
	?> 
    <div id="main" class="<?php echo esc_attr($footer_slider_class); echo esc_attr($header_slider_class); ?>">
        <?php
		logipro_ozy_custom_header();
        ?>
        <div class="container <?php echo esc_attr(logipro_get_ozy_data('_page_content_css_name')); ?>">
	<?php endif; ?>
            