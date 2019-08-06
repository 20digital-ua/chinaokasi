var openVideoPopup = jQuery('.video-clip');
var closeVideoPopup = jQuery('.video-popup-overlay');
var VideoPopup = jQuery('.video-popup');
var Video = videojs('my-video');

// Video.src(openVideoPopup.data('video'))
openVideoPopup.on('click',function(){

  VideoPopup.addClass('video-popup--open');
  Video.src(jQuery(this).data('video'))
  Video.poster(jQuery(this).data('poster'))
  
})
VideoPopup.on('click',function(e){
  if(jQuery(e.target).hasClass('video-popup--open')){
    VideoPopup.removeClass('video-popup--open');
    if(!Video.paused())
      Video.pause()
  }
})
