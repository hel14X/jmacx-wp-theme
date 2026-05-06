<?php
/**
 * JMACXLED functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function jmacxled_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'jmacxled' ),
            'footer' => esc_html__( 'Footer Menu', 'jmacxled' ),
        )
    );

    // Add theme support for HTML5 markup.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action( 'after_setup_theme', 'jmacxled_setup' );

/**
 * Enqueue scripts and styles.
 */
function jmacxled_scripts() {
    wp_enqueue_style( 'jmacxled-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'jmacxled-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700;900&display=swap', false );

    wp_enqueue_script( 'jmacxled-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'jmacxled_scripts' );

/**
 * Customizer Additions
 */
function jmacxled_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'jmacxled_hero_section', array(
        'title'    => __( 'Hero Section', 'jmacxled' ),
        'priority' => 30,
    ) );

    // Hero Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Professional <span class="gradient-text">LED Wall Solutions</span>',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Title', 'jmacxled' ),
        'section'  => 'jmacxled_hero_section',
        'type'     => 'textarea',
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Superior brightness, seamless integration, and long-term reliability for live events, advertising, and large-scale architectural installations.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'    => __( 'Hero Subtitle', 'jmacxled' ),
        'section'  => 'jmacxled_hero_section',
        'type'     => 'textarea',
    ) );

    // Specs Section
    $wp_customize->add_section( 'jmacxled_specs_section', array(
        'title'    => __( 'Technical Specs', 'jmacxled' ),
        'priority' => 31,
    ) );

    // Spec 1
    $wp_customize->add_setting( 'spec_1_value', array( 'default' => '3840', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_1_value', array( 'label' => __( 'Spec 1 Value', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );
    
    $wp_customize->add_setting( 'spec_1_unit', array( 'default' => 'Hz', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_1_unit', array( 'label' => __( 'Spec 1 Unit', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );

    $wp_customize->add_setting( 'spec_1_label', array( 'default' => 'High Refresh Rate', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_1_label', array( 'label' => __( 'Spec 1 Label', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );

    // Spec 2
    $wp_customize->add_setting( 'spec_2_value', array( 'default' => 'IP66', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_2_value', array( 'label' => __( 'Spec 2 Value', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );
    
    $wp_customize->add_setting( 'spec_2_label', array( 'default' => 'Protection Rating', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_2_label', array( 'label' => __( 'Spec 2 Label', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );

    // Spec 3
    $wp_customize->add_setting( 'spec_3_value', array( 'default' => 'P1.25', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_3_value', array( 'label' => __( 'Spec 3 Value', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );
    
    $wp_customize->add_setting( 'spec_3_label', array( 'default' => 'Minimum Pixel Pitch', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_3_label', array( 'label' => __( 'Spec 3 Label', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );

    // Spec 4
    $wp_customize->add_setting( 'spec_4_value', array( 'default' => '3D', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_4_value', array( 'label' => __( 'Spec 4 Value', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );
    
    $wp_customize->add_setting( 'spec_4_label', array( 'default' => 'Glasses-Free Capable', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'spec_4_label', array( 'label' => __( 'Spec 4 Label', 'jmacxled' ), 'section' => 'jmacxled_specs_section' ) );

    // Footer Section
    $wp_customize->add_section( 'jmacxled_footer_section', array(
        'title'    => __( 'Footer Details', 'jmacxled' ),
        'priority' => 120,
    ) );

    $wp_customize->add_setting( 'footer_about', array(
        'default'           => 'Professional LED Wall Solutions for rental, fixed installation, commercial, and creative applications.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'footer_about', array(
        'label'    => __( 'Footer About Text', 'jmacxled' ),
        'section'  => 'jmacxled_footer_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'footer_contact', array(
        'default'           => 'Ready for your next architectural installation or live event? Get in touch today.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'footer_contact', array(
        'label'    => __( 'Footer Contact Text', 'jmacxled' ),
        'section'  => 'jmacxled_footer_section',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'jmacxled_customize_register' );

