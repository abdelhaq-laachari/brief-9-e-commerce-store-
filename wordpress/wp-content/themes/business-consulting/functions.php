<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;



/*
 * BEGIN ENQUEUE PARENT ACTION
 * AUTO GENERATED - Do not modify or remove comment markers above or below:
 */
 
if ( ! function_exists( 'agency_starter_default_settings' ) ) :

function agency_starter_default_settings($param){
	$values = array (	 'background_color'=> '#fff', 
						 'page_background_color'=> '#fff', 
						 'woocommerce_menubar_color'=> '#fff', 
						 'woocommerce_menubar_text_color'=> '#333333', 
						 'link_color'=>  '#1790bf',
						 'main_text_color' => '#1a1a1a', 
						 'primary_color'=> '#25c2ff',
						 'header_bg_color'=> '#fff',
						 'header_text_color'=> '#333333',
						 'footer_bg_color'=> '#0f5284',
						 'footer_text_color'=> '#ffffff',
						 'header_contact_social_bg_color'=> '#25c2ff',
						 'footer_border' =>'1',
						 'hero_border' =>'1',
						 'header_layout' =>'1',
						 'heading_font' => 'Montserrat', 
						 'body_font' => 'Google Sans'					 
					 );
					 
	return $values[$param];
}

endif;

 
if ( !function_exists( 'business_consulting_locale_css' ) ):
    function business_consulting_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'business_consulting_locale_css' );

if ( !function_exists( 'business_consulting_parent_css' ) ):
    function business_consulting_parent_css() {
        wp_enqueue_style( 'business_consulting_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','fontawesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'business_consulting_parent_css', 10 );


if ( class_exists( 'WP_Customize_Control' ) ) {

	require get_template_directory() .'/inc/color-picker/alpha-color-picker.php';
}


function business_consulting_wp_body_open(){
	do_action( 'wp_body_open' );
}

if ( ! function_exists( 'business_consulting_the_custom_logo' ) ) :
	/**
	 * Displays the optional custom logo.
	 */
	function business_consulting_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
endif;

/**
 * @since 1.0.0
 * add home link.
 */
function business_consulting_nav_wrap() {
  $wrap  = '<ul id="%1$s" class="%2$s">';
  $wrap .= '<li class="hidden-xs"><a href="/"><i class="fa fa-home"></i></a></li>';
  $wrap .= '%3$s';
  $wrap .= '</ul>';
  return $wrap;
}



//load actions
require get_stylesheet_directory() .'/inc/functions.php';

/* 
 * add customizer settings 
 */
add_action( 'customize_register', 'business_consulting_customize_register' );  
function business_consulting_customize_register( $wp_customize ) {


	// banner image
	$wp_customize->add_setting( 'banner_image' , 
		array(
			'default' 		=> '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'banner_image' ,
		array(
			'label'          => __( 'Banner Image', 'business-consulting' ),
			'description'	=> __('Upload banner image', 'business-consulting'),
			'settings'  => 'banner_image',
			'section'        => 'theme_header',
		))
	);
	
	$wp_customize->add_setting('banner_link' , array(
		'default'    => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	
	
	$wp_customize->add_control('banner_link' , array(
		'label' => __('Banner Link', 'business-consulting' ),
		'section' => 'theme_header',
		'type'=> 'url',
	) );
	

	//breadcrumb 

	$wp_customize->add_section( 'breadcrumb_section' , array(
		'title'      => __( 'Header Breadcrumb', 'business-consulting' ),
		'priority'   => 3,
		'panel' => 'theme_options',
	) );


	$wp_customize->add_setting( 'breadcrumb_enable' , array(
		'default'    => false,
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'agency_starter_sanitize_checkbox',
	));

	$wp_customize->add_control('breadcrumb_enable' , array(
		'label' => __('Enable | Disable Breadcrumb','business-consulting' ),
		'section' => 'breadcrumb_section',
		'type'=> 'checkbox',
	));					
	
}

/**
 * @package twentysixteen
 * @subpackage business-consulting
 * Converts a HEX value to RGB.
 */
function business_consulting_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
	} elseif ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array(
		'red'   => $r,
		'green' => $g,
		'blue'  => $b,
	);
}


//load search widgets
require get_stylesheet_directory() .'/inc/search-widget.php';
//load post widgets
require get_stylesheet_directory() .'/inc/post-widget.php';




/*
 * https://developer.wordpress.org/reference/hooks/admin_notices/
 * Displays theme info / quick help 
 */
if ( isset( $_GET['hide_admin_notice'] ) ) {
		update_option('business_consulting_hide_admin_notice', 'dispose');
} else {
	$business_consulting_info = get_option('business_consulting_hide_admin_notice', 'show');
	if ($business_consulting_info != 'dispose' || $business_consulting_info ==""){ 
		add_action( 'admin_notices', 'agency_starter_help_notice' );
	}
}



if(!function_exists('agency_starter_help_notice')):

function agency_starter_help_notice() {
    $class = 'notice notice-info';
    $message = __( '! Install recomended plugins before installing demo', 'business-consulting' );
		
	$demo_msg = __( '1. Get Demo Contents & Tutorials', 'business-consulting');	
	$demo_install = __( '2. Install Demo', 'business-consulting');	
 	
	$dismiss = __( 'Do not display this Notice', 'business-consulting');

    printf( '<div class="%1$s"> <p><strong><span>%2$s</span></strong> &nbsp;&nbsp; 
	<strong><a href="%3$s" target="_blank"  class="button button-primary">%4$s</a></strong> &nbsp;&nbsp;
	<strong><a href="%5$s" class="button button-primary">%6$s</a></strong> &nbsp;&nbsp;
	<em><a href="?hide_admin_notice" target="_self"  class="dismiss-notice" style="float:right">%7$s</a></em> </p></div>', 
	esc_attr( $class ), 
	esc_html( $message ),
	
	esc_url( agency_starter_tutorial ), 
	esc_html( $demo_msg ),
	
	esc_url( home_url().'/wp-admin/tools.php?page=advanced-import-tool' ), 
	esc_html( $demo_install ),	
	
	esc_html( $dismiss ) );
}

endif;

