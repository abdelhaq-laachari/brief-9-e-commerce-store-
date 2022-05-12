<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'agency-starter' ); ?></a>
<?php 
agency_starter_wp_body_open(); 
if(get_theme_mod("box_layout_mode", false))	echo '<div class="box-layout-style">'; 
?>
<div id="page" class="site">
	<div class="site-inner">
		

		<?php get_template_part( 'templates/header', 'banner' ); ?>
		
		<header id="masthead" class="site-header" role="banner" >

			<?php 
			get_template_part( 'templates/contact', 'section' );
			
			$business_starter_header = get_theme_mod('header_layout', agency_starter_default_settings('header_layout'));
			
			if ($business_starter_header == 0) {
			    echo '<div id="site-header-main" class="site-header-main">';
				get_template_part( 'templates/header', 'default' );
				//woocommerce layout
			} else if($business_starter_header == 1 && class_exists('WooCommerce')){
				get_template_part( 'templates/woocommerce', 'header' ); 
				//list layout
			} else if ($business_starter_header == 2){
				get_template_part( 'templates/header', 'list' );
			} else {
				//default layout
				echo '<div id="site-header-main" class="site-header-main">';
				get_template_part( 'templates/header', 'default' );
			}
			
			if(is_front_page()){
				get_template_part( 'templates/header', 'hero' );
				get_template_part( 'templates/header', 'shortcode' );
			}
			
			/* end header div in default header layouts */
			if ($business_starter_header == 0) {
				echo '</div><!-- .site-header-main -->';
			}
			?>		

		</header><!-- .site-header -->
		
		<?php if(is_front_page()  && get_theme_mod('slider_in_home_page' , 1)): ?>
			<?php get_template_part('templates/header', 'slider' ); ?>
		<?php endif; ?>

<div id="site-content">		
