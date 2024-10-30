<?php
global $hill_global; 
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && get_theme_mod( 'hill_display_cart_icon',$hill_global['hill_display_cart_icon'])==true ) {									
		?>
		<div class="hill_cart_icon ">							
			<a href="<?php echo esc_attr(wc_get_cart_url()); ?>" class="hill_icon_header">
				<i class="fa fa-cart-plus" aria-hidden="true"></i>
			</a>
		</div>
	<?php 
} 
?>