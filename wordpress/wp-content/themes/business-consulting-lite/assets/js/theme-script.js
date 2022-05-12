jQuery(function($){
 	"use strict";
   	jQuery('.gb_navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
  	});
});

function business_consulting_lite_gb_Menu_open() {
	jQuery(".side_gb_nav").addClass('show');
}
function business_consulting_lite_gb_Menu_close() {
	jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
	$('.gb_toggle').click(function () {
        business_consulting_lite_Keyboard_loop($('.side_gb_nav'));
    });

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 120) {
		jQuery('.menu_header').addClass('fixed');
	} else {
			jQuery('.menu_header').removeClass('fixed');
	}
});    

});

jQuery(window).load(function() {
	jQuery(".preloader").delay(2000).fadeOut("slow");
});

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 100) {
		jQuery('.scrollup').addClass('is-active');
	} else {
  		jQuery('.scrollup').removeClass('is-active');
	}
});

jQuery( document ).ready(function() {
	jQuery('#business-consulting-lite-scroll-to-top').click(function (argument) {
		jQuery("html, body").animate({
		       scrollTop: 0
		   }, 600);
	})
})