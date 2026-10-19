<?php
/**
 * Ambroise Worldwide - Theme Functions
 *
 * @package AmbroiseWorldwide
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function ambroise_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ambroise' ),
    ) );
}
add_action( 'after_setup_theme', 'ambroise_setup' );

function ambroise_scripts() {
    wp_enqueue_style( 'ambroise-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'ambroise-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ambroise_scripts' );
