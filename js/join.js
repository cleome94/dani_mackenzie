$(function(){
    $(".join1").on("click", "#all_apply", function(){
        var checked = $(this).is(":checked");
        if(checked){
            $(this).parents(".join1").find('input').prop("checked", true);
        } else {
            $(this).parents(".join1").find('input').prop("checked", false);
        }
    });
    $(".join1").on("click", ".apply", function(){
        var checked = $(this).is("checked");
        if(!checked){
            $("#all_apply").prop("checked", false);
        }
    });
    /* $(".next").click(function(){
        if($(".apply_1").is(":checked") == false){
            var txt = document.getElementById("err_apply");
            txt.textContent="약관 동의를 해주세요.";
            apply_1.focus();
            return false;
        }else if($(".apply_2").is(":checked") == false){
            var txt = document.getElementById("err_apply");
            txt.textContent="약관 동의를 해주세요.";
            apply_2.focus();
            return false;
        }else{
            $(".join_form").submit();
        }
    }); */
    $('#back2').hide();
    $("#next1").click(function(){
        $(".join1").hide();
        $(".join2").show();
        $("#back1").hide();
        $("#back2").show();
    });
    $("#back2").click(function(){
        $(".join1").show();
        $(".join2").hide();
        $("#back1").show();
        $("#back2").hide();
    })
});
function join_form_check(){
    var apply_1 = document.getElementById("apply_1")
    var apply_2 = document.getElementById("apply_2")
    var u_id = document.getElementById("u_id")
    var pwd = document.getElementById("pwd")
    var u_name = document.getElementById("u_name")
    var email = document.getElementById("email")
    var phone = document.getElementById("phone")

    if(!apply_1.checked){
        var txt = document.getElementById("err_apply");
        txt.textContent="약관 동의를 해주세요.";
        apply_1.focus();
        return false;
    };
    if(!apply_2.checked){
        var txt = document.getElementById("err_apply");
        txt.textContent="약관 동의를 해주세요.";
        apply_2.focus();
        return false;
    };
    if(!u_id.value){
        var txt = document.getElementById("err_id");
        txt.textContent="아이디를 입력하세요.";
        u_id.focus();
        return false;
    };
    if(!pwd.value){
        var txt = document.getElementById("err_pwd");
        txt.textContent="비밀번호를 입력하세요.";
        pwd.focus();
        return false;
    };
    if(pwd.value != repwd.value){
        var txt = document.getElementById("err_repwd");
        txt.textContent="비밀번호를 확인하세요.";
        repwd.focus();
        return false;
    };
    if(!u_name.value){
        var txt = document.getElementById("err_name");
        txt.textContent="이름을 입력하세요.";
        u_name.focus();
        return false;
    };
    if(!email.value){
        var txt = document.getElementById("err_email");
        txt.textContent="이메일 주소를 입력하세요.";
        e_mail.focus();
        return false;
    };
    if(!phone.value){
        var txt = document.getElementById("err_phone");
        txt.textContent="휴대폰번호를 입력하세요.";
        phone.focus();
        return false;
    };
};