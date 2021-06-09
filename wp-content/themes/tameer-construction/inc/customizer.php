<?php
/**
 * Tameer Construction: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tameer_construction_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'tameer_construction_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'tameer-construction' ),
	    'description' => __( 'Description of what this panel does.', 'tameer-construction' ),
	) );

	// font array
	$tameer_construction_font_array = array(
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

	$wp_customize->add_section( 'tameer_construction_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'tameer-construction' ),
		'panel' => 'tameer_construction_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'tameer_construction_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_paragraph_color', array(
		'label' => __('Paragraph Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_paragraph_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'Paragraph Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	$wp_customize->add_setting('tameer_construction_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tameer_construction_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_atag_color', array(
		'label' => __('"a" Tag Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_atag_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( '"a" Tag Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'tameer_construction_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_li_color', array(
		'label' => __('"li" Tag Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_li_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( '"li" Tag Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h1_color', array(
		'label' => __('H1 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h1_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'H1 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('tameer_construction_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h1_font_size',array(
		'label'	=> __('H1 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h2_color', array(
		'label' => __('h2 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h2_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'h2 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('tameer_construction_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h2_font_size',array(
		'label'	=> __('h2 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h3_color', array(
		'label' => __('h3 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h3_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'h3 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('tameer_construction_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h3_font_size',array(
		'label'	=> __('h3 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h4_color', array(
		'label' => __('h4 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h4_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'h4 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('tameer_construction_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h4_font_size',array(
		'label'	=> __('h4 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h5_color', array(
		'label' => __('h5 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h5_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'h5 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('tameer_construction_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h5_font_size',array(
		'label'	=> __('h5 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'tameer_construction_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_h6_color', array(
		'label' => __('h6 Color', 'tameer-construction'),
		'section' => 'tameer_construction_typography',
		'settings' => 'tameer_construction_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('tameer_construction_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control(
	    'tameer_construction_h6_font_family', array(
	    'section'  => 'tameer_construction_typography',
	    'label'    => __( 'h6 Fonts','tameer-construction'),
	    'type'     => 'select',
	    'choices'  => $tameer_construction_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('tameer_construction_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_h6_font_size',array(
		'label'	=> __('h6 Font Size','tameer-construction'),
		'section'	=> 'tameer_construction_typography',
		'setting'	=> 'tameer_construction_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('tameer_construction_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','tameer-construction'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','tameer-construction'),
            'Background' => __('Background','tameer-construction'),
        ),
	) );
	
	// Add the Color Option section.
	$wp_customize->add_section( 'tameer_construction_theme_color_option', array(
		'panel' => 'tameer_construction_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'tameer-construction' )
	));

  	$wp_customize->add_setting( 'tameer_construction_theme_color', array(
	    'default' => '#c90900',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_theme_color', array(
  		'label' => __('Color Option', 'tameer-construction'),
	    'description' => __('One can change complete theme color on just one click.', 'tameer-construction'),
	    'section' => 'tameer_construction_theme_color_option',
	    'settings' => 'tameer_construction_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'tameer_construction_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'tameer-construction' ),
		'panel' => 'tameer_construction_panel_id'
	) );

	$wp_customize->add_setting('tameer_construction_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','tameer-construction'),
       'section' => 'tameer_construction_shop_page_options',
    ));

    $wp_customize->add_setting('tameer_construction_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','tameer-construction'),
       'section' => 'tameer_construction_shop_page_options',
    ));

	$wp_customize->add_setting( 'tameer_construction_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'tameer_construction_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tameer_construction_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'tameer-construction' ),
		'section'  => 'tameer_construction_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('tameer_construction_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));	
	$wp_customize->add_control('tameer_construction_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','tameer-construction'),
		'section'	=> 'tameer_construction_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control( 'tameer_construction_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control( 'tameer_construction_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'tameer_construction_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'tameer_construction_shop_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','tameer-construction' ),
		'section' => 'tameer_construction_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

  	//Layout Settings
	$wp_customize->add_section( 'tameer_construction_width_layout', array(
    	'title'      => __( 'Layout Settings', 'tameer-construction' ),
		'panel' => 'tameer_construction_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'tameer_construction_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tameer_construction_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','tameer-construction' ),
        'section' => 'tameer_construction_width_layout'
    ));

	$wp_customize->add_setting('tameer_construction_loader_setting',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','tameer-construction'),
       'section' => 'tameer_construction_width_layout'
    ));

    $wp_customize->add_setting('tameer_construction_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','tameer-construction'),
        'section' => 'tameer_construction_width_layout',
        'choices' => array(
            'Default' => __('Default','tameer-construction'),
            'Circle' => __('Circle','tameer-construction'),
            'Two Circle' => __('Two Circle','tameer-construction')
        ),
	) );

    $wp_customize->add_setting( 'tameer_construction_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'tameer-construction'),
	    'section' => 'tameer_construction_width_layout',
	    'settings' => 'tameer_construction_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'tameer_construction_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'tameer-construction'),
	    'section' => 'tameer_construction_width_layout',
	    'settings' => 'tameer_construction_loader_background_color',
  	)));

	$wp_customize->add_setting('tameer_construction_theme_options',array(
    	'default' => 'Default',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','tameer-construction'),
        'description' => __('Here you can change the Width layout. ','tameer-construction'),
        'section' => 'tameer_construction_width_layout',
        'choices' => array(
            'Default' => __('Default','tameer-construction'),
            'Wide Layout' => __('Wide Layout','tameer-construction'),
            'Box Layout' => __('Box Layout','tameer-construction'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'tameer_construction_button_option', array(
		'title' => __('Button','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));

	$wp_customize->add_setting('tameer_construction_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tameer_construction_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_left_right_padding',array(
		'label'	=> __('Left and Right Padding','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	) );
	$wp_customize->add_control( 'tameer_construction_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','tameer-construction' ),
		'section'     => 'tameer_construction_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

  	//Sidebar Layout Settings
	$wp_customize->add_section( 'tameer_construction_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'tameer-construction' ),
		'panel' => 'tameer_construction_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('tameer_construction_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','tameer-construction'),
        'section' => 'tameer_construction_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','tameer-construction'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tameer-construction'),
            'Right Sidebar' => __('Right Sidebar','tameer-construction'),
            'One Column' => __('Full Column','tameer-construction'),
            'Grid Layout' => __('Grid Layout','tameer-construction')
        ),
	) );

	$wp_customize->add_setting('tameer_construction_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','tameer-construction'),
        'section' => 'tameer_construction_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','tameer-construction'),
            'Right Sidebar' => __('Right Sidebar','tameer-construction'),
            'One Column' => __('Full Column','tameer-construction')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('tameer_construction_topbar',array(
		'title'	=> __('Topbar','tameer-construction'),
		'description'	=> __('Add Topbar Content here','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'tameer_construction_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ) );
    $wp_customize->add_control('tameer_construction_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','tameer-construction' ),
        'section' => 'tameer_construction_topbar'
    ));

	$wp_customize->add_setting('tameer_construction_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_email'
	));
	$wp_customize->add_control('tameer_construction_email',array(
		'label'	=> __('Add Email','tameer-construction'),
		'section'	=> 'tameer_construction_topbar',
		'setting'	=> 'tameer_construction_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tameer_construction_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_phone_number'
	));	
	$wp_customize->add_control('tameer_construction_call1',array(
		'label'	=> __('Add Phone Number','tameer-construction'),
		'section'	=> 'tameer_construction_topbar',
		'setting'	=> 'tameer_construction_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('tameer_construction_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tameer_construction_time',array(
		'label'	=> __('Add Time','tameer-construction'),
		'section'	=> 'tameer_construction_topbar',
		'type'		=> 'text'
	));

	//Social Icons
	$wp_customize->add_section('tameer_construction_social_link',array(
		'title'	=> __('Social Media','tameer-construction'),
		'description'	=> __('Add Social Media Url here','tameer-construction'),
		'priority'	=> null,
		'panel' => 'tameer_construction_panel_id',
	));

	$wp_customize->add_setting('tameer_construction_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tameer_construction_facebook_url',array(
		'label'	=> __('Add Facebook link','tameer-construction'),
		'section'	=> 'tameer_construction_social_link',
		'setting'	=> 'tameer_construction_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tameer_construction_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tameer_construction_twitter_url',array(
		'label'	=> __('Add Twitter link','tameer-construction'),
		'section'	=> 'tameer_construction_social_link',
		'setting'	=> 'tameer_construction_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('tameer_construction_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('tameer_construction_youtube_url',array(
		'label'	=> __('Add Youtube link','tameer-construction'),
		'section'	=> 'tameer_construction_social_link',
		'setting'	=> 'tameer_construction_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('tameer_construction_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('tameer_construction_linkdin_url',array(
		'label'	=> __('Add Linkdin link','tameer-construction'),
		'section'	=> 'tameer_construction_social_link',
		'setting'	=> 'tameer_construction_linkdin_url',
		'type'	=> 'url'
	) );

	// navigation menu 
	$wp_customize->add_section( 'tameer_construction_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'tameer-construction' ),
		'priority'   => null,
		'panel' => 'tameer_construction_panel_id'
	) );

	$wp_customize->add_setting('tameer_construction_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','tameer-construction'),
		'section'=> 'tameer_construction_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('tameer_construction_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
    ));
    $wp_customize->add_control('tameer_construction_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','tameer-construction'),
        'section' => 'tameer_construction_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tameer-construction'),
            'Uppercase' => __('Uppercase','tameer-construction'),
        ),
	) );

	$wp_customize->add_setting('tameer_construction_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
    ));
    $wp_customize->add_control('tameer_construction_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','tameer-construction'),
        'section' => 'tameer_construction_navigation_menu',
        'choices' => array(
            'Default' => __('Default','tameer-construction'),
            'Normal' => __('Normal','tameer-construction'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'tameer_construction_slider' , array(
    	'title'      => __( 'Slider Settings', 'tameer-construction' ),
		'priority'   => null,
		'panel' => 'tameer_construction_panel_id'
	) );

	$wp_customize->add_setting('tameer_construction_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('tameer_construction_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','tameer-construction'),
      	'section' => 'tameer_construction_slider',
	));

	$wp_customize->add_setting('tameer_construction_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','tameer-construction'),
       'section' => 'tameer_construction_slider'
    ));

    $wp_customize->add_setting('tameer_construction_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','tameer-construction'),
       'section' => 'tameer_construction_slider'
    ));

    $wp_customize->add_setting('tameer_construction_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','tameer-construction'),
       'section' => 'tameer_construction_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'tameer_construction_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'tameer_construction_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'tameer_construction_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'tameer-construction' ),
			'section'  => 'tameer_construction_slider',
			'type'     => 'dropdown-pages'
		) );
		
	}

	$wp_customize->add_setting( 'tameer_construction_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'tameer_construction_sanitize_number_range',
	));
	$wp_customize->add_control( 'tameer_construction_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','tameer-construction' ),
		'section' => 'tameer_construction_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('tameer_construction_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_slider_height_option',array(
		'label'	=> __('Slider Height Option','tameer-construction'),
		'section'=> 'tameer_construction_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('tameer_construction_slider_content_option',array(
    'default' => 'Center',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','tameer-construction'),
        'section' => 'tameer_construction_slider',
        'choices' => array(
            'Center' => __('Center','tameer-construction'),
            'Left' => __('Left','tameer-construction'),
            'Right' => __('Right','tameer-construction'),
        ),
	) );

	$wp_customize->add_setting('tameer_construction_slider_button_text',array(
		'default'=> __('READ MORE','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_slider_button_text',array(
		'label'	=> __('Slider Button Text','tameer-construction'),
		'section'=> 'tameer_construction_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'tameer_construction_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'tameer_construction_sanitize_number_range',
	) );
	$wp_customize->add_control( 'tameer_construction_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','tameer-construction' ),
		'section'     => 'tameer_construction_slider',
		'type'        => 'range',
		'settings'    => 'tameer_construction_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('tameer_construction_slider_opacity_color',array(
      'default'              => __('0.7','tameer-construction'),
      'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control( 'tameer_construction_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','tameer-construction' ),
	'section'     => 'tameer_construction_slider',
	'type'        => 'select',
	'settings'    => 'tameer_construction_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','tameer-construction'),
      '0.1' =>  esc_attr('0.1','tameer-construction'),
      '0.2' =>  esc_attr('0.2','tameer-construction'),
      '0.3' =>  esc_attr('0.3','tameer-construction'),
      '0.4' =>  esc_attr('0.4','tameer-construction'),
      '0.5' =>  esc_attr('0.5','tameer-construction'),
      '0.6' =>  esc_attr('0.6','tameer-construction'),
      '0.7' =>  esc_attr('0.7','tameer-construction'),
      '0.8' =>  esc_attr('0.8','tameer-construction'),
      '0.9' =>  esc_attr('0.9','tameer-construction')
	),
	));

	//About
	$wp_customize->add_section('tameer_construction_about',array(
		'title'	=> __('About','tameer-construction'),
		'description'	=> __('Add About Section below.','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));

	$wp_customize->add_setting( 'tameer_construction_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'tameer_construction_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'tameer_construction_about_page', array(
		'label'    => __( 'Select About Page', 'tameer-construction' ),
		'description'	=> __('Image Size (537 x 358)','tameer-construction'),
		'section'  => 'tameer_construction_about',
		'type'     => 'dropdown-pages'
	) );

	//no Result Setting
	$wp_customize->add_section('tameer_construction_no_result_setting',array(
		'title'	=> __('No Results Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));	

	$wp_customize->add_setting('tameer_construction_no_search_result_title',array(
		'default'=> __('Nothing Found','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_no_search_result_title',array(
		'label'	=> __('No Search Results Title','tameer-construction'),
		'section'=> 'tameer_construction_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tameer_construction_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_no_search_result_content',array(
		'label'	=> __('No Search Results Content','tameer-construction'),
		'section'=> 'tameer_construction_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('tameer_construction_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));	

	$wp_customize->add_setting('tameer_construction_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('tameer_construction_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','tameer-construction'),
		'section'=> 'tameer_construction_page_not_found_setting',
		'type'=> 'text',
	));

	$wp_customize->add_setting('tameer_construction_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('tameer_construction_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','tameer-construction'),
		'section'=> 'tameer_construction_page_not_found_setting',
		'type'=> 'text',
	));

	//Responsive Media Settings
	$wp_customize->add_section('tameer_construction_mobile_media',array(
		'title'	=> __('Mobile Media Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));

	$wp_customize->add_setting('tameer_construction_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','tameer-construction'),
       'section' => 'tameer_construction_mobile_media'
    ));

	$wp_customize->add_setting('tameer_construction_enable_disable_topbar',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','tameer-construction'),
       'section' => 'tameer_construction_mobile_media'
    ));

    $wp_customize->add_setting('tameer_construction_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','tameer-construction'),
       'section' => 'tameer_construction_mobile_media'
    ));

    $wp_customize->add_setting('tameer_construction_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','tameer-construction'),
       'section' => 'tameer_construction_mobile_media'
    ));

    $wp_customize->add_setting('tameer_construction_enable_disable_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','tameer-construction'),
       'section' => 'tameer_construction_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('tameer_construction_blog_post',array(
		'title'	=> __('Post Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));	

	$wp_customize->add_setting('tameer_construction_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','tameer-construction'),
       'section' => 'tameer_construction_blog_post'
    ));

    $wp_customize->add_setting('tameer_construction_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','tameer-construction'),
       'section' => 'tameer_construction_blog_post'
    ));

    $wp_customize->add_setting('tameer_construction_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','tameer-construction'),
       'section' => 'tameer_construction_blog_post'
    ));

    $wp_customize->add_setting( 'tameer_construction_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tameer_construction_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','tameer-construction' ),
		'section'     => 'tameer_construction_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tameer-construction'),
		'type'        => 'text',
		'settings'    => 'tameer_construction_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('tameer_construction_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
    ));
    $wp_customize->add_control('tameer_construction_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','tameer-construction'),
        'section' => 'tameer_construction_blog_post',
        'choices' => array(
            'Default' => __('Default','tameer-construction'),
            'Center' => __('Center','tameer-construction'),
            'Image and Content' => __('Image and Content','tameer-construction'),
        ),
	) );

	$wp_customize->add_setting('tameer_construction_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','tameer-construction'),
        'section' => 'tameer_construction_blog_post',
        'choices' => array(
            'None' => __('None','tameer-construction'),
            'Post Excerpt' => __('Post Excerpt','tameer-construction'),
            'Post Content' => __('Post Content','tameer-construction'),
        ),
	) );

    $wp_customize->add_setting( 'tameer_construction_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	) );
	$wp_customize->add_control( 'tameer_construction_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','tameer-construction' ),
		'section'     => 'tameer_construction_blog_post',
		'type'        => 'number',
		'settings'    => 'tameer_construction_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'tameer_construction_post_excerpt_suffix', array(
		'default'   => __('{...}','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tameer_construction_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','tameer-construction' ),
		'section'     => 'tameer_construction_blog_post',
		'type'        => 'text',
		'settings'    => 'tameer_construction_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('tameer_construction_button_text',array(
		'default'=> __('Continue Reading....','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_button_text',array(
		'label'	=> __('Add Button Text','tameer-construction'),
		'section'=> 'tameer_construction_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('tameer_construction_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','tameer-construction'),
       'section' => 'tameer_construction_blog_post'
    ));

	$wp_customize->add_setting( 'tameer_construction_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'tameer_construction_sanitize_choices'
    ));
    $wp_customize->add_control( 'tameer_construction_pagination_option', array(
        'section' => 'tameer_construction_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'tameer-construction' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'tameer-construction' ),
            'next-prev' => __( 'Next / Previous', 'tameer-construction' ),
    )));

	// Single post setting
    $wp_customize->add_section('tameer_construction_single_post_section',array(
		'title'	=> __('Single Post Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));	

	$wp_customize->add_setting('tameer_construction_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','tameer-construction'),
       'section' => 'tameer_construction_single_post_section'
    ));

    $wp_customize->add_setting('tameer_construction_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','tameer-construction'),
       'section' => 'tameer_construction_single_post_section'
    ));

    $wp_customize->add_setting( 'tameer_construction_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'tameer_construction_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','tameer-construction' ),
		'section'     => 'tameer_construction_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','tameer-construction'),
		'type'        => 'text',
		'settings'    => 'tameer_construction_seperator_metabox',
	) );

	$wp_customize->add_setting('tameer_construction_comment_form_heading',array(
       'default' => __('Leave a Reply','tameer-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tameer_construction_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','tameer-construction'),
       'section' => 'tameer_construction_single_post_section'
    ));

    $wp_customize->add_setting('tameer_construction_comment_button_text',array(
       'default' => __('Post Comment','tameer-construction'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('tameer_construction_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','tameer-construction'),
       'section' => 'tameer_construction_single_post_section'
    ));

    $wp_customize->add_setting( 'tameer_construction_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'tameer_construction_sanitize_number_range',
	));
	$wp_customize->add_control('tameer_construction_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','tameer-construction' ),
		'section' => 'tameer_construction_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('tameer_construction_related_post_section',array(
		'title'	=> __('Related Post Settings','tameer-construction'),
		'panel' => 'tameer_construction_panel_id',
	));	

	$wp_customize->add_setting('tameer_construction_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
    ));
    $wp_customize->add_control('tameer_construction_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','tameer-construction'),
       'section' => 'tameer_construction_related_post_section',
    ));

	$wp_customize->add_setting( 'tameer_construction_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'tameer_construction_sanitize_choices'
    ));
    $wp_customize->add_control( 'tameer_construction_show_related_post', array(
        'section' => 'tameer_construction_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'tameer-construction' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'tameer-construction'),
            'tags' => __( ' By Tags', 'tameer-construction' ),
    )));

    $wp_customize->add_setting('tameer_construction_change_related_post_title',array(
		'default'=> __('Related Posts','tameer-construction'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('tameer_construction_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','tameer-construction'),
		'section'=> 'tameer_construction_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('tameer_construction_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','tameer-construction'),
		'section'=> 'tameer_construction_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'tameer_construction_footer' , array(
    	'title' => __( 'Footer Section', 'tameer-construction' ),
		'priority'   => null,
		'panel' => 'tameer_construction_panel_id'
	) );

	$wp_customize->add_setting('tameer_construction_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'tameer_construction_sanitize_choices',
    ));
    $wp_customize->add_control('tameer_construction_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'tameer-construction'),
        'section'     => 'tameer_construction_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'tameer-construction'),
        'choices' => array(
            '1'     => __('One', 'tameer-construction'),
            '2'     => __('Two', 'tameer-construction'),
            '3'     => __('Three', 'tameer-construction'),
            '4'     => __('Four', 'tameer-construction')
        ),
    )); 

    $wp_customize->add_setting( 'tameer_construction_footer_widget_background', array(
	    'default' => '#17232a',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tameer_construction_footer_widget_background', array(
  		'label' => __('Footer Widget Background','tameer-construction'),
	    'section' => 'tameer_construction_footer',
  	)));

  	$wp_customize->add_setting('tameer_construction_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'tameer_construction_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','tameer-construction'),
        'section' => 'tameer_construction_footer'
	)));

	$wp_customize->add_setting('tameer_construction_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'tameer_construction_sanitize_checkbox'
	));
	$wp_customize->add_control('tameer_construction_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','tameer-construction'),
      	'section' => 'tameer_construction_footer',
	));

	$wp_customize->add_setting('tameer_construction_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'tameer_construction_sanitize_choices'
	));
	$wp_customize->add_control('tameer_construction_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','tameer-construction'),
        'description' => __('Here you can change the Footer layout. ','tameer-construction'),
        'section' => 'tameer_construction_footer',
        'choices' => array(
            'Left align' => __('Left align','tameer-construction'),
            'Right align' => __('Right align','tameer-construction'),
            'Center align' => __('Center align','tameer-construction'),
        ),
	) );

	$wp_customize->add_setting('tameer_construction_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'tameer_construction_sanitize_number_range',
	));
	$wp_customize->add_control('tameer_construction_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('tameer_construction_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tameer_construction_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'tameer_construction_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	) );
	$wp_customize->add_control( 'tameer_construction_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','tameer-construction' ),
		'section'     => 'tameer_construction_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('tameer_construction_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('tameer_construction_footer_text',array(
		'label'	=> __('Add Copyright Text','tameer-construction'),
		'section'	=> 'tameer_construction_footer',
		'setting'	=> 'tameer_construction_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('tameer_construction_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','tameer-construction'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'tameer_construction_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('tameer_construction_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'tameer_construction_sanitize_float',
	));
	$wp_customize->add_control('tameer_construction_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','tameer-construction'),
		'section'=> 'tameer_construction_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'tameer_construction_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'tameer_construction_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'tameer_construction_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Tameer Construction 1.0
 * @see tameer-construction_customize_register()
 *
 * @return void
 */
function tameer_construction_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Tameer Construction 1.0
 * @see tameer-construction_customize_register()
 *
 * @return void
 */
function tameer_construction_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function tameer_construction_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tameer_Construction_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
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
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Tameer_Construction_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Tameer_Construction_Customize_Section_Pro(
				$manager,
				'tameer_construction_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Tameer Construction Pro', 'tameer-construction' ),
					'pro_text' => esc_html__( 'Go Pro', 'tameer-construction' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/construction-wordpress-theme/'),
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

		wp_enqueue_script( 'tameer-construction-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tameer-construction-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Tameer_Construction_Customize::get_instance();