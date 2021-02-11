<?php
	if ( post_password_required() ) {
		return;
	}
?>
<div id="comments">
	<?php global $post; ?>
	<!-- Prevents loading the file directly -->
	<?php if(!function_exists('logipro_ozy_theme_setup')) : ?>
	    <?php die(esc_attr__('Please do not load this page directly. Thanks and have a great day!', 'logipro')); ?>
	<?php endif; ?>
	
	<!-- Password Required -->
	<?php if(isset($post->post_password) && !empty($post->post_password)) : ?>
	    <?php if(isset($_COOKIE['wp-postpass_' . COOKIEHASH]) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	    <?php endif; ?>
	<?php endif; ?>
	
	<?php 
	if ( have_comments() ):
	?>
		<h3><?php esc_attr_e('Comments', 'logipro'); echo '<span>'; comments_number('0', '1','%'); echo '</span>';?></h3>
	    <ol>
			<?php wp_list_comments( array('avatar_size' => '60', 'short_ping'  => true) ); ?>
	    </ol>
	    <?php if (isset($trackback) && $trackback == true) { ?><!-- checks for comment type: trackback -->
	    <h3><?php esc_html_e('Trackbacks', 'logipro') ?></h3>
		    <ol>
		    	<!-- outputs trackbacks -->
			    <?php foreach ($comments as $comment) : ?>
				    <?php $comment_type = get_comment_type(); ?>
				    <?php if($comment_type != 'comment') { ?>
					    <li><?php comment_author_link() ?></li>
				    <?php } ?>
			    <?php endforeach; ?>
		    </ol>
	    <?php } ?>
	<?php
	endif; ?>
	
    <div id="comment-navigation" class="page-pagination">
	<?php paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;')); ?>
    </div>
    
	<div id="comments-form">
	    <div id="respond" class="comment-respond">    
		<?php if(comments_open()) : ?>
        <small><a rel="nofollow" id="cancel-comment-reply-link" href=<?php echo esc_url(get_permalink()) ?>#respond" style="display:none;"><?php esc_attr_e('Cancel reply', 'logipro') ?></a></small>
			<?php if(get_option('comment_registration') && !$user_ID) : ?>
				<p><?php esc_attr_e('Our apologies, you must be ', 'logipro'); ?><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo esc_url(get_permalink()); ?>"><?php esc_attr_e('logged in', 'logipro'); ?></a><?php esc_attr_e(' to post a comment.', 'logipro'); ?></p><?php else : ?>
                <?php 
					$comment_form_fields = array(					
						'author' => 
							'<p class="full-input">
								<label for="author" class="none">'. esc_attr__('NAME', 'logipro') .' <small>' . ($req ? "<span class='required'>*</span>" : "") .'</small></label>
								<input type="text" name="author" id="author" value="'. esc_attr($comment_author) .'" placeholder="'. esc_attr__('NAME', 'logipro') .' ' . ($req ? "(required)" : "") .'" size="22" tabindex="1" />
							</p>',			
						'email' => 
							'<p class="full-input">
								<label for="email" class="none">'. esc_attr__('MAIL (will not be shared)', 'logipro') .' <small>' . ($req ? "<span class='required'>*</span>" : "") .'</small></label>
								<input type="text" name="email" id="email" value="'. esc_attr($comment_author_email) .'" placeholder="'. esc_attr__('MAIL (will not be shared)', 'logipro') .' ' . ($req ? "(required)" : "") .'" size="22" tabindex="3" />
							</p>'						
					);
					
					comment_form( array(
						'id' => 'commentform',
						'fields' => apply_filters( 'comment_form_default_fields', $comment_form_fields ),
						'comment_field' => '
							<p class="full-input">
								<label for="comment" class="none">'. esc_attr__('COMMENT', 'logipro') .'</label>
								<textarea name="comment" id="comment" cols="100%" placeholder="'. esc_attr__('COMMENT', 'logipro') .'" rows="10" tabindex="4"></textarea>
							</p>'
					));
				?>
			<?php endif; ?>
		<?php else : ?>
        	<?php if(logipro_ozy_get_theme_mod('page_blog_comment') == '1') { ?>
			<p><?php esc_attr_e('The comments are closed.', 'logipro'); ?></p>
            <?php } ?>
		<?php endif; ?>
        </div>
	</div><!--#commentsForm-->
</div><!--#comments-->