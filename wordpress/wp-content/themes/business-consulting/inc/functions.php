<?php
/*
 * Essential actions
 * since 1.0
 */

function business_consulting_do_home_slider(){
	if((is_front_page() || is_home()) && get_theme_mod('slider_in_home_page' , 1)) {
		get_template_part('templates/header', 'slider' );
		}

}
add_action('business_consulting_home_slider', 'business_consulting_do_home_slider');

function business_consulting_do_before_header(){
	get_template_part( 'templates/top', 'banner' ); 
}

add_action('business_consulting_before_header', 'business_consulting_do_before_header');


function business_consulting_do_header(){

		get_template_part( 'templates/contact', 'section' );
		
		do_action('business_consulting_before_header');
		
		$business_consulting_header = get_theme_mod('header_layout', 1);
		
		if ($business_consulting_header == 0) {
			echo '<div id="site-header-main" class="site-header-main">';
			get_template_part( 'templates/header', 'default' );
			//woocommerce layout
		} else if($business_consulting_header == 1 && class_exists('WooCommerce')){
			get_template_part( 'templates/woocommerce', 'header' ); 
			//list layout
		} else if ($business_consulting_header == 2){
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
		if ($business_consulting_header == 0) {
			echo '</div><!-- .site-header-main -->';
		}

}

add_action('business_consulting_header', 'business_consulting_do_header');



/**
 * Theme Breadcrumbs
*/
if( !function_exists('business_consulting_page_header_breadcrumbs') ):
	function business_consulting_page_header_breadcrumbs() { 	
		global $post;
		$homeLink = home_url();
		$business_consulting_page_header_layout = get_theme_mod('business_consulting_page_header_layout', 'business_consulting_page_header_layout1');
		if($business_consulting_page_header_layout == 'business_consulting_page_header_layout1'):
			$breadcrumb_class = 'center-text';	
		else: $breadcrumb_class = 'text-right'; 
		endif;
		
		echo '<ul id="content" class="page-breadcrumb '.esc_attr( $breadcrumb_class ).'">';			
			if (is_home() || is_front_page()) :
					echo '<li><a href="'.esc_url($homeLink).'">'.esc_html__('Home','business-consulting').'</a></li>';
					    echo '<li class="active">'; echo single_post_title(); echo '</li>';
						else:
						echo '<li><a href="'.esc_url($homeLink).'">'.esc_html__('Home','business-consulting').'</a></li>';
						if ( is_category() ) {
							echo '<li class="active"><a href="'. esc_url( business_consulting_page_url() ) .'">' . esc_html__('Archive by category','business-consulting').' "' . single_cat_title('', false) . '"</a></li>';
						} elseif ( is_day() ) {
							echo '<li class="active"><a href="'. esc_url(get_year_link(esc_attr(get_the_time('Y')))) . '">'. esc_html(get_the_time('Y')) .'</a>';
							echo '<li class="active"><a href="'. esc_url(get_month_link(esc_attr(get_the_time('Y')),esc_attr(get_the_time('m')))) .'">'. esc_html(get_the_time('F')) .'</a>';
							echo '<li class="active"><a href="'. esc_url( business_consulting_page_url() ) .'">'. esc_html(get_the_time('d')) .'</a></li>';
						} elseif ( is_month() ) {
							echo '<li class="active"><a href="' . esc_url( get_year_link(esc_attr(get_the_time('Y'))) ) . '">' . esc_html(get_the_time('Y')) . '</a>';
							echo '<li class="active"><a href="'. esc_url( business_consulting_page_url() ) .'">'. esc_html(get_the_time('F')) .'</a></li>';
						} elseif ( is_year() ) {
							echo '<li class="active"><a href="'. esc_url( business_consulting_page_url() ) .'">'. esc_html(get_the_time('Y')) .'</a></li>';
                        } elseif ( is_single() && !is_attachment() && is_page('single-product') ) {
						if ( get_post_type() != 'post' ) {
							$cat = get_the_category(); 
							$cat = $cat[0];
							echo '<li>';
								echo esc_html( get_category_parents($cat, TRUE, '') );
							echo '</li>';
							echo '<li class="active"><a href="' . esc_url( business_consulting_page_url() ) . '">'. wp_title( '',false ) .'</a></li>';
						} }  
						elseif ( is_page() && $post->post_parent ) {
							$parent_id  = $post->post_parent;
							$breadcrumbs = array();
							while ($parent_id) {
							$page = get_page($parent_id);
							$breadcrumbs[] = '<li class="active"><a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html( get_the_title($page->ID)) . '</a>';
							$parent_id  = $page->post_parent;
                            }
							$breadcrumbs = array_reverse($breadcrumbs);
							foreach ($breadcrumbs as $crumb) echo $crumb;
							echo '<li class="active"><a href="' .  esc_url( business_consulting_page_url()) . '">'. esc_html( get_the_title() ).'</a></li>';
                        }
						elseif( is_search() )
						{
							echo '<li class="active"><a href="' . esc_url( business_consulting_page_url() ) . '">'. get_search_query() .'</a></li>';
						}
						elseif( is_404() )
						{
							echo '<li class="active"><a href="' . esc_url( business_consulting_page_url() ) . '">'.esc_html__('Error 404','business-consulting').'</a></li>';
						}
						else { 
						    echo '<li class="active"><a href="' . esc_url( business_consulting_page_url() ) . '">'. esc_html( get_the_title() ) .'</a></li>';
						}
					endif;
			echo '</ul>';
        }
endif;


/**
 * Theme Breadcrumbs Url
*/
function business_consulting_page_url() {
	$page_url = 'http';
	if ( key_exists("HTTPS", $_SERVER) && (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ) ){
		$page_url .= "s";
	}
	$page_url .= "://";
	if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
		if(isset($_SERVER["SERVER_NAME"]) && isset($_SERVER["SERVER_PORT"]) && isset($_SERVER["REQUEST_URI"]) ){
			$page_url .=  wp_unslash($_SERVER["SERVER_NAME"]).":".wp_unslash($_SERVER["SERVER_PORT"]).wp_unslash($_SERVER["REQUEST_URI"]);
		}
	} else {
		if(isset($_SERVER["SERVER_NAME"]) && isset($_SERVER["REQUEST_URI"]) ){	
			$page_url .=  wp_unslash($_SERVER["SERVER_NAME"]).wp_unslash($_SERVER["REQUEST_URI"]) ;
		}
 }
 return $page_url;
}


