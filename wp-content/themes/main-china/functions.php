<?php

add_action('wp_enqueue_scripts','head_files');

function head_files(){

    wp_enqueue_style('main-styles',get_theme_file_uri('fonts/fonts.css'));
    wp_enqueue_style('main-fonts',get_stylesheet_uri());


    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/js/tabs.js'),null,'1.1',true);
    wp_enqueue_script('player-js',get_theme_file_uri('/js/player.js'),null,'1.1',true);

}