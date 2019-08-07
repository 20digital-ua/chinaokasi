<?php /* 
	Template Name: Bio Page
	Template Post Type: page */ 

	
?>
<?php get_header();  

while(have_posts()) : 
	the_post();
	$header = get_field('header');
?>

<main>
		<section class="bio-section">
			<div class="container clear-padding">
				<div class="title-subscribe">
					<div class="title-subscribe__name">
						<span><?=$header['title']?></span>	
					</div>
					<div class="title-img">
						<img src="<?php the_post_thumbnail_url()?>" class="title-img__img" alt="">
					</div>
					<div class="subscribe-block container">
						<div class="greeting">
							<p class="greeting__text"><?=$header['text']?></p>
						</div>
						<button name="subscribe" class="button  submit-btn submit-btn-transparent popub-btn-open" data-groupe="all">Join my movement</button>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="bio-content">
						<h3 class="bio-content__title"><?php the_title(); ?></h3>	
						<div class="bio-content__text">
            <?php the_content(); ?>
						</div>
				</div>
				<?php get_template_part('template-parts/follow') ?>
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>

<?php

endwhile;

get_template_part('template-parts/sign-popup');
get_footer(); ?>
