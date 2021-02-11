<?php $submenus = $menu->get_menus(); ?>
<?php if (!empty($submenus)): ?>
	<?php foreach ($submenus as $submenu): ?>
	<?php $sub_current = ($submenu === reset($submenus)) ? 1 : 0; ?>
	<?php logipro_e_html($submenu->render(array('current' => $current, 'sub_current' => $sub_current))); ?>
	<?php endforeach; ?>
<?php else: ?>
<div id="<?php echo esc_attr($menu->get_name()); ?>" class="vp-panel<?php if((isset($sub_current) and $sub_current) or (!isset($sub_current) and $current)) echo ' vp-current'; ?>">
	<h2><span><?php logipro_e_html($menu->get_title()); ?></span></h2>
	<?php foreach ($menu->get_controls() as $control): ?>
	<?php logipro_e_html($control->render()); ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>