
<?php get_header(); ?>
<main>
<?php 
		$slug = get_post_field( 'post_name', get_post() );
		$pages=array('love','work','live');

		$category_slug='-1';
?>

		<section class="blog-section section" data-category="<?=$_GET['category']?>">
			<div class="container">
				
				<h2 class="title">Check out my blog</h2>
				<div class="filter-category">
					<?php
						foreach($pages as $item){
							$activeCatClass='';
							if($item==$_GET['category']){
								$activeCatClass = 'filter-category__btn-active';
							}
							echo '<button data-categoryName="'.$item.'" class="filter-category__btn '.$activeCatClass.'">'.$item.'</button>';
						}
					?>
				</div>
			</div>
			<div class="container container--nopadding">
				<div class="blog-posts" id="blog-posts">
					
				</div>		
				<div class="container">
					<div id="pagination">

					</div>
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

<?php get_footer(); ?>
