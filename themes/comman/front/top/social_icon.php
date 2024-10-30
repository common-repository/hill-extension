<?php
global $hill_global; 
if(get_theme_mod( 'display_social_top_icon',$hill_global['display_social_top_icon'])==true){
	?>
	<div class="social_icon_info">
		<div class="social_data">
			<?php foreach($hill_global['hill_social_icon_list'] as $key_hill_social_icon_list=>$val_hill_social_icon_list){ 
				if(get_theme_mod($key_hill_social_icon_list,'#')!=''){
			?>
				<a class="social_icon" href="<?php echo esc_attr(get_theme_mod($key_hill_social_icon_list,'#'));?>" target="_blank">
					<i class="<?php echo esc_attr($val_hill_social_icon_list['icon']);?>"></i>
				</a>
			<?php 
				}
			} ?>
		</div>
	</div>
	<?php
}