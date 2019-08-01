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