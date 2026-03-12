<?php
/**
 * BrightSmile Clinic functions and definitions
 */

if ( ! function_exists( 'brightsmile_setup' ) ) :
    function brightsmile_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'brightsmile' ),
            )
        );

        // Add theme support for selectively refreshing the widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for core custom logo.
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        
        // Elementor compatibility declaration
        add_theme_support( 'elementor' );
    }
endif;
add_action( 'after_setup_theme', 'brightsmile_setup' );

/**
 * Enqueue scripts and styles.
 */
function brightsmile_scripts() {
    // Fonts
    wp_enqueue_style( 'brightsmile-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap', array(), null );
    
    // Icons
    wp_enqueue_style( 'brightsmile-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    
    // Main stylesheet
    wp_enqueue_style( 'brightsmile-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    
    // WordPress comments script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'brightsmile_scripts' );
