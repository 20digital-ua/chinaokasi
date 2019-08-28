<?php get_header(); 
$backLinkData=array(get_permalink(get_option('page_for_posts')),'News');
while(have_posts()){
	the_post();
	$category=get_the_category();

	if(!in_array($category[0]->slug,array('chinafriends','news'))){
		$backLinkData=array(getPageLink($category[0]->slug),$category[0]->cat_name);
	}
	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>
	<main>
		<section class="main-single-post">
			<div class="container container--nopadding">
				<a href="<?=$backLinkData[0]?>" class="post-back-link grid-padding">Back to <span><?=$backLinkData[1]?></span> Blog Posts</a>
				<div class="post-grid">
					<div class="post__title grid-padding">
						<?php the_title();?>
					</div>
					<div class="author grid-padding">
						<img class="author__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/follow-me/Avatar3.png" alt="Written by China Okasi">
						<div class="author__post-det">
							<div class="author__name">Written by China Okasi</div>
							<div class="post-share-squared">
								<div class="share-post">
									<a href="http://www.twitter.com/share?url=<?php the_permalink()?>" class="share-post__box share-post__box-t" target="_blank">Twitter
									<img class="share-post__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter.svg" alt=""></a>
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink()?>"  class="share-post__box share-post__box-f" target="_blank">Facebook
									<img class="share-post__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.svg" alt=""></a>
								</div>		
							</div>
						</div>
					</div>	
				
					<div class="single-post-content">
					
						<?php 
							$src='https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg';
							$altText="no image";
							if(get_the_post_thumbnail()!=''){
								$src=get_the_post_thumbnail_url();
								$altText=$alt;
							}
						 ?>
						<img src="<?=$src?>" class="single-post-content__img" alt="<?=$altText?>">
						<div class="single-post-content__text grid-padding">
							
							<?php if(get_field('podcast-src')) :?>
							<div class="podcast-player podcast-player--single-post">  
								<div class="podcast-controls">
									<button  id="podcast-0" class="podcast-playBtn"></button>
									<div class="progress-bar" id="podcast-0__bar"  data-id="podcast-0">
										<div class="progress-bar__fill" id="podcast-0__audio__bar-fill">
											<div class="progress-bar__pin">	</div>
										</div>
									</div>
								</div>
								<audio id="podcast-0__audio" class="podcast-player-tag" ontimeupdate="updateProgress(this)" src="<?php echo get_field('podcast-src')?>"></audio>
							</div>
							<?php endif;?>

							<?php the_content(); ?>	
							<div class="share-post share-post--margin">
								<a href="http://www.twitter.com/share?url=<?php the_permalink()?>" target="_blank"><img class="share-post__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/twitter-blue.svg" alt=""></a>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink()?>" target="_blank"><img class="share-post__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook-blue.svg" alt=""></a>
							</div>	
						</div>
						
					</div>
					<div class="podcast single-post  grid-padding">
						<h2 class="title title--left">Heard My Hot Podcast?</h2>
						<h2 class="podcast-intro-text">China & Friends</h2>
						<div class="container container--podcast-player"></div>
							<?php get_template_part('template-parts/podcast','player') ?>
							<div class="sign-podcast">
								<h3 class="sign-podcast__title">Sign up to get <br>
										new episodes first</h3>
								<button class="button submit-btn popub-btn-open" data-groupe="podcast">Be the first to hear!</button>
							</div>
						</div>
				</div>
				
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>


<?php } 

get_template_part('template-parts/sign-popup');
get_footer(); ?>