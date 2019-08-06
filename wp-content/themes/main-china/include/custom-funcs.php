<?php

function getPageLink($page){
  switch($page){
    case 'life':
      $slug = 'life-lessons-blog';
      break;
    case 'work':
      $slug = 'motivation-work-blog-posts-for-women-in-their-30s';
      break;
    case 'love':
      $slug = 'relationship-advice-free';
      break;
    case 'bio':
      $slug = 'top-motivational-speakers';
      break;
  }
  return site_url('/'.$slug);
}

//////////////////////////////////////////////
function getPageData($id){
  switch ($id){
    case '58':  // LIFE ---------
      $data=array(
        'slug'=>'home',
        'blog-title'=>get_post_field('blogposts_title', get_the_ID()),
        'cf-title'=>get_post_field('cf-title', get_the_ID())
      );
      break;
    case '15':  // LIFE ---------
      $data=array(
        'slug'=>'life',
        'blog-title'=>get_post_field('blogposts_title', get_the_ID()),
        'cf-title'=>get_post_field('cf-title', get_the_ID())
        
      );
      break;
    case '17':   // WORK ---------
      $data=array(
        'slug'=>'work',
        'blog-title'=>get_post_field('blogposts_title', get_the_ID()),
        'cf-title'=>get_post_field('cf-title', get_the_ID())
      );
      break;
    case '20':   // LOVE ---------
      $data=array(
        'slug'=>'love',
        'blog-title'=>get_post_field('blogposts_title', get_the_ID()),
        'cf-title'=>get_post_field('cf-title', get_the_ID())
      );
      break;
    
    case '155':   // NEWS ---------
      $data=array(
        'slug'=>'news,china&friends',
        'blog-title'=>get_post_field('blogposts_title', get_option('page_for_posts')),
        'cf-title'=>get_post_field('cf-title', get_option('page_for_posts'))
      );
      break;
    case '155':   // CLIPS ---------
      $data=array(
        'slug'=>'hi'
      );
      break;
  }
  if($data['blog-title']==''){
    $data['blog-title']="Check out my blog";
  }

  return $data;
}



//////////////////////////////////////////////
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