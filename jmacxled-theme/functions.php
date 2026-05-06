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
            'menu-1'          => esc_html__( 'Primary', 'jmacxled' ),
            'footer-products' => esc_html__( 'Footer Products', 'jmacxled' ),
            'footer-company'  => esc_html__( 'Footer Company', 'jmacxled' ),
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
    wp_enqueue_style( 'jmacxled-main-style', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700;900&display=swap', false );

    wp_enqueue_script( 'jmacxled-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'jmacxled_scripts' );

/**
 * Customizer Additions
 */
function jmacxled_customize_register( $wp_customize ) {
    // Header Section
    $wp_customize->add_section( 'jmacxled_header_section', array(
        'title'    => __( 'Header Settings', 'jmacxled' ),
        'priority' => 20,
    ) );

    $wp_customize->add_setting( 'header_logo_main', array( 'default' => 'JMACX', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'header_logo_main', array( 'label' => __( 'Logo Main Text', 'jmacxled' ), 'section' => 'jmacxled_header_section' ) );

    $wp_customize->add_setting( 'header_logo_accent', array( 'default' => 'LED', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'header_logo_accent', array( 'label' => __( 'Logo Accent Text', 'jmacxled' ), 'section' => 'jmacxled_header_section' ) );

    $wp_customize->add_setting( 'header_cta_text', array( 'default' => 'Get a Quote', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'header_cta_text', array( 'label' => __( 'CTA Button Text', 'jmacxled' ), 'section' => 'jmacxled_header_section' ) );

    $wp_customize->add_setting( 'header_cta_link', array( 'default' => '#contact', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'header_cta_link', array( 'label' => __( 'CTA Button Link', 'jmacxled' ), 'section' => 'jmacxled_header_section' ) );

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

/**
 * Register Custom Post Type for Portfolio Items
 */
function jmacxled_register_portfolio_cpt() {
    $labels = array(
        'name'                  => _x( 'Portfolio Items', 'Post Type General Name', 'jmacxled' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'jmacxled' ),
        'menu_name'             => __( 'Portfolio', 'jmacxled' ),
        'name_admin_bar'        => __( 'Portfolio Item', 'jmacxled' ),
        'archives'              => __( 'Item Archives', 'jmacxled' ),
        'attributes'            => __( 'Item Attributes', 'jmacxled' ),
        'parent_item_colon'     => __( 'Parent Item:', 'jmacxled' ),
        'all_items'             => __( 'All Items', 'jmacxled' ),
        'add_new_item'          => __( 'Add New Item', 'jmacxled' ),
        'add_new'               => __( 'Add New', 'jmacxled' ),
        'new_item'              => __( 'New Item', 'jmacxled' ),
        'edit_item'             => __( 'Edit Item', 'jmacxled' ),
        'update_item'           => __( 'Update Item', 'jmacxled' ),
        'view_item'             => __( 'View Item', 'jmacxled' ),
        'view_items'            => __( 'View Items', 'jmacxled' ),
        'search_items'          => __( 'Search Item', 'jmacxled' ),
        'not_found'             => __( 'Not found', 'jmacxled' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'jmacxled' ),
    );
    $args = array(
        'label'                 => __( 'Portfolio Item', 'jmacxled' ),
        'description'           => __( 'LED Display Products', 'jmacxled' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-grid-view',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'jmacxled_product', $args );
}
add_action( 'init', 'jmacxled_register_portfolio_cpt', 0 );

/**
 * Add Custom Meta Box for Portfolio Specs
 */
function jmacxled_add_product_metaboxes() {
    add_meta_box(
        'jmacxled_product_specs',
        __( 'Product Specifications', 'jmacxled' ),
        'jmacxled_product_specs_callback',
        'jmacxled_product',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'jmacxled_add_product_metaboxes' );

function jmacxled_product_specs_callback( $post ) {
    wp_nonce_field( 'jmacxled_product_specs_data', 'jmacxled_product_specs_nonce' );

    $spec_1 = get_post_meta( $post->ID, '_jmacxled_spec_1', true );
    $spec_2 = get_post_meta( $post->ID, '_jmacxled_spec_2', true );
    $spec_pdf = get_post_meta( $post->ID, '_jmacxled_spec_pdf', true );

    echo '<p><label for="jmacxled_spec_1">';
    _e( 'Spec 1 (e.g., Die-casting aluminum):', 'jmacxled' );
    echo '</label><br />';
    echo '<input type="text" id="jmacxled_spec_1" name="jmacxled_spec_1" style="width:100%;" value="' . esc_attr( $spec_1 ) . '" /></p>';

    echo '<p><label for="jmacxled_spec_2">';
    _e( 'Spec 2 (e.g., P2.604 - P4.81 Pitch):', 'jmacxled' );
    echo '</label><br />';
    echo '<input type="text" id="jmacxled_spec_2" name="jmacxled_spec_2" style="width:100%;" value="' . esc_attr( $spec_2 ) . '" /></p>';

    echo '<p><label for="jmacxled_spec_pdf">';
    _e( 'Spec Sheet PDF URL:', 'jmacxled' );
    echo '</label><br />';
    echo '<input type="url" id="jmacxled_spec_pdf" name="jmacxled_spec_pdf" style="width:100%;" value="' . esc_url( $spec_pdf ) . '" /></p>';
}

function jmacxled_save_product_meta( $post_id ) {
    if ( ! isset( $_POST['jmacxled_product_specs_nonce'] ) || ! wp_verify_nonce( $_POST['jmacxled_product_specs_nonce'], 'jmacxled_product_specs_data' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    if ( isset( $_POST['jmacxled_spec_1'] ) ) {
        update_post_meta( $post_id, '_jmacxled_spec_1', sanitize_text_field( $_POST['jmacxled_spec_1'] ) );
    }
    if ( isset( $_POST['jmacxled_spec_2'] ) ) {
        update_post_meta( $post_id, '_jmacxled_spec_2', sanitize_text_field( $_POST['jmacxled_spec_2'] ) );
    }
    if ( isset( $_POST['jmacxled_spec_pdf'] ) ) {
        update_post_meta( $post_id, '_jmacxled_spec_pdf', esc_url_raw( $_POST['jmacxled_spec_pdf'] ) );
    }
}
add_action( 'save_post_jmacxled_product', 'jmacxled_save_product_meta' );

