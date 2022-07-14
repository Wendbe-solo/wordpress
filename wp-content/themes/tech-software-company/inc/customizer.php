<?php
/**
 * Tech Software Company Theme Customizer
 *
 * @package Tech Software Company
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function tech_software_company_customize_register($wp_customize) {
	//add home page setting pannel
	$wp_customize->add_panel('tech_software_company_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'tech-software-company'),
		'description'    => __('Description of what this panel does.', 'tech-software-company'),
	));	

	// font array
	$tech_software_company_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'tech_software_company_typography', array(
    	'title'      => __( 'Typography', 'tech-software-company' ),
		'priority'   => 30,
		'panel' => 'tech_software_company_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tech_software_company_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_paragraph_color', array(
		'label' => __('Paragraph Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_paragraph_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'Paragraph Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	$wp_customize->add_setting('tech_software_company_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tech_software_company_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_atag_color', array(
		'label' => __('"a" Tag Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_atag_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( '"a" Tag Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tech_software_company_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_li_color', array(
		'label' => __('"li" Tag Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_li_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( '"li" Tag Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h1_color', array(
		'label' => __('H1 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h1_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'H1 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tech_software_company_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h1_font_size',array(
		'label'	=> __('H1 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h2_color', array(
		'label' => __('h2 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h2_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'h2 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tech_software_company_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h2_font_size',array(
		'label'	=> __('h2 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h3_color', array(
		'label' => __('h3 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h3_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'h3 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tech_software_company_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h3_font_size',array(
		'label'	=> __('h3 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h4_color', array(
		'label' => __('h4 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h4_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'h4 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tech_software_company_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h4_font_size',array(
		'label'	=> __('h4 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h5_color', array(
		'label' => __('h5 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h5_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'h5 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tech_software_company_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h5_font_size',array(
		'label'	=> __('h5 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tech_software_company_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_h6_color', array(
		'label' => __('h6 Color', 'tech-software-company'),
		'section' => 'tech_software_company_typography',
		'settings' => 'tech_software_company_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tech_software_company_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tech_software_company_h6_font_family', array(
	    'section'  => 'tech_software_company_typography',
	    'label'    => __( 'h6 Fonts','tech-software-company'),
	    'type'     => 'select',
	    'choices'  => $tech_software_company_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tech_software_company_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_h6_font_size',array(
		'label'	=> __('h6 Font Size','tech-software-company'),
		'section'	=> 'tech_software_company_typography',
		'setting'	=> 'tech_software_company_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('tech_software_company_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','tech-software-company'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','tech-software-company'),
            'Transparent Background' => __('Transparent Background','tech-software-company'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('tech_software_company_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','tech-software-company'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('tech_software_company_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','tech-software-company'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'tech_software_company_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'tech_software_company_sanitize_choices',
	) );
	$wp_customize->add_control( 'tech_software_company_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'tech-software-company' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('tech_software_company_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));	
	$wp_customize->add_control('tech_software_company_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','tech-software-company'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tech_software_company_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control( 'tech_software_company_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','tech-software-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tech_software_company_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control( 'tech_software_company_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','tech-software-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tech_software_company_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_number_range',
	));
	$wp_customize->add_control('tech_software_company_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','tech-software-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'tech_software_company_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_number_range',
	));
	$wp_customize->add_control('tech_software_company_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','tech-software-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('tech_software_company_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'tech_software_company_sanitize_choices'
    ));
    $wp_customize->add_control('tech_software_company_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','tech-software-company'),
       'choices' => array(
            'Yes' => __('Yes','tech-software-company'),
            'No' => __('No','tech-software-company'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('tech_software_company_product_button_section', array(
		'title'    => __('Product Button Settings', 'tech-software-company'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'tech_software_company_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','tech-software-company' ),
		'section' => 'tech_software_company_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'tech_software_company_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','tech-software-company' ),
		'section' => 'tech_software_company_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'tech_software_company_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_number_range',
	));
	$wp_customize->add_control('tech_software_company_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','tech-software-company' ),
		'section' => 'tech_software_company_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('tech_software_company_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'tech-software-company'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('tech_software_company_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','tech-software-company'),
        'section' => 'tech_software_company_product_sale_section',
        'choices' => array(
            'Right' => __('Right','tech-software-company'),
            'Left' => __('Left','tech-software-company'),
        ),
	) );

	$wp_customize->add_setting( 'tech_software_company_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','tech-software-company'),
        'section'  => 'tech_software_company_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('tech_software_company_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float'
	));
	$wp_customize->add_control('tech_software_company_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','tech-software-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tech_software_company_product_sale_section',
		'type'=> 'number'
	));

	//Layouts
	$wp_customize->add_section('tech_software_company_left_right', array(
		'title'    => __('Layout Settings', 'tech-software-company'),
		'priority' => null,
		'panel'    => 'tech_software_company_panel_id',
	));

	$wp_customize->add_setting('tech_software_company_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','tech-software-company'),
       'section' => 'tech_software_company_left_right'
    ));

    $wp_customize->add_setting( 'tech_software_company_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tech_software_company_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'tech-software-company'),
	    'section' => 'tech_software_company_left_right',
	    'settings' => 'tech_software_company_loader_background_color_settings',
  	)));

	$wp_customize->add_setting( 'tech_software_company_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tech_software_company_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Shop Page Sidebar','tech-software-company'),
		'section' => 'tech_software_company_left_right'
    ));

	$wp_customize->add_setting( 'tech_software_company_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tech_software_company_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','tech-software-company'),
		'section' => 'tech_software_company_left_right'
    ));

	$wp_customize->add_setting('tech_software_company_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'tech_software_company_sanitize_choices',
	));
	$wp_customize->add_control('tech_software_company_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'tech-software-company'),
		'section'        => 'tech_software_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'tech-software-company'),
			'Right Sidebar' => __('Right Sidebar', 'tech-software-company'),
			'One Column'    => __('One Column', 'tech-software-company'),
			'Grid Layout'   => __('Grid Layout', 'tech-software-company')
		),
	));

	$wp_customize->add_setting('tech_software_company_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'tech_software_company_sanitize_choices',
	));
	$wp_customize->add_control('tech_software_company_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'tech-software-company'),
		'section'        => 'tech_software_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'tech-software-company'),
			'Right Sidebar' => __('Right Sidebar', 'tech-software-company'),
			'One Column'    => __('One Column', 'tech-software-company'),
		),
	));

	$wp_customize->add_setting('tech_software_company_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'tech_software_company_sanitize_choices',
	));
	$wp_customize->add_control('tech_software_company_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'tech-software-company'),
		'section'        => 'tech_software_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'tech-software-company'),
			'Right Sidebar' => __('Right Sidebar', 'tech-software-company'),
			'One Column'    => __('One Column', 'tech-software-company'),
		),
	));

	$wp_customize->add_setting('tech_software_company_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','tech-software-company'),
        'description' => __('Here you can change the Width layout. ','tech-software-company'),
        'section' => 'tech_software_company_left_right',
        'choices' => array(
            'Default' => __('Default','tech-software-company'),
            'Container' => __('Container','tech-software-company'),
            'Box Container' => __('Box Container','tech-software-company'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'tech_software_company_theme_button', array(
		'title' => __('Button Option','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));

	$wp_customize->add_setting('tech_software_company_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','tech-software-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tech_software_company_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tech_software_company_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','tech-software-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tech_software_company_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tech_software_company_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	) );
	$wp_customize->add_control( 'tech_software_company_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','tech-software-company' ),
		'section'     => 'tech_software_company_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('tech_software_company_topbar',array(
		'title'	=> __('Topbar Section','tech-software-company'),
		'description'	=> __('Add topbar content','tech-software-company'),
		'priority'	=> null,
		'panel' => 'tech_software_company_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'tech_software_company_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tech_software_company_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Topbar','tech-software-company' ),
        'section' => 'tech_software_company_topbar'
    ));

    $wp_customize->add_setting('tech_software_company_topbar_top_bottom_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_topbar_top_bottom_spacing',array(
		'label'	=> __('Top Bottom Topbar Content Space','tech-software-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tech_software_company_topbar',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tech_software_company_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','tech-software-company'),
       'section' => 'tech_software_company_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'tech_software_company_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tech_software_company_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','tech-software-company' ),
        'section' => 'tech_software_company_topbar'
    ));

	$wp_customize->add_setting('tech_software_company_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('tech_software_company_topbar_text',array(
		'label'	=> __('Add Text','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tech_software_company_facebook_url',array(
		'label'	=> __('Add Facebook link','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'setting'	=> 'tech_software_company_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tech_software_company_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tech_software_company_twitter_url',array(
		'label'	=> __('Add Twitter link','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'setting'	=> 'tech_software_company_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tech_software_company_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('tech_software_company_linkedin_url',array(
		'label'	=> __('Add Linkedin link','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'setting'	=> 'tech_software_company_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tech_software_company_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tech_software_company_instagram_url',array(
		'label'	=> __('Add Instagram link','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'setting'	=> 'tech_software_company_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tech_software_company_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('tech_software_company_mail1',array(
		'label'	=> __('Mail Address','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_phone_number',
	));
	$wp_customize->add_control('tech_software_company_phone1',array(
		'label'	=> __('Phone Number','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_loction1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('tech_software_company_loction1',array(
		'label'	=> __('Location','tech-software-company'),
		'section'	=> 'tech_software_company_topbar',
		'type'	=> 'text'
	));
	
	//Slider
	$wp_customize->add_section( 'tech_software_company_slider' , array(
    	'title'      => __( 'Slider Settings', 'tech-software-company' ),
		'priority'   => null,
		'panel' => 'tech_software_company_panel_id'
	) );

	$wp_customize->add_setting('tech_software_company_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','tech-software-company'),
       'section' => 'tech_software_company_slider'
    ));

    $wp_customize->add_setting('tech_software_company_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','tech-software-company'),
       'section' => 'tech_software_company_slider'
    ));

    $wp_customize->add_setting('tech_software_company_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','tech-software-company'),
       'section' => 'tech_software_company_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'tech_software_company_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tech_software_company_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'tech_software_company_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tech-software-company' ),
			'description'	=> __('Size of image should be 1600 x 633','tech-software-company'),
			'section'  => 'tech_software_company_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//Slider excerpt
	$wp_customize->add_setting( 'tech_software_company_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	) );
	$wp_customize->add_control( 'tech_software_company_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','tech-software-company' ),
		'section'     => 'tech_software_company_slider',
		'type'        => 'number',
		'settings'    => 'tech_software_company_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tech_software_company_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','tech-software-company'),
		'description'    => __('This option will add colors over the slider.','tech-software-company'),
       'section' => 'tech_software_company_slider'
    ));

    $wp_customize->add_setting('tech_software_company_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tech_software_company_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'tech-software-company'),
		'section'  => 'tech_software_company_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','tech-software-company'),
		'settings' => 'tech_software_company_slider_image_overlay_color',
	)));

	//Opacity
	$wp_customize->add_setting('tech_software_company_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control( 'tech_software_company_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','tech-software-company' ),
	'section'     => 'tech_software_company_slider',
	'type'        => 'select',
	'settings'    => 'tech_software_company_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','tech-software-company'),
		'0.1' =>  esc_attr('0.1','tech-software-company'),
		'0.2' =>  esc_attr('0.2','tech-software-company'),
		'0.3' =>  esc_attr('0.3','tech-software-company'),
		'0.4' =>  esc_attr('0.4','tech-software-company'),
		'0.5' =>  esc_attr('0.5','tech-software-company'),
		'0.6' =>  esc_attr('0.6','tech-software-company'),
		'0.7' =>  esc_attr('0.7','tech-software-company'),
		'0.8' =>  esc_attr('0.8','tech-software-company'),
		'0.9' =>  esc_attr('0.9','tech-software-company')
	),
	));

	$wp_customize->add_setting( 'tech_software_company_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'tech_software_company_sanitize_number_range',
	));
	$wp_customize->add_control( 'tech_software_company_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','tech-software-company' ),
		'section' => 'tech_software_company_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('tech_software_company_slider_image_height',array(
		'default'=> __('550','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_slider_image_height',array(
		'label'	=> __('Slider Image Height','tech-software-company'),
		'section'=> 'tech_software_company_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_slider_button',array(
		'default'=> __('READ MORE','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_slider_button',array(
		'label'	=> __('Slider Button','tech-software-company'),
		'section'=> 'tech_software_company_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','tech-software-company'),
		'section'=> 'tech_software_company_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tech_software_company_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','tech-software-company'),
		'section'=> 'tech_software_company_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//Contact Form Setting
	$wp_customize->add_section('tech_software_company_contact_form_setting',array(
		'title'	=> __('Contact Form Settings','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));

	$wp_customize->add_setting('tech_software_company_slider_contact_form',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_slider_contact_form',array(
		'label'	=> __('Add the contact form shortcode','tech-software-company'),
		'section'=> 'tech_software_company_contact_form_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('tech_software_company_404_page_setting',array(
		'title'	=> __('404 Page','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));	

	$wp_customize->add_setting('tech_software_company_title_404_page',array(
		'default'=> __('404 Not Found','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_title_404_page',array(
		'label'	=> __('404 Page Title','tech-software-company'),
		'section'=> 'tech_software_company_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_content_404_page',array(
		'default'=>  __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_content_404_page',array(
		'label'	=> __('404 Page Content','tech-software-company'),
		'section'=> 'tech_software_company_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_button_404_page',array(
		'default'=> __('Back to Home Page','tech-software-company'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_button_404_page',array(
		'label'	=> __('404 Page Button','tech-software-company'),
		'section'=> 'tech_software_company_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('tech_software_company_responsive_setting',array(
		'title'	=> __('Responsive Setting','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));

	$wp_customize->add_setting('tech_software_company_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','tech-software-company'),
       'section' => 'tech_software_company_responsive_setting'
    ));

    $wp_customize->add_setting('tech_software_company_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','tech-software-company'),
       'section' => 'tech_software_company_responsive_setting'
    ));

    $wp_customize->add_setting('tech_software_company_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','tech-software-company'),
       'section' => 'tech_software_company_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('tech_software_company_blog_post',array(
		'title'	=> __('Blog Page Settings','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));	

	$wp_customize->add_setting('tech_software_company_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting( 'tech_software_company_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	) );
	$wp_customize->add_control( 'tech_software_company_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','tech-software-company' ),
		'section'     => 'tech_software_company_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'tech_software_company_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','tech-software-company' ),
		'section' => 'tech_software_company_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('tech_software_company_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','tech-software-company'),
        'section' => 'tech_software_company_blog_post',
        'choices' => array(
            'No Content' => __('No Content','tech-software-company'),
            'Excerpt Content' => __('Excerpt Content','tech-software-company'),
            'Full Content' => __('Full Content','tech-software-company'),
        ),
	) );

    $wp_customize->add_setting( 'tech_software_company_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	) );
	$wp_customize->add_control( 'tech_software_company_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','tech-software-company' ),
		'section'     => 'tech_software_company_blog_post',
		'type'        => 'number',
		'settings'    => 'tech_software_company_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'tech_software_company_post_suffix_option', array(
		'default'   => __('...','tech-software-company'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tech_software_company_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','tech-software-company' ),
		'section'     => 'tech_software_company_blog_post',
		'type'        => 'text',
		'settings'    => 'tech_software_company_post_suffix_option',
	) );

	$wp_customize->add_setting('tech_software_company_button_text',array(
		'default'=> __('READ MORE','tech-software-company'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_button_text',array(
		'label'	=> __('Add Button Text','tech-software-company'),
		'section'=> 'tech_software_company_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'tech_software_company_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tech_software_company_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','tech-software-company' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'tech-software-company' ),
        ),
		'section'     => 'tech_software_company_blog_post',
		'type'        => 'text',
		'settings'    => 'tech_software_company_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('tech_software_company_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','tech-software-company'),
        'section' => 'tech_software_company_blog_post',
        'choices' => array(
            'In Box' => __('In Box','tech-software-company'),
            'Without Box' => __('Without Box','tech-software-company'),
        ),
	) );

	$wp_customize->add_setting('tech_software_company_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','tech-software-company'),
       'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting( 'tech_software_company_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tech_software_company_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','tech-software-company' ),
        'section' => 'tech_software_company_blog_post'
    ));

    $wp_customize->add_setting('tech_software_company_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','tech-software-company'),
        'section' => 'tech_software_company_blog_post',
        'choices' => array(
            'categories' => __('Categories','tech-software-company'),
            'tags' => __('Tags','tech-software-company'),
        ),
	) );

	$wp_customize->add_setting('tech_software_company_related_post_title',array(
		'default'=> __('Related Posts','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_related_post_title',array(
		'label'	=> __('Related Post Title','tech-software-company'),
		'section'=> 'tech_software_company_blog_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('tech_software_company_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_related_posts_number',array(
		'label'	=> __('Related Post Number','tech-software-company'),
		'section'=> 'tech_software_company_blog_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('tech_software_company_noresult_found',array(
		'title'	=> __('No Result Found','tech-software-company'),
		'panel' => 'tech_software_company_panel_id',
	));	

	$wp_customize->add_setting('tech_software_company_nosearch_found_title',array(
		'default'=> __('Nothing Found','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','tech-software-company'),
		'section'=> 'tech_software_company_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tech-software-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tech_software_company_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','tech-software-company'),
		'section'=> 'tech_software_company_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tech_software_company_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('tech_software_company_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','tech-software-company'),
       'section' => 'tech_software_company_noresult_found'
    ));

	//footer
	$wp_customize->add_section('tech_software_company_footer_section', array(
		'title'       => __('Footer Text', 'tech-software-company'),
		'priority'    => null,
		'panel'       => 'tech_software_company_panel_id',
	));

	$wp_customize->add_setting('tech_software_company_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'tech_software_company_sanitize_choices',
    ));
    $wp_customize->add_control('tech_software_company_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'tech-software-company'),
        'section'     => 'tech_software_company_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'tech-software-company'),
        'choices' => array(
            '1'     => __('One', 'tech-software-company'),
            '2'     => __('Two', 'tech-software-company'),
            '3'     => __('Three', 'tech-software-company'),
            '4'     => __('Four', 'tech-software-company')
        ),
    ));

    $wp_customize->add_setting('tech_software_company_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tech_software_company_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'tech-software-company'),
		'section'  => 'tech_software_company_footer_section',
	)));

	$wp_customize->add_setting('tech_software_company_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'tech_software_company_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','tech-software-company'),
        'section' => 'tech_software_company_footer_section'
	)));

	$wp_customize->add_setting('tech_software_company_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('tech_software_company_footer_copy', array(
		'label'   => __('Copyright Text', 'tech-software-company'),
		'section' => 'tech_software_company_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('tech_software_company_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','tech-software-company'),
        'section' => 'tech_software_company_footer_section',
        'choices' => array(
            'left' => __('Left','tech-software-company'),
            'right' => __('Right','tech-software-company'),
            'center' => __('Center','tech-software-company'),
        ),
	) );

	$wp_customize->add_setting('tech_software_company_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','tech-software-company' ),
		'section'=> 'tech_software_company_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('tech_software_company_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_copyright_padding',array(
		'label'	=> __('Copyright Padding','tech-software-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tech_software_company_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tech_software_company_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'tech_software_company_sanitize_checkbox'
	));
	$wp_customize->add_control('tech_software_company_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','tech-software-company'),
      	'section' => 'tech_software_company_footer_section',
	));

	$wp_customize->add_setting('tech_software_company_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'tech_software_company_sanitize_choices'
	));
	$wp_customize->add_control('tech_software_company_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','tech-software-company'),
        'section' => 'tech_software_company_footer_section',
        'choices' => array(
            'Left' => __('Left','tech-software-company'),
            'Right' => __('Right','tech-software-company'),
            'Center' => __('Center','tech-software-company'),
        ),
	) );

	$wp_customize->add_setting('tech_software_company_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'tech_software_company_sanitize_float',
	));
	$wp_customize->add_control('tech_software_company_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','tech-software-company'),
		'section'=> 'tech_software_company_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'tech_software_company_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tech_Software_Company_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the contech_software_company_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Tech_Software_Company_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Tech_Software_Company_Customize_Section_Pro(
				$manager,
				'tech_software_company_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Tech Software Company', 'tech-software-company'),
					'pro_text' => esc_html__('Go Pro', 'tech-software-company'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/software-company-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('tech-software-company-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('tech-software-company-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Tech_Software_Company_Customize::get_instance();