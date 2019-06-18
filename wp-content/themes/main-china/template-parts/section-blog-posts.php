<?php 
		$slug = get_post_field( 'post_name', get_post() );
    $pages=array('love','work','live');

		$category_slug='-1';
    $output='';
    $args=array();
		if(in_array($slug, $pages)){
      $output='<h2 class="title">Blog Posts on my <span class="title--red">'.$slug.' </span> channel</h2>';
      $category_slug=$slug;
      $args=array(
        'posts_per_page' =>6,
        'post_type'=>'post',
        'category_name'=> $category_slug
      );
			
		}else{
      $output='<h2 class="title">Check out my blog</h2>';
      $args=array(
        'posts_per_page' =>6,
        'post_type'=>'post'
      );
    }
    $blogPosts = new WP_Query($args);
?>

<section class="blog-section section">
	<div class="container">
			<?=$output?>
	</div>
	<div class="container container--nopadding">
		<div class="blog-posts show" id="blog-posts">
			<?php while($blogPosts->have_posts()){
            $blogPosts->the_post();
            $category = get_the_category();
            
            if(get_the_post_thumbnail_url()!=''){
              $imgPlaceHolder=get_the_post_thumbnail_url();
            }else{
              $imgPlaceHolder='https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg';
            }
            
            ?>
      <div class="post">
        <a  class="post__link" href="<?=the_permalink();?>">
          <div class="post-img">
              <img class="post__img" src="<?=$imgPlaceHolder;?>" alt="" > 
              <div class="post-img__status"><?=$category[0]->name?></div>
          </div>
          <div class="post-content">
            <h3 class="post-content__title"><?=the_title();?></h3>
            <div class="post-content__text"><?=wp_trim_words(get_the_content(),15);?></div>
          </div>
          <div class="post-info">
            <div class="post-info__date"><?=get_the_date();?></div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>		
		<div class="container">
			<a href="<?php echo get_permalink(get_option('page_for_posts'));?>" class="link-btn link-btn-center more-posts"><span class="link-inner">More posts</span></a>
		</div> 
		
	</div>
</section>

<script>
</script>