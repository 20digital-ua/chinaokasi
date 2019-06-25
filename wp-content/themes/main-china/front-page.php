
<?php get_header(); ?>
	<main>
		<section class="head-main home-head-main section section-first">
			<div class="container">
				<div class="head-text">
					<span class="head-main__medium">LET’S</span>
					<h1 class="head-main__title">Live, Work, Love</h1>
					<span class="head-main__medium">TOGETHER</span>
					<div class="greeting">
						<p class="greeting__text">Hey, it's <span class="greeting__text-md">China.</span> </p>
						<p class="greeting__text">Sign up for my <span class="greeting__text-md">#LiveWorkLove</span> courses!</p>
					</div>
				</div>
				<div class="subscribe-block subscribe-block--header">
					<?php require('template-parts/subscribe-forms/sub-all.php');?>
				</div>
			</div>
			<div class="head-main-bg">
					<div class="gradient-block"></div>
					<div class="china"></div>
					<div class="shapes">
					</div>
				</div>
		</section>
		<section class="subscribe-section section">
			<div class="container">
				<div class="subscribe-block">
					<form action="" class="primary-form">
						<div class="form-row">
							<input class="primary-form__input" type="text" placeholder="Your Name">
						</div>
						<div class="form-row">
							<input class="primary-form__input primary-form__input-last" type="text" placeholder="Your Email">
						</div>
						<button class="primary-form__submit submit-btn">Join my movement</button>
					</form>
				</div>
			</div>
		</section>
		<section class="courses-section section">
			<div class="container">
				<h2 class="title">Take Any 5-Minute Mini-Course From Me</h2>
				<p  class="sub-title">It's A <span class="sub-title--red">Free Gift</span>, Just For You</p>
				<div class="courses">
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--live">Live</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_1.png" alt="">
							</div>
						</div>
						<p class="text">Quisque auctor dui odio, non venenatis orci pulvinar vel. Etiam convallis metus lectus orci pulvinar metus convallis tonte doro orci pulvina onto vergo.</p>
						<a href="<?php echo site_url('/courses/live'); ?>" class="course__readlink">Read More</a>
						<a href="#" class="course__takelink"><span class="link-inner">Take <span class="link-inner-sm">LIVE</span> Course</span></a>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--work">Work</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_2.png" alt="">
							</div>
						</div>
						<p class="text">Aenean rhoncus pretium purus, et aliquam urna placerat a. Curabitur vitae ultricies metus, vel accumsan sem. Etiam convallis metus  convallis tonte doro</p>
						<a href="<?php echo site_url('/courses/work'); ?>" class="course__readlink">Read More</a>
						<a href="#" class="course__takelink"><span class="link-inner">Take <span class="link-inner-sm">WORK</span> Course</span></a>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title  course__title--love">Love</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/courses/Girl_3.png" alt="">
							</div>
						</div>
						<p class="text">Integer finibus consequat tellus ut vulputate. Mauris fringilla, nunc vitae molestie rhoncus, erat nulla sagittis diam, vitae varius turpis mauris.</p>
						<a href="<?php echo site_url('/courses/love'); ?>" class="course__readlink">Read More</a>
						<a href="#" class="course__takelink"><span class="link-inner">Take <span class="link-inner-sm">LOVE</span> Course</span></a>
					</div>
				</div>
			</div>
		</section>
		<section class="about-me-section section">
			<div class="container">
				<h2 class="title title--left title--about-me">Learn About Me</h2>
			</div>
			<div class="container container--nopadding">
				<div class="about-china">
						<div class="china-photo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about-me/ChinaRedHat.png"  class="china-photo__img" alt="">
							<div class="quote-block">
								<p class="quote-block__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="china-bio">
							<h2 class="title title--left title--china-bio">Learn About Me</h2>
							<div class="about-content">
								<p>I’ve lived across four continents,
									for periods ranging from months to decades.</p>
								<p>I have more than a singular place I’m from;</p>
								<p>I live with angularity: I like busy African metropolises and the patter of Wall Street feet.</p>
								<p>I like quiet Saturday mornings with herb tea and honey. I like Los Angeles and London, Beijing and Berlin, fufu and udon.</p>
							</div>
							<a href="<?php echo site_url('/bio'); ?>" class="link-btn"><span class="link-inner">Read more</span></a>
						</div>
				</div>
				
			</div>
			
		</section>
		<section class="podcast-section section">
			<div class="container">
				<h2 class="title title">Heard My Hot Podcast?</h2>
			</div>
			<div class="container container--nopadding">
				<div class="podcast-introduce">
					<div class="podcast-introduce__text">
						<h2 class="podcast-introduce__title">China & Friends</h2>
						<p class="podcast-introduce__subtext">podcast</p>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/podcast/ChinaPodcastPhoto.png"  class="podcast-introduce__img" alt="">
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
			<div class="container container--podcast-player">
				<?php get_template_part('template-parts/podcast','player') ?>
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
						<button class="primary-form__submit submit-btn">Be the first to hear!</button>
					</form>
				</div>
				<div class="follow">
					<div class="follow-item">
						<div class="follow-content">
							<div class="follow-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/follow-me/Avatar-violet.png" alt="">
							</div>	
							<div class="follow-link">
								<p class="follow-link__login">@ChinaOkasi</p>
								<a class="follow-link__follow social-twitter" href="#">
										<svg width="19" height="15" viewBox="0 0 19 15" class="follow-link__icon" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.0804 2.41071C17.433 2.68973 16.7299 2.89062 16.0045 2.96875C16.7522 2.52232 17.3214 1.8192 17.5893 0.982143C16.8973 1.39509 16.1161 1.69643 15.3013 1.85268C14.6429 1.14955 13.7054 0.714285 12.6674 0.714285C10.6696 0.714285 9.0625 2.33259 9.0625 4.3192C9.0625 4.59821 9.09598 4.87723 9.15179 5.14509C6.16071 4.98884 3.4933 3.56027 1.71875 1.37277C1.40625 1.90848 1.22768 2.52232 1.22768 3.19196C1.22768 4.44196 1.86384 5.54687 2.83482 6.1942C2.2433 6.17187 1.68527 6.00446 1.20536 5.73661C1.20536 5.74777 1.20536 5.77009 1.20536 5.78125C1.20536 7.53348 2.4442 8.98438 4.09598 9.3192C3.79464 9.39732 3.47098 9.44196 3.14732 9.44196C2.91295 9.44196 2.68973 9.41964 2.46652 9.38616C2.92411 10.8147 4.25223 11.8527 5.83705 11.8862C4.59821 12.8571 3.04688 13.4263 1.36161 13.4263C1.06027 13.4263 0.78125 13.4152 0.491071 13.3817C2.08705 14.4085 3.98438 15 6.02679 15C12.6562 15 16.2835 9.50893 16.2835 4.7433C16.2835 4.58705 16.2835 4.4308 16.2723 4.27455C16.9754 3.76116 17.5893 3.125 18.0804 2.41071Z"/>
											</svg>
									<span class="link-text">FOLLOW</span>	
								</a>
							</div>
						</div>
						<div class="follow-additional">Journalist + Digital Exec + Cable News Analyst. Forthcoming Author.</div>
					</div>
					<div class="follow-item">
							<div class="follow-content">
								<div class="follow-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/follow-me/Avatar3.png" alt="">
								</div>	
								<div class="follow-link">
									<p class="follow-link__login ">china_okasi</p>
									<a class="follow-link__follow follow-link__follow-red" href="#">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="follow-link__icon follow-link__icon-red">
												<path d="M11.4286 8.85714C11.4286 10.4308 10.1451 11.7143 8.57143 11.7143C6.99777 11.7143 5.71429 10.4308 5.71429 8.85714C5.71429 7.28348 6.99777 6 8.57143 6C10.1451 6 11.4286 7.28348 11.4286 8.85714ZM12.9688 8.85714C12.9688 6.42411 11.0045 4.45982 8.57143 4.45982C6.13839 4.45982 4.17411 6.42411 4.17411 8.85714C4.17411 11.2902 6.13839 13.2545 8.57143 13.2545C11.0045 13.2545 12.9688 11.2902 12.9688 8.85714ZM14.1741 4.28125C14.1741 3.71205 13.7165 3.25446 13.1473 3.25446C12.5781 3.25446 12.1205 3.71205 12.1205 4.28125C12.1205 4.85045 12.5781 5.30804 13.1473 5.30804C13.7165 5.30804 14.1741 4.85045 14.1741 4.28125ZM8.57143 1.82589C9.82143 1.82589 12.5 1.72545 13.6272 2.17187C14.0179 2.32812 14.308 2.51786 14.6094 2.8192C14.9107 3.12054 15.1004 3.41071 15.2567 3.80134C15.7031 4.92857 15.6027 7.60714 15.6027 8.85714C15.6027 10.1071 15.7031 12.7857 15.2567 13.9129C15.1004 14.3036 14.9107 14.5938 14.6094 14.8951C14.308 15.1964 14.0179 15.3862 13.6272 15.5424C12.5 15.9888 9.82143 15.8884 8.57143 15.8884C7.32143 15.8884 4.64286 15.9888 3.51563 15.5424C3.125 15.3862 2.83482 15.1964 2.53348 14.8951C2.23214 14.5938 2.04241 14.3036 1.88616 13.9129C1.43973 12.7857 1.54018 10.1071 1.54018 8.85714C1.54018 7.60714 1.43973 4.92857 1.88616 3.80134C2.04241 3.41071 2.23214 3.12054 2.53348 2.8192C2.83482 2.51786 3.125 2.32812 3.51563 2.17187C4.64286 1.72545 7.32143 1.82589 8.57143 1.82589ZM17.1429 8.85714C17.1429 7.67411 17.154 6.50223 17.0871 5.3192C17.0201 3.94643 16.7076 2.72991 15.7031 1.72545C14.6987 0.720981 13.4821 0.408481 12.1094 0.341518C10.9263 0.274553 9.75446 0.285713 8.57143 0.285713C7.38839 0.285713 6.21652 0.274553 5.03348 0.341518C3.66071 0.408481 2.4442 0.720981 1.43973 1.72545C0.435268 2.72991 0.122768 3.94643 0.0558036 5.3192C-0.0111607 6.50223 0 7.67411 0 8.85714C0 10.0402 -0.0111607 11.2121 0.0558036 12.3951C0.122768 13.7679 0.435268 14.9844 1.43973 15.9888C2.4442 16.9933 3.66071 17.3058 5.03348 17.3728C6.21652 17.4397 7.38839 17.4286 8.57143 17.4286C9.75446 17.4286 10.9263 17.4397 12.1094 17.3728C13.4821 17.3058 14.6987 16.9933 15.7031 15.9888C16.7076 14.9844 17.0201 13.7679 17.0871 12.3951C17.154 11.2121 17.1429 10.0402 17.1429 8.85714Z"/>
												</svg>
										<span class="link-text">FOLLOW</span>	
									</a>
								</div>
							</div>
							<div class="follow-additional">Started from Obama now we here. 😐
									Digital & entertainment chief. #Feminist. Foodie. Fighter. Friend. Author.</div>
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






<!-- Begin Mailchimp Signup Form -->


<form action="https://gmail.us20.list-manage.com/subscribe/post?u=ef335dd7b9dff42381a557625&amp;id=eb6dd1fe6d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group input-group">
    <strong>Subs </strong>
    <ul><li><input type="radio" value="1" name="group[3467]" id="mce-group[3467]-3467-0"><label for="mce-group[3467]-3467-0">Live</label></li>
<li><input type="radio" value="2" name="group[3467]" id="mce-group[3467]-3467-1"><label for="mce-group[3467]-3467-1">Work</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef335dd7b9dff42381a557625_eb6dd1fe6d" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->