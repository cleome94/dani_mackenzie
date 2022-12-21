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
    /* $(".p_wish").click(function(){
        $(this).attr("src","../images/shop/wish_after.png");
    }); */
    $(".customer h2").click(function(){
        $(".customer ul").slideToggle("fast");
    });
    $(".cs").click(function(){
        $(this).toggleClass("on off");
    });
    $(".cs").trigger("click");
    $(".f_info h2").click(function(){
        $(".f_info div").slideToggle("fast");
    });
    $(".comp").click(function(){
        $(this).toggleClass("on off");
    });
    $(".comp").trigger("click");
});
$(function () {
	
	let num = 0;
	$(".p_wish").click(function () {
		if(num == 0) {
			$(this).attr("src", "../images/shop/wish_after.png");
			num = 1;
		}else {
			$(this).attr("src", "../images/shop/wish_before.png");
			num = 0;
		}
	});
});