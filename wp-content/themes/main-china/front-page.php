
<?php get_header(); 

while(have_posts()) : the_post();
$section1 = get_field('section-1');
$section2 = get_field('section-2');
$section3 = get_field('section-3');
?>
	<main>
		<section class="head-main home-head-main section section-first">
			<div class="container">
				<div class="head-text">
					<?php the_content() ?>
				</div>
				<div class="subscribe-block subscribe-block--header">
					<button class="button submit-btn popub-btn-open" data-groupe="all">Join my movement</button>
				</div>
			</div>
			<div class="head-main-bg">
				<div class="gradient-block"></div>
				<div class="china"></div>
				<div class="shapes">
				</div>
			</div>
		</section>

		<section class="subscribe-section section">
			<div class="container container-content-center">
				<button class="button submit-btn popub-btn-open" data-groupe="all">Join my movement</button>
			</div>
		</section>
		<section class="courses-section section">
			<div class="container">
				<?=$section1['title-groupe']?>
				<div class="courses">
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--live"><?=$section1['boxes']['box_1']['title']?></div>
							<div class="course__img">
								<img src="<?=$section1['boxes']['box_1']['image']?>" alt="">
							</div>
						</div>
						<p class="text"><?=strip_tags($section1['boxes']['box_1']['text'],'<strong>')?></p>
						<a href="<?= getPageLink('life'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="life"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--work"><?=$section1['boxes']['box_2']['title']?></div>
							<div class="course__img">
								<img src="<?=$section1['boxes']['box_2']['image']?>" alt="">
							</div>
						</div>
						<p class="text"><?=strip_tags($section1['boxes']['box_2']['text'],'<strong>')?></p>
						<a href="<?= getPageLink('work'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="work"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title  course__title--love"><?=$section1['boxes']['box_3']['title']?></div>
							<div class="course__img">
								<img src="<?=$section1['boxes']['box_3']['image']?>" alt="">
							</div>
						</div>
						<p class="text"><?=strip_tags($section1['boxes']['box_3']['text'],'<strong>')?></p>
						<a href="<?= getPageLink('love'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="love"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
					</div>
				</div>
			</div>
		</section>
		<section class="about-me-section section">
			<div class="container">
				<h2 class="title title--about-me"><?=$section2['title-groupe']?></h2>
			</div>
			<div class="container container--nopadding">
				<div class="about-china">
						<div class="china-photo">
							<img src="<?=$section2['image']?>"  class="china-photo__img" alt="">
							<div class="quote-block">
								<p class="quote-block__text"><?=$section2['quote']?></p>
							</div>
						</div>
						<div class="china-bio">
							<h2 class="title title--left title--china-bio"><?=$section2['title-groupe']?></h2>
							<div class="about-content">
								<?=$section2['text']?>
							</div>
							<a href="<?= getPageLink('bio'); ?>" class="link-btn"><span class="link-inner">Read more</span></a>
						</div>
				</div>
				
			</div>
			
		</section>
		<section class="podcast-section section">
			<div class="container">
				<?=$section3['title-groupe']?>
			</div>
			<div class="container container--nopadding">
				<div class="podcast-introduce">
					<div class="podcast-introduce__text">
						<h2 class="podcast-introduce__title"><?=$section3['podcast_promo']['text']['title']?></h2>
						<p class="podcast-introduce__subtext"><?=$section3['podcast_promo']['text']['subtitle']?></p>
					</div>
					<img src="<?=$section3['podcast_promo']['image']?>"  class="podcast-introduce__img" alt="">
				</div>
			</div>
			<div class="container container--podcast-player">
				<?php get_template_part('template-parts/podcast','player') ?>
				<div class="sign-podcast">
					<h3 class="sign-podcast__title"><?=$section3['sign_podcast_text']?></h3>
					<button class="button submit-btn popub-btn-open" data-groupe="podcast">Be the first to hear!</button>
				</div>
				<?php get_template_part('template-parts/follow') ?>
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	
	</main>

<?php endwhile; ?>
<?php 
get_template_part('template-parts/sign-popup');
get_footer(); ?>




