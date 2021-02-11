<?php
	$color_meta_path = 'ozy_logipro_meta_post.ozy_logipro_meta_post_thumbnail_color_group.0.ozy_logipro_meta_post_thumbnail_color_';

	while ( $the_query->have_posts() ) {
		$the_query->the_post();							
	
		logipro_ozy_blog_more();
		
		$excerpt_character_count = 130; $title_color = $text_color = $overlay_color = ''; $heading_size = 'h5';
		$post_item_size = esc_attr(vp_metabox('ozy_logipro_meta_post.ozy_logipro_meta_post_item_size')); $post_item_size = !$post_item_size ? 'small' : $post_item_size;
		$post_type = esc_attr(vp_metabox('ozy_logipro_meta_post.ozy_logipro_meta_post_item_type')); $post_type = $post_type ? $post_type : 'standard';
		
		if(vp_metabox('ozy_logipro_meta_post.ozy_logipro_meta_post_thumbnail_color')==='1') {
			$title_color = ' style="color:'. esc_attr(vp_metabox($color_meta_path . 'heading')) .'!important"';
			$text_color = ' style="border-color:'. esc_attr(vp_metabox($color_meta_path . 'text')) .';color:'. esc_attr(vp_metabox($color_meta_path . 'text')) .'!important"';
			$overlay_color = ' style="background-color:'. esc_attr(vp_metabox($color_meta_path . 'overlay')) .'!important"';
		}
		
		/*get post format*/
		logipro_set_ozy_data('ozy_temporary_post_format', get_post_format());
		logipro_set_ozy_data('ozy_current_post_format', get_post_format());
		if ( false === logipro_get_ozy_data('ozy_current_post_format') ) {
			logipro_set_ozy_data('ozy_current_post_format', 'standard');
		}
		
		$ozy_current_post_format = logipro_get_ozy_data('ozy_current_post_format');

?>
<div <?php post_class('post category-all post-single post-format-'. esc_attr($ozy_current_post_format) . ' post-' . esc_attr($post_item_size) . ' post-type-' . esc_attr($post_type) );?>>                        
<?php
    if($post_type !== 'colorbox') {
        $thumbnail_image_src = $post_image_src = array();
        if ( has_post_thumbnail() ) { 
            $thumbnail_image_src 	= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'logipro_blog' , false );
            $post_image_src 		= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' , false );						

            if ( isset($thumbnail_image_src[0]) && isset($post_image_src[0])) { 
                if($post_item_size === 'large') {
                    echo '<div class="featured-thumbnail" style="background-image:url('. esc_url($thumbnail_image_src[0]) .')"><a href="'. esc_url($thumbnail_image_src[0]) .'" class="fancybox"></a>'; the_post_thumbnail('logipro_blog'); echo '</div>';										
                }else{
                    echo '<div class="featured-thumbnail"><a href="'. esc_url($thumbnail_image_src[0]) .'" class="fancybox"></a>'; 
                    the_post_thumbnail('logipro_blog'); 
                    echo '<div class="post-meta"><span '. esc_attr($overlay_color) .'>';the_category('</span><span '. esc_attr($overlay_color) .'>');echo '</span></div><!--#post-meta-->';
                    echo '</div>';
                }
            }
        }
    }
    ?>
    <div class="caption" <?php echo esc_attr($post_type === 'colorbox' ? esc_attr($overlay_color) : ''); ?>>
        <?php
        if($post_item_size === 'large' || $post_type === 'colorbox') {
            echo '<div class="post-meta"><span '. esc_attr($overlay_color) .'>';the_category('</span><span '. esc_attr($overlay_color) .'>');echo '</span></div><!--#post-meta-->';
        }
        if($post_item_size === 'large' || $post_type === 'colorbox') {
            $excerpt_character_count = 160;
            $heading_size = 'h3';
        }
        echo '<'. $heading_size .' class="post-title">';
            echo '<a href="'. esc_url(get_permalink()) .'" title="'. esc_attr(get_the_title()) .'" class="a-page-title" rel="bookmark" '. esc_attr($title_color) .'>'. esc_html( get_the_title() ? get_the_title() : get_the_time(get_option('date_format')) ) .'</a>';
        echo '</'. esc_attr($heading_size) .'>';
        echo '<p '. esc_attr($text_color) .'>' . logipro_ozy_excerpt_max_charlength($excerpt_character_count, true, true) . '</p>';
        
        if($post_item_size === 'large' || $post_type === 'colorbox') {
            echo '<a href="'. esc_url(get_permalink()) .'" class="read-more" '. esc_attr($text_color) .'>'. esc_attr__('READ MORE &rarr;', 'logipro') .'</a>';
        }
        ?>
    </div>
</div><!--.post-single-->   
<?php } ?>
