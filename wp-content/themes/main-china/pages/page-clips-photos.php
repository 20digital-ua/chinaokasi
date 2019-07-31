<?php /* 
	Template Name: TVClips & Photos Page
	Template Post Type: page */ 
?>
<?php get_header(); ?>
<main>
	<section class="tv-head-main">
		<div class="container clear-padding">
			<div class="title-subscribe">
				<div class="title-subscribe__name">
					<span>TV Clips & Photos</span>
				</div>
				<div class="subscribe-block">
					<div class="greeting">
						<p class="greeting__text">Hey, it’s <span class="greeting__text-md">China</span>, Ivy League prodigy & a part of the sisterhood of inspirational women in media! <br>
						<span class="greeting__text-md">Sign up to get my 2-min. motivational audio delivered to you daily for FREE.</span></p>
					</div>
					<!-- <form action="" class="primary-form primary-form--tv">
						<div class="form-row">
							<label for="name-input" class="label">Name</label>
							<input id="name-input" class="primary-form__input input" type="text" placeholder="Your Name">
						</div>
						<div class="form-row">
							<label for="email-input" class="label">Email</label>
							<input id="email-input" class="primary-form__input input primary-form__input-last" type="text"
								placeholder="Your Email">
						</div>
						<button class="primary-form__submit submit-btn submit-btn-transparent">Join my movement</button>
					</form> -->
					<div id="mc_embed_signup">
						<form action="https://gmail.us20.list-manage.com/subscribe/post?u=ef335dd7b9dff42381a557625&amp;id=eb6dd1fe6d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate primary-form primary-form--tv" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
								<div class="form-row form-row-two-col">
									<div class="mc-field-group col-1">
										<label for="mce-FNAME" class="primary-form__label">Name</label>
										<input type="text" value="" placeholder="Your Name" name="FNAME" class="required input primary-form__input" id="mce-FNAME">
									</div>
									<div class="mc-field-group col-2">
										<label for="mce-EMAIL" class="primary-form__label">Email</label>
										<input type="email" value="" placeholder="Your Email" name="EMAIL" class="required email input primary-form__input primary-form__input-last" id="mce-EMAIL">
									</div>
									<input type="submit" value="Join my movement" name="subscribe" id="mc-embedded-subscribe" class="button primary-form__submit submit-btn submit-btn-transparent">
								</div>
								
								
								<div class="mc-field-group input-group" style="display:none;">
									<strong>Subs </strong>
									<ul>
										<li><input type="radio" value="16" name="group[3467]" id="mce-group[3467]-3467-0" checked><label for="mce-group[3467]-3467-0">All</label></li>
										<li><input type="radio" value="1" name="group[3467]" id="mce-group[3467]-3467-1" ><label for="mce-group[3467]-3467-1">Live</label></li>
										<li><input type="radio" value="2" name="group[3467]" id="mce-group[3467]-3467-2"><label for="mce-group[3467]-3467-2">Work</label></li>
										<li><input type="radio" value="4" name="group[3467]" id="mce-group[3467]-3467-3"><label for="mce-group[3467]-3467-3">Love</label></li>
										<li><input type="radio" value="8" name="group[3467]" id="mce-group[3467]-3467-4"><label for="mce-group[3467]-3467-4">Podcast</label></li>
										</ul>
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>  
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ef335dd7b9dff42381a557625_eb6dd1fe6d" tabindex="-1" value=""></div>
								<div class="clear"></div>
							</div>
						</form>
					</div>
					<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/source/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				</div>
			</div>
		</div>
	</section>
	<section class="clips-photos">
		<div class="container--nopadding">
			<div class="tabs">
				<div class="tab-slider--nav">
					<ul class="tab-slider--tabs">
						<li class="tab-slider--trigger active" rel="tab1">TV CLIPS</li>
						<li class="tab-slider--trigger" rel="tab2">PHOTOS</li>
					</ul>
				</div>
				<div class="tab-slider--container">
					<div id="tab1" class="tab1 tab-body">
						<div class="container">
							<div class="tab__title">TV Clips</div>
							<div class="tab__text">
							Being part of the sisterhood of inspirational women in media means speaking truth to life & planting seeds of grace, enlightenment, and awareness--whether via motivational audio, radio, television or web. In television, I graced every major cable network in the U.S. (and U.K.) - CNN/HLN, MSNBC, FOX News, FOX Business, Current, BBC, Sky News, Newsy...the list goes on!
							</div>
						</div>

						<!--  -->
						<div class="container-inner">
							<div class="tv-clips">
								<div class="clip">
									<div class="clip-img">
										<img class="clip__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/clips/China Okasi (MSNBC).png" alt="">
									</div>
									<div class="clip-content">
										<h3 class="clip-content__title">Lorem ipsum</h3>
										<div class="clip-content__text">Proin ultrices massa id erat varius vel ipsum dolor sit amet,
											consectetur adipiscing elit.</div>
									</div>
									<div class="clip-info">
										<div class="clip-info__channel">MSNBC</div>
									</div>
								</div>
								<div class="clip">
									<div class="clip-img">
										<img class="clip__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/clips/China Okasi, Current TV.png" alt="">
									</div>
									<div class="clip-content">
										<h3 class="clip-content__title">Lorem ipsum</h3>
										<div class="clip-content__text">Proin ultrices massa id erat varius vel ipsum dolor sit amet,
											consectetur adipiscing elit.</div>
									</div>
									<div class="clip-info">
										<div class="clip-info__channel">CURRENT</div>
									</div>
								</div>
								<div class="clip">
									<div class="clip-img">
										<img class="clip__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/clips/china-okasi-joy-behar.png" alt="">
									</div>
									<div class="clip-content">
										<h3 class="clip-content__title">Lorem ipsum</h3>
										<div class="clip-content__text">Proin ultrices massa id erat varius vel ipsum dolor sit amet,
											consectetur adipiscing elit.</div>
									</div>
									<div class="clip-info">
										<div class="clip-info__channel">Channel Name</div>
									</div>
								</div>
								<div class="clip">
									<div class="clip-img">
										<img class="clip__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/clips/china-okasi-megyn-kelly.png" alt="">
									</div>
									<div class="clip-content">
										<h3 class="clip-content__title">Lorem ipsum</h3>
										<div class="clip-content__text">Proin ultrices massa id erat varius vel ipsum dolor sit amet,
											consectetur adipiscing elit.</div>
									</div>
									<div class="clip-info">
										<div class="clip-info__channel">HLN</div>
									</div>
								</div>
							</div>
							<!--  -->
						</div>
						<div class="container">
							<div class="channel-logos">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/China on MSNBC_.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/china-okasi-pix11.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/cnn-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/current-tv-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/fox-business-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/fox-news-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/hln-logo.png" alt="">
								<img class="channel-logos__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/logos/the-cw-network-logo.png" alt="">
							</div>
						</div>
					</div>
					<div id="tab2" class="tab2 tab-body">
						<div class="container">
							<div class="tab__title">Photos</div>
							<div class="tab__text">
								"Upon meeting me, you take a journey. If you are kind and fair, the journey will be sweet and
								smooth."<br>
								China Okasi
							</div>
						</div>
						<div class="container-inner">
							<div class="photos-grid">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, In Gold.png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Model (1).png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi (1).png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Bio Red.png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Stance.png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, Model.png" alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi, In White - Formal.png"
									alt="">
								<img class="photos-grid__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/tv-photos/photos/China Okasi.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php  get_template_part('template-parts/contact-form'); ?>
</main>

<?php get_footer(); ?>