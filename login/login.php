<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from members";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대니멕켄지 로그인</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/login.js"></script>
</head>
<body>
    <header id="header" class="header">
        <h1 class="logo"><a href="#">대니멕켄지</a></h1>
        <a href="#" class="back" onclick="history.back();">뒤로가기</a>
    </header>
    <main id="content" class="content">
        <div class="login">
            <h2>로그인</h2>
            <form class="log_form" action="login_ok.php" method="post" onsubmit="return log_form_check()">
                <fieldset>
                    <legend class="hide">로그인 정보</legend>
                    <p>
                        <label for="u_id">아이디</label>
                        <input type="text" name="u_id" id="u_id" placeholder="아이디를 입력하세요.">
                        <span id="err_id" class="err_txt"></span>
                    </p>
                    <p>
                        <label for="pwd">비밀번호</label>
                        <input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요.">
                        <span id="err_pwd" class="err_txt"></span>
                    </p>
                    <p>
                        <button type="button" name="find" id="find">아이디 / 비밀번호 찾기</button>
                    </p>
                    <p>
                        <button type="submit" name="log" id="log">로그인</button>
                    </p>
                    <div class="line"></div>
                    <ul class="social_log">
                        <li><a href="#" id="n_log" class="n_log">네이버 로그인</a></li>
                        <li><a href="#" id="k_log" class="k_log">카카오톡 로그인</a></li>
                        <li><a href="#" id="a_log" class="a_log">애플 로그인</a></li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>