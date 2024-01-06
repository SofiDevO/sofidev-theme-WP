<?php
    function sofidev_files(){
        wp_enqueue_style('sofi_main_styles', get_stylesheet_uri());
    }
    add_action( 'wp_enqueue_scripts', 'sofidev_files');
