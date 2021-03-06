var CURRENT_STATUS = null;
var BP = 1400;
var $post_per_page;
jQuery(window).on('load',function(){
  get_podcasts(1);
  
});

function get_podcasts($pageID){
  var data = {
      action: 'getpodcasts',
      page: $pageID
			// total:$postsCount
			// category:'<?=$category_slug ?>'
  };

  jQuery.post( my_ajax_object.ajaxurl, data, function(response) {
      // obj = response;
      obj = JSON.parse(response);
      change_page();

  });

}
function print_podcasts($obj){
  
  jQuery('#podcasts-wrapper').removeClass('show');
  var i = 1;
  setTimeout(function(){
  jQuery('#podcasts-wrapper').addClass('show');
  jQuery('#podcasts-wrapper').html($obj['podcasts'].map(item=>`
  <div class="podcast-single">
    <div class="padcast-id">ID=${i++}</div>
    <div class="podcast-introduce ${item.img.addClass}">
      ${item.img.link}
    </div>
    <div class="container container--podcast-player">
      <div class="podcast-player">
        <div class="podcast-info">
            <p class="podcast-player__title">${item.titleText}</p>
        </div>
        <div class="podcast-controls">
          <button  id="podcast-${i}" class="podcast-playBtn"></button>
          <div class="progress-bar" id="podcast-${i}__bar">
            <div class="progress-bar__fill" id="podcast-${i}__audio__bar-fill">
              <div class="progress-bar__pin">	</div>
            </div>
          </div>
        </div>
        <audio id="podcast-${i}__audio" ontimeupdate="updateProgress(this)" class="podcast-player-tag" src="${item.media}"></audio>
        
      </div>
    </div>
  </div>



  `));
  },600);



 
}
function print_pagination($obj){
  jQuery('#pagination').html('');
  var $paginationBtns = '';
  if($obj['page'][0]['max']!=1){
    for(var $i=1;$i<=$obj['page'][0]['max'];$i++){
      $className='';
      if($i==$obj['page'][0]['current']){ $className='pagination__btn-active';}
      $paginationBtns+='<button id="post-page_'+$i+'"'+'class="pagination__btn '+ $className+'" data-page='+$i+'>'+$i+'</button>';
    }
    
    jQuery('#pagination').append($paginationBtns);
    $buttons = jQuery('#pagination button');
  }
}
function change_page(){
  print_podcasts(obj);
  print_pagination(obj);
  
  jQuery('#pagination button').on('click',(e)=>{
    var $btn = e.target.id;
    $pageNumber = jQuery('#'+$btn).data('page');
    get_podcasts($pageNumber);
    jQuery('html,body').animate({
      scrollTop: jQuery(".title").offset().top-40},
      'slow');
  });
}
