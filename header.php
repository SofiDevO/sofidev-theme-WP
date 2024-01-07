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
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <?php wp_body_open( )?>
<header>
    <a href="<?php the_permalink( ); ?>">
        <h2 class="logo"><?php the_embed_site_title();?></h2>
    </a>
</header>
