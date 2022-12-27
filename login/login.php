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
        <h1 class="logo"><a href="../index.php">대니멕켄지</a></h1>
        <a href="#" class="back" onclick="history.back();">뒤로가기</a>
        <div class="gnb_wrap">
            <nav class="gnb">
                    <h2 class="hide">주요메뉴</h2>
                    <ul class="menu">
                        <li><a class="gnb1" href="shop.php">SHOP</a>
                            <ul id="shop_cate">
                                <li><a href="#">Pure Oil Perfume</a></li>
                                <li><a href="#">Perfume Sampler</a></li>
                                <li><a href="#">Candles</a></li>
                                <li><a href="#">Diffuser</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Etc</a></li>
                                <li><a href="#">Special</a></li>
                            </ul>
                        </li>
                        <li class="gnb2"><a href="#">STORE</a></li>
                        <li class="gnb2"><a href="#">EVENT</a></li>
                        <li class="gnb2"><a href="#">Q&A</a></li>
                    </ul>
                    <h2 class="hide">사용자 메뉴</h2>
                    <?php if(!$s_idx) { ?>
                    <ul class="user_menu">
                        <li><a href="login/login.php">LOGIN</a></li>
                        <li><a href="members/join.php">JOIN</a></li>
                        <li><a href="#">CART</a></li>
                        <li><a href="#">ORDER</a></li>
                    </ul>
                    <?php } else{ ?>
                    <ul class="user_menu">
                        <li><a href="#">MY PAGE</a></li>
                        <li><a href="#" onclick="logout()">LOG OUT</a></li>
                        <li><a href="#">CART</a></li>
                        <li><a href="#">ORDER</a></li>
                    </ul>
                    <?php }; ?>

                    <div class="search_box1">
                        <form name="sch_box1">
                            <fieldset>
                                <legend class="hide">검색창</legend>
                                <label for="sch_txt" class="hide">입력</label>
                                <input type="text" name="sch_txt" id="sch_txt">
                                <button type="button">검색</button>
                            </fieldset>
                        </form>
                    </div>
                    <a href="#none" class="gnb_exit">메뉴 닫기</a>
                </nav>
            </div>
        </div>
        <section class="fixed_menu">
            <h2 class="hide">편의 메뉴</h2>
            <ul>
                <li><a href="#" class="f_m1">메뉴 열기</a></li>
                <li><a href="index.php" class="f_m2">홈</a></li>
                <li><a href="#" class="f_m3">찜 목록</a></li>
                <li><a href="#" class="f_m4">마이페이지</a></li>
            </ul>
        </section>
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