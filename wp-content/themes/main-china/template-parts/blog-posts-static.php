<?php 
    $args=array(
      'posts_per_page' =>6,
      'post_type'=>'post'
      // 'category__not_in' => array('1'),
    );
    $blogPosts = new WP_Query($args);
    $sectionTitle="Check out my blog";
    if(is_single()) $sectionTitle="Latest Stories On My Blog";

?>


<section class="blog-section blog-section-static section">
	<div class="container">
    <h2 class="title"><?=$sectionTitle?></h2>
	</div>
	<div class="container container--nopadding">
		<div class="blog-posts show" id="blog-posts-static">
			<?php while($blogPosts->have_posts()){
            $blogPosts->the_post();
            $category = get_the_category();
            
            if(get_the_post_thumbnail_url()!=''){
              $imgPlaceHolder=get_the_post_thumbnail_url();
              $thumbnail_id = get_post_thumbnail_id( $post->ID );
              $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            }else{
              $imgPlaceHolder='https://cdn-ds.com/noimage/w_640/h_480/noimage.jpg';
              $alt = "no image";
            }
            ?>
            <div class="post">
              <a  class="post__link" href="<?=the_permalink();?>">
                <div class="post-img">
                    <img class="post__img" src="<?=$imgPlaceHolder;?>" alt="<?=$alt?>" > 
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
		<div class="container container-content-center">
			<a href="<?php echo get_permalink(get_option('page_for_posts'));?>" class="link-btn link-btn-center more-posts"><span class="link-inner">More posts</span></a>
		</div> 
		
	</div>
</section>



