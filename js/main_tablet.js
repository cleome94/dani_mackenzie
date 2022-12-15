$(function(){
    $(".gnb_btn").click(function(){
        $(".gnb_wrap").animate({width:"toggle"}, 200);
    });
    $(".f_m1").click(function(){
        $(".gnb_wrap").animate({width:"toggle"}, 200);
    });
    $(".gnb_exit").click(function(){
        $(".gnb_wrap").animate({width:"toggle"}, 200);
    });
    $(".search").click(function(){
        $(".search_box2").slideToggle();
    });
    $(".sch_exit").click(function(){
        $(".search_box2").slideUp();
    });
    $('.event ul').bxSlider({
        auto:true
    });
    $(".customer h2").click(function(){
        $(".customer ul").slideToggle("fast");
    });
    $(".cs").click(function(){
        $(this).toggleClass("on off");
    });
});