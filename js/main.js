jQuery(document).ready(function(){
    jQuery('.burger-btn').on('click',function(){
        jQuery('.header-top').toggleClass('open');
        jQuery('body').toggleClass('no-scroll');

    })
});
