<?php
echo '<div id="ozyMegaMenuStyleWindow"><div>
			<p><strong>'. esc_attr__('Note: Following options only available when Classic menu option in use', 'logipro') .'</strong></p>
			<p>
				<label for="custom-menu-use-custom">'. esc_attr__('Use Custom Options?', 'logipro') .'<br />
					<span>
						<input id="custom-menu-use-custom" type="checkbox" value="1"/>
						<br/>
						<small>'. esc_attr__('Check this option to enable custom Background and Foreground color for this menu item.', 'logipro') .'</small>
					</span>
				</label>
			</p>
			<p>
				<label for="custom-menu-bg-color">'. esc_attr__('Background Color Start', 'logipro') .'<br />
					<span>
						<input id="custom-menu-bg-color" type="text" class="widefat ozy-simple-color-picker" value="#352c66"/>
					</span>
				</label>
			</p>
			<p>
				<label for="custom-menu-fn-color">'. esc_attr__('Foreground Color', 'logipro') .'<br />
					<span>
						<input id="custom-menu-fn-color" type="text" class="widefat ozy-simple-color-picker" value="#ffffff"/>
					</span>
				</label>
			</p>
			
			<p>
				<label for="custom-menu-request-a-rate-form">'. esc_attr__('Show Request a Rate Form?', 'logipro') .'<br />
					<span>
						<input id="custom-menu-request-a-rate-form" type="checkbox" value="1"/>
						<br/>
						<small>'. esc_attr__('By enabling this option you can activate Request A Rate form.', 'logipro') .'</small>
					</span>
				</label>
			</p>
			
			<p>
				<label for="custom-menu-tracking">'. esc_attr__('Show Tracking Form?', 'logipro') .'<br />
					<span>
						<input id="custom-menu-tracking" type="checkbox" value="1"/>
						<br/>
						<small>'. esc_attr__('By enabling this option you can show tracking form as dropdown form. Make sure you are not using it with Request a Rate Form option, and requires necessary plugin activated and configured in order to display tracking form.', 'logipro') .'</small>
					</span>
				</label>
			</p>			

			<p>
				<a href="javascript:void(0);" class="button-primary" id="custom-menu-bg-apply">'. esc_attr__('Apply Changes', 'logipro') .'</a>
				<br/>
				<i>'. esc_attr__('Please note, you have to use "Save Menu" in order to get this changes applied', 'logipro') .'</i>
			</p>
			
								
</div></div>';
?>