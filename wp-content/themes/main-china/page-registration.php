<?php 
get_header(); 
 while ( have_posts() ) : the_post();
   ?>
<main>
		<section class="head-main single-cours-head-main section">
			<div class="container work">
				<div class="head-content">
					<span class="head-content__welcome">WELCOME to</span>
					<h1 class="head-content__title">Live</h1>
					<span class="head-content__subtitle"><span>my </span> Lifestyle — Guide Channel</span>
				</div>
				<div class="head-img-wrp">
						<img class="head-img-wrp__img" src="<?php echo get_template_directory_uri(); ?>/img/pages/courses/China-work-course.png" alt="">
				</div>
				
			</div>
		</section>
		<section class="course-info">
			<div class="container">
				<div class="cinfo">
        <?php the_content(); ?>
				</div>
			</div>
		</section>
	</main>


  <?php
endwhile;
get_footer(); 

