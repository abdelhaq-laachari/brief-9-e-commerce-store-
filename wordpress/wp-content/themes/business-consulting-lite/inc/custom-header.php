<?php
/**
 * Custom header
 */

function business_consulting_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'business_consulting_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 100,
		'wp-head-callback'       => 'business_consulting_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'business_consulting_lite_custom_header_setup' );

if ( ! function_exists( 'business_consulting_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see business_consulting_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'business_consulting_lite_header_style' );
function business_consulting_lite_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .wrap_figure{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'business-consulting-lite-style', $custom_css );
	endif;
}
endif;