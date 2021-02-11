<?php
// Output option-based style
if( !function_exists( 'logipro_style') ) :
	function logipro_style() {
		ob_start();
		global $ozyLogiProHelper, $post;

		// is page based styling enabled?
		$body_style = $content_background_color = $transparent_content_background = '';
		$page_id = get_the_ID();
				
		if(vp_metabox('ozy_logipro_meta_page.ozy_logipro_meta_page_use_custom_style', null, $page_id) == '1') {
			$_var = 'ozy_logipro_meta_page.ozy_logipro_meta_page_layout_group.0.ozy_logipro_meta_page_layout_';
			$content_background_color 		= vp_metabox($_var . 'ascend_background', null, $page_id);
			$transparent_content_background = vp_metabox($_var . 'transparent_background', null, $page_id);
		}else{
			$content_background_color 		= logipro_ozy_get_theme_mod('content_background_color', null, $page_id);
		}
		
		if(vp_metabox('ozy_logipro_meta_page.ozy_logipro_meta_page_use_custom_background', null, $page_id) == '1' && !is_search()) {
			$_var = 'background_group.0.ozy_logipro_meta_page_background_';
			$body_style = $ozyLogiProHelper->background_style_render(
				logipro_ozy_get_metabox($_var . 'color', null, $page_id),
				logipro_ozy_get_metabox($_var . 'image', null, $page_id),
				logipro_ozy_get_metabox($_var . 'image_size', null, $page_id),
				logipro_ozy_get_metabox($_var . 'image_repeat', null, $page_id),
				logipro_ozy_get_metabox($_var . 'image_attachment', null, $page_id),
				false,
				logipro_ozy_get_metabox($_var . 'image_pos_x', null, $page_id),
				logipro_ozy_get_metabox($_var . 'image_pos_y', null, $page_id)				
			);
		}else{
			$_var = 'body_background_';
			$body_style = $ozyLogiProHelper->background_style_render(
				logipro_ozy_get_theme_mod($_var . 'color', null, $page_id), 
				logipro_ozy_get_theme_mod($_var . 'image', null, $page_id), 
				logipro_ozy_get_theme_mod($_var . 'image_size', null, $page_id), 
				logipro_ozy_get_theme_mod($_var . 'image_repeat', null, $page_id), 
				logipro_ozy_get_theme_mod($_var . 'image_attachment', null, $page_id)
			);
		}
	
	?>
		@media only screen and (min-width: 1212px) {
			.container{padding:0;width:<?php echo logipro_get_ozy_data('container_width'); ?>px;}
			#content{width:<?php echo logipro_get_ozy_data('content_width'); ?>px;}
			#sidebar{width:<?php echo logipro_get_ozy_data('sidebar_width'); ?>px;}
		}

		/* Body Background Styling */
		#body-bg-wrapper{<?php logipro_e_css($body_style); ?>}
	
		/* Layout and Layout Styling */
		#footer-widget-bar *:not(input), #footer *:not(input) {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki('footer_typography_font')); ?>
		}
		#footer {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_1_alternate', '#ffffff');?>;
		}
		#footer-widget-bar {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_1', '#352c66');?>;
		}			
		#footer-widget-bar h4,#back-to-top-wrapper a,#back-to-top-wrapper a span,.ozy-twitter-widget-icon>span,#footer-widget-bar #social-icons>a>span {color:<?php echo logipro_ozy_get_theme_mod('footer_color_5', '#ffffff');?> !important;}			
		#footer * {color:<?php echo logipro_ozy_get_theme_mod('footer_color_3', '#ffffff');?>;}
		#footer .container.last{border-color:<?php logipro_e_css($ozyLogiProHelper->hex2rgba(logipro_ozy_get_theme_mod('footer_color_3', '#ffffff'), .2));?>;}
		#footer-widget-bar * {color:<?php echo logipro_ozy_get_theme_mod('footer_color_2', '#ffffff');?>;}
		#footer a,
		#footer-widget-bar a,
		.ozy-twitter-widget div>span {color:<?php echo logipro_ozy_get_theme_mod('footer_color_2', '#04c1ff');?> !important;}
		#footer-widget-bar{border-top-color:<?php echo logipro_ozy_get_theme_mod('footer_color_4', 'rgba(255,255,255,.10)');?> !important;}

		.widget .opening-time,
		#sidebar .widget .opening-time{border-color:<?php echo logipro_ozy_get_theme_mod('footer_color_4', '#000');?>;}					
		nav#drop-menu-wrapper>div>div.drop-menu-info-section>div.drop-menu-social-icons a,
		#footer div#social-icons>a {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_6', '#ffffff');?>;
		}
		#footer div#social-icons>a>span {
			color:<?php echo logipro_ozy_get_theme_mod('footer_color_1', '#ffffff');?> !important;
		}
		.logipro-btt {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_1', 'rgba(0,0,0,1)');?>;
		}        	
	<?php
		$menu_logo_height = logipro_ozy_get_theme_mod('primary_menu_height', '100') . 'px';
	
		logipro_e_css($transparent_content_background == '1' ? '	#main{background-color:transparent !important;}' . PHP_EOL : '');

		$footer_background_image = logipro_ozy_get_theme_mod('footer_background_image');
		if($footer_background_image) { echo '#footer{background:url('. $footer_background_image .') repeat center center;}'; }

		?>
		#main {
			padding-top:<?php echo logipro_ozy_get_theme_mod('primary_menu_height');?>px;
		}

		/* Header (Primary Menu Bar) */		
		#header{height:<?php logipro_e_css($menu_logo_height) ?>;} 			
		body.ozy-alternate-menu #header #header-sliding-bg{background:<?php echo logipro_ozy_get_theme_mod('primary_menu_background_color_on_scroll') ?>;}
		.header-contact-info>i>svg path {
			fill:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color') ?>;
		}
		.header-contact-info>div>span:first-child {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color') ?>;
		}
		.header-contact-info>div>span:last-child {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate2') ?>;
		}			
		<?php
		if(logipro_ozy_get_theme_mod('primary_menu_type') != 'classic') {
			$header_background_image = logipro_ozy_get_theme_mod('header_background_image');
			if($header_background_image) { $header_background_image = 'background-image:url('. $header_background_image .');background-size:cover;'; }
		?>

		/* Primary Menu Styling */		
		.header-menu-wrapper>div>a,
		.header-menu-wrapper>div>span,
		.header-menu-wrapper>div>span a {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_primary_menu_font', logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color'))); ?>
		}
		
		#main-search-button {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate2') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?>;
		}
		
		#main-menu-button {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?>;
		}
		#main-menu-button>div>span {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?>;
		}
		
		nav#drop-menu-wrapper{
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color') ?>;
			<?php logipro_e_css($header_background_image); ?>
		}
		nav#drop-menu-wrapper * {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_primary_menu_font', logipro_ozy_get_theme_mod('primary_menu_font_color'))); ?>
		}
		nav#drop-menu-wrapper>div>div.drop-menu-info-section {
			border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color_2') ?>;
		}
		nav#drop-menu-wrapper>div>div.drop-menu-info-section>div.drop-menu-social-icons a>span {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?> !important;
		}
		ul.primary-menu>li>a {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki(
			'typography_heading_font_h4', 
			logipro_ozy_get_theme_mod('primary_menu_font_color_alternate'), 
			'!important', 
			array('font-size', 'line-height'))); 
			?>;
		}		
		
		ul.primary-menu>li ul>li.current-menu-ancestor>a,
		ul.primary-menu>li ul>li.current-menu-parent>a,
		ul.primary-menu>li ul>li.current-menu-item>a,
		ul.primary-menu>li ul>li:hover>a,
		.drop-menu-info-section p>span {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?> !important;
		}
		
		ul.primary-menu>li.current-menu-ancestor>a,
		ul.primary-menu>li.current-menu-parent>a,
		ul.primary-menu>li.current-menu-item>a,
		ul.primary-menu>li:hover>a {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate2') ?> !important;
		}
		
		body.ozy-alternate-menu #header #header-sliding-bg{background:<?php echo logipro_ozy_get_theme_mod('primary_menu_background_color_on_scroll') ?>;}
		<?php
		}else{
		?>
		/* Primary Menu Classic */
		#top-menu>div>div>ul,
		#top-menu>div>div>ul>li,
		#top-menu>div>div>ul>li>a,
		#top-menu>div>div>ul>li>a:before,
		#top-menu>div>div>ul>li>a:after{
			height:auto;
			line-height:60px;
			<?php 
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_primary_menu_font_classic', logipro_ozy_get_theme_mod('primary_menu_font_color_classic')));
			?>
		}

		#top-menu ul ul li a{color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?>;}
		#top-menu>.primary-menu-bar-wrapper>div>ul>li>a:after{background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_hover_classic') ?> !important;}
		#top-menu ul ul li.has-sub > a:after {color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?> !important;}
		#top-menu .menu-button:after {border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_hover_classic') ?> !important;}
		#top-menu .menu-button.menu-opened:after,
		#top-menu .menu-button:before {background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_hover_classic') ?> !important;}			
		#top-menu .menu-item-search>a>span{border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_classic') ?> !important;}
		@media screen and (max-width:1180px){
			#top-menu>div>div>ul,
			#top-menu>div>div>ul>li,
			#top-menu>div>div>ul>li>a {
				<?php 
				logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_primary_menu_font_classic', logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic')));
				?>
			}				
			#top-menu>div>div>ul>li {height:auto !important;}
			#top-menu,
			#top-menu ul li{background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color_classic') ?>;}
			
			#top-menu ul li:hover,
			#top-menu ul li.current-menu-ancestor,
            #top-menu ul li.current-page-ancestor,
			#top-menu ul li.current_page_ancestor,
			#top-menu ul li.active {
				background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color_hover_classic') ?>;					
			}
			#top-menu ul li:hover>a, 
			#top-menu ul li.current-menu-item>a, 
            #top-menu ul li.current-page-ancestor>a,
			#top-menu ul li.current_page_item>a, 
			#top-menu ul li.active>a{
				color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?> !important;
			}
			#top-menu ul li:hover {
				background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color_hover_classic') ?>;
				color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?>;
			}
			#top-menu>div>div>ul>li:last-child,
			#top-menu ul li{border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color_2_classic') ?>;}
			#top-menu ul ul li:not(:last-child)>a{border:none !important;}
			
			#top-menu>div>div>ul>li.has-sub:after,
			#top-menu ul li.has-sub:after{color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?>;}
			#top-menu ul li.current-menu-item.has-sub:after,
			#top-menu ul li.active.has-sub:after,
			#top-menu>div>div>ul>li.has-sub:after,
			#top-menu ul li.has-sub:after,			
			#top-menu ul li:hover.has-sub:after {color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?> !important;}	
		}
		#top-menu ul ul li{background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color_classic') ?>;}
		#top-menu ul ul li:not(:last-child)>a{border-bottom:1px solid <?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color_2_classic') ?>;}
		#top-menu ul ul li:hover,
		#top-menu ul ul li.current-menu-item,
		#top-menu ul ul li.current_page_item,
		#top-menu ul ul li.current_page_ancestor {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_background_color_hover_classic') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_dropdown_color_classic') ?>;
		}

		#top-menu>div>div>ul>li:hover>a,
		#top-menu>div>div>ul>li.current-menu-item>a,
		#top-menu>div>div>ul>li.current_page_item>a,
		#top-menu>div>div>ul>li.active>a {color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_hover_classic') ?>;}			
		#header>header{border-color:<?php logipro_e_css($ozyLogiProHelper->change_opacity(logipro_ozy_get_theme_mod('primary_menu_separator_color_2_classic'), '1'))?>;}
		
		#top-menu>div>div>ul>li.has-sub:after{color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_classic') ?>;}
		#top-menu>div>div>ul>li.current-menu-item.has-sub:after,
		#top-menu>div>div>ul>li.active.has-sub:after,
		#top-menu>div>div>ul>li:hover.has-sub:after {color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_hover_classic') ?>;}			
		<?php
		}
		?>
		
		/* Widgets */
		.widget li>a{color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?> !important;}
		.widget li>a:hover,.widget li>span.post-date{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate'); ?> !important;}
		.ozy-latest-posts>a>span{
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;
		}
					
		/* Page Styling and Typography */
		#page-bread-crumbs-share-bar{border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color'); ?>;}
		.page-share-buttons a:not(.page-social-share) {
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3'); ?>;
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?>;
		}
		.page-share-buttons a.page-social-share {
			color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?>;
		}
		#page-breadcrumbs a, #page-breadcrumbs li:before{color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?> !important;}
		#page-breadcrumbs li:last-child{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate'); ?>;}			
		
		ul.menu li.current_page_item>a,
		a.content-color:hover,
		.content-color-alternate, 
		.events-carousel .events-navigation li.is-selected, 
		.events-carousel .slide .events .title>a:hover{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate'); ?> !important;}
		.content-color-alternate2{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate2'); ?> !important;}
		.content-color-alternate3{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3'); ?> !important;}

		.content-color-bg{background-color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?> !important;}
		.content-color-alternate-bg{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate'); ?> !important;}
		.content-color-alternate3-bg{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3'); ?> !important;}

		.heading-color, .heading-color a,h1.content-color>a,h2.content-color>a,h3.content-color>a,
		h4.content-color>a,h5.content-color>a,h6.content-color>a,blockquote,.a-page-title {color:<?php echo logipro_ozy_get_theme_mod('heading_color'); ?> !important;}
		.blog-heading-color, .blog-heading-color a{border-color:<?php echo logipro_ozy_get_theme_mod('heading_color2'); ?> !important;color:<?php echo logipro_ozy_get_theme_mod('heading_color2'); ?> !important;}
		.ozy-footer-slider,.content-font,.ozy-header-slider,#content,#footer-widget-bar,#sidebar,#footer,.tooltipsy,.fancybox-inner{
			<?php 
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_font', logipro_ozy_get_theme_mod('content_color')));
			?>
		}
		.content-font-family{
			<?php 
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_font', '', '', array('font-family')));
			?>
		}			
		#content a:not(.vc_gitem-link):not([data-vc-container^='.vc_tta']):not(.ms-btn):not(.vc_btn3),#sidebar a,#footer a,.alternate-text-color,#footer-widget-bar>.container>.widget-area a:hover,.fancybox-inner a,.item__details ul li:first-child {color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate');?>;}
		.page-pagination{background-color:<?php echo logipro_ozy_get_theme_mod('content_color');?>;}
		#ozy-share-div>a>span,.page-pagination a {
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3');?> !important;
			border-color:<?php logipro_e_css($ozyLogiProHelper->hex2rgba(logipro_ozy_get_theme_mod('content_color_alternate3'),'.3')) ?>
		}
		#sidebar .ozy-latest-posts-with-thumbs a{color:<?php echo logipro_ozy_get_theme_mod('content_color');?>;}
		#sidebar .ozy-latest-posts-with-thumbs>li>a>span>small{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate');?>;}
		.page-pagination a.current{
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate');?> !important;
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3');?> !important;
		}
		.page-pagination .next-post-link>span,.page-pagination .previous-post-link>span{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate');?> !important;}
		.fancybox-inner{color:<?php echo logipro_ozy_get_theme_mod('content_color');?> !important;}
		.header-line{background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color') ?>;}
		.a-page-title:hover{border-color:<?php echo logipro_ozy_get_theme_mod('heading_color');?> !important;}
		.nav-box a,#page-title-wrapper h1,#page-title-wrapper h4,
		#side-nav-bar a,#side-nav-bar h3,#content h1,
		#sidebar .widget h1,#content h2,#sidebar .widget h2,
		#content h3,#sidebar .widget h3,#content h4,
		#sidebar .widget h4,#content h5,#sidebar .widget h5,
		#content h6,#sidebar .widget h6,.heading-font,#logo,#tagline {<?php 
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font', logipro_ozy_get_theme_mod('heading_color')));
		?>}
		.heading-font-family {<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font', '', '', array('font-family')));
		?>}
		#page-title-wrapper h1,#content h1,
		#sidebar h1,#footer h1,#sidr h1,
		.blog-heading-font,.blog-heading-font * {
			<?php 
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font'));
			?>
		}
		#content h2,#sidebar h2,
		#footer h2,#sidr h2{
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font_h2'));
			?>;
		}
		#content h3,#sidebar h3,#footer h3,#sidr h3{
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font_h3'));
			?>;
		}
		#content h4,#page-title-wrapper h4,#footer-widget-bar h4,
		#sidebar h4, #sidebar .widget h4,#footer h4,#sidr h4{
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font_h4'));
			?>;
		}
		#content h5,#sidebar h5,#footer h5,#sidr h5 {
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font_h5'));
			?>;
		}
		#content h6,#sidebar h6,#footer h6,#sidr h6{
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font_h6'));
			?>;
		}
		body.single h2.post-title,.post-single h2.post-title {
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_heading_font', '', '!important'));
			?>
		}			
		#footer-widget-bar .widget a:hover,
		#sidebar .widget a:hover{color:<?php echo logipro_ozy_get_theme_mod('content_color')?>;}
		span.plus-icon>span{background-color:<?php echo logipro_ozy_get_theme_mod('content_color')?>;}
		.content-color,#single-blog-tags>a{color:<?php echo logipro_ozy_get_theme_mod('content_color'); ?> !important;}
		#single-blog-tags>a{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3'); ?>;}
		
		/* Forms */
		input,select,textarea,form.ns_widget_mailchimp_form #mc_signup_submit{
			<?php
			logipro_e_css($ozyLogiProHelper->font_style_render_kirki('typography_font', logipro_ozy_get_theme_mod('form_font_color')));
			?>
		}
		#search-overlay {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate2') ?>;
		}
		#search-overlay, #search-overlay a, #search-overlay input {
			color:<?php echo logipro_ozy_get_theme_mod('primary_menu_font_color_alternate') ?> !important;
		}
		#freevision_tracker_form label,
		#request-a-rate, #request-a-rate a {
			color:<?php echo logipro_ozy_get_theme_mod('form_font_color_cf7')?> !important;
		}
		#freevision_tracker_form.freevision-tracker-form-shortcode label {
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3')?> !important;
		}
		.wpcf7-form input:not([type=submit]):not([type=button]):not([type=file]),.wpcf7-form select, .wpcf7-form textarea, .wpcf7-list-item-label {
			background-color:<?php echo logipro_ozy_get_theme_mod('form_background_color_cf7')?>;
			padding:<?php echo logipro_ozy_get_theme_mod('form_padding_cf7')?>!important;
			border-color:<?php echo logipro_ozy_get_theme_mod('form_font_color_cf7')?> !important;
			color:<?php echo logipro_ozy_get_theme_mod('form_font_color_cf7')?> !important;
			font-size:80%!important;	
		}
		.wpcf7 input[type=submit]:hover,.wpcf7 input[type=submit]:active {
			background-color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_background_color_hover')))?> !important;
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_font_color_hover')))?> !important;
		}
		.wp-search-form i.oic-zoom{color:<?php echo logipro_ozy_get_theme_mod('form_font_color') ?>;}
		input:not([type=submit]):not([type=button]):not([type=file]),select,textarea{
			background-color:<?php echo logipro_ozy_get_theme_mod('form_background_color')?>;
			border-color:<?php echo logipro_ozy_get_theme_mod('form_font_color')?> !important;
			color:<?php echo logipro_ozy_get_theme_mod('form_font_color')?> !important;
		}
		#content input:not([type=submit]):not([type=button]):not([type=file]):hover,#content textarea:hover,
		#content input:not([type=submit]):not([type=button]):not([type=file]):focus,#content textarea:focus{border-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3')?> !important;}
		
		.generic-button,input[type=button]:not(.generic-button-alternate),input[type=submit]:not(.generic-button-alternate),button[type=submit]:not(.generic-button-alternate),.tagcloud>a {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki('button_typography_font', '', '', array('font-family'))); ?>
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_font_color')))?> !important;
			background-color:<?php echo logipro_ozy_get_theme_mod('form_button_background_color')?> !important;
			border:2px solid <?php echo logipro_ozy_get_theme_mod('form_button_background_color')?> !important;
		}
		.generic-button svg>path {fill:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_font_color')))?> !important;}
		.generic-button:hover svg>path,.generic-button:active svg>path {fill:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_font_color_hover')))?> !important;}			
		.generic-button:hover, input[type=button]:not(.generic-button-alternate):hover,input[type=submit]:not(.generic-button-alternate):hover,button[type=submit]:not(.generic-button-alternate):hover,.tagcloud>a:hover {
			background-color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_background_color_hover')))?> !important;
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('form_button_font_color_hover')))?> !important;
			border:2px solid <?php echo logipro_ozy_get_theme_mod('form_button_background_color_hover')?>;
		}

		.generic-button-alternate {
			<?php logipro_e_css($ozyLogiProHelper->font_style_render_kirki('button_typography_font', '', '', array('font-family'))); ?>
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('content_color_alternate3')))?> !important;
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate')?> !important;
			border:2px solid <?php echo logipro_ozy_get_theme_mod('content_color_alternate')?> !important;
		}		
		.generic-button-alternate:hover {
			background-color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('content_color_alternate3')))?> !important;
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('content_color_alternate')))?> !important;
			border:2px solid <?php echo logipro_ozy_get_theme_mod('content_color_alternate')?> !important;
		}			
		
		/* Footer Forms */
		#footer-widget-bar input:not([type=file]):not([type=checkbox]):not([type=radio]),
		#footer-widget-bar textarea, #footer-widget-bar select {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_1')?> !important;
			color:<?php echo logipro_ozy_get_theme_mod('footer_color_2')?> !important;
			border-color:<?php echo logipro_ozy_get_theme_mod('footer_color_2')?> !important;
		}
		form.ns_widget_mailchimp_form #mc_signup_submit {
			background-color:<?php echo logipro_ozy_get_theme_mod('footer_color_1_alternate')?> !important;
		}
		form.ns_widget_mailchimp_form #mc_signup_submit>svg path {
			fill:<?php echo logipro_ozy_get_theme_mod('footer_color_1')?> !important;
		}
		
		/* Blog Comments & Blog Stuff */
		#comments>h3>span{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;}
		.comment-body>.comment-meta.commentmetadata>a,.comment-body .reply>a,#commentform .form-submit .submit{color:<?php echo logipro_ozy_get_theme_mod('content_color') ?> !important}
		#commentform .form-submit .submit{border-color:<?php echo logipro_ozy_get_theme_mod('content_color') ?> !important;}
		#commentform .form-submit .submit:hover{border-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?> !important;}
		.post-meta p.g{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate2')?>;}	
		.ozy-related-posts .caption,
		.ozy-related-posts .caption>h4>a{
			color:<?php echo logipro_ozy_get_theme_mod('content_background_color') ?> !important;
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;
		}
		/*post formats*/
		.simple-post-format>div>span,.simple-post-format>div>h2,.simple-post-format>div>p,
		.simple-post-format>div>p>a,
		.simple-post-format>div>blockquote,
		.post-excerpt-audio>div>div{
			color:<?php logipro_e_css($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('content_background_color')))?> !important;
		}
		div.sticky.post-single {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color') ?>;
			border-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;
		}
		#content .post .post-meta {
			background-color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate')?>;
		}
		#content .post .post-meta span.m,
		#content .post .post-meta span.y,
		#content .post .share-box>span {
			color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate4')?> !important;
		}
		#content .post .post-meta span.d{color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate4')?> !important;}
		#content .post .post-meta span.c {
			background-color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate4')?>;
			color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate3')?>;
		}
		
		/* Shortcodes */
        .explore-news .news-carousel:after {background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color_2_classic') ?>;}
        .explore-news .news-carousel a {color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color_2_classic') ?> !important;}        
		.flickity-page-dots .dot{background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color') ?>;}
		.flickity-page-dots .dot.is-selected{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;}
		.ozy-button.auto,.wpb_button.wpb_ozy_auto{
			background-color:<?php echo logipro_ozy_get_theme_mod('form_button_background_color') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('form_button_font_color')?>;
		}
		.ozy-button.auto:hover,
		.wpb_button.wpb_ozy_auto:hover{
			border-color:<?php echo logipro_ozy_get_theme_mod('form_button_background_color_hover') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('form_button_font_color_hover') ?> !important;
			background-color:<?php echo logipro_ozy_get_theme_mod('form_button_background_color_hover')?>;
		}			
		.ozy-call-to-action-box>div.overlay-wrapper>a{
			border-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?> !important;
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;
		}	
		.ozy-call-to-action-box>div.overlay-wrapper>h3{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;}

		.ozy-service-box:hover {background-color:<?php echo logipro_ozy_get_theme_mod('content_color') ?> !important;}
		.ozy-service-box>* {color:<?php echo logipro_ozy_get_theme_mod('content_color') ?> !important;}			
		.ozy-service-box:hover>* {color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;}
		
		.ozy-hover-card>a,.ozy-hover-card>div.s i,.ozy-hover-card>a.s i,.ozy-hover-card>div.s h3,.ozy-hover-card>a.s h3{color:<?php echo logipro_ozy_get_theme_mod('content_color') ?> !important;}
		.ozy-hover-card:hover>div.f,.ozy-hover-card:hover>a.f{background-color:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;}
		.ozy-hover-card:hover>div.f i,.ozy-hover-card:hover>a.f i,.ozy-hover-card:hover>div.f h3,.ozy-hover-card:hover>a.f h3,.ozy-hover-card:hover>div.f p,.ozy-hover-card:hover>a.f p{color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;}
		
		.ozy-ticker-container{background-color: <?php echo logipro_ozy_get_theme_mod('content_color') ?> !important;}
		.ozy-ticker-container .ozy-ticker-caption{background-color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?> !important;}
		.ozy-ticker-container,.ozy-ticker-container .ozy-ticker-caption p{color: <?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;}
		.ozy-ticker-container .ozy-ticker-caption:after{border-color: transparent transparent transparent <?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?> !important;}
		/* Testimonial Box */
		.testimonial-box figcaption:before{
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?>;
		}
		.testimonial-box {
			background-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color') ?>;
			border-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;				
		}		
		/* File Download */	
		.file-download-widget-wrapper {background-color:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;}
		.file-download-widget-wrapper h4 {
			color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate3') ?> !important;
		}
		.file-download-widget{
			background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;
			color:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;
		}

		/* Shared Border Color */			
		.ozy-hover-card,.post .pagination>a,.ozy-border-color,#ozy-share-div.ozy-share-div-blog,.page-content table td,#content table tr,.post-content table td,.ozy-toggle .ozy-toggle-title,
		.ozy-toggle-inner,.ozy-tabs .ozy-nav li a,.ozy-accordion>h6.ui-accordion-header,.ozy-accordion>div.ui-accordion-content,.chat-row .chat-text,#sidebar .widget>h4,
		#sidebar .widget li,.ozy-content-divider,#post-author,.single-post .post-submeta>.blog-like-link,.widget ul ul,blockquote,.page-pagination>a,.page-pagination>span,#content select,body.search article.result,div.rssSummary,#content table tr td,#content table tr th,.facts-bar,.facts-bar>.heading,.ozy-tabs-menu li,.ozy-tab,#ozy-tickerwrapper,#ozy-tickerwrapper>strong,#single-blog-tags>a,.comment-body,#comments-form h3#reply-title,.ozy-news-box-ticker-wrapper .news-item, .shared-border-color {border-color:<?php echo logipro_ozy_get_theme_mod('primary_menu_separator_color') ?>;}

		table tr:nth-child(even) {background-color:<?php logipro_e_css($ozyLogiProHelper->change_opacity(logipro_ozy_get_theme_mod('primary_menu_separator_color'), .15)) ?>;}
		#content table tr.featured {border:2px solid <?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?> !important;}
		#ozy-tickerwrapper div.pagination>a.active>span,
		.header-line>span{background-color:<?php echo logipro_ozy_get_theme_mod('content_color_alternate') ?>;}
		.content-color-svg path{fill:<?php echo logipro_ozy_get_theme_mod('content_color') ?>;}
		
		/* Specific heading styling */	
	<?php
		$use_no_page_title_margin = $custom_header = false;
		if(!is_search() && !is_404() && isset($post->ID)) {
			/*to get custom post*/
			$post_id = $post->ID;
			if (is_single() && isset($post->post_type) && $post->post_type === 'post' && (int)logipro_ozy_get_theme_mod('page_blog_page_id')>0) { $post_id = logipro_ozy_get_theme_mod('page_blog_page_id'); }
			
			if(logipro_ozy_get_metabox('use_custom_title', 0, $post_id) == '1') {
				$_var = 'use_custom_title_group.0.ozy_logipro_meta_page_custom_title_';
				$h_height 	= logipro_ozy_get_metabox($_var . 'height', '90', $post_id);
				$h_bgcolor 	= logipro_ozy_get_metabox($_var . 'bgcolor', '', $post_id);
				$h_bgimage 	= logipro_ozy_get_metabox($_var . 'bg', '', $post_id);
				$h_bg_xpos	= logipro_ozy_get_metabox($_var . 'bg_x_position', '', $post_id);
				$h_bg_ypos	= logipro_ozy_get_metabox($_var . 'bg_y_position', '', $post_id);
				
				$h_css = (int)$h_height > 0 ? 'height:'. $h_height .'px;' : '';
				$h_css.= (int)$h_height > 0 ? $ozyLogiProHelper->background_style_render($h_bgcolor, $h_bgimage, 'cover', 'repeat', 'inherit', true, $h_bg_xpos, $h_bg_ypos) : '';
				echo '#page-title-wrapper{'. $h_css .'}';					
				$h_title_color = logipro_ozy_get_metabox($_var . 'color', 0, $post_id);
				if($h_title_color) {
					echo '#page-title-wrapper>div>h1{
						color:'. $h_title_color .';
					}';
				}
				$h_sub_title_color = logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_sub_title_color', 0, $post_id);
				if($h_sub_title_color) {
					echo '#page-title-wrapper>div>h4{
						color:'. $h_sub_title_color .';
						font-weight:300;
					}';
				}
				
				$h_title_position = logipro_ozy_get_metabox($_var . 'position', 0, $post_id);
				if($h_title_position) {
					echo '#page-title-wrapper {
						text-align:'. $h_title_position .';
						font-weight:300;
					}';
				}
				$custom_header = true;
			}else{
				echo '#page-title-wrapper{height:90px;}';
			}
		}else{				
			echo '#page-title-wrapper{height:90px;}';
		}
		
		echo 'body.no-content-top-padding #main>.container{padding-top:0!important;}';
		echo '@media screen and (min-width:1181px){body.no-menu-space #main{padding-top:0!important;}}';

		$ozyLogiProHelper->render_custom_fonts();

		return $ozyLogiProHelper->logipro_ozy_trim_all(ob_get_clean());
	}
endif;
?>