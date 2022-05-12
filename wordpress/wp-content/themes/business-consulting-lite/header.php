<?php
/**
 * The header for our theme
 *
 * @subpackage Business Consulting Lite
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-consulting-lite' ); ?></a>
	<?php if( get_theme_mod('business_consulting_lite_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<div class="wrap_figure">
				<div class="top_bar py-2 text-center text-lg-left text-md-left">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
								<?php if( get_theme_mod('business_consulting_lite_call_text') != '' || get_theme_mod('business_consulting_lite_call_number') != '' ){ ?>
									<span><i class="fas fa-phone-volume mr-3"></i><?php echo esc_html(get_theme_mod('business_consulting_lite_call_number','')); ?></span>
								<?php }?>

								<?php if( get_theme_mod('business_consulting_lite_email_text') != '' || get_theme_mod('business_consulting_lite_email_address') != '' ){ ?>
									<span class="mx-md-3"><i class="fas fa-envelope-open mr-3"></i><?php echo esc_html(get_theme_mod('business_consulting_lite_email_address','')); ?></span>
								<?php }?>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
								<div class="links text-center text-lg-right text-md-right">
									<?php if( get_theme_mod('business_consulting_lite_facebook') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('business_consulting_lite_facebook','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('business_consulting_lite_twitter') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('business_consulting_lite_twitter','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('business_consulting_lite_youtube') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('business_consulting_lite_youtube','')); ?>"><i class="fab fa-youtube mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('business_consulting_lite_instagram') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('business_consulting_lite_instagram','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu_header py-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-8 align-self-center">
								<div class="logo py-3 py-md-0">
							        <?php if ( has_custom_logo() ) : ?>
					            		<?php the_custom_logo(); ?>
						            <?php endif; ?>
					              	<?php $blog_info = get_bloginfo( 'name' ); ?>
					              	<?php if( get_theme_mod('business_consulting_lite_logo_title',true) != '' ){ ?>
						                <?php if ( ! empty( $blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
						                <?php }?>
						                <?php
					                  		$description = get_bloginfo( 'description', 'display' );
						                  	if ( $description || is_customize_preview() ) :
						                ?>
						                <?php if( get_theme_mod('business_consulting_lite_logo_text',true) != '' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($description); ?>
					                  	</p>
					                  <?php }?>
					              	<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-7 col-md-4 col-sm-6 col-4 align-self-center">
								<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu text-md-right">
										<button onclick="business_consulting_lite_gb_Menu_open()" class="gb_toggle p-2"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','business-consulting-lite'); ?></p></button>
									</div>
								<?php }?>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6 col-12 align-self-center">
								<?php if( get_theme_mod('business_consulting_lite_talk_btn_link') != '' || get_theme_mod('business_consulting_lite_talk_btn_text') != ''){ ?>
									<p class="chat_btn mb-0 text-center text-md-right"><a href="<?php echo esc_url(get_theme_mod('business_consulting_lite_talk_btn_link','')); ?>"><?php echo esc_html(get_theme_mod('business_consulting_lite_talk_btn_text','')); ?></i></a></p>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>