<?php get_header(); ?>
<main>
<section class="podcast-section all-podcasts-section section">
	<div class="container container--nopadding">
		<h2 class="title">My Podcasts</h2>
		<div id="podcasts-wrapper">
			<!-- <div class="podcast-single">
				<div class="podcast-introduce ">
					
				</div>
				<div class="container container--podcast-player">
					<div class="podcast-player">
						<div class="podcast-info">
								<p class="podcast-player__title"></p>
						</div>
						<div class="podcast-controls">
							<button  id="podcast-1" class="podcast-playBtn"></button>
							<div class="progress-bar" id="podcast-1__bar">
								<div class="progress-bar__fill" id="podcast-1__audio__bar-fill">
									<div class="progress-bar__pin">	</div>
								</div>
							</div>
						</div>
						<audio id="podcast-1__audio" ontimeupdate="updateProgress(this)" class="podcast-player-tag" src="<?php echo get_template_directory_uri(); ?>/source/audio/kazka-plakala-rington_(muztron.com).mp3"></audio>
						
					</div>
				</div>
			</div>
			<div class="podcast-single">
				<div class="podcast-introduce ">
					
				</div>
				<div class="container container--podcast-player">
					<div class="podcast-player">
						<div class="podcast-info">
								<p class="podcast-player__title"></p>
						</div>
						<div class="podcast-controls">
							<button class="podcast-playBtn" id="podcast-2"></button>
							<div class="progress-bar" id="podcast-1__bar">
								<div class="progress-bar__fill" id="podcast-2__audio__bar-fill">
									<div class="progress-bar__pin">	</div>
								</div>
							</div>
						</div>
						<audio ontimeupdate="updateProgress(this)" id="podcast-2__audio" class="podcast-player-tag" src="<?php echo get_template_directory_uri(); ?>/source/audio/Ariana Grande - 7 rings-320.mp3"></audio>
						
					</div>
				</div>
			</div> -->
		</div>
		<div id="pagination">
	
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
