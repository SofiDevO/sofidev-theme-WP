<?php
/*
*Theme Functions
*
*@package SofiDev-theme
*/

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
    wp_enqueue_script('main-js');
    wp_enqueue_script('hamburger-js');
}
add_action('wp_enqueue_scripts', 'sofidev_files');

//CUSTOMIZER
/* Quitar opciones del personalizador de WordPress */
function remove_options_customizer($wp_customize)
{
    $wp_customize->remove_section('static_front_page'); // Ajustes de portada
    $wp_customize->remove_section('header_image'); // Imagen de cabecera
    $wp_customize->remove_section('themes'); // Temas
    $wp_customize->remove_section('colors'); // Colores


    // Secciones específicas de Genesis
    $wp_customize->remove_section('genesis_updates'); // Sección de Actualizaciones
    $wp_customize->remove_section('genesis_adsense'); // Sección de Google Adsense
    $wp_customize->remove_section('genesis_comments'); // Sección Comentarios y Referencias
    $wp_customize->remove_section('genesis_scripts'); // Sección Header/Footer Scripts
    $wp_customize->remove_panel('genesis-seo'); // Panel de SEO
}
add_action('customize_register', 'remove_options_customizer');
//CUSTOMIZER blocks********
function dofast_customize_register($wp_customize)
{
    //SECTION BASIC**************
    //panel:
    $wp_customize->add_panel('panel_basic', array(
        'title' => __('Basic Colors options'),
        'priority' => '1',
        'description' => 'Theme options',
    ));
    //Bg-Color
    $wp_customize->add_section("bg_color", array(
        "panel" => "panel_basic",
        "title" => __(" Body Background Color", "dofast"),
        "priority" => 1,
    ));
    $wp_customize->add_setting("body_bg", array(
        "default" => "#fff",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "body_background_color",
        array(
            "label" => __("Body bg color", "dofaset"),
            "section" => "bg_color",
            "settings" => "body_bg",
        )
    ));
    //Text color
    $wp_customize->add_section("txt_color", array(
        "panel" => "panel_basic",
        "title" => __("Body Text Colors", "dofast"),
        "priority" => 2,
    ));
    $wp_customize->add_setting("body_text", array(
        "default" => "#000",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "body_text_color",
        array(
            "label" => __("Body text color", "dofaset"),
            "section" => "txt_color",
            "settings" => "body_text",
        )
    ));
    //h1 color
    $wp_customize->add_setting("h1_color", array(
        "default" => "#000",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "h1_color_color",
        array(
            "label" => __("h1  color", "dofaset"),
            "section" => "txt_color",
            "settings" => "h1_color",
        )
    ));
    //h2 color
    $wp_customize->add_setting("h2_color", array(
        "default" => "#000",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "h2_color_color",
        array(
            "label" => __("h2  color", "dofaset"),
            "section" => "txt_color",
            "settings" => "h2_color",
        )
    ));
    //h3 color
    $wp_customize->add_setting("h3_color", array(
        "default" => "#000",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "h3_color",
        array(
            "label" => __("h3  color", "dofaset"),
            "section" => "txt_color",
            "settings" => "h3_color",
        )
    ));
    //link color
    $wp_customize->add_setting("link_color", array(
        "default" => "#04c7c7",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "link_color_color",
        array(
            "label" => __("Links  color", "dofaset"),
            "section" => "txt_color",
            "settings" => "link_color",
        )
    ));
    //SECTION POST**************
    //Logo color
    $wp_customize->add_section("logo_color1", array(
        "panel" => "panel_basic",
        "title" => __(" Logo Gradient Colors", "dofast"),
        "priority" => 6,
    ));
    $wp_customize->add_setting("logo_color1", array(
        "default" => "#1403f7",
        "transport" => "refresh",
    ));
    $wp_customize->add_setting("logo_color2", array(
        "default" => "#01ffdd",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "logo_color1",
        array(
            "label" => __("Logo  color 1", "dofaset"),
            "section" => "logo_color1",
            "settings" => "logo_color1",
        )
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "logo_color2",
        array(
            "label" => __("Logo  color 2", "dofaset"),
            "section" => "logo_color1",
            "settings" => "logo_color2",
        )
    ));
    //tagline_color
    $wp_customize->add_section("tagline_color", array(
        "panel" => "panel_basic",
        "title" => __(" Tagline Color", "dofast"),
        "priority" => 6,
    ));
    $wp_customize->add_setting("tagline_color", array(
        "default" => "#04c7c7",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "tagline_color",
        array(
            "label" => __("Tagline Color", "dofaset"),
            "section" => "tagline_color",
            "settings" => "tagline_color",
        )
    ));

    //SECTION POST**************
    //card colors
    //panel:
    $wp_customize->add_panel('panel_card', array(
        'title' => __('Post Card Colors'),
        'priority' => '2',
        'description' => 'Theme options',
        "section" => "card-title",
    ));
    $wp_customize->add_section("card-title", array(
        "title" => __(" Post Card Title gradient", "dofast"),
        "priority" => 2,
        "panel" => "panel_card",
    ));
    $wp_customize->add_setting("card-title1", array(
        "default" => "#04c7c7",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "card-title_color",
        array(
            "label" => __("Post Card Title 1", "dofaset"),
            "section" => "card-title",
            "settings" => "card-title1",
        )
    ));
    $wp_customize->add_setting("card-title2", array(
        "default" => "#8224e3",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "card-title_color2",
        array(
            "label" => __("Post Card Title 2", "dofaset"),
            "section" => "card-title",
            "settings" => "card-title2",
        )
    ));
    $wp_customize->add_section("card-custom", array(
        "title" => __(" Post Card Colors", "dofast"),
        "priority" => 2,
        "panel" => "panel_card",
    ));
    //card bg color
    $wp_customize->add_setting("card-bg", array(
        "default" => " rgb(0, 0, 0)",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "card-bg_color",
        array(
            "label" => __("Post Card Background color", "dofaset"),
            "section" => "card-custom",
            "settings" => "card-bg",
        )
    ));
    //card text color
    $wp_customize->add_setting("card-text", array(
        "default" => " #fff",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "card-text_color",
        array(
            "label" => __("Post Card Text color", "dofaset"),
            "section" => "card-custom",
            "settings" => "card-text",
        )
    ));
}
add_action("customize_register", "dofast_customize_register");

