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
    $("#sch_txt").click(function(){
        $(".search_box1 button").show();
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
    $(".customer1 h2").click(function(){
        $(".customer1 ul").slideToggle("fast");
    });
    $(".cs1").click(function(){
        $(this).toggleClass("on off");
    });
    $(".cs1").trigger("click");
    $(".f_info_1 h2").click(function(){
        $(".f_info_1 div").slideToggle("fast");
    });
    $(".comp1").click(function(){
        $(this).toggleClass("on off");
    });
    $(".comp1").trigger("click");
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
function logout(){
    var ck = confirm("로그아웃 하시겠습니까?");
    if(ck){
      location.href="login/logout.php";
    };
  };