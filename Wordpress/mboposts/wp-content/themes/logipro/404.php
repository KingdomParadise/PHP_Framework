<?php
// Look for custom 404 page, Apperance > Theme Options > Layout > Content / Page / Post : Custom 404 Page
$notfound_page_id = logipro_ozy_get_theme_mod("page_404_page_id");
if((int)$notfound_page_id > 0 && get_page($notfound_page_id)) {
	wp_redirect(get_permalink($notfound_page_id));
	exit();
}

get_header(); 
?>
<div id="content">
	<div id="error404" class="post">
        <div id="animation_container">
            <canvas id="canvas" width="100%"></canvas>
            <div id="dom_overlay_container">
            </div>
        </div>
        <p class="content-color"><strong><?php esc_html_e('Oops!', 'logipro'); ?></strong> <?php esc_html_e('We can\'t seem to find the page you\'re looking for.', 'logipro'); ?></p>
        <p><a href="<?php echo esc_url(LOGIPRO_OZY_HOME_URL) ?>" class="go-home generic-button"><?php esc_html_e('RETURN HOME', 'logipro'); ?></a></p>        
	</div><!--#error404 .post-->
</div><!--#content-->

<?php get_footer(); ?>