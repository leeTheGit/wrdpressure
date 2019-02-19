<?php

function university_files() {
    wp_enqueue_script('main-uni-js', get_theme_file_uri('/js/scripts-bundled.js'), null, time(), true );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', get_stylesheet_uri() );
    wp_enqueue_style( 'university_main_files', get_stylesheet_uri(), null, time() );
}


function university_features() {
    add_theme_support('title-tag');

    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation1', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocation2', 'Footer Menu Location Two');
}

add_action('wp_enqueue_scripts', 'university_files');

add_action('after_setup_theme', 'university_features');

