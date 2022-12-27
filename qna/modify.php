<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
include "../inc/dbcon.php";
$sql = "select * from qna where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대니멕켄지 문의 답변하기</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/qna_modify.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/write.js"></script>
</head>
<body>
    <head class="header">
        <div class="qna">
            <h2>Q&A 답변 작성</h2>
            <a href="#" class="back" onclick="history.back();">뒤로가기</a>
        </div>
        <div class="gnb_wrap">
            <nav class="gnb">
                <h2 class="hide">주요메뉴</h2>
                <ul class="menu">
                    <li><a class="gnb1" href="../shop.php">SHOP</a>
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
                    <li><a href="../login/login.php">LOGIN</a></li>
                    <li><a href="../members/join.php">JOIN</a></li>
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
        <section class="fixed_menu">
            <h2 class="hide">편의 메뉴</h2>
            <ul>
                <li><a href="#" class="f_m1">메뉴 열기</a></li>
                <li><a href="../index.php" class="f_m2">홈</a></li>
                <li><a href="#" class="f_m3">찜 목록</a></li>
                <li><a href="#" class="f_m4">마이페이지</a></li>
            </ul>
        </section>
    </head>
    <main class="content">
        <form name="qna_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" onsubmit="return qna_check()">
            <fieldset class="qna_set">
                <legend class="hide">문의하기</legend>
                <p class="writer">
                    작성자<span><?php echo $s_name; ?></span>
                </p>
                <p><label for="n_content" class="hide">문의 작성</label></p>
                <p><textarea id="n_content" name="n_content" class="n_content" placeholder="문의사항을 작성해주세요."><?php echo $array["n_content"]; ?></textarea></p>

                <?php if($s_id == "admin") { ?>
                <p>
                    <label for="answer" class="hide">답변상황</label>
                    <select name="answer" id="answer" class="answer">
                        <option value="답변대기"<?php if($array["answer"] == "답변대기") echo " selected"; ?>>답변대기</option>
                        <option value="답변완료"<?php if($array["answer"] == "답변완료") echo " selected"; ?>>답변완료</option>
                    </select>
                </p>
                <p class="writer2"><label for="n_answer">관리자 답변하기</label></p>
                <p><textarea id="n_answer" name="n_answer" class="n_answer" placeholder="문의사항에 대한 답변을 해주세요."><?php echo $array["n_answer"]; ?></textarea></p>
                <?php }; ?>
                
                <div class="btn">
                    <button class="back_btn" type="button" onclick="history.back()">취소</button>
                    <button class="ok_btn" type="submit">답변 등록</button>
                </div>

            </fieldset>
        </form>
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
                <li><a href="#" class="sns1"><img src="../images/f_face_book.png" src="페이스북"></a></li>
                <li><a href="#" class="sns2"><img src="../images/f_insta.png" src="인스타그램"></a></li>
                <li><a href="#" class="sns3"><img src="../images/f_naver.png" src="네이버 블로그"></a></li>
                <li><a href="#" class="sns4"><img src="../images/f_kakao.png" src="카카오톡 채널"></a></li>
            </ul>
        </section>
    </footer>
</body>
</html>