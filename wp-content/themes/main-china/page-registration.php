<?php 
get_header(); 
 while ( have_posts() ) : the_post();
   ?>
<main>
		<section class="head-main single-cours-head-main section">
			<div class="container work">
				<div class="head-content">
					<span class="head-content__welcome">WELCOME to</span>
					<h1 class="head-content__title">Live</h1>
					<span class="head-content__subtitle"><span>my </span> Lifestyle — Guide Channel</span>
				</div>
				<div class="head-img-wrp">
						<img class="head-img-wrp__img" src="<?php echo get_template_directory_uri(); ?>/img/pages/courses/China-work-course.png" alt="">
				</div>
				
			</div>
		</section>
		<section class="course-info">
			<div class="container">
				<div class="cinfo">
        <?php the_content(); ?>
				</div>
			</div>
		</section>
		<!-- <section class="in-touch-section section">
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
		</section> -->
	</main>


  <?php
endwhile;
get_footer(); 

