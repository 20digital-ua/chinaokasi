<?php /* 
	Template Name: Registration Page
	Template Post Type: page */ 
?>
<?php 
get_header(); 
 while ( have_posts() ) : the_post();
 	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
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
						<img class="head-img-wrp__img" src="<?php the_post_thumbnail_url() ?>" alt="<?=$alt?>">
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

