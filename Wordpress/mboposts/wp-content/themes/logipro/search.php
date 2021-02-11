<?php 
get_header(); 
?>
	<div id="content" class="<?php echo esc_attr(logipro_get_ozy_data('_page_content_css_name')); ?> search">
		<div id="search-results" <?php post_class('page'); ?>>
			<article>
            	<div class="post-content page-content">
                	<div>
						<?php		
                            if (have_posts()) : 
                                while (have_posts()) : the_post(); 
                        ?>
                                    <article class="result">
                                        <?php if ( has_post_thumbnail() ) { echo '<a href="'. esc_url(get_permalink()) .'">'; the_post_thumbnail('logipro_showbiz'); echo '</a>'; } ?>
                                        <h4><a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title() ?></a></h4>
                                        <p><?php echo logipro_ozy_excerpt_max_charlength(100, true) ?></p>
                                        <strong><?php $post_type_obj = get_post_type_object(get_post_type()); if(isset($post_type_obj->labels->singular_name)) {echo esc_attr($post_type_obj->labels->singular_name);} ?></strong>
                                    </article>
	     				<?php
								endwhile;
								wp_reset_postdata();
                            else:
						?>
                        <div class="no-results">
                            <h2><?php esc_attr_e('No Results', 'logipro'); ?></h2>
                            <p><?php esc_attr_e('Please feel free try again!', 'logipro'); ?></p>
                            <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
                        </div><!--noResults-->
                        <?php endif; ?>
					</div>

        		</div>
			</article>
		</div>
	</div><!--#content-->
<?php 
get_footer();
?>