<?php

function cornell_chro_enqueue_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('cornell-chro', get_stylesheet_uri(), array(), '1.0.0', 'all');

    // Enqueue an additional stylesheet
    wp_enqueue_style('custom-layout-style', get_template_directory_uri() . '/styles/global.css', array('cornell-chro'), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'cornell_chro_enqueue_styles');