function dofast_customize_css()
{
?>
    <style>
        body {
            background-color: <?php echo get_theme_mod("body_bg", '#fff'); ?>;
        }

        p {
            color: <?php echo get_theme_mod("body_text", '#000'); ?>;
        }

        h1 {
            color: <?php echo get_theme_mod("h1_color", '#000'); ?>;
        }

        h2 {
            color: <?php echo get_theme_mod("h2_color", '#000'); ?>;
        }

        h3 {
            color: <?php echo get_theme_mod("h3_color", '#000'); ?>;
        }

        .header__menu-link, a  {
            color: <?php echo get_theme_mod("link_color", '#04c7c7'); ?>;
        }
        /* Boton menu hamburguesa */
        .hamburger-inner, .hamburger-inner:after, .hamburger-inner:before  {
            background: <?php echo get_theme_mod("link_color", '#04c7c7'); ?>;
        }
        .hamburger.is-active .hamburger-inner, .hamburger.is-active .hamburger-inner:after, .hamburger.is-active .hamburger-inner:before  {
            background: <?php echo get_theme_mod("link_color", '#04c7c7'); ?>;
        }
        .link__logo span {
            color: <?php echo get_theme_mod("tagline_color", '#04c7c7'); ?>;
        }

        .link__logo h2 {
            background: -webkit-linear-gradient(<?php echo get_theme_mod("logo_color1", ' #1403f7'); ?>, <?php echo get_theme_mod("logo_color2", ' #01ffdd'); ?>);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /*card styles*/
        .card__title {
            background: -webkit-linear-gradient(<?php echo get_theme_mod("card-title1", ' #1403f7'); ?>, <?php echo get_theme_mod("card-title2", ' #01ffdd'); ?>);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card__container {
            background-color: <?php echo get_theme_mod("card-bg", ' rgb(0, 0, 0)'); ?>;
        }

        .card__container p {
            color: <?php echo get_theme_mod("card-text", ' #fff'); ?>
        }
    </style>
<?php
}
add_action("wp_head", 'dofast_customize_css');



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
            'default-text-color'     => '#000',
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

    function SofiDev_custom_logo_setup()
    {
        $defaults = array(
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        );
        add_theme_support('custom-logo', $defaults);
    }
    add_action('after_setup_theme', 'SofiDev_custom_logo_setup');
}

//sidebar

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
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
function wpdocs_custom_excerpt_length( $length ) {
	return 6;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );