<?php
function hill_breadcrumb_title() {
		
	if ( is_home() || is_front_page()):
		
		single_post_title();
		
	elseif ( is_day() ) : 
									
		printf( esc_html( 'Daily Archives: %s', 'hill-extension' ), get_the_date() );
	
	elseif ( is_month() ) :
	
		printf( esc_html( 'Monthly Archives: %s', 'hill-extension' ), (get_the_date( 'F Y' ) ));
		
	elseif ( is_year() ) :
	
		printf( esc_html( 'Yearly Archives: %s', 'hill-extension' ), (get_the_date( 'Y' ) ) );
		
	elseif ( is_category() ) :
	
		printf( esc_html( 'Category Archives: %s', 'hill-extension' ), (single_cat_title( '', false ) ));

	elseif ( is_tag() ) :
	
		printf( esc_html( 'Tag Archives: %s', 'hill-extension' ), (single_tag_title( '', false ) ));
		
	elseif ( is_404() ) :

		printf( esc_html( 'Error 404', 'hill-extension' ));
		
	elseif ( is_author() ) :
	
		printf( esc_html( 'Author: %s', 'hill-extension' ), (get_the_author( '', false ) ));			
		
	elseif ( class_exists( 'woocommerce' ) ) : 
		
		if ( is_shop() ) {
			woocommerce_page_title();
		}
		
		elseif ( is_cart() ) {
			the_title();
		}
		
		elseif ( is_checkout() ) {
			the_title();
		}
		
		else {
			the_title();
		}
	else :
			the_title();
			
	endif;
}