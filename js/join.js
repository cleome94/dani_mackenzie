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
    $("#next1").click(function(){
        if($("#apply_1").is(":checked") == false){
            alert("약관에 동의해 주세요.");
            return;
        }else if($("#apply_2").is(":checked") == false){
            alert("약관에 동의해 주세요.");
            return;
        }else{
            $(".join1").hide();
            $(".join2").show();
        }
    });
    $('#back2').hide();
    $("#next1").click(function(){
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
    var u_id = document.getElementById("u_id")
    var pwd = document.getElementById("pwd")
    var repwd = document.getElementById("repwd")
    var u_name = document.getElementById("u_name")
    var birth = document.getElementById("birth")
    var phone = document.getElementById("phone")

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
    var regExp =  /^[A-za-z0-9~!@#$%^&*()_+]{6,12}/g;
    if(!regExp.test(pwd.value)){
        var txt = document.getElementById("err_pwd");
        txt.textContent="6~12자의 영어 대소문자와 숫자,특수문자로 입력해 주세요.";
        pwd.focus();
        return false;
    };
    if(pwd.value != repwd.value){
        var txt = document.getElementById("err_repwd");
        txt.textContent="비밀번호를 확인해 주세요.";
        repwd.focus();
        return false;
    };
    if(!u_name.value){
        var txt = document.getElementById("err_name");
        txt.textContent="이름을 입력하세요.";
        u_name.focus();
        return false;
    };
    var regExp = /^[가-힣a-zA-Z]*$/g;
    if(!regExp.test(u_name.value)){
        var txt = document.getElementById("err_name");
        txt.textContent="이름을 정확히 입력해주세요.";
        u_name.focus();
        return false;
    };
    if(!birth.value){
        var txt = document.getElementById("err_birth");
        txt.textContent="생년월일을 입력하세요.";
        birth.focus();
        return false;
    };
    var regExp = /^(19[0-9][0-9]|20\d{2})(0[0-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/
    if(!regExp.test(birth.value)){
        var txt = document.getElementById("err_birth");
        txt.textContent="생년월일을 형식에 맞게 입력해주세요. ex)20220101";
        birth.focus();
        return false;
    };
    if(!phone.value){
        var txt = document.getElementById("err_phone");
        txt.textContent="휴대폰번호를 입력하세요.";
        return false;
    };
    var regExp = /^[0-9]{9,11}/g;
    if(!regExp.test(phone.value)){
        var txt = document.getElementById("err_phone");
        txt.textContent="휴대폰 번호를 모두 입력하세요.";
        phone.focus();
        return false;
    };
};
function getCont( g_id ){
    var dsp  = document.getElementById('dsp');

    // 글자수 체크 안할꺼면 if else문 생략하고 변수부터 작성하면 됨
    if(g_id.length < 4 || g_id.length > 12){
        dsp.innerHTML = '4~12자의 영문 대소문자와 숫자로 입력해 주세요.';
        dsp.className = 'redText';
    } else{
        var xmlhttp = fncGetXMLHttpRequest();

        // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
        xmlhttp.open('GET', 'id_check_ajax_php?u_id='+g_id, false);

        xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

        xmlhttp.onreadystatechange = function (){
            if( xmlhttp.readyState=='4' && xmlhttp.status==200 ){
                if( xmlhttp.status==500 || xmlhttp.status==404 || xmlhttp.status==403 )
                    alert( xmlhttp.status );
                else{
                     var txt = xmlhttp.responseText;    // 처리페이지에서 넘겨받은 값
                     txt = txt.replace(/\n/g, ""); // 행바꿈 제거
                     txt = txt.replace(/\r/g, ""); // 엔터값 제거
                     txt = txt.replace(/\s+/, ""); // 왼쪽 공백 제거
                     txt = txt.replace(/\s+$/g, ""); // 오른쪽 공백 제거
                     alert("페이지에 입력된 값 : " + g_id + "\r처리 페이지에서 반환된 값 : " + txt);
                    if(txt=='Y') {
                        dsp.innerHTML = '이미 가입된 아이디입니다.';
                        dsp.className = 'redText';
                    } else{
                        dsp.innerHTML = '사용할 수 있는 아이디입니다.';
                        dsp.className = 'blueText';
                    }
                }
            }
        }
    }
    xmlhttp.send();
}

// 브라우저 호환성 체크   수정할 거 없음

function fncGetXMLHttpRequest(){
    if (window.ActiveXObject){
        try{
            return new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e){
            try{
                return new ActiveXObject("Microsoft.XMLHTTP");
            } 
        catch(e1) { return null; }
        }
        //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
    } else if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    } else{
        return null;
    }
}
/* function id_search(){
    window.open("id_search.php", "idsch", "width=400, height=200");
}; */