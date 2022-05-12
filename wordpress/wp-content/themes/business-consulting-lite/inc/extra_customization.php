<?php 

	/*---------------------------Width -------------------*/

	$business_consulting_lite_custom_style= "";
	
	$business_consulting_lite_theme_width = get_theme_mod( 'business_consulting_lite_width_options','full_width');

    if($business_consulting_lite_theme_width == 'full_width'){

		$business_consulting_lite_custom_style .='body{';

			$business_consulting_lite_custom_style .='max-width: 100%;';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_theme_width == 'Container'){

		$business_consulting_lite_custom_style .='body{';

			$business_consulting_lite_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$business_consulting_lite_custom_style .='}';

	$business_consulting_lite_custom_style .='.page-template-custom-home-page .wrap_figure{';

			$business_consulting_lite_custom_style .='width: 97.5%;';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_theme_width == 'container_fluid'){

		$business_consulting_lite_custom_style .='body{';

			$business_consulting_lite_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$business_consulting_lite_custom_style .='}';

		$business_consulting_lite_custom_style .='.page-template-custom-home-page .wrap_figure{';

			$business_consulting_lite_custom_style .='width: 98.2%;';

		$business_consulting_lite_custom_style .='}';
	}

	//---------------------------------------------------------------------------------------------

	$business_consulting_lite_sticky_header = get_theme_mod('business_consulting_lite_sticky_header');

	if($business_consulting_lite_sticky_header != true){

		$business_consulting_lite_custom_style .='.menu_header.fixed{';

			$business_consulting_lite_custom_style .='position: static;';
			
		$business_consulting_lite_custom_style .='}';
	}

	/*---------------------------Scroll-top-position -------------------*/
	
	$business_consulting_lite_scroll_options = get_theme_mod( 'business_consulting_lite_scroll_options','right_align');

    if($business_consulting_lite_scroll_options == 'right_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_scroll_options == 'center_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_scroll_options == 'left_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='right: auto; left:5%; margin: 0 auto';

		$business_consulting_lite_custom_style .='}';
	}

	/*---------------------------Logo -------------------*/


	$business_consulting_lite_logo_max_height = get_theme_mod('business_consulting_lite_logo_max_height');

	if($business_consulting_lite_logo_max_height != false){

		$business_consulting_lite_custom_style .='.custom-logo-link img{';

			$business_consulting_lite_custom_style .='max-height: '.esc_html($business_consulting_lite_logo_max_height).'px;';
			
		$business_consulting_lite_custom_style .='}';
	}

	//-----------------------------------------------------------------------------------

	/*---------------------------Scroll-top-position -------------------*/
	
	$business_consulting_lite_scroll_options = get_theme_mod( 'business_consulting_lite_scroll_options','right_align');

    if($business_consulting_lite_scroll_options == 'right_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_scroll_options == 'center_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

		$business_consulting_lite_custom_style .='}';

	}else if($business_consulting_lite_scroll_options == 'left_align'){

		$business_consulting_lite_custom_style .='.scroll-top button{';

			$business_consulting_lite_custom_style .='right: auto; left:5%; margin: 0 auto';

		$business_consulting_lite_custom_style .='}';
	}