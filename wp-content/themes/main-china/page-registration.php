<?php 
get_header(); 
 while ( have_posts() ) : the_post();
   ?>

<section class="registration">
  <div class="container"><?php the_content(); ?></div>
</section>


  <?php
endwhile;
get_footer(); 