<?php

add_action('wp_enqueue_scripts','head_files');

function head_files(){

    wp_enqueue_style('main-styles',get_theme_file_uri('fonts/fonts.css'));
    wp_enqueue_style('main-fonts',get_stylesheet_uri());



    wp_enqueue_script('main-js',get_theme_file_uri('/js/main.js'),array('jquery'),'1.1',true);
    wp_enqueue_script('tabs-js',get_theme_file_uri('/js/tabs.js'),null,'1.1',true);
    if(is_single() || is_front_page()){
      wp_enqueue_script('player-js',get_theme_file_uri('/js/player.js'),null,'1.1',true);
    }
   
    
    wp_enqueue_script('ajax-posts',get_theme_file_uri('/js/ajax-posts.js'),null,'1.1',true);
    wp_localize_script( 'ajax-posts', 'my_ajax_object',
            array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}

function theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets' );
}
add_action('after_setup_theme','theme_support');
echo apply_filters( 'the_content', get_post_field('post_content', $postid) );

function getposts() {
  $page = $_POST['page'];
  $total = $_POST['total'];
  $category = $_POST['category'];

  if($category == -1){
    unset($category);
  }

  $blogPosts = new WP_Query(array(
    'posts_per_page' =>$total,
    'post_type'=>'post',
    'paged' => $page,
    'category_name'=> $category

  ));
  $postsArr = array(
    'posts'=>array(),
    'page'=>array()
  );
  while($blogPosts->have_posts()){
    $blogPosts->the_post();
    $category = get_the_category();
    $img='https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg';
    if(get_the_post_thumbnail_url()!=''){
      $img=get_the_post_thumbnail_url();
    }
    array_push($postsArr['posts'],array(
      'title'=>get_the_title(),
      'link'=>get_the_permalink(),
      'img'=>$img,
      'date'=>get_the_date(),
      'content'=>wp_trim_words(get_the_content(),15),
      'category'=>$category[0]->name
    ));
  }
  array_push($postsArr['page'],array(
    'max'=>$blogPosts->max_num_pages,
    'current'=>$blogPosts->query['paged']
  ));
  // echo $posts = json_encode($blogPosts);
  echo $posts = json_encode($postsArr);

  wp_die();

}
add_action('wp_ajax_getposts', 'getposts' );
add_action('wp_ajax_nopriv_getposts', 'getposts');



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