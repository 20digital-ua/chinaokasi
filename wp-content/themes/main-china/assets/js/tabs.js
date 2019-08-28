jQuery(".tab-body").hide();
    jQuery(".tab-body:first").show();
    jQuery(".tab-slider--nav li").click(function() {
        if(jQuery(this).hasClass('active')!=true){
            jQuery(".tab-body").hide();
        
            var activeTab = jQuery(this).attr("rel");
            jQuery("#"+activeTab).fadeIn();
            if(jQuery(this).attr("rel") == "tab2"){
                jQuery('.tab-slider--tabs').addClass('slide');
            }else{
                jQuery('.tab-slider--tabs').removeClass('slide');
            }
            jQuery(".tab-slider--nav li").removeClass("active");
            jQuery(this).addClass("active");
        }
    });