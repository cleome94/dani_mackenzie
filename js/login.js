function log_form_check(){
    var u_id = document.getElementById("u_id")
    var pwd = document.getElementById("pwd")

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
};
