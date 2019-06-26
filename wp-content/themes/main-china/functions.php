<?php
require_once('include/ajax.php');



add_action('wp_enqueue_scripts','head_files');

function head_files(){

    wp_enqueue_style('main-fonts',get_theme_file_uri('fonts/fonts.css'));
    wp_enqueue_style('main-styles',get_stylesheet_uri());



    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/js/tabs.js'),null,'1.1',true);
    if(is_single() || is_front_page() || is_post_type_archive('podcast')){
      wp_enqueue_script('player-js',get_theme_file_uri('/js/player.js'),null,'1.1',true);
    }
    if(is_post_type_archive('podcast')){
      wp_enqueue_script('ajax-podcast',get_theme_file_uri('/js/ajax-podcast.js'),null,'1.1',true);
      wp_localize_script( 'ajax-podcast', 'my_ajax_object',
            array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }
   
    if(is_home() && !is_front_page()){    
      wp_enqueue_script('ajax-posts',get_theme_file_uri('/js/ajax-posts.js'),null,'1.1',true);
      wp_localize_script( 'ajax-posts', 'my_ajax_object',
              array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }
}

function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets' );
  add_theme_support('featured-audio');
  add_theme_support('audio');
}
add_action('after_setup_theme','theme_support');
// echo apply_filters( 'the_content', get_post_field('post_content', $postid) );
add_filter( 'featured_audio_post_types', 'prefix_featured_audio_post_types' );






function prefix_featured_audio_post_types( $post_types ) {
  // Add support to the sheet_music post type.
  $post_types[] = 'podcast';

  // Overwrite the entire list to remove support on pages.
  $post_types = array( 'post' );

  return $post_types;
}

function add_share_links($content){

$social ='
  <div class="single-post-content__social grid-padding">
    <a href="#">
      <img class="single-post-content__icon" src="'.get_template_directory_uri().'/img/icons/twitter-blue.svg" alt="">
    </a>
    <a href="http://www.facebook.com/sharer.php?u='.get_the_permalink().'" target="blank">
      <img class="single-post-content__icon" src="'.get_template_directory_uri().'/img/icons/facebook-blue.svg" alt="">
    </a>
    <a href="#">
      <img class="single-post-content__icon" src="'.get_template_directory_uri().'/img/icons/pinterest-p-brands.svg" alt="">
    </a>
  </div> ';

return $content.$social;
}



add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {

	// добавим класс 'class-name' в массив классов $classes
	if( is_front_page() ){
    $classes[] = 'front-page';
    if (in_array('page', $classes)) {
      unset( $classes[array_search('page', $classes)] );
    }
  }
	return $classes;
}