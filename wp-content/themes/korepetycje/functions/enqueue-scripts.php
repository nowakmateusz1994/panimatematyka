<?php

function devmn_custom_scripts()
{
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '', true);

    wp_enqueue_script('lazybg', get_template_directory_uri()  . '/dist/js/lazybg.js', array(), '', true);

    wp_enqueue_script('cubic', get_template_directory_uri() . '/dist/js/cubic.js', array(), '', true);

    wp_enqueue_style('fs-main-style', get_template_directory_uri() . '/dist/css/main.css');
}
 
add_action('wp_enqueue_scripts', 'devmn_custom_scripts');