<?php
$lifePageID=15;
$workPageID=17;
$lovePageID=20;
$bioPageID=5;
$tvPageID=13;


function getPageLink($page){
  global $lifePageID,$workPageID,$lovePageID,$bioPageID,$tvPageID;
  switch($page){
    case 'life':
      $url = get_permalink($lifePageID);
      break;
    case 'work':
      $url = get_permalink($workPageID);
      break;
    case 'love':
      $url = get_permalink($lovePageID);
      break;
    case 'bio':
      $url = get_permalink($bioPageID);
      break;
    case 'tv':
      $url = get_permalink($tvPageID);
      break;
  }
  return $url;
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
    
    case '112':   // NEWS ---------
      $data=array(
        'slug'=>'news,china&friends',
        'blog-title'=>get_post_field('blogposts_title', get_option('page_for_posts')),
        'cf-title'=>get_post_field('cf-title', get_option('page_for_posts'))
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