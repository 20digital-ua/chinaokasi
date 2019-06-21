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
					<div class="subscribe-block single-subscribe grid-padding">
							<div class="greeting">
								<p class="greeting__join">Join My Movement!</p>
								<p class="greeting__text">Sign up for my <span class="greeting__text-md">#LiveWorkLove</span> courses!</p>
							</div>
							<form action="" class="primary-form primary-form--single">
								<div class="form-row">
									<label for="name-input" class="label">Name</label>
									<input id="name-input" class="primary-form__input input" type="text" placeholder="Your Name">
								</div>
								<div class="form-row">
									<label for="email-input" class="label">Email</label>
									<input id="email-input" class="primary-form__input input primary-form__input-last" type="text" placeholder="Your Email">
								</div>
								<button class="primary-form__submit submit-btn submit-btn-transparent">Subscribe</button>
							</form>
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
					<?php
			
			
					$getPodcasts= new WP_Query(array(
						'posts_per_page'=>-1,
						'post_type'=>'podcast',
						'orderby' => 'publish_date', 
						'order' => 'DESC'

					));
					// var_dump($getPodcasts);
					while($getPodcasts->have_posts()){
						$getPodcasts->the_post();
						$isGeneral=get_field('general_podcast');
						if($isGeneral[0]=='true'){
							$podcastSrc=get_field('media-data');
							$titleText=get_the_content();
							break;
						}else{
							$podcastSrc=get_field('media-data');
							$titleText=get_the_content();
						}
					}
					?>
					<div class="podcast single-post  grid-padding">
						<h2 class="title title--left">Heard My Hot Podcast?</h2>
						<h2 class="podcast-intro-text">China & Friends</h2>
						<div class="container container--podcast-player">
							<div class="podcast-player">
								<div class="podcast-info">
										<p class="podcast-player__title"><?=$titleText?></p>
								</div>
								<div class="podcast-controls">
									<button  id="podcast-1" class="podcast-playBtn"></button>
									<div class="progress-bar" id="podcast-1__bar">
										<div class="progress-bar__fill" id="podcast-1__audio__bar-fill">
											<div class="progress-bar__pin">	</div>
										</div>
									</div>
								</div>
								<audio id="podcast-1__audio" class="podcast-player-tag" ontimeupdate="updateProgress(this)" src="<?=$podcastSrc?>"></audio>
								<!--<audio id="podcast-player-tag" src="source/audio/Ariana Grande - 7 rings-320.mp3"></audio>-->
							</div>
							<div class="sign-podcast">
								<h3 class="sign-podcast__title">Sign up to get <br>
										new episodes first</h3>
								<form action="" class="primary-form">
									<div class="form-row">
											<label for="input-name" class="primary-form__label">Name</label> <br>
											<input type="text" id="input-name" class="primary-form__input" placeholder="Your Name">
									</div>
									<div class="form-row">
											<label for="input-email" class="primary-form__label">Email</label> <br>
											<input type="text" id="input-email" class="primary-form__input" placeholder="Your Email">
									</div>
									<button class="primary-form__submit  submit-btn submit-btn-transparent">Be the first to hear!</button>
								</form>
							</div>
						</div>
				</div>
				
			</div>
		</section>
		<?php  get_template_part('template-parts/section', 'blog-posts'); ?>
		<section class="in-touch-section section">
			<div class="container">
				<h2 class="title">Let’s get in touch</h2>	
				<div class="with-me">
					<p class="with-me__gradient">Live Work Love</p>
					<p class="with-me__simple">WITH ME</p>
				</div>
				<div class="text text-center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Duis in nisl dictum, semper mauris in, interdum nisi.
				</div>
				<form action="" class="primary-form">
						<div class="row-single">
								<div class="form-row form-row-input">
										<label for="input-name" class="primary-form__label">Name</label> <br>
										<input type="text" id="input-name" class="primary-form__input" placeholder="Your Name">
								</div>
								<div class="form-row form-row-input">
										<label for="input-email" class="primary-form__label">Email</label> <br>
										<input type="text" id="input-email" class="primary-form__input" placeholder="Your Email">
								</div>
						</div>
						<div class="form-row">
								<label for="input-message" class="primary-form__label">Message</label> <br>
								<textarea  id="input-message" class="primary-form__input primary-form__textarea" placeholder="Your Email"></textarea>
						</div>
						<button class="primary-form__submit submit-btn">Send</button>
					</form>
			</div>
		</section>
	</main>
<?php } get_footer(); ?>