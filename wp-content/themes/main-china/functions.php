<?php

add_action('wp_enqueue_scripts','head_files');

function head_files(){

    wp_enqueue_style('main-styles',get_theme_file_uri('fonts/fonts.css'));
    wp_enqueue_style('main-fonts',get_stylesheet_uri());


    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/js/tabs.js'),null,'1.1',true);
    wp_enqueue_script('player-js',get_theme_file_uri('/js/player.js'),null,'1.1',true);
    
    wp_enqueue_script('ajax-posts',get_theme_file_uri('/js/ajax-posts.js'),null,'1.1',true);
    wp_localize_script( 'ajax-posts', 'my_ajax_object',
            array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

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



function getposts() {
  $page = $_POST['page'];
  $total = $_POST['total'];

  $blogPosts = new WP_Query(array(
    'posts_per_page' =>$total,
    'post_type'=>'post',
    'paged' => $page
  ));
  $postsArr = array(
    'posts'=>array()
  );
  while($blogPosts->have_posts()){
    $blogPosts->the_post();
    $category = get_the_category();
    array_push($postsArr['posts'],array(
      'title'=>get_the_title(),
      'link'=>get_the_permalink(),
      'img'=>get_the_post_thumbnail_url(),
      'date'=>get_the_date(),
      'content'=>wp_trim_words(get_the_content(),15),
      'category'=>$category[0]->name
    ));
  }
  // echo $posts = json_encode($response);
  echo $posts = json_encode($postsArr);

  wp_die();

}
add_action('wp_ajax_getposts', 'getposts' );
add_action('wp_ajax_getposts', 'getposts');



