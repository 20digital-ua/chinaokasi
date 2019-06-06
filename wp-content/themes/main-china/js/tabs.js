$(".tab-body").hide();
    $(".tab-body:first").show();
    $(".tab-slider--nav li").click(function() {
        if($(this).hasClass('active')!=true){
            $(".tab-body").hide();
        
            var activeTab = $(this).attr("rel");
            $("#"+activeTab).fadeIn();
            if($(this).attr("rel") == "tab2"){
                $('.tab-slider--tabs').addClass('slide');
            }else{
                $('.tab-slider--tabs').removeClass('slide');
            }
            $(".tab-slider--nav li").removeClass("active");
            $(this).addClass("active");
        }
    });