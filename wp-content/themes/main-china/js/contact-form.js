jQuery(document).ready(function () {
  var $contactForm=jQuery('#main-contact-form');
  
  
  $contactForm.on('submit',function(e){
    e.preventDefault();
    var $data=$contactForm.serialize();
    console.log($data);
    jQuery('#contact-form-submit').attr('disabled','disabled');
    jQuery.ajax({
      url:templateUrl+'/include/contact-mail.php',
      type:'POST',
      data:$data,
      dataType:"json",
      success:function(res){
        console.log(res);
      },
      error: function(xhr, status, error) {
      }
    });
  });
  
});
