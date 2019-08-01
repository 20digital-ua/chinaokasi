var openPopupBtn = jQuery('#popub-btn-open, .popub-btn-open');
var closePopupBtn = jQuery('#close-popup-btn');
var popUpBox=jQuery('#sign-popup');
var groupeList=jQuery('.groupe-list');

openPopupBtn.on('click',function(){
  popUpBox.addClass('sign-popup--open');
  var groupe=jQuery(this).data("groupe");
  groupeList.find('input[data-groupe="'+groupe+'"]').attr("checked", "checked");
})
closePopupBtn.on('click',function(){
  popUpBox.removeClass('sign-popup--open');
  groupeList.find('input').removeAttr('checked')
})