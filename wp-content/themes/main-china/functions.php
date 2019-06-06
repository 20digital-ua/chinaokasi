<?php

add_action('wp_enqueue_scripts','head_files');

function head_files(){

    wp_enqueue_style('main-styles',get_theme_file_uri('fonts/fonts.css'));
    wp_enqueue_style('main-fonts',get_stylesheet_uri());


    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/js/tabs.js'),null,'1.1',true);
    wp_enqueue_script('player-js',get_theme_file_uri('/js/player.js'),null,'1.1',true);

}

function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_support');

function remove_post_custom_fields() {
  remove_meta_box( 'categorydiv' , 'post' , 'side' );
  remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );