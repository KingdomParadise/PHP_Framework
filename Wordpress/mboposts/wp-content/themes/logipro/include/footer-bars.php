            <?php if(logipro_get_ozy_data('hide_everything_but_content') <= 0) { ?>
				<?php if(logipro_ozy_get_metabox('hide_footer_widget_bar') !== '1' && logipro_ozy_get_metabox('hide_footer_widget_bar') !== '2') { ?>
                
						<?php
                        if ( is_active_sidebar( "ozy-footer-widget-bar-one" . logipro_get_ozy_data('wpml_current_language_') ) ||
                            is_active_sidebar( "ozy-footer-widget-bar-two" . logipro_get_ozy_data('wpml_current_language_') ) ||
                            is_active_sidebar( "ozy-footer-widget-bar-three" . logipro_get_ozy_data('wpml_current_language_') ) ||
                            is_active_sidebar( "ozy-footer-widget-bar-four" . logipro_get_ozy_data('wpml_current_language_') ) ) {
                        ?>
                <div id="footer-widget-bar" class="widget">
                    <?php if ( is_active_sidebar( "ozy-footer-widget-bar-one" . logipro_get_ozy_data('wpml_current_language_') ) ) { ?>
                    <section class="widget-area"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ozy-footer-widget-bar-one" . logipro_get_ozy_data('wpml_current_language_')) ) : ?><?php endif; ?></section>
                    <?php } ?>
                    <?php if ( is_active_sidebar( "ozy-footer-widget-bar-two" . logipro_get_ozy_data('wpml_current_language_') ) ) { ?>
                    <section class="widget-area"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ozy-footer-widget-bar-two" . logipro_get_ozy_data('wpml_current_language_')) ) : ?><?php endif; ?></section>
                    <?php } ?>
                    <?php if ( is_active_sidebar( "ozy-footer-widget-bar-three" . logipro_get_ozy_data('wpml_current_language_') ) ) { ?>
                    <section class="widget-area"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ozy-footer-widget-bar-three" . logipro_get_ozy_data('wpml_current_language_')) ) : ?><?php endif; ?></section>
                    <?php } ?>
                    <?php if ( is_active_sidebar( "ozy-footer-widget-bar-four" . logipro_get_ozy_data('wpml_current_language_') ) ) { ?>
                    <section class="widget-area"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("ozy-footer-widget-bar-four" . logipro_get_ozy_data('wpml_current_language_')) ) : ?><?php endif; ?></section>
                    <?php } ?>
                </div><!--#footer-widget-bar-->
                <?php 
						}
					}?>
                <?php if(logipro_ozy_get_metabox('hide_footer_widget_bar') !== '2') { ?>
                <div id="footer"><footer>
	                <div class="container">
                    	<?php if(logipro_ozy_get_theme_mod('section_footer_our_partners') == '1') { ?>
                    	<div id="footer-slider-caption" class="no-css">
                        	<h3><?php esc_html_e('Our Partners', 'logipro') ?></h3>
                        </div>
                        <div id="footer-slider-wrapper" class="no-css">
                        <?php
							$footer_carousel_settings = logipro_ozy_get_theme_mod( 'section_footer_clients' );
							if(is_array($footer_carousel_settings)) {
								echo '<div class="carousel flickity-carousel team-carousel" data-flickity=\'{ "pageDots": true, "prevNextButtons": false, "groupCells": 5, "contain" : true, "cellAlign": "left", "adaptiveHeight": false, "imagesLoaded": false, "setGallerySize": false, "autoPlay": 5000 }\'>';
								foreach( $footer_carousel_settings as $setting ) {
									$carousel_image = wp_get_attachment_image_src($setting['clients_carousel_image'], 'large');
									echo '<div class="carousel-cell"><img src="'. esc_url($carousel_image[0]) .'" /></div>';
								}
								echo '</div>';
							}
						?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="container <?php echo (isset($footer_carousel_settings) &&  is_array($footer_carousel_settings)) ? 'last':'' ?>">
                        <?php
							$tmp_lang = str_replace('_', '', logipro_get_ozy_data('wpml_current_language_'));   
							if(logipro_ozy_get_theme_mod('section_footer_copyright_text' . $tmp_lang)) {
								echo '<div id="footer-copyright"><span>' . html_entity_decode(logipro_ozy_get_theme_mod('section_footer_copyright_text' . $tmp_lang)) . '</span></div>';
							}
							if(logipro_ozy_get_theme_mod('section_footer_social_icons' . $tmp_lang)) {
								echo '<div id="social-icons">' . PHP_EOL;
								logipro_header_social_icons();
								echo '</div>' . PHP_EOL;
							}
                        ?>
                    </div><!--.container-->
                </footer></div><!--#footer-->
                <?php } ?>
            <?php } ?>