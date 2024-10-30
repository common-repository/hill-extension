/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    jQuery('.hill_search_icon ').on('click', function(e) {
        e.preventDefault();
        jQuery('body').addClass('hill_modal-active');
        jQuery('.hill_searchform').addClass("open");
      });
      jQuery('.hill_search_close').on('click', function(e){
         e.preventDefault();
         jQuery('body').removeClass('hill_modal-active');
        jQuery('.hill_searchform').removeClass("open");
      });
      jQuery('.hill_search_model_button').on('keydown', function(e){
            jQuery('.hill_search_close').focus();
         e.preventDefault();
     });
     jQuery(window).on('scroll', function() {
        if (jQuery('.enable_stricky').length>0) {
            if (jQuery(window).scrollTop() >= 250) {
                jQuery('.enable_stricky').addClass('hill-is-sticky-menu');
            }
            else {
                jQuery('.enable_stricky').removeClass('hill-is-sticky-menu');
            }
        }
    });

	
    //scroll button add js 
    jQuery(window).on('scroll', function () {
         if (jQuery('.scrollingUp').length>0) {
            if (jQuery(this).scrollTop() > 200) {
                jQuery('.scrollingUp').addClass('is-active');
            } else {
                jQuery('.scrollingUp').removeClass('is-active');
            }
         }
    });
    jQuery('.scrollingUp').on('click', function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    //call slider
    if (jQuery('.hill_banner_slider').length>0) {
        jQuery(".hill_banner_slider").each(function(){
            
            jQuery(this).owlCarousel({
                loop:true,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        });
    }
    if (jQuery('.hill_tesimonial_slider_inner').length>0) {
        jQuery(".hill_tesimonial_slider_inner").each(function(){
            jQuery(this).owlCarousel({
                loop:true,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
        });
    }
    if (jQuery('.hill_sponsors_slider_inner').length>0) {
        jQuery(".hill_sponsors_slider_inner").each(function(){
            jQuery(this).owlCarousel({
                loop:true,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                margin:10,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:5
                    }
                }
            })
        });
    }
    AOS.init();
}() );
