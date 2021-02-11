		<?php 
			if(logipro_get_ozy_data('hide_everything_but_content') < 1): ?> 
        
        <div class="clear"></div>
        
        </div><!--.container-->    
		<?php 
			logipro_ozy_blog_pagination();
			
            /*footer widget bar and footer*/
			include( locate_template( 'include/footer-bars.php', false, false ) ); 
        ?>
        
    </div><!--#main-->
    
    <?php
		endif;	
		
		if(logipro_ozy_get_theme_mod('back_to_top_button') == '1' && logipro_get_ozy_data('hide_everything_but_content') <= 0 ) {	
	?>
            <div class="logipro-btt-container">
                <div class="top logipro-btt"><img src="<?php echo esc_url(LOGIPRO_OZY_BASE_URL) ?>images/up-arrow.svg" class="svg" /><img src="<?php echo esc_url(LOGIPRO_OZY_BASE_URL) ?>images/up-arrow-2.svg" class="svg" /></div>
            </div>
    <?php
		}
		
		if(isset($ozyLogiProHelper->footer_html)) logipro_e_html($ozyLogiProHelper->footer_html);		
		
		echo '</div>';

		if(logipro_get_ozy_data('is_animsition_active')) echo '</div><!--.animsition-->';
		
		wp_footer();		
	?>
</body>
</html>