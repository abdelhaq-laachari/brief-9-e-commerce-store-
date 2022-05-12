<div id="site-header-main" class="site-header-main">
  <!--start header-->
  <div class="container header-full-width">
    <div class="row vertical-center">
      <div class="col-sm-5">
        <div class="site-branding vertical-center">
          <?php agency_starter_the_custom_logo(); ?>
          <div class="site-info-container">
            <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
              </a></h1>
            <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
              </a></p>
            <?php
				endif;
	
				$agency_starter_description = get_bloginfo( 'description', 'display' );
				if ( $agency_starter_description || is_customize_preview() ) :
					?>
            <p class="site-description"><?php echo esc_html($agency_starter_description); ?></p>
            <?php endif; ?>
          </div>
        </div>
        <!-- .site-branding -->
      </div>
      <div class="col-sm-7">
        <div class="woo-search">
          <?php if ( class_exists( 'WooCommerce' ) ) { ?>
          <div class="header-search-form">
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <select class="header-search-select" name="product_cat">
                <option value="">
                <?php esc_html_e( 'All Categories', 'agency-starter' ); ?>
                </option>
                <?php
								/*
								 * @package envo-ecommerce
								 * @subpackage agency-starter
								 */
								$args = array(
									'taxonomy'     => 'product_cat',
									'orderby'      => 'date',
									'order'      	=> 'ASC',
									'show_count'   => 1,
									'pad_counts'   => 0,
									'hierarchical' => 1,
									'title_li'     => '',
									'hide_empty'   => 1,
								);
								$agency_starter_categories = get_categories( $args);
								foreach ( $agency_starter_categories as $agency_starter_category ) {
									$agency_starter_option = '<option value="' . esc_attr( $agency_starter_category->category_nicename ) . '">';
									$agency_starter_option .= esc_html( $agency_starter_category->cat_name );
									$agency_starter_option .= ' (' . absint( $agency_starter_category->category_count ) . ')';
									$agency_starter_option .= '</option>';
									echo ($agency_starter_option); 
								}
								?>
              </select>
              <input type="hidden" name="post_type" value="product" />
              <input class="header-search-input" name="s" type="text" placeholder="<?php esc_attr_e( 'Search products...', 'agency-starter' ); ?>"/>
              <button class="header-search-button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!--end .row-->
  </div>
  <!--end .container-->
</div>
<!-- end header -->


<!-- WooCommerce Menu -->
<div id="woocommerce-layout-menu">
  <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
  <div id="toggle-container">
    <button id="menu-toggle" class="menu-toggle">
    <?php esc_html_e( 'Menu', 'agency-starter' ); ?>
    </button>
  </div>
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
    </nav>
    <!-- .main-navigation -->
    <?php endif; ?>
  </div>
  <!-- .site-header-menu -->
  <?php endif; ?>
</div>
<!--end outer div -->
