<main>
		<section class="head-main single-cours-head-main section">
			<div class="container love">
				<div class="head-content">
					<span class="head-content__welcome">WELCOME to</span>
					<h1 class="head-content__title">Live</h1>
					<span class="head-content__subtitle"><span>my </span> Lifestyle — Guide Channel</span>
				</div>
				<div class="head-img-wrp">
						<img class="head-img-wrp__img" src="<?php echo get_template_directory_uri(); ?>/img/header/ChinaMainHeaderImage.png" alt="">
				</div>
				
			</div>
		</section>
		<section class="course-info">
			<div class="container">
				<div class="cinfo">
					<div class="cinfo-content">
						<span class="cinfo-content__welcome">WELCOME to</span>
						<h1 class="cinfo-content__title">Love</h1>
						<span class="cinfo-content__subtitle"><span>my </span> Relationship — Guide Channel</span>
					</div>
					<ul class="info-list">
						<li>Lorem Ipsum has been the industry's standard</li>
						<li>Lorem Ipsum has been the industry's standard</li>
						<li>Lorem Ipsum has been the industry's standard</li>
					</ul>
					<a href="#" class="link-btn"><span class="link-inner">Take LOVE Course</span></a>
				</div>
			</div>
		</section>
		<section class="c-details">
			<div class="container">
				<div class="d-blocks">
					<div class="format">
						<div class="d-title">Format</div>
						<div class="d-value">ONLINE</div>
					</div>
					<div class="duration">
						<div class="d-title">Duration</div>
						<div class="d-value">30 min</div>
					</div>
					<div class="price">
						<div class="d-title">Fee</div>
						<div class="d-value">Free</div>
					</div>			
				</div>
			</div>
		</section>		
		<section class="about-course">
			<div class="container">
				<div class="title">
						About LOVE Course
				</div>
				<div class="text text-center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nunc dui, interdum a est nec, accumsan dignissim neque. Nunc nibh lorem, malesuada non elementum id, porta vel enim. Etiam sollicitudin egestas lectus, sit amet porttitor dui egestas ac. Integer sodales vel nisl vel fermentum. Donec nec leo vitae libero ullamcorper porta.
				</div>
				<form action="" class="primary-form primary-form--about-course">
					<div class="form-row">
						<label for="name-input" class="label">Name</label>
						<input id="name-input" class="primary-form__input input" type="text" placeholder="Your Name">
					</div>
					<div class="form-row">
						<label for="email-input" class="label">Email</label>
						<input id="email-input" class="primary-form__input input primary-form__input-last" type="text" placeholder="Your Email">
					</div>
					<button class="course__takelink takeBtn"><span class="link-inner">Take <span class="link-inner-sm">LOVE</span> Course</span></button>
				</form>
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