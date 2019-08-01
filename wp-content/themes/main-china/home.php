
<?php get_header(); 
	$pageData=getPageData(get_the_ID());
?>
<main>
	<section class="head-main news-head-main section " data-page="<?=$pageData['slug']?>">
			<div class="container news">
			
				<div class="head-content">
					<span class="head-content__welcome">WELCOME to</span>
					<h1 class="head-content__title"><?php the_title();?></h1>
					<span class="head-content__subtitle"><span>my </span> <?php the_title();?>style — Guide Channel</span>
				</div>
				<div class="head-img-wrp">
				<img class="head-img-wrp__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/ChinaMainHeaderImage.png" alt="">
				</div>
			</div>
		</section>

		<section class="course-info">
			<div class="container">
				<div class="cinfo">
					<div class="cinfo-content">
						<span class="cinfo-content__welcome">WELCOME to</span>
						<h1 class="cinfo-content__title">News</h1>
					</div>
					<div class="info-list">
						<?php echo get_post_field('post_content', get_option('page_for_posts'));?>
					</div>
					<button class="link-btn popub-btn-open" data-groupe="news">Get News & Podcast Audio FREE</span></button>
				</div>
			</div>
		</section>
		
		<?php  
			$blogTitle=get_post_field('blogposts_title', get_option('page_for_posts'));
			get_template_part('template-parts/blog-posts','ajax');
			get_template_part('template-parts/contact-form'); 
		?>	
	</main>

<?php
get_template_part('template-parts/sign-popup');
get_footer(); ?>
