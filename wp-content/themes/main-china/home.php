
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
		<?php  get_template_part('template-parts/contact-form'); ?>
	</main>

<?php get_footer(); ?>
