
<?php
    $pageData=getPageData(get_the_ID());
?>
<section class="blog-section section" data-category="<?=$pageData['slug']?>">
  <div class="container">
    <h2 class="title"><?=$pageData['blog-title']?></h2>
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