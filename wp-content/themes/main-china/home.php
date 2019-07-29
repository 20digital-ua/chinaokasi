
<?php get_header(); ?>
<main>
		<section class="blog-section section" data-category="news,china&friends">
			<div class="container">
				
				<h2 class="title">Check out my news</h2>
				<!-- <div class="filter-category">
					<?php
						// foreach($pages as $item){
						// 	$activeCatClass='';
						// 	if($item==$_GET['category']){
						// 		$activeCatClass = 'filter-category__btn-active';
						// 	}
						// 	echo '<button data-categoryName="'.$item.'" class="filter-category__btn '.$activeCatClass.'">'.$item.'</button>';
						// }
					?>
				</div> -->
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
