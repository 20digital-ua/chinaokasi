<?php
require_once('assets/include/ajax.php');



add_action('wp_enqueue_scripts','head_files');
function head_files(){

    wp_enqueue_style('main-fonts',get_theme_file_uri('/assets/fonts/fonts.css'));
    wp_enqueue_style('main-styles',get_stylesheet_uri());



    wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/assets/js/tabs.js'),null,'1.1',true);
    wp_enqueue_script('contact-form-js',get_theme_file_uri('/assets/js/contact-form.js'),null,'1.1',true);
    wp_enqueue_script('sign-popup-js',get_theme_file_uri('/assets/js/sign-popup.js'),null,'1.1',true);
    
    if(is_single() || is_front_page() || is_post_type_archive('podcast')){
      wp_enqueue_script('player-js',get_theme_file_uri('/assets/js/player.js'),null,'1.1',true);
    }
    if(is_post_type_archive('podcast') ){
      wp_enqueue_script('ajax-podcast',get_theme_file_uri('/assets/js/ajax-podcast.js'),null,'1.1',true);
      wp_localize_script( 'ajax-podcast', 'my_ajax_object',
            array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }
   
    if((is_home() && !is_front_page()) || getPageName(get_the_ID())!=NULL){    
      wp_enqueue_script('ajax-posts',get_theme_file_uri('/assets/js/ajax-posts.js'),null,'1.1',true);
      wp_localize_script( 'ajax-posts', 'my_ajax_object',
              array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }
}


add_action('after_setup_theme','theme_support');
function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets' );
  add_theme_support('featured-audio');
  add_theme_support('audio');
}






add_filter( 'featured_audio_post_types', 'prefix_featured_audio_post_types' );
function prefix_featured_audio_post_types( $post_types ) {
  // Add support to the sheet_music post type.
  $post_types[] = 'podcast';

  // Overwrite the entire list to remove support on pages.
  $post_types = array( 'post' );

  return $post_types;
}



add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {
	if( is_front_page() ){
    $classes[] = 'front-page';
  }
	return $classes;
}

function getPageName($id){
  switch ($id){
    case '17':  
      $page='work';
      break;
    case '20':  
      $page='love';
      break;
    case '15':  
      $page='life';
      break;
    case '155':  
      $page='news,china&friends';
      break;
  }
  return $page;
}
function getPageIdByCategory($category){
  if(strpos($category,array('news','china&friends'))===false){
    switch ($category){
      case 'work':  
        $id='17';
        break;
      case 'love':  
        $id='20';
        break;
      case 'life':  
        $id='15';
        break;
    }
  }else{
    $id='112';
  }
  
  return $id;
}