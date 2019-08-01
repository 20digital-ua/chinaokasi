<?php /* 
	Template Name: LifeWorkLive Page
	Template Post Type: page */ 
?>
<?php get_header(); 
$pageData=getPageData(get_the_ID());
?>
<main>
		<section class="head-main single-cours-head-main section " data-page="<?=$pageData['slug']?>">
			<div class="container <?=	getPageData(get_the_ID())?>">
				<div class="head-content">
					<span class="head-content__welcome">WELCOME to</span>
					<h1 class="head-content__title"><?php the_title();?></h1>
					<span class="head-content__subtitle"><span>my </span> <?php the_title();?>style — Guide Channel</span>
				</div>
				<div class="head-img-wrp">
						<img class="head-img-wrp__img" src="<?php the_post_thumbnail_url() ?>" alt="">
				</div>
			</div>
		</section>
		<section class="course-info">
			<div class="container">
				<div class="cinfo">
					<div class="cinfo-content">
						<span class="cinfo-content__welcome">WELCOME to</span>
						<h1 class="cinfo-content__title"><?php the_title();?></h1>
					</div>
					<div class="info-list">
						<?php echo get_post_field('post_content', $post->ID); ?>
					</div>
					<button class="link-btn" id="popub-btn-open"><span class="link-inner">Take <?php the_title();?> Course</span></button>
				</div>
			</div>
		</section>

		<?php  get_template_part('template-parts/blog-posts','ajax'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>


<?php
get_template_part('template-parts/sign-popup');
get_footer(); 

?>




		<!-- <section class="c-details">
			<div class="container">
				<div class="d-blocks">
					<div class="format">
						<div class="d-title">Format</div>
						<div class="d-value">ONLINE</div>
					</div>
					<div class="duration">
						<div class="d-title">Duration</div>
						<div class="d-value">30 min</div>
					</div>
					<div class="price">
						<div class="d-title">Fee</div>
						<div class="d-value">Free</div>
					</div>			
				</div>
			</div>
		</section>		 -->
		<!-- <section class="about-course">
			<div class="container">
				<div class="title">
						About LIVE Course
				</div>
				<div class="text text-center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nunc dui, interdum a est nec, accumsan dignissim neque. Nunc nibh lorem, malesuada non elementum id, porta vel enim. Etiam sollicitudin egestas lectus, sit amet porttitor dui egestas ac. Integer sodales vel nisl vel fermentum. Donec nec leo vitae libero ullamcorper porta.
				</div>
				<iframe  class="corses-iframe live" src="<?php //echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-live.php" width="100%">
								Error!
							</iframe>
			</div>
		</section> -->