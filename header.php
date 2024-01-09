<?php
/*
*Header template
*
*
*@package Sofidev-theme
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <?php
        if(function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>
<header class="main__header blur">
    <?php get_template_part('/template-parts/header/nav'); ?>

</header>
<main>
