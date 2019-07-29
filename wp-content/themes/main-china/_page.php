<?php 
get_header(); 

  $post_slug = get_post_field( 'post_name', get_post() );
  switch ($post_slug){
    case 'live':
      get_template_part('template-parts/course', $post_slug);
      break;
    case 'work':
      get_template_part('template-parts/course', $post_slug);
      break;
    case 'love':
      get_template_part('template-parts/course', $post_slug);
      break;
  }

get_footer(); ?>