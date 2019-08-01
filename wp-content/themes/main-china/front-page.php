
<?php get_header(); ?>
	<main>
		<section class="head-main home-head-main section section-first">
			<div class="container">
				<div class="head-text">
					<span class="head-main__medium">LET’S</span>
					<h1 class="head-main__title">Life, Work, Love</h1>
					<span class="head-main__medium">TOGETHER</span>
					<div class="greeting">
						<p class="greeting__text">Hey, it’s <span class="greeting__text-md">China</span> , Ivy League prodigy & queen of motivational podcasts! Get my 2-min. podcasts delivered to your inbox & boost your mood NOW.</p>
					</div>
				</div>
				<div class="subscribe-block subscribe-block--header">
					<button class="button submit-btn popub-btn-open" data-groupe="all">Join my movement</button>
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
					<button class="button submit-btn popub-btn-open" data-groupe="all">Join my movement</button>
				</div>
			</div>
		</section>
		<section class="courses-section section">
			<div class="container">
				<h2 class="title">Choose Any 2-Min. Motivational Podcast Below Delivered Daily</h2>
				<p  class="sub-title">It's A <span class="sub-title--red">Free Gift</span> From Me, To Boost You On-The-Go!</p>
				<div class="courses">
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--live">Life</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses/Girl_1.png" alt="">
							</div>
						</div>
						<p class="text">Need inspiration in life? Who doesn’t? Sign up for my 2-min. power-up podcasts about LIFE that will leave you inspired to tackle whatever life throws at you daily.</p>
						<a href="<?= getPageLink('life'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="life"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title course__title--work">Work</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses/Girl_2.png" alt="">
							</div>
						</div>
						<p class="text">Want to stay motivated about your career? Sign up for my 2-min. WORK podcasts to boost your career mindset & feel better every day about your goals!</p>
						<a href="<?= getPageLink('work'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="work"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
					</div>
					<div class="course">
						<div class="course-top-container">
							<div class="course__title  course__title--love">Love</div>
							<div class="course__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses/Girl_3.png" alt="">
							</div>
						</div>
						<p class="text">How about love? Need self-love or relationship inspiration? Sign up for my 2-min. LOVE motivational podcasts to blast out negativity & feel good about your heart.</p>
						<a href="<?= getPageLink('love'); ?>" class="course__readlink">Read More</a>
						<button class="course__take-btn popub-btn-open" data-groupe="love"><span class="link-inner">Subscribe <span class="link-inner-sm">FREE</span></span></button>
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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-me/ChinaRedHat.png"  class="china-photo__img" alt="">
							<div class="quote-block">
								<p class="quote-block__text">I’m built to motivate, inspire, heal + empower myself & others.</p>
							</div>
						</div>
						<div class="china-bio">
							<h2 class="title title--left title--china-bio">Learn About Me</h2>
							<div class="about-content">
									<p>I'm a millennial. </p>
									<p>I started a popular digital site from scratch, sold it, created more. </p>
									<p>I have seven years of cable news commentary experience on any network you can name...CNN/HLN, BBC, MSNBC, Fox News, Sky News. Check!</p>
									<p>I entered Cornell at age 16 & graduated in three years at age 19 (and completed one year of a Ph.D. program at Georgetown when I was 21). </p>
									<p>I have three Ivy League degrees from Cornell University, University of Pennsylvania, & Columbia University Graduate School of Journalism & I’m certified in cybersecurity.</p>
									<p>I started temping on Wall Street at age 15--answering phones (not handling your investments, so don't be scared).</p>
							</div>
							<a href="<?= getPageLink('bio'); ?>" class="link-btn"><span class="link-inner">Read more</span></a>
						</div>
				</div>
				
			</div>
			
		</section>
		<section class="podcast-section section">
			<div class="container">
				<h2 class="title">Want My Hot New Longer-Length 30-Min. Discussion Podcast Instead?</h2>
			</div>
			<div class="container container--nopadding">
				<div class="podcast-introduce">
					<div class="podcast-introduce__text">
						<h2 class="podcast-introduce__title">China & Friends</h2>
						<p class="podcast-introduce__subtext">podcast</p>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/podcast/ChinaPodcastPhoto.png"  class="podcast-introduce__img" alt="">
				</div>
			</div>
			<div class="container container--podcast-player">
				<?php get_template_part('template-parts/podcast','player') ?>
				<div class="sign-podcast">
					<h3 class="sign-podcast__title">Sign up to get <br>
							new episodes first</h3>
					<button class="button submit-btn popub-btn-open" data-groupe="podcast">Be the first to hear!</button>
				</div>
				<?php get_template_part('template-parts/follow') ?>
			</div>
		</section>
		<?php  get_template_part('template-parts/blog-posts', 'static'); ?>
		<?php  get_template_part('template-parts/contact-form'); ?>
	
	</main>

<?php 
get_template_part('template-parts/sign-popup');
get_footer(); ?>




