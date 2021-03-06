<?php
$inTouch = get_field('get-in-touch-section', get_option( 'page_on_front' ));
$pageData=getPageData(get_the_ID());


if($pageData['cf-title']!='')
	$inTouch['form_text']=$pageData['cf-title'];

?>

<section class="in-touch-section section">
	<div class="container">
		<h2 class="title"><?=$inTouch['title']?></h2>	
		<div class="with-me">
			<p class="with-me__gradient"><?=$inTouch['gradient_text']?></p>
			<p class="with-me__simple">WITH ME</p>
		</div>
		<div class="text text-center">
			<?=strip_tags($inTouch['form_text'])?>
		</div>
		<div id="form-response-block">
			<form action="" id="main-contact-form" class="primary-form" validate>
				<div class="row-single">
					<div class="form-row form-row-input">
						<label for="input-name" class="primary-form__label">Name</label> <br>
						<input type="text" id="input-name" class="primary-form__input" name="name" placeholder="Your Name" required>
					</div>
					<div class="form-row form-row-input">
						<label for="input-email" class="primary-form__label">Email</label> <br>
						<input type="email" id="input-email" class="primary-form__input" name="email" placeholder="Your Email" required>
					</div>
				</div>
				<div class="form-row">
					<label for="input-phone" class="primary-form__label">Phone</label> <br>
					<input type="tel" id="input-phone" class="primary-form__input" name="phone" placeholder="Your Phone" required>
				</div>
				<div class="form-row">
					<label for="input-message" class="primary-form__label">Message</label> <br>
					<textarea  id="input-message" class="primary-form__input primary-form__textarea" name="message" placeholder="Your Message" required></textarea>
				</div>
				<button id="contact-form-submit" class="primary-form__submit submit-btn">Send</button>
			</form>
			<div id="response">
				<div id="res-true" class="response-res">Thank You!!!</div>
				<div id="res-false" class="response-res">Something go wrong. Please try again.</div>	
				<button id="to-form-btn">Back To Form</button>
			</div>
		</div>
		
	</div>
	
</section>
