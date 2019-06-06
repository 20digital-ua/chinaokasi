<?php 
$blogPosts = new WP_Query(array(
  'posts_per_page' =>-1,
  'post_type'=>'post'
));

while($blogPosts->have_posts()){
  $blogPosts->the_post();

}

?>

<section class="blog-section section">
			<div class="container">
					<h2 class="title">Check out my blog</h2>
			</div>
			<div class="container container--nopadding">
				<div class="blog-posts">
          <?php 
          while($blogPosts->have_posts()){
            $blogPosts->the_post();
            $category = get_the_category();
          ?>
          
					<div class="post">
						<a  class="post__link" href="<?php the_permalink(); ?>">
              <div class="post-img">
									<!-- <img class="post__img" src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_post_1.jpg" alt="" > -->
									<?php the_post_thumbnail( 'full',['class' => 'post__img']); ?>
                  <div class="post-img__status"><?=$category[0]->name;?></div>
              </div>
              <div class="post-content">
                <h3 class="post-content__title"><?php the_title(); ?></h3>
                <div class="post-content__text"><?php echo wp_trim_words(get_the_content(),15); ?></div>
              </div>
              <div class="post-info">
                <div class="post-info__date"><?php the_date() ?> </div>
                <div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
                  </svg>
                  </div>
              </div>
            </a>
          </div>
        <?php } ?>
					
				</div>
				<!-- <div class="blog-posts blog-posts-row2">
					<div class="post">
						<div class="post-img">
								<img class="post__img" src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_post_2.jpg" alt="" >
								<div class="post-img__status">LIVE</div>
						</div>
						<div class="post-content">
							<h3 class="post-content__title">Lorem ipsum</h3>
							<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit. lorem</div>
						</div>
						<div class="post-info">
							<div class="post-info__date">25 March 2019</div>
							<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
								</svg>
								</div>
						</div>
					</div>
					<div class="post">
						<div class="post-img">
								<img class="post__img" src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_post_3.jpg" alt="" >
								<div class="post-img__status">Work</div>
						</div>
						<div class="post-content">
							<h3 class="post-content__title">Lorem ipsum</h3>
							<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
						<div class="post-info">
							<div class="post-info__date">25 March 2019</div>
							<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
								</svg>
								</div>
						</div>
					</div>
					<div class="post">
						<div class="post-img">
								<img class="post__img" src="<?php echo get_template_directory_uri(); ?>/img/blog/blog_post_1.jpg" alt="" >
								<div class="post-img__status">LOVE</div>
						</div>
						<div class="post-content">
							<h3 class="post-content__title">Lorem ipsum</h3>
							<div class="post-content__text">lorem Proin ultrices massa id erat varius vel ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
						<div class="post-info">
							<div class="post-info__date">25 March 2019</div>
							<div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
								</svg>
								</div>
						</div>
					</div>
					
				</div> -->
				<div class="container">
					<a href="#" class="link-btn link-btn-center"><span class="link-inner">More posts</span></a>
				</div>
				
			</div>
		</section>