	<div class="site-branding vertical-center">
		<?php agency_starter_the_custom_logo(); ?>
		<div class="site-info-container">
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$agency_starter_description = get_bloginfo( 'description', 'display' );
		if ( $agency_starter_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo esc_html($agency_starter_description); ?></p>
		<?php endif; ?>
		</div>
	</div><!-- .site-branding -->

	<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>				
		<div id="toggle-container"><button id="menu-toggle" class="menu-toggle"><?php esc_html_e( 'Menu', 'agency-starter' ); ?></button></div>

		<div id="site-header-menu" class="site-header-menu">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'agency-starter' ); ?>">
					<?php
						if(is_home() ||  is_front_page()) { 
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class' => 'primary-menu',
							)
						);
						} else {
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class' => 'primary-menu',
								'items_wrap' 		=> 	agency_starter_nav_wrap(),
							)
						);
						
						
						}
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

		</div><!-- .site-header-menu -->
	<?php endif; ?>