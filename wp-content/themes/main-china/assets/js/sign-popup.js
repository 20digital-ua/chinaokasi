var openPopupBtn = jQuery('#popub-btn-open');
var closePopupBtn = jQuery('#close-popup-btn');
var popUpBox=jQuery('#sign-popup');

openPopupBtn.on('click',function(){
  popUpBox.addClass('sign-popup--open');
})
closePopupBtn.on('click',function(){
  popUpBox.removeClass('sign-popup--open');
})