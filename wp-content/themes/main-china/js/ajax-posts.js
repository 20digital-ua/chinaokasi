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
			total:$postsCount
			// category:'<?=$category_slug ?>'
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
    jQuery('html,body').animate({
      scrollTop: jQuery(".title").offset().top},
      'slow');
  });
}
