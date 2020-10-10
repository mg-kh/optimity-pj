<?php

/**
 * Optimity functions and definitions
 */

if ( ! defined( 'THEME_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'BASE_ASSET_URL' ) ) {
    define( 'BASE_ASSET_URL', '/dist' );
}

/**
 * Enqueue styles
 */

function optimity_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . BASE_ASSET_URL . '/style.css', array(), THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'optimity_styles' );

/**
 * Enqueue scripts
 */
function optimity_scripts() {
    wp_deregister_script('jquery');

    wp_enqueue_script( 'script', get_template_directory_uri() . BASE_ASSET_URL . '/script.js', array(), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'optimity_scripts' );

/**
 * Essential theme supports
 */

if ( ! function_exists( 'optimity_setup' ) ) {
    function  optimity_setup() {
        /** Navigation menu locations */
        register_nav_menus(
            array(
                'primary_menu' => 'Primary Menu'        
            )
        );
    }
}
add_action( 'after_setup_theme', 'optimity_setup' );

/** add ".active" class to active menu item */
function special_nav_class($classes, $item) {
    if ( in_array('current-menu-item', $classes) ) {
        $classes[] = 'active';    
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
