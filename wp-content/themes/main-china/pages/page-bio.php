<?php /* 
	Template Name: Bio Page
	Template Post Type: page */ 
?>
<?php get_header();  ?>


<main>
		<section class="bio-section">
			<div class="container clear-padding">
				<div class="title-subscribe">
					<div class="title-subscribe__name">
						<span>China Okasi</span>	
					</div>
					<div class="title-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-me/ChinaRedHat.png" class="title-img__img" alt="">
					</div>
					<div class="subscribe-block container">
						<div class="greeting">
							<p class="greeting__text">Hey, it’s <span class="greeting__text-md">China</span> , Ivy League prodigy & queen of motivational podcasts!Read about me & my favorite top motivational speakers below & sign up to get 2-min. inspirational audio delivered to you daily for FREE.</p>
						</div>
						<button name="subscribe" class="button  submit-btn submit-btn-transparent popub-btn-open" data-groupe="all">Join my movement</button>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="bio-content">
						<h3 class="bio-content__title"><?php the_title(); ?></h3>	
						<div class="bio-content__text">
            <?= get_post_field('post_content', $post->ID) ?>
						</div>
				</div>
				<?php get_template_part('template-parts/follow') ?>
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>

<?php 

get_template_part('template-parts/sign-popup');
get_footer(); ?>
