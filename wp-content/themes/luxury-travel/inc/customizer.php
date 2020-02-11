<?php
/**
 * Luxury Travel Theme Customizer
 * @package Luxury Travel
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function luxury_travel_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'luxury_travel_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'TG Settings', 'luxury-travel' ),
	    'description' => __( 'Description of what this panel does.', 'luxury-travel' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'luxury_travel_theme_color_option', array( 
		'panel' => 'luxury_travel_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'luxury-travel' ) 
	) );

  	$wp_customize->add_setting( 'luxury_travel_theme_color', array(
	    'default' => '#00739d',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme global color settings on just one click.', 'luxury-travel'),
	    'section' => 'luxury_travel_theme_color_option',
	    'settings' => 'luxury_travel_theme_color',
  	)));

	//layout setting
	$wp_customize->add_section( 'luxury_travel_theme_layout', array(
    	'title'      => __( 'Blog Settings', 'luxury-travel' ),
		'priority'   => 30,
		'panel' => 'luxury_travel_panel_id'
	) );

	$wp_customize->add_setting('luxury_travel_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('luxury_travel_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','luxury-travel'),
       'section' => 'luxury_travel_theme_layout'
    ));

    $wp_customize->add_setting( 'luxury_travel_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_preloader_color', array(
  		'label' => __('Preloader Color', 'luxury-travel'),
	    'section' => 'luxury_travel_theme_layout',
	    'settings' => 'luxury_travel_preloader_color',
  	)));

  	$wp_customize->add_setting( 'luxury_travel_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'luxury-travel'),
	    'section' => 'luxury_travel_theme_layout',
	    'settings' => 'luxury_travel_preloader_bg_color',
  	)));

	$wp_customize->add_setting('luxury_travel_theme_layout_options',array(
        'default' => __('Default Theme','luxury-travel'),
        'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control('luxury_travel_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','luxury-travel'),
        'section' => 'luxury_travel_theme_layout',
        'choices' => array(
            'Default Theme' => __('Default Theme','luxury-travel'),
            'Container Theme' => __('Container Theme','luxury-travel'),
            'Box Container Theme' => __('Box Container Theme','luxury-travel'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('luxury_travel_layout',array(
        'default' => __( 'Right Sidebar', 'luxury-travel' ),
        'sanitize_callback' => 'luxury_travel_sanitize_choices'	        
	) );
	$wp_customize->add_control('luxury_travel_layout',
	    array(
	        'type' => 'radio',
	        'section' => 'luxury_travel_theme_layout',
       		'label' => __('Blog Layout','luxury-travel'),
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','luxury-travel'),
	            'Right Sidebar' => __('Right Sidebar','luxury-travel'),
	            'One Column' => __('One Column','luxury-travel'),
	            'Three Columns' => __('Three Columns','luxury-travel'),
	            'Four Columns' => __('Four Columns','luxury-travel'),
	            'Grid Layout' => __('Grid Layout','luxury-travel')
	        ),
	    )
    );

    $wp_customize->add_setting('luxury_travel_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('luxury_travel_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','luxury-travel'),
       'section' => 'luxury_travel_theme_layout'
    ));

    $wp_customize->add_setting('luxury_travel_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('luxury_travel_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','luxury-travel'),
       'section' => 'luxury_travel_theme_layout'
    ));

    $wp_customize->add_setting('luxury_travel_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('luxury_travel_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','luxury-travel'),
       'section' => 'luxury_travel_theme_layout'
    ));

   $wp_customize->add_setting( 'luxury_travel_post_excerpt_number', array(
		'default'              => 20,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'luxury_travel_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number','luxury-travel' ),
		'section'     => 'luxury_travel_theme_layout',
		'type'        => 'sanitize_text_field',
		'settings'    => 'luxury_travel_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

    $font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'luxury_travel_typography', array(
    	'title'      => __( 'Typography', 'luxury-travel' ),
		'priority'   => 30,
		'panel' => 'luxury_travel_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'luxury_travel_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_paragraph_color', array(
		'label' => __('Paragraph Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_paragraph_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'Paragraph Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('luxury_travel_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'luxury_travel_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_atag_color', array(
		'label' => __('"a" Tag Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_atag_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( '"a" Tag Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'luxury_travel_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_li_color', array(
		'label' => __('"li" Tag Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_li_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( '"li" Tag Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h1_color', array(
		'label' => __('H1 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h1_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H1 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('luxury_travel_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h1_font_size',array(
		'label'	=> __('H1 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h2_color', array(
		'label' => __('H2 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h2_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H2 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('luxury_travel_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h2_font_size',array(
		'label'	=> __('H2 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h3_color', array(
		'label' => __('H3 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h3_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H3 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('luxury_travel_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h3_font_size',array(
		'label'	=> __('H3 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h4_color', array(
		'label' => __('H4 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h4_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H4 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('luxury_travel_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h4_font_size',array(
		'label'	=> __('H4 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h5_color', array(
		'label' => __('H5 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h5_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H5 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('luxury_travel_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h5_font_size',array(
		'label'	=> __('H5 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'luxury_travel_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luxury_travel_h6_color', array(
		'label' => __('H6 Color', 'luxury-travel'),
		'section' => 'luxury_travel_typography',
		'settings' => 'luxury_travel_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('luxury_travel_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control(
	    'luxury_travel_h6_font_family', array(
	    'section'  => 'luxury_travel_typography',
	    'label'    => __( 'H6 Fonts','luxury-travel'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('luxury_travel_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_h6_font_size',array(
		'label'	=> __('H6 Font Size','luxury-travel'),
		'section'	=> 'luxury_travel_typography',
		'setting'	=> 'luxury_travel_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('luxury_travel_topbar_icon',array(
		'title'	=> __('Topbar Section','luxury-travel'),
		'description'	=> __('Add Header Content here','luxury-travel'),
		'priority'	=> null,
		'panel' => 'luxury_travel_panel_id',
	));

	$wp_customize->add_setting('luxury_travel_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('luxury_travel_call',array(
		'label'	=> __('Add Contact Url','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_icon',
		'setting'	=> 'luxury_travel_call',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('luxury_travel_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('luxury_travel_mail',array(
		'label'	=> __('Add Email Url','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_icon',
		'setting'	=> 'luxury_travel_mail',
		'type'		=> 'url'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('luxury_travel_topbar_header',array(
		'title'	=> __('Social Icon Section','luxury-travel'),
		'description'	=> __('Add Header Content here','luxury-travel'),
		'priority'	=> null,
		'panel' => 'luxury_travel_panel_id',
	));	

	$wp_customize->add_setting('luxury_travel_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('luxury_travel_facebook_url',array(
		'label'	=> __('Add Facebook link','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_header',
		'setting'	=> 'luxury_travel_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('luxury_travel_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('luxury_travel_twitter_url',array(
		'label'	=> __('Add Twitter link','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_header',
		'setting'	=> 'luxury_travel_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('luxury_travel_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('luxury_travel_insta_url',array(
		'label'	=> __('Add Instagram link','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_header',
		'setting'	=> 'luxury_travel_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('luxury_travel_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('luxury_travel_youtube_url',array(
		'label'	=> __('Add Youtube link','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_header',
		'setting'	=> 'luxury_travel_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('luxury_travel_pintrest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('luxury_travel_pintrest_url',array(
		'label'	=> __('Add Pintrest link','luxury-travel'),
		'section'	=> 'luxury_travel_topbar_header',
		'setting'	=> 'luxury_travel_pintrest_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'luxury_travel_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'luxury-travel' ),
		'priority'   => 30,
		'panel' => 'luxury_travel_panel_id'
	) );

	$wp_customize->add_setting('luxury_travel_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('luxury_travel_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','luxury-travel'),
       'section' => 'luxury_travel_slidersettings'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'luxury_travel_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'luxury_travel_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'luxury_travel_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'luxury-travel' ),
			'section'  => 'luxury_travel_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content Alignment
    $wp_customize->add_setting('luxury_travel_slider_alignment_option',array(
    'default' => __('Left Align','luxury-travel'),
        'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control('luxury_travel_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','luxury-travel'),
        'section' => 'luxury_travel_slidersettings',
        'choices' => array(
            'Center Align' => __('Center Align','luxury-travel'),
            'Left Align' => __('Left Align','luxury-travel'),
            'Right Align' => __('Right Align','luxury-travel'),
        ),
	) );

	//Opacity
	$wp_customize->add_setting('luxury_travel_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control( 'luxury_travel_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','luxury-travel' ),
		'section'     => 'luxury_travel_slidersettings',
		'type'        => 'select',
		'settings'    => 'luxury_travel_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','luxury-travel'),
	      '0.1' =>  esc_attr('0.1','luxury-travel'),
	      '0.2' =>  esc_attr('0.2','luxury-travel'),
	      '0.3' =>  esc_attr('0.3','luxury-travel'),
	      '0.4' =>  esc_attr('0.4','luxury-travel'),
	      '0.5' =>  esc_attr('0.5','luxury-travel'),
	      '0.6' =>  esc_attr('0.6','luxury-travel'),
	      '0.7' =>  esc_attr('0.7','luxury-travel'),
	      '0.8' =>  esc_attr('0.8','luxury-travel'),
	      '0.9' =>  esc_attr('0.9','luxury-travel')
		),
	));

	//Trending Product
	$wp_customize->add_section('luxury_travel_products',array(
		'title'	=> __('Deal And Discount','luxury-travel'),
		'description'=> __('This section will appear below the slider.','luxury-travel'),
		'panel' => 'luxury_travel_panel_id',
	));	
	
	$wp_customize->add_setting('luxury_travel_maintitle',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('luxury_travel_maintitle',array(
		'label'	=> __('Section Title','luxury-travel'),
		'section'=> 'luxury_travel_products',
		'setting'=> 'luxury_travel_maintitle',
		'type'=> 'text'
	));	

	for ( $count = 0; $count <= 0; $count++ ) {

		$wp_customize->add_setting( 'luxury_travel_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'luxury_travel_page' . $count, array(
			'label'    => __( 'Select Page', 'luxury-travel' ),
			'section'  => 'luxury_travel_products',
			'type'     => 'dropdown-pages'
		));
	}

	//About
	$wp_customize->add_section('luxury_travel_about1',array(
		'title'	=> __('About Section','luxury-travel'),
		'description'	=> __('Add About sections below.','luxury-travel'),
		'panel' => 'luxury_travel_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('luxury_travel_about_setting',array(
		'sanitize_callback' => 'luxury_travel_sanitize_choices',
	));
	$wp_customize->add_control('luxury_travel_about_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','luxury-travel'),
		'section' => 'luxury_travel_about1',
	));

	//footer text
	$wp_customize->add_section('luxury_travel_footer_section',array(
		'title'	=> __('Footer Section','luxury-travel'),
		'panel' => 'luxury_travel_panel_id'
	));

	$wp_customize->add_setting('luxury_travel_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luxury_travel_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','luxury-travel'),
      	'section' => 'luxury_travel_footer_section',
	));

	$wp_customize->add_setting('luxury_travel_back_to_top',array(
        'default' => __('Right','luxury-travel'),
        'sanitize_callback' => 'luxury_travel_sanitize_choices'
	));
	$wp_customize->add_control('luxury_travel_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','luxury-travel'),
        'section' => 'luxury_travel_footer_section',
        'choices' => array(
            'Left' => __('Left','luxury-travel'),
            'Right' => __('Right','luxury-travel'),
            'Center' => __('Center','luxury-travel'),
        ),
	) );

	$wp_customize->add_setting('luxury_travel_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'luxury_travel_sanitize_choices',
    ));
    $wp_customize->add_control('luxury_travel_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'luxury-travel'),
        'section'     => 'luxury_travel_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'luxury-travel'),
        'choices' => array(
            '1'     => __('One column', 'luxury-travel'),
            '2'     => __('Two columns', 'luxury-travel'),
            '3'     => __('Three columns', 'luxury-travel'),
            '4'     => __('Four columns', 'luxury-travel')
        ),
    )); 
	
	$wp_customize->add_setting('luxury_travel_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('luxury_travel_text',array(
		'label'	=> __('Copyright Text','luxury-travel'),
		'description'	=> __('Add some text for footer like copyright etc.','luxury-travel'),
		'section'	=> 'luxury_travel_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'luxury_travel_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Luxury_Travel_Customize {

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
		$manager->register_section_type( 'Luxury_Travel_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Luxury_Travel_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Upgrade to Pro', 'luxury-travel' ),
					'pro_text' => esc_html__( 'Go Pro', 'luxury-travel' ),
					'pro_url'  => esc_url( 'https://www.themesglance.com/themes/premium-travel-agency-wordpress-theme/' ),
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

		wp_enqueue_script( 'luxury-travel-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'luxury-travel-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Luxury_Travel_Customize::get_instance();