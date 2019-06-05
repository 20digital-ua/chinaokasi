jQuery(document).ready(function(){
    jQuery('.burger-btn').on('click',function(){
        jQuery('.header-top').toggleClass('open');
        jQuery('body').toggleClass('no-scroll');

    })
    jQuery(window).on('resize',function(){
        if(jQuery(window).width()>1024){
            jQuery('.header-top').removeClass('open');
            jQuery('body').removeClass('no-scroll');
        }
        

    })
});
