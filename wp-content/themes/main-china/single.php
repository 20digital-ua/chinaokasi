<?php get_header(); 

while(have_posts()){
	the_post();
	$category=get_the_category();
?>
	<main>
		<section class="main-single-post">
			<div class="container container--nopadding">
				<a href="<?php echo get_permalink(get_option('page_for_posts'));?>?category=<?=strtolower($category[0]->name);?>" class="post-back-link grid-padding">Back to <span><?=$category[0]->name?></span> Blog Posts</a>
				<div class="post-grid">
					<div class="post__title grid-padding">
						<?php the_title();?>
					</div>
					<div class="author grid-padding">
						<img class="author__img" src="<?php echo get_template_directory_uri(); ?>/img/follow-me/Avatar3.png" alt="">
						<div class="author__post-det">
							<div class="author__name">Written by China Okasi</div>
							<div class="post-date"><?php the_date(); ?></div>
						</div>
					</div>	
					<div class="subscribe-block single-subscribe grid-padding">
							<div class="greeting">
								<p class="greeting__join">Join My Movement!</p>
								<p class="greeting__text">Sign up for my <span class="greeting__text-md">#LiveWorkLove</span> courses!</p>
							</div>
								<iframe  class="single-post-all-iframe" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-all.php" >
							Error!
							</iframe>
					</div>
					<div class="single-post-content">
						<?php 
							$img='https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg';
							if(get_the_post_thumbnail()!=''){
								the_post_thumbnail( 'full',['class' => 'single-post-content__img']);
							}else{
								echo '<img src="https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg" class="single-post-content__img" alt="">';
							}
						 ?>
						<div class="single-post-content__text grid-padding">
							<?php the_content(); ?>	
										
						</div>
						
					</div>
					<div class="podcast single-post  grid-padding">
						<h2 class="title title--left">Heard My Hot Podcast?</h2>
						<h2 class="podcast-intro-text">China & Friends</h2>
						<div class="container container--podcast-player"></div>
							<?php get_template_part('template-parts/podcast','player') ?>
							<div class="sign-podcast">
							<iframe class="single-post-podcast-iframe" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-podcast.php" width="100%">
							Error!
					</iframe>
							</div>
						</div>
				</div>
				
			</div>
		</section>
		<?php  get_template_part('template-parts/section', 'blog-posts'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>


<?php } get_footer(); ?>