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
    $(".quest").click(function(){
        $(".qna_more").not($(this).next()).slideUp();
        $(this).next().slideToggle("fast");
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
    $('.topbtn').click(function(){
        $('html,body').stop().animate({"scrollTop":0},1400);
      });  
    
     $('.topbtn').css('display','none');  
    $(window).on("scroll",function(){ 
        var ht = $(window).height();
        var scroll = $(window).scrollTop();

        if(scroll>=1000){
            $('.topbtn').fadeIn('slow');
        }else{
            $('.topbtn').fadeOut('slow');
        }
      }); 
});
$(function () {
	
	let num = 0;
	$(".gnb1_more, .gnb1").click(function () {
		if(num == 0) {
			$(".gnb1_more").attr("src", "images/shop_hide.png");
			num = 1;
		}else {
			$(".gnb1_more").attr("src", "images/shop_more.png");
			num = 0;
		}
	});
});
$(function () {
	
	let num = 0;
	$(".f_m3").click(function () {
		if(num == 0) {
			$(this).attr("src", "images/dp/wish_after.png");
			num = 1;
		}else {
			$(this).attr("src", "images/dp/wish_before.png");
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
function remove_qna(g_no){
    var ck = confirm("정말 삭제하시겠습니까?");
    if(ck){
        location.href="qna/delete.php?n_idx="+g_no;
    };
};