<?php get_header(); ?>
	<main>
		<section class="head-main courses-head-main section">
			<div class="container">
				<div class="head-text">
					<h1 class="head-main__title">Live, Work, Love 	<span class="head-main__sm">COURSES</span></h1>
					<span class="head-main__author">by China Okasi</span>
				</div>
				<div class="head-img">
						<img class="head-main-img"src="<?php echo get_template_directory_uri(); ?>/img/pages/courses/China White Short 3.png" alt="">
				</div>
				
			</div>
		</section>
		<section class="courses-section courses-page-courses section">
			<div class="container">
				<h2 class="title">Take Any 5-Minute Mini-Course From Me</h2>
				<p  class="sub-title">It's A <span class="sub-title--red">Free Gift</span>, Just For You</p>
				<div class="courses">
					<div class="course">
						<div class="course__title course__title--live">Live</div>
						<div class="course__img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_1.png" alt="">
						</div>
						<p class="text">Quisque auctor dui odio, non venenatis orci pulvinar vel. Etiam convallis metus lectus orci pulvinar metus convallis tonte doro orci pulvina onto vergo. Maecenas gravida nulla in bibendum dapibus.  Aliquam euismod vestibulum sem sit amet rutrum.
								Fusce non porttitor nulla. Cras tempor facilisis, a accumsan arcu.</p>
						<div class="primary-form primary-form--course">
						<iframe  class="corses-iframe live" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-live.php" width="100%">
						Error!
					</iframe>
						</div>
					</div>
					<div class="course">
						<div class="course__title course__title--work">Work</div>
						<div class="course__img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_2.png" alt="">
						</div>
						<p class="text">Quisque auctor dui odio, non venenatis orci pulvinar vel. Etiam convallis metus lectus orci pulvinar metus convallis tonte doro orci pulvina onto vergo. Maecenas gravida nulla in bibendum dapibus.  Aliquam euismod vestibulum sem sit amet rutrum.
								Fusce non porttitor nulla. Cras tempor facilisis, a accumsan arcu.</p>
							<div class="primary-form primary-form--course">
								<iframe  class="corses-iframe work" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-work.php" width="100%">
								Error!
							</iframe>
							</div>
					</div>
					<div class="course">
						<div class="course__title  course__title--love">Love</div>
						<div class="course__img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_3.png" alt="">
						</div>
						<p class="text">Quisque auctor dui odio, non venenatis orci pulvinar vel. Etiam convallis metus lectus orci pulvinar metus convallis tonte doro orci pulvina onto vergo. Maecenas gravida nulla in bibendum dapibus.  Aliquam euismod vestibulum sem sit amet rutrum.
								Fusce non porttitor nulla. Cras tempor facilisis, a accumsan arcu.</p>
							<div class="primary-form primary-form--course">
								<iframe  class="corses-iframe love" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-love.php" width="100%">
								Error!
							</iframe>
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
<?php get_footer(); ?>

