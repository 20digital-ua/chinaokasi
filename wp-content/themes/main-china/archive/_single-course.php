<?php get_header(); 

while(have_posts()){
	the_post();

?>
	<main>
		<section class="main-single-post">
			<div class="container container--nopadding">	
				<div class="post-grid">
					<div class="post__title grid-padding">
						<?php the_title(); ?>
					</div>
					<div class="author grid-padding">
						<img class="author__img" src="<?php echo get_template_directory_uri(); ?>/img/follow-me/Avatar3.png" alt="">
						<div class="author__post-det">
							<div class="author__name">Written by China Okasi</div>
							<div class="post-date"><?php the_date(); ?></div>
						</div>
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
						<div class="container--podcast-player">
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
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>
<?php } get_footer(); ?>