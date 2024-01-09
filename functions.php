<?php
/*
*Theme Functions
*
*@package SofiDev-theme
*/ function sofidev_files()
{
    //Register Styles
    wp_register_style('sofi_main_styles', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
    wp_register_style('header-styles', get_template_directory_uri(). '/assets/src/library/styles/header-styles.css', [], false, 'all');
    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', [], filemtime(get_template_directory(). '/assets/main.js'), true );
    wp_register_script('hamburger-js', get_template_directory_uri(). '/assets/controllers/hamburger.js', [], filemtime(get_template_directory(). '/assets/controllers/hamburger.js'), true );

    //Enqueue styles
    wp_enqueue_style('sofi_main_styles');
    wp_enqueue_style('header-styles');
    //Enqueue styles
    wp_enqueue_script('main-js');
    wp_enqueue_script('hamburger-js');

}
add_action('wp_enqueue_scripts', 'sofidev_files');








if (!function_exists('custom_theme_features')) {

    // Register Theme Features
    function custom_theme_features()
    {



        // Add theme support for Automatic Feed Links
        add_theme_support('automatic-feed-links');

        // Add theme support for Post Formats
        add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside'));

        // Add theme support for Featured Images
        add_theme_support('post-thumbnails');

        // Add theme support for Custom Header
        $header_args = array(
            'default-image'          => '',
            'width'                  => 0,
            'height'                 => 0,
            'flex-width'             => true,
            'flex-height'            => true,
            'uploads'                => true,
            'random-default'         => true,
            'header-text'            => true,
            'default-text-color'     => '',
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
            'video'                  => true,
            'video-active-callback'  => '',
        );
        add_theme_support('custom-header', $header_args);

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

        // Add theme support for document Title tag
        add_theme_support('title-tag');

        // Add theme support for custom CSS in the TinyMCE visual editor
        add_editor_style();
    }
    add_action('after_setup_theme', 'custom_theme_features');

    function SofiDev_custom_logo_setup() {
        $defaults = array(
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'SofiDev_custom_logo_setup' );
}
