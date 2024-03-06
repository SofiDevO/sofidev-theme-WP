<?php
/*
*Theme Functions
*
*@package SofiDev-theme
*/

//IMPORT de CUSTOMIZER
require_once get_template_directory().'/customizer.php';
//Links CSS, JS:
function sofidev_files()
{
    //Register Styles
    wp_register_style('sofi_main_styles', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('header-styles', get_template_directory_uri() . '/assets/styles/header-styles.css', [], false, 'all');
    wp_register_style('post-card', get_template_directory_uri() . '/assets/styles/post-card.css', [], false, 'all');
    wp_register_style('single-post', get_template_directory_uri() . '/assets/styles/single-post.css', [], false, 'all');
    wp_register_style('footer-styles', get_template_directory_uri() . '/assets/styles/footer.css', [], false, 'all');
    wp_register_style('hero-styles', get_template_directory_uri() . '/assets/styles/hero-section.css', [], false, 'all');
    //Register Scripts
    wp_register_script('hamburger-js', get_template_directory_uri() . '/assets/controllers/hamburger.js', [], filemtime(get_template_directory() . '/assets/controllers/hamburger.js'), true);

    //Enqueue styles
    wp_enqueue_style('sofi_main_styles');
    wp_enqueue_style('header-styles');
    wp_enqueue_style('post-card');
    wp_enqueue_style('single-post');
    wp_enqueue_style('footer-styles');
    wp_enqueue_style('hero-styles');
    //Enqueue styles
    wp_enqueue_script('hamburger-js');
}
add_action('wp_enqueue_scripts', 'sofidev_files');
//menu support
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');

//Theme Support:
if (!function_exists('custom_theme_features')) {
    // Register Theme Features

    // Function to define custom theme features
    function custom_theme_features()
    {

        // Add theme support for Automatic Feed Links
        add_theme_support('automatic-feed-links'); // Enables automatic feed links for post feeds.

        // Add theme support for Post Formats
        add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside')); // Allows for different post formats.

        // Add theme support for Featured Images
        add_theme_support('post-thumbnails'); // Enables support for featured images in posts.

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
            'default-text-color'     => '#000',
            'video'                  => true,
            'video-active-callback'  => '',
        );
        add_theme_support('custom-header', $header_args); // Enables custom headers with specified arguments.

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')); // Adds support for HTML5 elements.

        // Add theme support for document Title tag
        add_theme_support('title-tag'); // Enables title tag support.

        // Add theme support for custom CSS in the TinyMCE visual editor
        add_editor_style(); // Allows for custom CSS in the TinyMCE visual editor.
    }
    add_action('after_setup_theme', 'custom_theme_features'); // Hooks the custom_theme_features function after the theme is set up.

    // Function to set up custom logo
    function SofiDev_custom_logo_setup()
    {
        $defaults = array(
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        );
        add_theme_support('custom-logo', $defaults); // Enables support for custom logos with specified arguments.
    }
    add_action('after_setup_theme', 'SofiDev_custom_logo_setup'); // Hooks the SofiDev_custom_logo_setup function after the theme is set up.
}


//sidebar

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Primary Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
    return 6;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
