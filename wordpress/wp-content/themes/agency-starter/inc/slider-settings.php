<?php

/* Post Slider Settings */

		$wp_customize->add_section( 'slider_section' , array(
			'title'      => __('Home Post Slider', 'agency-starter' ),			
			'panel' => 'theme_options',
			'priority'   => 1,
		) );
		
		$wp_customize->add_setting( 'slider_in_home_page' , array(
		'default'    => 1,
		'sanitize_callback' => 'agency_starter_sanitize_checkbox',
		));
		
		$wp_customize->add_control('slider_in_home_page' , array(
		'label' => __('Enable slider in home page','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'checkbox',
		) );
		
	
		// post 1
		$wp_customize->add_setting( 'slider_category' , array(
		'default'    => 0,
		'sanitize_callback' => 'agency_starter_sanitize_select',
		));

		$wp_customize->add_control('slider_category' , array(
		'label' => __('Select Slider Post Category','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'select',
		'choices'=> agency_starter_get_post_categories(),
		) );
		
		$wp_customize->selective_refresh->add_partial( 'slider_category', array(
			'selector' => '#main_slider .carousel-caption',
		) );				
	
		// slider animation type
		$wp_customize->add_setting( 'slider_animation_type' , array(
		'default'    => 'slide',
		'sanitize_callback' => 'agency_starter_sanitize_select',
		));

		$wp_customize->add_control('slider_animation_type' , array(
		'label' => __('Slider Animation','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'select',
		'choices'=>array(
			'slide'=> __('Slide', 'agency-starter' ),
			'fade'=> __('Fade', 'agency-starter' ),
		),
		) );
		
		// slider speed
		$wp_customize->add_setting( 'slider_speed' , array(
		'default'    => 4000,
		'sanitize_callback' => 'absint',
		));

		$wp_customize->add_control('slider_speed' , array(
		'label' => __('Slider animation speed in ms','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'number',
		) );
	
		// slider button title
		$wp_customize->add_setting( 'slider_button_text' , array(
		'default'    => __('Read More','agency-starter' ),
		'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control('slider_button_text' , array(
		'label' => __('Slider Button text','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'text',
		) );
		
		//slider button link
		$wp_customize->add_setting( 'slider_button_link' , array(
		'default'    => "",
		'sanitize_callback' => 'esc_url_raw',
		));

		$wp_customize->add_control('slider_button_link' , array(
		'label' => __('Slider Button Link', 'agency-starter' ),
		'section' => 'slider_section',
		'priority' => 10,
		'type'=>'text',
		) );
				
				
		// height
		$wp_customize->add_setting( 'slider_image_height' , array(
		'default'    => 600,
		'sanitize_callback' => 'absint',
		));

		$wp_customize->add_control('slider_image_height' , array(
		'label' => __('Slider Height','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'number',
		) );
		
		//slider style
		$wp_customize->add_setting( 'slider_shape_devider' , array(
		'default'    => 1,
		'sanitize_callback' => 'agency_starter_sanitize_checkbox',
		));
		
		$wp_customize->add_control('slider_shape_devider' , array(
		'label' => __('Slider Shape Devider','agency-starter' ),
		'section' => 'slider_section',
		'type'=>'checkbox',
		) );			

				
