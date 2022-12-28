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
    $(".gnb1_more, .gnb1").click(function(){
        $("#shop_cate").slideToggle("fast");
    });
    $(".search").click(function(){
        $(".search_box2").slideToggle();
    });
    $(".sch_exit").click(function(){
        $(".search_box2").slideUp();
    });
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
	$(".gnb1_more, .gnb1").click(function () {
		if(num == 0) {
			$(".gnb1_more").attr("src", "images/shop_more.png");
			num = 1;
		}else {
			$(".gnb1_more").attr("src", "images/shop_hide.png");
			num = 0;
		}
	});
});
$(function () {
	
	let num = 0;
	$(".p_wish").click(function () {
		if(num == 0) {
			$(this).attr("src", "images/shop/wish_after.png");
			num = 1;
		}else {
			$(this).attr("src", "images/shop/wish_before.png");
			num = 0;
		}
	});
});
function logout(){
    var ck = confirm("로그아웃 하시겠습니까?");
    if(ck){
      location.href="login/logout.php";
    };
  };