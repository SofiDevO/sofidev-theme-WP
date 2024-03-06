
<?php
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
    //SECTION Logo**************
    //Logo color 💛💛💛
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
    //panel: 💙
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
    //CARD COLORS
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
    //SECTION HERO**************
    //panel:
    $wp_customize->add_panel('panel__hero', array(
        'title' => __('Hero customizer'),
        'priority' => '3',
        'description' => 'Theme options for Hero section',
        "section" => "hero-section",
    ));
    //Section Colors
    $wp_customize->add_section("hero-section", array(
        "title" => __(" Hero Colors", "dofast"),
        "priority" => 2,
        "panel" => "panel__hero",
    ));
    //BACKGROUND
    $wp_customize->add_setting("hero-background", array(
        "default" => "#0a0a0a",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "hero-section_color",
        array(
            "label" => __("Background Color", "dofaset"),
            "section" => "hero-section",
            "settings" => "hero-background",
        )
    ));
    //TITLE color1
    $wp_customize->add_setting("hero-title", array(
        "default" => "#6502dd ",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "hero-section_color_title",
        array(
            "label" => __("Hero Title color gradient 1", "dofaset"),
            "section" => "hero-section",
            "settings" => "hero-title",
        )
    ));
    //TITLE color2
    $wp_customize->add_setting("hero-title2", array(
        "default" => "#00f6ff",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "hero-section_color_title2",
        array(
            "label" => __("Hero Title color gradient 2", "dofaset"),
            "section" => "hero-section",
            "settings" => "hero-title2",
        )
    ));
    //SUBTITLE
    $wp_customize->add_setting("hero-subtitle", array(
        "default" => "#fff ",
        "transport" => "refresh",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        "hero-section_color_subtitle",
        array(
            "label" => __("Hero Subtitle", "dofaset"),
            "section" => "hero-section",
            "settings" => "hero-subtitle",
        )
    ));
    //SECTION CONTENT
    $wp_customize->add_section("hero-content", array(
        "title" => __(" Post Card Colors", "dofast"),
        "priority" => 2,
        "panel" => "panel__hero",
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

        .header__menu-link,
        a {
            color: <?php echo get_theme_mod("link_color", '#04c7c7'); ?>;
        }

        /* Boton menu hamburguesa */
        .hamburger-inner,
        .hamburger-inner:after,
        .hamburger-inner:before {
            background: <?php echo get_theme_mod("link_color", '#04c7c7'); ?>;
        }

        .hamburger.is-active .hamburger-inner,
        .hamburger.is-active .hamburger-inner:after,
        .hamburger.is-active .hamburger-inner:before {
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

        /* Section HERO ********  */
        .hero {
            background: <?php echo get_theme_mod("hero-background", '#0a0a0a'); ?>;
        }

        .text__container h1 {
            background: -webkit-linear-gradient(<?php echo get_theme_mod("hero-title", ' #1403f7'); ?>, <?php echo get_theme_mod("hero-title2", ' #01ffdd'); ?>);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text__container p{
            color:<?php echo get_theme_mod("hero-subtitle", ' #fff'); ?>
        }
    </style>
<?php
}
add_action("wp_head", 'dofast_customize_css');
