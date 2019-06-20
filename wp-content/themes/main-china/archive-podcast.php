<?php
	$podcast=new WP_Query(array(
		'post_type'=>'podcast',
		'posts_per_page'=>-1
	));
	// var_dump($podcast);
?>
<?php get_header(); ?>
<main>
<section class="podcast-section all-podcasts-section section">
	<div class="container container--nopadding">
		<h2 class="title">My Podcasts</h2>
		<?php
		while($podcast->have_posts()){
			$podcast->the_post(); 
			$podcasMedia=get_field('podcast_data')['media'];

			?>
				<div class="podcast-single">
					<div class="podcast-introduce">
						<div class="podcast-introduce__text">
							<h2 class="podcast-introduce__title">China & Friends</h2>
							<p class="podcast-introduce__subtext">podcast</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/podcast/ChinaPodcastPhoto.png"  class="podcast-introduce__img" alt="">
					</div>
					<div class="podcast-player">
						<div class="podcast-info">
								<p class="podcast-player__title"><span class="inner-bold">China and Friends</span> Podcast</p>
								<p class="podcast-player__episode"><?=the_title()?></p>
						</div>
						<div class="podcast-controls">
							<button id="podcast-playBtn"></button>
							<div id="progress-bar">
								<div id="progress-bar__fill">
									<div class="progress-bar__pin">	</div>
								</div>
							</div>
						</div>
						<audio id="podcast-player-tag" src="<?=$podcasMedia?>"></audio>
					</div>
				</div>
				
				

		<?php }	?>
		</div>
	</div>
</section>

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

<?php get_footer(); ?>
