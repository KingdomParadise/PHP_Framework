		<?php 
		if(logipro_get_ozy_data('hide_everything_but_content') <= 1) { 
		?>
            <header id="header" class="menu-align-<?php echo esc_attr(logipro_get_ozy_data('menu_align'));?>">
            	<div id="header-sliding-bg"></div>
                <div class="logo">
                    <?php
                    if(logipro_ozy_get_theme_mod('use_custom_logo') == '1') {
                        echo '<a href="'. esc_url(get_home_url('/')) .'" id="logo">';
                        echo '<img id="logo-default" src="'. esc_url(logipro_ozy_get_theme_mod('custom_logo')) .'" '. (logipro_ozy_get_theme_mod('custom_logo_retina') ? 'data-at2x="'. esc_url(logipro_ozy_get_theme_mod('custom_logo_retina')) .'"' : '') .' data-src="'. esc_url(logipro_ozy_get_theme_mod('custom_logo')) .'" alt="logo"/>';
                        echo '</a>';												
                    } else {
                         echo '<h1><a href="'. esc_url(home_url('/')) .'/" title="'. esc_attr(get_bloginfo('description')) .'">'. esc_html(get_bloginfo('name')) .'</a></h1>';
                    }

					logipro_menu_bar_contact_info();
                    ?>
                </div>
                                
                <div class="header-menu-wrapper">
                	<div>
                    	<?php
							if(defined('FREEVISION_TRACKER_ACTIVATED') && FREEVISION_TRACKER_ACTIVATED == 1) {
								echo '<a href="#tracking-form" id="tracking-form">'. esc_attr('TRACKING', 'logipro') .'</a>';
								echo do_shortcode('[ozy_vc_freevision_tracker is_inline="false"]');
							}
							
							if(logipro_ozy_get_theme_mod('request_a_rate_form' . logipro_get_ozy_data('wpml_current_language_'))) {
		                        echo '<a href="#" id="request-a-rate-button">' 
								. logipro_ozy_get_theme_mod('request_a_rate_menu_title' 
								. logipro_get_ozy_data('wpml_current_language_')) .'</a>';
							}
                        
							logipro_wpml_language_switcher(false);
						?>
                    </div>
                    <a href="#menu" id="main-menu-button" data-defaultcaption="<?php esc_attr_e('Menu', 'logipro') ?>" data-closecaption="<?php esc_attr_e('Close', 'logipro') ?>"><div id="nav-icon1"><span></span><span></span><span></span><p class="content-font-family"><?php esc_attr_e('Menu', 'logipro') ?></p></div></a>
					<?php if(logipro_ozy_get_theme_mod('primary_menu_search' . logipro_get_ozy_data('wpml_current_language_')) != '-1') { ?>
                    <a href="#search" id="main-search-button"><i class="oic-pe-icon-7-stroke-24"></i></a>
					<?php } ?>
                </div>

                <nav id="drop-menu-wrapper">
                	<div>
						<?php
                            $args = array(
                                'menu_class' => 'primary-menu', 
                                'container' => '',
                                'fallback_cb' => true,								
                                'walker' => new BootstrapNavMenuWalker
                            );
                            if (has_nav_menu('logged-in-menu') && has_nav_menu('header-menu')) {
                                $args['theme_location'] = (is_user_logged_in() ? 'logged-in-menu' : 'header-menu');							
                            }else{
                                logipro_set_ozy_data('custome_primary_menu', true); //if no location selected, make sure SEARCH button will be visible on menu
                            }
                            if(logipro_ozy_get_metabox('custom_menu') !== '-1' && logipro_ozy_get_metabox('custom_menu')) {
                                $args['menu'] = logipro_ozy_get_metabox('custom_menu');
                                logipro_set_ozy_data('custome_primary_menu', true);
                            }
                            wp_nav_menu( $args );
							
							/* Extended Info Bar */
							if(logipro_ozy_get_theme_mod('menu_extended_info_bar_show' . logipro_get_ozy_data('wpml_current_language_'))) {
                        ?>
                        <div class="drop-menu-info-section">
                            <div><?php echo logipro_ozy_get_theme_mod('menu_extended_info_bar_box_1' . logipro_get_ozy_data('wpml_current_language_')); ?></div>
                            <div><?php echo logipro_ozy_get_theme_mod('menu_extended_info_bar_box_2' . logipro_get_ozy_data('wpml_current_language_')); ?></div>
                            <div><?php echo logipro_ozy_get_theme_mod('menu_extended_info_bar_box_3' . logipro_get_ozy_data('wpml_current_language_')); ?></div>
                            <div><?php echo logipro_ozy_get_theme_mod('menu_extended_info_bar_box_4' . logipro_get_ozy_data('wpml_current_language_')); ?></div>
                            <?php if(logipro_ozy_get_theme_mod('menu_extended_info_bar_social_icons' . logipro_get_ozy_data('wpml_current_language_'))) { ?>
                            <div class="drop-menu-social-icons">
	                            <?php logipro_header_social_icons(); ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>

                </nav>
                
            </header><!--#header-->
			
            <?php if(logipro_ozy_get_theme_mod('request_a_rate_form' . logipro_get_ozy_data('wpml_current_language_')) && logipro_ozy_get_theme_mod('request_a_rate_custom_shortcode' . logipro_get_ozy_data('wpml_current_language_')) == '') {//contact form 7?>
            <div id="request-a-rate" class="content-font-family">
            	<div>
                    <a href="#menu" id="request-a-rate-close-button"><div id="nav-icon2"><span></span><span></span><span></span><p class="content-font-family"><?php esc_attr_e('Close', 'logipro') ?></p></div></a>
                    <h2 class="heading-font-family"><?php echo logipro_ozy_get_theme_mod('request_a_rate_title' . logipro_get_ozy_data('wpml_current_language_'))?></h2>
                    <p><?php echo logipro_ozy_get_theme_mod('request_a_rate_description' . logipro_get_ozy_data('wpml_current_language_'))?></p>
                    <?php echo do_shortcode('[contact-form-7 id="'. esc_attr(logipro_ozy_get_theme_mod('request_a_rate_cf7_form_id' . logipro_get_ozy_data('wpml_current_language_'))) .'"]'); ?>
                </div>
            </div>
			<?php 
				}
			?>

            <?php if(logipro_ozy_get_theme_mod('request_a_rate_custom_shortcode' . logipro_get_ozy_data('wpml_current_language_')) != '') {//custom shortcode?>
            <div id="request-a-rate" class="content-font-family">
            	<div>
                    <a href="#menu" id="request-a-rate-close-button"><div id="nav-icon2"><span></span><span></span><span></span><p class="content-font-family"><?php esc_attr_e('Close', 'logipro') ?></p></div></a>
                    <h2 class="heading-font-family"><?php echo logipro_ozy_get_theme_mod('request_a_rate_title' . logipro_get_ozy_data('wpml_current_language_'))?></h2>
                    <p><?php echo logipro_ozy_get_theme_mod('request_a_rate_description' . logipro_get_ozy_data('wpml_current_language_'))?></p>
                    <?php echo do_shortcode(logipro_ozy_get_theme_mod('request_a_rate_custom_shortcode' . logipro_get_ozy_data('wpml_current_language_'))); ?>
				</div>
            </div>
			<?php } ?>  

			<?php
				if(logipro_ozy_get_theme_mod('primary_menu_search' . logipro_get_ozy_data('wpml_current_language_')) != '-1') {
			?>
            <div id="search-overlay" class="content-font-family">
                <a href="#close-search-overlay" id="close-search-overlay"><div id="nav-icon3"><span></span><span></span><span></span><p class="content-font-family"><?php esc_attr_e('Close', 'logipro') ?></p></div></a>
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="wp-search-form">
                    <p class="content-font"><?php esc_html_e('SEARCH SITE BY TYPING (ESC TO CLOSE)', 'logipro') ?></p>
                    <input type="text" name="s" id="search" autocomplete="off" placeholder="<?php echo get_search_query() == '' ? esc_attr__('Type and hit Enter', 'logipro') : get_search_query() ?>" />
                </form>    	
            </div>
        <?php
				}
		}
        ?>      