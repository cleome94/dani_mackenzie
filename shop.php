<?php
include "inc/session.php";
include "inc/dbcon.php";
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
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <title>대니멕켄지 상품페이지</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/shop.js"></script>
</head>
<body>
    <header id="header" class="header">
        <h1 class="logo"><a href="index.php">대니멕켄지</a></h1>
        <div class="gnb0">
            <h2 class="hide">주요메뉴</h2>
            <ul class="menu1">
                <li><a class="gnb01" href="shop.html">SHOP</a></li>
                <li><a class="gnb02" href="#">STORE</a></li>
                <li><a class="gnb02" href="#">EVENT</a></li>
                <li><a class="gnb02" href="#">Q&A</a></li>
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
        </div>
        <div class="gnb_wrap">
            <nav class="gnb">
                <h2 class="hide">주요메뉴</h2>
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
                <ul class="menu">
                    <li><a class="gnb1" href="#">SHOP</a>
                        <ul id="shop_cate">
                            <li><a href="shop.php">all products</a></li>
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
                <a href="#none"><img src="images/shop_more.png" alt="더보기" class="gnb1_more"></a>
            </nav>
        </div>
        <a href="#" class="back" onclick="history.back();">뒤로가기</a>
        <section class="fixed_menu">
            <h2 class="hide">편의 메뉴</h2>
            <ul>
                <li><a href="#" class="f_m1">메뉴 열기</a></li>
                <li><a href="index.php" class="f_m2">홈</a></li>
                <li><a href="#" class="f_m3">찜 목록</a></li>
                <li><a href="#" class="f_m4">마이페이지</a></li>
            </ul>
        </section>
        
        <div class="sch_menu">
            <a class="search" href="#">검색창 열기</a>
            <a class="cart" href="#">장바구니</a>
        </div>
        <div class="search_box2">
            <form name="sch_box2">
                <fieldset>
                    <legend class="hide">검색창</legend>
                    <label for="sch2_txt" class="hide">입력</label>
                    <input type="text" name="sch2_txt" id="sch2_txt">
                    <button type="button">검색</button>
                    <div class="popular">
                        <strong>인기검색어</strong>
                        <p>
                            <a href="#">#오일</a>
                            <a href="#">#향수</a>
                            <a href="#">#메디캔들</a>
                            <a href="#">#미들캔들</a>
                            <a href="#">#디퓨저</a>
                            <a href="#">#대니멕켄지 밤쉘</a>
                        </p>
                    </div>
                    <a class="sch_exit" href="#">검색창 닫기</a>
                </fieldset>
            </form>
        </div>
    </header>
    <main id="content" class="content">
        <section class="shop">
            <h2>SHOP</h2>
            <ul>
                <li><a href="#">Pure Oil Perfume</a></li>
                <li><a href="#">Perfume Sampler</a></li>
                <li><a href="#">Candles</a></li>
                <li><a href="#">Diffuser</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Etc</a></li>
                <li><a href="#">Special</a></li>
            </ul>
        </section>

        <section class="perfume">
            <h2 class="hide">퓨어오일퍼퓸</h2>
            <div class="perfume1_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img" onclick="location.href='pd01.php'">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3><a href="pd01.php">[퓨어오일퍼퓸] 씨 모스 (Sea Moss)</a></h3>
                <p>발렌시아 오렌지, 세이지, 오크모스 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume2_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 밤쉘 (Bomshell)</h3>
                <p>피오니, 바닐라 꽃, 보라색 과일 열매 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume1_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 블루 문 로터스 (Blue Moon Lotus)</h3>
                <p>호주 북부 지역의 연꽃, 이태리 버가못 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume2_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 블루세이지 & 씨솔트 (Blue Sage & Sea Salt)</h3>
                <p>블루 세이지 허브, 라구나 비치의 바다소금을 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume1_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 라일락 (Lilac)</h3>
                <p>미국 아이오와주 북부 라일락 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume2_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 브레아 (Brea)</h3>
                <p>바다이끼, 아이리스, 프리지아 플로럴 오일 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume1_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 오하이 가든 (Ojai Garden)</h3>
                <p>캘리포니아 올리브, 데이지, 오크모스 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume2_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 유칼립투스 라벤더 (Eucalyptus Lavender)</h3>
                <p>유칼립투스 나무 오일, 불가리아 오일 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume1_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 서든 자스민 (Southern jasmine)</h3>
                <p>플로리다 자스민, 아카시아 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
            <div class="perfume2_wrap">
                <div class="perfume1">
                    <img src="images/shop/perfume1.jpg" alt="" class="perfume_img">
                    <img src="images/shop/wish_before.png" alt="상품 찜하기" class="p_wish">
                    <span class="p_cart"><img src="images/shop/cart.png" alt="장바구니 담기"></span>
                </div>
                <h3>[퓨어오일퍼퓸] 칼라브리아 버가못 (Calabria Bergamot)</h3>
                <p>칼라브리아 해안가의 버가못, 세이지 허브 블렌딩</p>
                <span>￦49,000</span>
                <del>￦126,000</del>
            </div>
        </section>
        <div class="topbtn">
            <a href="#" id="toTop">
                <span id="toTopHover"><img src="images/top_btn.png" alt="상단으로 이동"></span>
            </a>
        </div>
    </main>
    <footer id="footer" class="footer">
        <div class="customer">
            <h2 class="cs">고객센터</h2>
            <ul>
                <li><a href="tel:15440805">TEL. 02) 1522 - 0805</a></li>
                <li><p>MON ~ THU : 10:00 ~ 16:30</p></li>
                <li><p>FRI : 10:00 ~ 15:30</p></li>
                <li><p>LUNCH : 12:00 ~ 13:30</p></li>
                <li><p>OFF : SAT, SUN, HOLIDAY</p></li>
            </ul>
        </div>
        
        <div class="f_info">
        <h2 class="comp">회사 정보</h2>
            <div class="f_info1">
                <p>Company : 주식회사 예담아이엔씨</p>
                <p>CEO : 최은경</p>
                <p>Business : 734-87-00332</p>
                <address>Address : 서울특별시 성동구 연무장5가길 7 (성수동2가)</address>
                <p>반품주소 : 서울특별시 성동구 연무장5가길 7 성수역 현대테라스타워 지하 105호</p>
                <p>입금정보 : 우리은행 1005 403 351405 / (주)예담아이엔씨</p>
                <p>통신판매업신고번호 : 제2022-서울성동-00773호 개인정보관리자 : admin@yedamkorea.com</p>
                <p>고객센터 : 02-1522-0805 / 제휴문의 : dana@yedamkorea.com</p>
                <p>Copyright(c) yedamkorea.All rights reserved.</p>
            </div>
        </div>

        <section class="f_link">
            <h3 class="hide">사이트 이용약관</h3>
            <ul>
                <li><a href="#">회사소개</a></li>
                <li><a href="#">공지사항</a></li>
                <li><a href="#">서비스이용약관</a></li>
                <li><a href="#">개인정보취급방침</a></li>
                <li><a href="#">사이트맵</a></li>
            </ul>
        </section>

        <section class="sns">
            <h3 class="hide">sns</h3>
            <ul>
                <li><a href="#" class="sns1"><img src="images/f_face_book.png" src="페이스북"></a></li>
                <li><a href="#" class="sns2"><img src="images/f_insta.png" src="인스타그램"></a></li>
                <li><a href="#" class="sns3"><img src="images/f_naver.png" src="네이버 블로그"></a></li>
                <li><a href="#" class="sns4"><img src="images/f_kakao.png" src="카카오톡 채널"></a></li>
            </ul>
        </section>
    </footer>
</body>
</html>