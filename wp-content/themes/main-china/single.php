<?php get_header(); 

while(have_posts()){
	the_post();

?>
	<main>
		<section class="main-single-post">
			<div class="container container--nopadding">
				<a href="#" class="post-back-link grid-padding">Back to <span>LIVE</span> Blog Posts</a>
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
						<?php the_post_thumbnail( 'full',['class' => 'single-post-content__img']); ?>
						<div class="single-post-content__text grid-padding">
							<?php the_content(); ?>
						</div>
						<div class="single-post-content__social grid-padding">
							<a href="#">
								<img class="single-post-content__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-blue.svg" alt="">
							</a>
							<a href="#">
								<img class="single-post-content__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-blue.svg" alt="">
							</a>
							<a href="#">
								<img class="single-post-content__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/pinterest-p-brands.svg" alt="">
							</a>
						</div>
					</div>
					<div class="podcast single-post  grid-padding">
						<h2 class="title title--left">Heard My Hot Podcast?</h2>
						<h2 class="podcast-intro-text">China & Friends</h2>
						<div class="container container--podcast-player"></div>
							<div class="podcast-player">
								<div class="podcast-info">
										<p class="podcast-player__title"><span class="inner-bold">China and Friends</span> Podcast</p>
										<p class="podcast-player__episode">Episode #1</p>
								</div>
								<div class="podcast-controls">
									<button id="podcast-playBtn"></button>
									<div id="progress-bar">
										<div id="progress-bar__fill">
											<div class="progress-bar__pin">	</div>
										</div>
									</div>
								</div>
								<audio id="podcast-player-tag" src="<?php echo get_template_directory_uri(); ?>/source/audio/kazka-plakala-rington_(muztron.com).mp3"></audio>
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
		<section class="blog-section section">
				<div class="container">
						<h2 class="title">Check other blog posts</h2>
				</div>
				<div class="container container--nopadding">
					<div class="blog-posts">
						<div class="post">
							<a class="post__link" href="single.html">
								<div class="post-img">
										<img class="post__img" src="img/blog/blog_post_1.jpg" alt="" >
										<div class="post-img__status">LIVE</div>
								</div>
								<div class="post-content">
									<h3 class="post-content__title">Lorem ipsum</h3>
									<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
								</div>
								<div class="post-info">
									<div class="post-info__date">25 March 2019</div>
									<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
										</svg>
										</div>
								</div>
							</a>
						</div>
						<div class="post">
							<div class="post-img">
									<img class="post__img" src="img/blog/blog_post_2.jpg" alt="" >
									<div class="post-img__status">Work</div>
							</div>
							<div class="post-content">
								<h3 class="post-content__title">Lorem ipsum</h3>
								<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
							<div class="post-info">
								<div class="post-info__date">25 March 2019</div>
								<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
									</svg>
									</div>
							</div>
						</div>
						<div class="post">
							<div class="post-img">
									<img class="post__img" src="img/blog/blog_post_3.jpg" alt="" >
									<div class="post-img__status">LOVE</div>
							</div>
							<div class="post-content">
								<h3 class="post-content__title">Lorem ipsum</h3>
								<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
							<div class="post-info">
								<div class="post-info__date">25 March 2019</div>
								<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
									</svg>
									</div>
							</div>
						</div>
						
					</div>
					<div class="blog-posts blog-posts-row2">
						<div class="post">
							<div class="post-img">
									<img class="post__img" src="img/blog/blog_post_2.jpg" alt="" >
									<div class="post-img__status">LIVE</div>
							</div>
							<div class="post-content">
								<h3 class="post-content__title">Lorem ipsum</h3>
								<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit. lorem</div>
							</div>
							<div class="post-info">
								<div class="post-info__date">25 March 2019</div>
								<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
									</svg>
									</div>
							</div>
						</div>
						<div class="post">
							<div class="post-img">
									<img class="post__img" src="img/blog/blog_post_3.jpg" alt="" >
									<div class="post-img__status">Work</div>
							</div>
							<div class="post-content">
								<h3 class="post-content__title">Lorem ipsum</h3>
								<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
							<div class="post-info">
								<div class="post-info__date">25 March 2019</div>
								<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
									</svg>
									</div>
							</div>
						</div>
						<div class="post">
							<div class="post-img">
									<img class="post__img" src="img/blog/blog_post_1.jpg" alt="" >
									<div class="post-img__status">LOVE</div>
							</div>
							<div class="post-content">
								<h3 class="post-content__title">Lorem ipsum</h3>
								<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
							<div class="post-info">
								<div class="post-info__date">25 March 2019</div>
								<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
									</svg>
									</div>
							</div>
						</div>
						
					</div>
					<div class="container">
						<a href="#" class="link-btn link-btn-center"><span class="link-inner">More posts</span></a>
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
<?php } get_footer(); ?>