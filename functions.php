<?php
/*
*Theme Functions
*
*@package SofiDev-theme
*/



    function sofidev_files(){
        wp_enqueue_style('sofi_main_styles', get_stylesheet_uri());
    }
    add_action( 'wp_enqueue_scripts', 'sofidev_files');

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );


if ( ! function_exists('custom_theme_features') ) {
    // Register Theme Features
    function custom_theme_features()  {

        // Add theme support for Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside' ) );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails' );

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
        add_theme_support( 'custom-header', $header_args );

        // Add theme support for HTML5 Semantic Markup
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );

        // Add theme support for custom CSS in the TinyMCE visual editor
        add_editor_style();
    }
    add_action( 'after_setup_theme', 'custom_theme_features' );

    }

?>