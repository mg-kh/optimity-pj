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

function theme_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . BASE_ASSET_URL . '/style.css', array(), THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/**
 * Enqueue scripts
 */
function theme_scripts() {
    // wp_deregister_script('jquery');

    wp_enqueue_script( 'script', get_template_directory_uri() . BASE_ASSET_URL . '/script.js', array(), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Essential theme supports
 */
function  theme_setup() {
  /**
   * Let WordPress manage the document title.
   */
  add_theme_support( 'title-tag' );


  /**
   * Navigation menu locations 
   */        
  register_nav_menus(
    array(
      'primary_menu' => 'Primary Menu'        
    )
  );

  /**
   * Add support for core custom logo.
   */
  add_theme_support( 'custom-logo' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   */
  // add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup' );

/** add ".active" class to active menu item */
function special_nav_class($classes, $item) {
    if ( in_array('current-menu-item', $classes) ) {
        $classes[] = 'active';    
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );