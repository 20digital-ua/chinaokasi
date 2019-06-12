<?php 
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post();
// the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif;
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