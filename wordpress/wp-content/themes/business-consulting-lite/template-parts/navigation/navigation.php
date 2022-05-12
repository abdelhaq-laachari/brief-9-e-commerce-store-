<?php
/**
 * Displays top navigation
 *
 * @subpackage Business Consulting Lite
 * @since 1.0
 */
?>

<div id="gb_responsive" class="nav side_gb_nav">
	<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'business-consulting-lite' ); ?>">
		<?php if(has_nav_menu('primary')){
		    wp_nav_menu( array( 
				'theme_location' => 'primary',
				'container_class' => 'gb_navigation clearfix' ,
				'menu_class' => 'clearfix',
				'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
				'fallback_cb' => 'wp_page_menu',
		    ) ); 
		} ?>
		<a href="javascript:void(0)" class="closebtn gb_menu" onclick="business_consulting_lite_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','business-consulting-lite'); ?></span></a>
	</nav>	
</div>