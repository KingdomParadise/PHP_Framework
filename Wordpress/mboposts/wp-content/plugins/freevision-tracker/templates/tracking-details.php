<?php 
get_header(); 

if ( have_posts() ) while ( have_posts() ) : the_post();
?>
<div id="content" class="<?php echo esc_attr(logipro_get_ozy_data('_page_content_css_name')); ?>">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

        <article>
            <?php
                the_content();
                
                edit_post_link('<p><small>'. esc_attr('Edit this entry', 'freevision-tracker') .'</small></p>','',''); 
            ?>
        </article>

    </div><!-- #post-## -->
    
    <div class="clear"></div> 
</div><!--#content-->

<?php 
endwhile; /* end loop */
get_footer(); 
?>