<?php

add_action( 'admin_menu', 'business_consulting_lite_gettingstarted' );
function business_consulting_lite_gettingstarted() {    	
	add_theme_page( esc_html__('Theme Documentation', 'business-consulting-lite'), esc_html__('Theme Documentation', 'business-consulting-lite'), 'edit_theme_options', 'business-consulting-lite-guide-page', 'business_consulting_lite_guide');   
}

function business_consulting_lite_admin_theme_style() {
   wp_enqueue_style('business-consulting-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'business_consulting_lite_admin_theme_style');

if ( ! defined( 'BUSINESS_CONSULTING_LITE_SUPPORT' ) ) {
	define('BUSINESS_CONSULTING_LITE_SUPPORT',__('https://wordpress.org/support/theme/business-consulting-lite/','business-consulting-lite'));
}
if ( ! defined( 'BUSINESS_CONSULTING_LITE_REVIEW' ) ) {
	define('BUSINESS_CONSULTING_LITE_REVIEW',__('https://wordpress.org/support/theme/business-consulting-lite/reviews/','business-consulting-lite'));
}
if ( ! defined( 'BUSINESS_CONSULTING_LITE_LIVE_DEMO' ) ) {
define('BUSINESS_CONSULTING_LITE_LIVE_DEMO',__('https://www.ovationthemes.com/demos/business-consulting-pro/','business-consulting-lite'));
}
if ( ! defined( 'BUSINESS_CONSULTING_LITE_BUY_PRO' ) ) {
define('BUSINESS_CONSULTING_LITE_BUY_PRO',__('https://www.ovationthemes.com/wordpress/business-consulting-wordpress-theme/','business-consulting-lite'));
}
if ( ! defined( 'BUSINESS_CONSULTING_LITE_PRO_DOC' ) ) {
define('BUSINESS_CONSULTING_LITE_PRO_DOC',__('https://ovationthemes.com/docs/ot-business-consulting-pro/','business-consulting-lite'));
}
if ( ! defined( 'BUSINESS_CONSULTING_LITE_THEME_NAME' ) ) {
define('BUSINESS_CONSULTING_LITE_THEME_NAME',__('Premium Business Theme','business-consulting-lite'));
}

/**
 * Theme Info Page
 */
function business_consulting_lite_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme(); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'business-consulting-lite'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'business-consulting-lite'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'business-consulting-lite'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','business-consulting-lite'); ?></h3>
					<p><?php esc_html_e('To step the business consulting lite theme follow the below steps.','business-consulting-lite'); ?></p>

					<h4><?php esc_html_e('1. Setup Logo','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Site Identity >> Upload your logo or Add site title and site description.','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('2. Setup Contact Info','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Contact info >> Add your phone number and email address.','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=business_consulting_lite_top') ); ?>" target="_blank"><?php esc_html_e('Add Contact Info','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('3. Setup Menus','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Menus >> Create Menus >> Add pages, post or custom link then save it.','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Add Menus','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('4. Setup Social Icons','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Social Media >> Add social links.','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=business_consulting_lite_urls') ); ?>" target="_blank"><?php esc_html_e('Add Social Icons','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Widgets >> Add widgets in footer 1, footer 2, footer 3, footer 4. >> ','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer Text','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Footer Text >> Add copyright text. >> ','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=business_consulting_lite_footer_copyright') ); ?>" target="_blank"><?php esc_html_e('Footer Text','business-consulting-lite'); ?></a>

					<h3><?php esc_html_e('Setup Home Page','business-consulting-lite'); ?></h3>
					<p><?php esc_html_e('To step the home page follow the below steps.','business-consulting-lite'); ?></p>

					<h4><?php esc_html_e('1. Setup Page','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Pages >> Add New Page >> Select "Custom Home Page" from templates >> Publish it.','business-consulting-lite'); ?></p>
					<a class="dashboard_add_new_page button-primary"><?php esc_html_e('Add New Page','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('2. Setup Slider','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','business-consulting-lite'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Slider Settings >> Select post.','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=business_consulting_lite_slider_section') ); ?>" target="_blank"><?php esc_html_e('Add Slider','business-consulting-lite'); ?></a>

					<h4><?php esc_html_e('3. Setup Skill Section Settings','business-consulting-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Skill Section Settings >> Feel Details','business-consulting-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=business_consulting_lite_skill_section') ); ?>" target="_blank"><?php esc_html_e('Add Skills','business-consulting-lite'); ?></a>
				</div>
          	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html( BUSINESS_CONSULTING_LITE_THEME_NAME ); ?></h3>
				<img class="business_consulting_lite_img_responsive" style="width: 100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div class="pro-links">
					<hr>
					<a class="button-primary buynow" href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'business-consulting-lite'); ?></a>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'business-consulting-lite'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'business-consulting-lite'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'business-consulting-lite');?> </li>
                    <li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'business-consulting-lite');?> </li>
                   	<li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'business-consulting-lite');?> </li>
                   	<li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'business-consulting-lite');?> </li>
                   	<li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'business-consulting-lite');?> </li>
                   	<li class="upsell-business_consulting_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'business-consulting-lite');?> </li>                    
                </ul>
        	</div>
		</div>
	</div>

<?php }?>
