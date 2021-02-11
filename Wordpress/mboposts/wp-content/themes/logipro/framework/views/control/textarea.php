<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>

<textarea class="vp-input" name="<?php echo esc_attr($name); ?>"><?php logipro_e_html($value); ?></textarea>

<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot'); ?>