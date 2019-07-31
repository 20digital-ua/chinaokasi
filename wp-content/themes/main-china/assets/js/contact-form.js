jQuery(document).ready(function () {
  var $contactForm=jQuery('#main-contact-form');
  
  
  $contactForm.on('submit',function(e){
    e.preventDefault();
    var $data=$contactForm.serialize();
    console.log($data);
    jQuery('#contact-form-submit').attr('disabled','disabled');
    jQuery.ajax({
      url:templateUrl+'/assets/include/contact-mail.php',
      type:'POST',
      data:$data,
      dataType:"json",
      success:function(res){        
        jQuery('#main-contact-form').addClass('hide');
        jQuery('#response').addClass('show');
        if(res==true){
          jQuery('#res-true').addClass('show');
        }else{
          jQuery('#res-false').addClass('show');
        }
      },
      error: function(xhr, status, error) {
        jQuery('#res-false').addClass('show');
      }
    });
    $contactForm[0].reset();
    jQuery('#to-form-btn').on('click',()=>{
      jQuery('#main-contact-form').removeClass('hide');
      jQuery('#response').removeClass('show');
      jQuery('#contact-form-submit').removeAttr('disabled')
    })
  });
  
});
