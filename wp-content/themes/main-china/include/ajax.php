<?php

// add_filter( 'the_content', 'add_share_links' );




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

////////////////////////////


function getpodcasts() {
  $page = $_POST['page'];
  // $total = $_POST['total'];
  // $category = $_POST['category'];

  $podcasts= new WP_Query(array(
    'posts_per_page' =>5,
    'post_type'=>'podcast',
    'paged' => $page

  ));
  $padcastArr = array(
    'podcasts'=>array(),
    'page'=>array()
  );

  
  
  

  while($podcasts->have_posts()){
    $podcasts->the_post();
    $podcastImg=get_the_post_thumbnail(get_the_ID(),'large',array('class' => 'podcast-introduce__img') );
    $addClass='';
    if($podcastImg!='' || $podcastImg!=NULL){
      $addClass='img-true';
    }
    
    array_push($padcastArr['podcasts'],array(
      'data'=>get_field('podcast_data'),
      'img'=>array(
        'link'=>$podcastImg,
        'addClass'=>$addClass
      )
    ));
  }
  array_push($padcastArr['page'],array(
    'max'=>$podcasts->max_num_pages,
    'current'=>$podcasts->query['paged']
  ));
  // echo $posts = json_encode($blogPosts);
  echo $posts = json_encode($padcastArr);

  wp_die();

}
add_action('wp_ajax_getpodcasts', 'getpodcasts' );
add_action('wp_ajax_nopriv_getpodcasts', 'getpodcasts');