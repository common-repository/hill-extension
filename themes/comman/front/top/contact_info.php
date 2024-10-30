<?php
global $hill_global;
?>
<div class="top-contact-info">
	<?php if(!empty(get_theme_mod( 'hill_contact_info',$hill_global['hill_contact_info'] ))){ ?>
		<div class="contact_info">
			<a href="tel:<?php echo esc_html(get_theme_mod( 'hill_contact_info',$hill_global['hill_contact_info'] )); ?>">
				<i class="fa fa-phone"></i>
				<span><?php echo esc_html(get_theme_mod( 'hill_contact_info',$hill_global['hill_contact_info'] )); ?></span>
			</a>
		</div>
	<?php } ?>
	<?php if(!empty(get_theme_mod( 'hill_email_info',$hill_global['hill_email_info']))){ ?>
		<div class="email_info">
			<a href="mailto:<?php echo esc_html(get_theme_mod( 'hill_email_info',$hill_global['hill_email_info'])); ?>">
				<i class="fa fa-envelope"></i>
				<span><?php echo esc_html(get_theme_mod( 'hill_email_info',$hill_global['hill_email_info'])); ?></span>
			</a>
		</div>
	<?php } ?>
</div>