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
function qna_check(){
    var n_content = document.getElementById("n_content")

    if(!n_content.value){
        alert("내용을 입력하세요.");
        n_content.focus();
        return false;
    };
};