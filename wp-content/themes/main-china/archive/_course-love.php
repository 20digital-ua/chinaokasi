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
					<a href="<?php echo get_post_type_archive_link('course')."love";?>" class="link-btn"><span class="link-inner">Take LOVE Course</span></a>
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
				<iframe  class="corses-iframe love" src="<?php echo get_template_directory_uri(); ?>/template-parts/subscribe-forms/sub-love.php" width="100%">
								Error!
							</iframe>
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>