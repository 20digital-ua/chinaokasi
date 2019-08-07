<?php /* 
	Template Name: TVClips & Photos Page
	Template Post Type: page */ 
?>
<?php get_header(); 

$clips=new WP_Query(array(
	'posts_per_page'=>-1,
	'post_type'=>'video'
));



wp_reset_postdata();

while(have_posts()) : 
	the_post();
	$tv = get_field('tv-clips');
	$photos = get_field('photos');

?>

<main>
	<section class="tv-head-main">
		<div class="container clear-padding">
			<div class="title-subscribe">
				<div class="title-subscribe__name">
					<span><?php the_title(); ?></span>
				</div>
				<div class="title-img">
					<img src="<?php the_post_thumbnail_url()?>" class="title-img__img" alt="">
				</div>
				<div class="subscribe-block">
					<div class="greeting">
						<p class="greeting__text"><?php the_content(); ?></p>
					</div>
					<button name="subscribe" class="button  submit-btn submit-btn-transparent popub-btn-open" data-groupe="all">Join my movement</button>
				</div>
			</div>
		</div>
	</section>
	<section class="clips-photos">
		<div class="container--nopadding">
			<div class="tabs">
				<div class="tab-slider--nav">
					<ul class="tab-slider--tabs">
						<li class="tab-slider--trigger active" rel="tab1">TV CLIPS</li>
						<li class="tab-slider--trigger" rel="tab2">PHOTOS</li>
					</ul>
				</div>
				<div class="tab-slider--container">
					<div id="tab1" class="tab1 tab-body">
						<div class="container">
							<div class="tab__title"><?=$tv['title']?></div>
							<div class="tab__text">
							<?=$tv['text']?>
							</div>
						</div>

						<!--  -->
						<div class="container-inner">
							<div class="tv-clips">
								<?php while($clips->have_posts()) : 
									$clips->the_post();
									$videoSrc=get_field('tv_clip')['video'];
									?>
									<div class="clip <?php if ($videoSrc!="") echo 'video-clip'?>" data-video="<?=$videoSrc?>" data-poster="<?=get_field('tv_clip')['image']?>">
										<div class="clip-img">
											<img class="clip__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/clips/china-okasi-megyn-kelly.png" alt="">
										</div>
										<div class="clip-content">
											<h3 class="clip-content__title"><?php the_title() ?></h3>
											<div class="clip-content__text"><?php the_content() ?></div>
										</div>
										<div class="clip-info">
											<div class="clip-info__channel"><?=get_field('tv_clip')['chanel']?></div>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
							<!--  -->
						</div>
						<div class="container">
							<div class="channel-logos">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/China on MSNBC_.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/china-okasi-pix11.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/cnn-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/current-tv-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/fox-business-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/fox-news-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/hln-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/the-cw-network-logo.png" alt="">
							</div>
						</div>
					</div>
					<div id="tab2" class="tab2 tab-body">
						<div class="container">
							<div class="tab__title"><?=$photos['title']?></div>
							<div class="tab__text">
								<?=$photos['text']?>
							</div>
						</div>
						<!-- <div class="container-inner">
							<div class="photos-grid">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, In Gold.png" alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Model (1).png" alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi (1).png" alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Bio Red.png" alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Stance.png" alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Model.png" alt="">
								<img class="photos-grid__img" src="<?php 	//echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, In White - Formal.png"
									alt="">
								<img class="photos-grid__img" src="<?php //echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi.png" alt="">
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php  get_template_part('template-parts/contact-form'); ?>
</main>

<div class="video-popup">
	<div class="video-popup-overlay"></div> 

	<video id='my-video' class='video-js control-vs' controls preload='auto' width='700' height='440'  data-setup='{}'>
		<source src='<?php echo get_template_directory_uri(); ?>/assets/source/1.mp4'>
		<p class='vjs-no-js'>
			To view this video please enable JavaScript, and consider upgrading to a web browser that
			<a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
		</p>
	</video>
	<script src='<?php echo get_template_directory_uri(); ?>/assets/source/video-js/video.js'></script>
</div>
<?php 

endwhile;



get_template_part('template-parts/sign-popup');
get_footer(); ?>