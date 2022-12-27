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
    $(".d_info1").click(function(){
        $(".d_1").show();
        $(".d_2").hide();
        $(".d_3").hide();
    });
    $(".d_info2").click(function(){
        $(".d_1").hide();
        $(".d_2").show();
        $(".d_3").hide();
    });
    $(".d_info3").click(function(){
        $(".d_1").hide();
        $(".d_2").hide();
        $(".d_3").show();
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
function logout(){
    var ck = confirm("로그아웃 하시겠습니까?");
    if(ck){
      location.href="login/logout.php";
    };
  };