<?php if(defined('LOGIPRO_OZY_ESSENTIALS_ACTIVATED')) { ?>
                    <div class="post-submeta">
                        <a href="<?php echo esc_url(get_permalink()) ?>" class="button blog-like-link content-color" data-post_id="<?php echo esc_attr($post->ID); ?>"><i class="oic-heart-2"></i><?php esc_attr_e('LIKE', 'logipro');echo '<span>';echo (int)get_post_meta($post->ID, "ozy_post_like_count", true); ?></span></a>
                        <a href="http://www.facebook.com/share.php?u=<?php echo esc_url(get_permalink()) ?>" class="blog-share-facebook"><span class="symbol">facebook</span><?php esc_attr_e('SHARE', 'logipro') ?></a>
                        <a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()) ?>" class="blog-share-twitter"><span class="symbol">twitterbird</span><?php esc_attr_e('TWEET', 'logipro') ?></a>
                    </div>
<?php } ?>