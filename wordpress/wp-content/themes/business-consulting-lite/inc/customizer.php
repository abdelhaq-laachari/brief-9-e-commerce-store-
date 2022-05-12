<?php
/**
 * Business Consulting Lite: Customizer
 *
 * @subpackage Business Consulting Lite
 * @since 1.0
 */

function business_consulting_lite_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

	// Add custom control.
  	require get_parent_theme_file_path( 'inc/customize/customize_toggle.php' );

	// Register the custom control type.
	$wp_customize->register_control_type( 'Business_Consulting_Lite_Toggle_Control' );

	$wp_customize->add_section( 'business_consulting_lite_typography_settings', array(
		'title'       => __( 'Typography', 'business-consulting-lite' ),
		'priority'       => 2,
	) );

	$font_choices = array(
			'' => 'Select',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
			'Droid Sans:400,700' => 'Droid Sans',
			'Lato:400,700,400italic,700italic' => 'Lato',
			'Arvo:400,700,400italic,700italic' => 'Arvo',
			'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif',
			'PT Sans:400,700,400italic,700italic' => 'PT Sans',
			'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
			'Arimo:400,700,400italic,700italic' => 'Arimo',
			'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
			'Bitter:400,700,400italic' => 'Bitter',
			'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Roboto:400,400italic,700,700italic' => 'Roboto',
			'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
			'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
			'Roboto Slab:400,700' => 'Roboto Slab',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
			'Rokkitt:400' => 'Rokkitt',
		);


	$wp_customize->add_setting( 'business_consulting_lite_headings_text', array(
		'sanitize_callback' => 'business_consulting_lite_sanitize_fonts',
	));

	$wp_customize->add_control( 'business_consulting_lite_headings_text', array(
		'type' => 'select',
		'description' => __('Select your suitable font for the headings.', 'business-consulting-lite'),
		'section' => 'business_consulting_lite_typography_settings',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'business_consulting_lite_body_text', array(
		'sanitize_callback' => 'business_consulting_lite_sanitize_fonts'
	));

	$wp_customize->add_control( 'business_consulting_lite_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your suitable font for the body.', 'business-consulting-lite' ),
		'section' => 'business_consulting_lite_typography_settings',
		'choices' => $font_choices
	) );

 	$wp_customize->add_section('business_consulting_lite_pro', array(
        'title'    => __('UPGRADE CONSULTING PREMIUM', 'business-consulting-lite'),
        'priority' => 1,
    ));

    $wp_customize->add_setting('business_consulting_lite_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Business_Consulting_Lite_Pro_Control($wp_customize, 'business_consulting_lite_pro', array(
        'label'    => __('BUSINESS CONSULTING PREMIUM', 'business-consulting-lite'),
        'section'  => 'business_consulting_lite_pro',
        'settings' => 'business_consulting_lite_pro',
        'priority' => 1,
    )));

    //Logo
    $wp_customize->add_setting('business_consulting_lite_logo_max_height',array(
		'default'	=> '',
		'sanitize_callback'	=> 'business_consulting_lite_sanitize_number_absint'
	));	
	$wp_customize->add_control('business_consulting_lite_logo_max_height',array(
		'label'	=> esc_html__('Logo Width','business-consulting-lite'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));
    $wp_customize->add_setting( 'business_consulting_lite_logo_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new business_consulting_lite_Toggle_Control( $wp_customize, 'business_consulting_lite_logo_title', array(
		'label'       => esc_html__( 'Show Site Title', 'business-consulting-lite' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_logo_title',
	) ) );

    $wp_customize->add_setting( 'business_consulting_lite_logo_text', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new business_consulting_lite_Toggle_Control( $wp_customize, 'business_consulting_lite_logo_text', array(
		'label'       => esc_html__( 'Show Site Tagline', 'business-consulting-lite' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_logo_text',
	) ) );

    // Theme General Settings
    $wp_customize->add_section('business_consulting_lite_theme_settings',array(
        'title' => __('Theme General Settings', 'business-consulting-lite'),
        'priority' => 1
    ) );

    $wp_customize->add_setting( 'business_consulting_lite_sticky_header', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_sticky_header', array(
		'label'       => esc_html__( 'Show Sticky Header', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_sticky_header',
	) ) );

	 $wp_customize->add_setting( 'business_consulting_lite_theme_loader', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new business_consulting_lite_Toggle_Control( $wp_customize, 'business_consulting_lite_theme_loader', array(
		'label'       => esc_html__( 'Show Site Loader', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_theme_loader',
	) ) );

	$wp_customize->add_setting( 'business_consulting_lite_scroll_enable', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new business_consulting_lite_Toggle_Control( $wp_customize, 'business_consulting_lite_scroll_enable', array(
		'label'       => esc_html__( 'Show Scroll Top', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_scroll_enable',
	) ) );

	$wp_customize->add_setting('business_consulting_lite_scroll_options',array(
        'default' => 'right_align',
        'sanitize_callback' => 'business_consulting_lite_sanitize_choices'
	));
	$wp_customize->add_control('business_consulting_lite_scroll_options',array(
        'type' => 'select',
        'label' => __('Scroll Top Alignment','business-consulting-lite'),
        'section' => 'business_consulting_lite_theme_settings',
        'choices' => array(
            'right_align' => __('Right Align','business-consulting-lite'),
            'center_align' => __('Center Align','business-consulting-lite'),
            'left_align' => __('Left Align','business-consulting-lite'),
        ),
	) );

    //theme width

	$wp_customize->add_section('business_consulting_lite_theme_width_settings',array(
        'title' => __('Theme Width Option', 'business-consulting-lite'),
        'priority'       => 1,
    ) );

	$wp_customize->add_setting('business_consulting_lite_width_options',array(
        'default' => 'full_width',
        'sanitize_callback' => 'business_consulting_lite_sanitize_choices'
	));
	$wp_customize->add_control('business_consulting_lite_width_options',array(
        'type' => 'select',
        'label' => __('Theme Width Option','business-consulting-lite'),
        'section' => 'business_consulting_lite_theme_width_settings',
        'choices' => array(
            'full_width' => __('Fullwidth','business-consulting-lite'),
            'Container' => __('Container','business-consulting-lite'),
            'container_fluid' => __('Container Fluid','business-consulting-lite'),
        ),
	) );

	// Post Layouts
    $wp_customize->add_section('business_consulting_lite_layout',array(
        'title' => __('Post Layout', 'business-consulting-lite'),
        'description' => __( 'Change the post layout from below options', 'business-consulting-lite' ),
        'priority' => 1
    ) );

	$wp_customize->add_setting( 'business_consulting_lite_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_post_sidebar', array(
		'label'       => esc_html__( 'Show Fullwidth', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_post_sidebar',
	) ) );

	$wp_customize->add_setting( 'business_consulting_lite_single_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_single_post_sidebar', array(
		'label'       => esc_html__( 'Show Single Post Fullwidth', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_single_post_sidebar',
	) ) );

    $wp_customize->add_setting('business_consulting_lite_post_option',array(
		'default' => 'simple_post',
		'sanitize_callback' => 'business_consulting_lite_sanitize_select'
	));
	$wp_customize->add_control('business_consulting_lite_post_option',array(
		'label' => esc_html__('Select Layout','business-consulting-lite'),
		'section' => 'business_consulting_lite_layout',
		'setting' => 'business_consulting_lite_post_option',
		'type' => 'radio',
        'choices' => array(
            'simple_post' => __('Simple Post','business-consulting-lite'),
            'grid_post' => __('Grid Post','business-consulting-lite'),
        ),
	));

    $wp_customize->add_setting('business_consulting_lite_grid_column',array(
		'default' => '3_column',
		'sanitize_callback' => 'business_consulting_lite_sanitize_select'
	));
	$wp_customize->add_control('business_consulting_lite_grid_column',array(
		'label' => esc_html__('Grid Post Per Row','business-consulting-lite'),
		'section' => 'business_consulting_lite_layout',
		'setting' => 'business_consulting_lite_grid_column',
		'type' => 'radio',
        'choices' => array(
            '1_column' => __('1','business-consulting-lite'),
            '2_column' => __('2','business-consulting-lite'),
            '3_column' => __('3','business-consulting-lite'),
            '4_column' => __('4','business-consulting-lite'),
            '5_column' => __('6','business-consulting-lite'),
        ),
	));

	$wp_customize->add_setting( 'business_consulting_lite_date', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_date', array(
		'label'       => esc_html__( 'Hide Date', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_date',
	) ) );

	$wp_customize->add_setting( 'business_consulting_lite_admin', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_admin', array(
		'label'       => esc_html__( 'Hide Author/Admin', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_admin',
	) ) );

	$wp_customize->add_setting( 'business_consulting_lite_comment', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_comment', array(
		'label'       => esc_html__( 'Hide Comment', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_comment',
	) ) );

	// Top Header
    $wp_customize->add_section('business_consulting_lite_top',array(
        'title' => __('Contact info', 'business-consulting-lite'),
        'priority' => 1
    ) );

    $wp_customize->add_setting('business_consulting_lite_call_number',array(
		'default' => '',
		'sanitize_callback' => 'business_consulting_lite_sanitize_phone_number'
	)); 
	$wp_customize->add_control('business_consulting_lite_call_number',array(
		'label' => esc_html__('Add Phone Number','business-consulting-lite'),
		'section' => 'business_consulting_lite_top',
		'setting' => 'business_consulting_lite_call_number',
		'type'    => 'text'
	));

    $wp_customize->add_setting('business_consulting_lite_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
	)); 
	$wp_customize->add_control('business_consulting_lite_email_address',array(
		'label' => esc_html__('Add Email Address','business-consulting-lite'),
		'section' => 'business_consulting_lite_top',
		'setting' => 'business_consulting_lite_email_address',
		'type'    => 'text'
	));

    $wp_customize->add_setting('business_consulting_lite_talk_btn_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('business_consulting_lite_talk_btn_text',array(
		'label' => esc_html__('Add Button Text','business-consulting-lite'),
		'section' => 'business_consulting_lite_top',
		'setting' => 'business_consulting_lite_talk_btn_text',
		'type'    => 'text'
	));

    $wp_customize->add_setting('business_consulting_lite_talk_btn_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('business_consulting_lite_talk_btn_link',array(
		'label' => esc_html__('Add Button URL','business-consulting-lite'),
		'section' => 'business_consulting_lite_top',
		'setting' => 'business_consulting_lite_talk_btn_link',
		'type'    => 'url'
	));

	// Social Media
    $wp_customize->add_section('business_consulting_lite_urls',array(
        'title' => __('Social Media', 'business-consulting-lite'),
        'description' => __( 'Add social media links in the below feilds', 'business-consulting-lite' ),
        'priority' => 3
    ) );
    
	$wp_customize->add_setting('business_consulting_lite_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('business_consulting_lite_facebook',array(
		'label' => esc_html__('Facebook URL','business-consulting-lite'),
		'section' => 'business_consulting_lite_urls',
		'setting' => 'business_consulting_lite_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('business_consulting_lite_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('business_consulting_lite_twitter',array(
		'label' => esc_html__('Twitter URL','business-consulting-lite'),
		'section' => 'business_consulting_lite_urls',
		'setting' => 'business_consulting_lite_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('business_consulting_lite_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('business_consulting_lite_youtube',array(
		'label' => esc_html__('Youtube URL','business-consulting-lite'),
		'section' => 'business_consulting_lite_urls',
		'setting' => 'business_consulting_lite_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('business_consulting_lite_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('business_consulting_lite_instagram',array(
		'label' => esc_html__('Instagram URL','business-consulting-lite'),
		'section' => 'business_consulting_lite_urls',
		'setting' => 'business_consulting_lite_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'business_consulting_lite_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'business-consulting-lite' ),
    	'description' => __('Slider Image Dimension ( 600px x 700px )','business-consulting-lite'),
		'priority'   => 3,
	) );

	$wp_customize->add_setting( 'business_consulting_lite_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'business_consulting_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Business_Consulting_Lite_Toggle_Control( $wp_customize, 'business_consulting_lite_slider_arrows', array(
		'label'       => esc_html__( 'Check to show slider', 'business-consulting-lite' ),
		'section'     => 'business_consulting_lite_slider_section',
		'type'        => 'toggle',
		'settings'    => 'business_consulting_lite_slider_arrows',
	) ) );

	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$i = 0;	
	$pst_sls[]= __('Select','business-consulting-lite');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('business_consulting_lite_post_setting'.$i,array(
			'sanitize_callback' => 'business_consulting_lite_sanitize_select',
		));
		$wp_customize->add_control('business_consulting_lite_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','business-consulting-lite'),
			'section' => 'business_consulting_lite_slider_section',
		));
	}
	wp_reset_postdata();

	// Skills Section
	$wp_customize->add_section( 'business_consulting_lite_skill_section' , array(
    	'title'      => __( 'Skills Section Settings', 'business-consulting-lite' ),
		'priority'   => 4,
	) );

	$wp_customize->add_setting('business_consulting_lite_skill_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_consulting_lite_skill_title',array(
		'label'	=> esc_html__('Section Title ','business-consulting-lite'),
		'section'	=> 'business_consulting_lite_skill_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('business_consulting_lite_skill_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_consulting_lite_skill_btn_text',array(
		'label'	=> esc_html__('Section Text','business-consulting-lite'),
		'section'	=> 'business_consulting_lite_skill_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('business_consulting_lite_skill_increament',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_consulting_lite_skill_increament',array(
		'label'	=> esc_html__('skill Box Increament','business-consulting-lite'),
		'section'	=> 'business_consulting_lite_skill_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 8,
		),
	));

	$skill = get_theme_mod('business_consulting_lite_skill_increament');

	for ($i=1; $i <= $skill ; $i++) {

		$wp_customize->add_setting('business_consulting_lite_skill_box_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));	
		$wp_customize->add_control('business_consulting_lite_skill_box_icon'.$i,array(
			'label'	=> esc_html__('Icon ','business-consulting-lite').$i,
			'section'	=> 'business_consulting_lite_skill_section',
			'type'		=> 'text'
		));

		$wp_customize->add_setting('business_consulting_lite_skill_box_number'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));	
		$wp_customize->add_control('business_consulting_lite_skill_box_number'.$i,array(
			'label'	=> esc_html__('Number ','business-consulting-lite').$i,
			'section'	=> 'business_consulting_lite_skill_section',
			'type'		=> 'text'
		));	

		$wp_customize->add_setting('business_consulting_lite_skill_box_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));	
		$wp_customize->add_control('business_consulting_lite_skill_box_title'.$i,array(
			'label'	=> esc_html__('Title ','business-consulting-lite').$i,
			'section'	=> 'business_consulting_lite_skill_section',
			'type'		=> 'text'
		));

	}

	//Footer
    $wp_customize->add_section( 'business_consulting_lite_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'business-consulting-lite' ),
    	'priority' => 6
	) );

    $wp_customize->add_setting('business_consulting_lite_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_consulting_lite_footer_text',array(
		'label'	=> esc_html__('Copyright Text','business-consulting-lite'),
		'section'	=> 'business_consulting_lite_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'business_consulting_lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'business_consulting_lite_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'business_consulting_lite_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'business_consulting_lite_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'business-consulting-lite' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'business-consulting-lite' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'business_consulting_lite_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'business_consulting_lite_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'business_consulting_lite_customize_register' );

function business_consulting_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}
function business_consulting_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function business_consulting_lite_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function business_consulting_lite_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

define('BUSINESS_CONSULTING_LITE_PRO_LINK',__('https://www.ovationthemes.com/wordpress/business-consulting-wordpress-theme/','business-consulting-lite'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Business_Consulting_Lite_Pro_Control')):
    class Business_Consulting_Lite_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CONSULTING PREMIUM','business-consulting-lite');?> </a>
	        </div>
            <div class="col-md">
                <img class="business_consulting_lite_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('CONSULTING PREMIUM - Features', 'business-consulting-lite'); ?></h3>
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
		    <div class="col-md upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( BUSINESS_CONSULTING_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CONSULTING PREMIUM','business-consulting-lite');?> </a>
		    </div>
        </label>
    <?php } }
endif;