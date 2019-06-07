<?php 
		$slug = get_post_field( 'post_name', get_post() );
		$pages=array('love','work','live');

		$category_slug='-1';
		$output='';
		if(in_array($slug, $pages)){
			$output='<h2 class="title">Blog Posts on my <span class="title--red">'.$slug.' </span> channel</h2>';
			$category_slug=$slug;
		}else{
			$output='<h2 class="title">Check out my blog</h2>';
		}
?>

<section class="blog-section section">
	<div class="container">
			<?=$output?>
	</div>
	<div class="container container--nopadding">
		<div class="blog-posts" id="blog-posts">
			
		</div>		
		<div class="container">
			<a href="#" class="link-btn link-btn-center more-posts"><span class="link-inner">More posts</span></a>
			<div id="pagination">

			</div>
		</div> 
		
	</div>
</section>

<script>
var CURRENT_STATUS = null;
var BP = 1400;
var $post_per_page;
jQuery(window).on('load resize',function(){
  vp_size = jQuery(window).width();
  if(vp_size>=BP){
    var status = 1;
    if (status != CURRENT_STATUS) {
      $post_per_page=6;
      get_posts(1,$post_per_page);
    }
    CURRENT_STATUS = status;
  }
  else{
    var status = 0;
    if (status != CURRENT_STATUS) {
      $post_per_page=3;
      get_posts(1,$post_per_page);
    }
    CURRENT_STATUS = status;
  }

  
});

function get_posts($pageID,$postsCount){
  var data = {
      action: 'getposts',
      page: $pageID,
			total:$postsCount,
			category:'<?=$category_slug ?>'
  };

  jQuery.post( my_ajax_object.ajaxurl, data, function(response) {
      // obj = response;
      obj = JSON.parse(response);
      change_page();
  });

}
function print_posts($obj){
  
  jQuery('#blog-posts').removeClass('show');
  
  setTimeout(function(){
  jQuery('#blog-posts').addClass('show');
  jQuery('#blog-posts').html($obj['posts'].map(item=>`
    <div class="post">
      <a  class="post__link" href="${item.link}">
        <div class="post-img">
            <img class="post__img" src="${item.img}" alt="" > 
            <div class="post-img__status">${item.category}</div>
        </div>
        <div class="post-content">
          <h3 class="post-content__title">${item.title}</h3>
          <div class="post-content__text">${item.content}</div>
        </div>
        <div class="post-info">
          <div class="post-info__date">${item.date}</div>
          <div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
            </svg>
            </div>
        </div>
      </a>
    </div>
  `));
  },600);



 
}
function print_pagination($obj){
  jQuery('#pagination').html('');
  var $paginationBtns = '';
  
  for(var $i=1;$i<=$obj['page'][0]['max'];$i++){
    $className='';
    if($i==$obj['page'][0]['current']){ $className='pagination__btn-active';}
    $paginationBtns+='<button id="post-page_'+$i+'"'+'class="pagination__btn '+ $className+'" data-page='+$i+'>'+$i+'</button>';
    if($i==4){
      break;
    }
  }
  
  jQuery('#pagination').append($paginationBtns);
  $buttons = jQuery('#pagination button');
}
function change_page(){
  print_posts(obj);
  print_pagination(obj);
  jQuery('#pagination button').on('click',(e)=>{
    var $btn = e.target.id;
    $pageNumber = jQuery('#'+$btn).data('page');
    get_posts($pageNumber,$post_per_page);
  });
}</script>