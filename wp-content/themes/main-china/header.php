<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript">
		var templateUrl = '<?= get_bloginfo("template_url"); ?>';
	</script>
  <?php wp_head(); ?>
</head>
<body  <?php body_class($class); ?>>
<header class="header">
		<div class="container">
			<div class="header-top">
				<div class="logo-container">
					<a class="main-logo" href="<?php echo site_url(); ?>">
						<div class="main-logo__logo">
								<svg width="29" height="23" class="logosvg" style="fill: #FAFAFA;" viewBox="0 0 29 23" fill="" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.7671 8.79133C20.5281 10.284 18.8598 12.4792 16.7963 14.1475C16.3573 12.567 15.8744 10.9865 15.4354 9.36206C15.2597 8.70352 14.2939 8.3523 13.7671 8.92304C12.2305 10.767 11.2207 12.7865 10.3426 14.9816C9.02555 13.1377 7.53286 11.4255 5.60114 10.1523C4.9865 9.75719 4.06454 10.284 4.10845 10.9865C4.45967 14.5865 5.07431 18.0987 6.12797 21.567C6.12797 21.6109 6.12797 21.6109 6.17188 21.6548C5.99626 22.2695 6.5231 23.1475 7.35725 22.9719C12.0987 22.0939 16.8841 21.6548 21.7134 21.6109C21.8452 21.6109 21.9769 21.567 22.1086 21.5231C22.5476 21.4353 22.8988 21.128 22.9427 20.6012C23.0305 16.9133 23.8208 13.2694 24.2598 9.62548C24.3476 8.87913 23.3379 8.3962 22.7671 8.79133ZM9.728 17.5719C10.2109 18.3182 11.2207 18.1426 11.528 17.3524C12.2305 15.4206 12.9768 13.5767 14.0305 11.8645C14.4256 13.2694 14.8646 14.6743 15.2158 16.0792C15.3915 16.6499 16.1378 17.045 16.6646 16.6499C18.6403 15.3328 20.133 13.4889 21.8891 11.9084C21.4939 14.4987 21.0549 17.045 20.9232 19.6792C16.5329 19.7231 12.2305 20.1182 7.88408 20.8646C7.18164 18.3621 6.6109 15.8597 6.25968 13.2694C7.66457 14.5426 8.71824 16.0353 9.728 17.5719Z" fill="url(#paint0_linear)"/>
									<path d="M26.806 0.756911C26.1913 0.493494 25.5767 0.537397 25.006 0.756911C24.6548 0.669106 24.2596 0.800814 23.9962 1.19594C23.8645 1.37155 23.7767 1.59106 23.7328 1.81058C23.6011 1.98619 23.5133 2.2057 23.4255 2.42522C23.2499 2.90815 23.4255 3.25937 23.7328 3.43498C23.9084 4.09352 24.2596 4.70816 24.7426 5.10329C25.9279 5.98134 27.6401 5.45451 28.2109 4.13743C28.8694 2.82034 28.167 1.28374 26.806 0.756911ZM26.4987 3.30327C26.4109 3.56669 26.1474 3.6545 25.9279 3.47888C25.7962 3.34718 25.6645 2.95205 25.6645 2.60083C26.0596 2.42522 26.6743 2.77644 26.4987 3.30327Z" fill="url(#paint1_linear)"/>
									<path d="M12.1864 5.58653C13.3279 6.6841 15.2157 6.77191 16.2255 5.45483C17.2352 4.13774 16.4011 2.38163 14.9962 1.767C14.2937 1.45968 13.4157 1.32797 12.6693 1.54748C11.8352 1.767 11.4401 2.51334 11.2205 3.30359C11.1327 3.69872 11.2205 4.00604 11.4401 4.22555C11.5718 4.70848 11.7913 5.23531 12.1864 5.58653ZM14.6889 4.18165C14.645 4.48897 14.2498 4.48897 14.0303 4.44506C13.8547 4.40116 13.723 4.31335 13.5913 4.18165C13.5035 4.13774 13.4596 4.04994 13.4157 4.00604C13.6352 3.87433 13.7669 3.69872 13.8986 3.5231H13.9425C14.2059 3.56701 14.7767 3.78652 14.6889 4.18165Z" fill="url(#paint2_linear)"/>
									<path d="M4.02058 3.17164C2.7913 2.33749 0.37665 2.20578 0.069331 4.0936C0.0254283 4.26921 0.069331 4.40092 0.069331 4.53263C0.069331 4.57653 0.0254281 4.66434 0.0254281 4.75214C-0.10628 5.54239 0.288844 6.37655 0.85958 6.94728C1.95715 8.04485 3.93277 8.30827 5.07424 7.07899C6.25962 5.80581 5.24986 4.0058 4.02058 3.17164ZM3.62545 5.718C3.53765 5.93752 3.14252 5.93752 2.92301 5.93752C2.39618 5.80581 2.17666 5.23507 1.73764 5.23507C2.17666 5.23507 2.44008 4.97166 2.61569 4.66434C3.14252 4.88385 3.75716 5.32288 3.62545 5.718Z" fill="url(#paint3_linear)"/>
									<defs>
									<linearGradient id="paint0_linear" x1="4.11521" y1="15.805" x2="24.2435" y2="15.805" gradientUnits="userSpaceOnUse">
									<stop stop-color="#FF3E5C"/>
									<stop offset="1" stop-color="#5D5CC3"/>
									</linearGradient>
									<linearGradient id="paint1_linear" x1="23.3864" y1="3.0727" x2="28.4712" y2="3.0727" gradientUnits="userSpaceOnUse">
									<stop stop-color="#FF3E5C"/>
									<stop offset="1" stop-color="#5D5CC3"/>
									</linearGradient>
									<linearGradient id="paint2_linear" x1="11.205" y1="3.95765" x2="16.6608" y2="3.95765" gradientUnits="userSpaceOnUse">
									<stop stop-color="#FF3E5C"/>
									<stop offset="1" stop-color="#5D5CC3"/>
									</linearGradient>
									<linearGradient id="paint3_linear" x1="-0.00587455" y1="5.23415" x2="5.58703" y2="5.23415" gradientUnits="userSpaceOnUse">
									<stop stop-color="#FF3E5C"/>
									<stop offset="1" stop-color="#5D5CC3"/>
									</linearGradient>
									</defs>
									</svg>
						</div>
						<span class="main-logo__name">CHINA OKASI</span>
					</a>
				</div>
				<div class="menu-container">
					<nav class="main-menu">
						<ul class="pages-menu">
							<li><a href="<?php echo site_url('/top-motivational-speakers'); ?>">Bio</a></li>
							<li><a href="<?php echo site_url('/clips-photos')?>">TV Clips & Photos</a></li>
							<li><a href="<?php echo site_url('/news')?>">News</a></li>
							
							<!-- <li class="pages-menu__title"><span>Content</span>	
								<ul class="pages-menu__sub">
									<li><a href="<?php //echo site_url('/courses'); ?>">Courses</a></li>
									<li><a href="<?php //echo site_url('/blog'); ?>">Blog</a></li>
									<li><a href="<?php //echo site_url('/podcasts'); ?>">Podcasts</a></li>
								</ul>
							</li> -->
						</ul>
						<ul class="courses-menu">
							<li><a href="<?php echo site_url('/courses/live'); ?>">Live</a></li>
							<li><a href="<?php echo site_url('/courses/work'); ?>">Work</a></li>
							<li><a href="<?php echo site_url('/courses/love');?>">Love</a></li>
						</ul>
					</nav>
					<div class="burger-btn">
						<div class="burger-btn__lines">
							<span class="line1"></span>
							<span class="line2"></span>
							<span class="line3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>