var openPopupBtn = jQuery('#popub-btn-open, .popub-btn-open');
var closePopupBtn = jQuery('#close-popup-btn');
var popUpBox=jQuery('#sign-popup');
var groupeList=jQuery('.groupe-list');
var successMsg=jQuery('#success-msg');
var subForm=jQuery('#mc-embedded-subscribe-form');
var formWrapper=jQuery('#mc_embed_signup');

openPopupBtn.on('click',function(){
  popUpBox.addClass('sign-popup--open');
  var groupe=jQuery(this).data("groupe");
  groupeList.find('input[data-groupe="'+groupe+'"]').attr("checked", "checked");
  formWrapper.show();
})
closePopupBtn.on('click',function(){
  popUpBox.removeClass('sign-popup--open');
  successMsg.removeClass('show');
  groupeList.find('input').removeAttr('checked');
  subForm[0].reset();
})