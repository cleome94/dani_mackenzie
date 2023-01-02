<?php
include "inc/session.php";
include "inc/dbcon.php";
$sql = "select * from qna";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$list_num = 5;
$page_num = 5;
$page = isset($_GET["page"])? $_GET["page"] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block -1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <title>대니멕켄지 상품 상세페이지</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/pd01.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/pd01.js"></script>
    <style>
        <?php if($s_id == "admin"){ ?>
            .qna_modi{
                display:flex;
                justify-content:right
            }
            .qna_modi a{
                position:relative;
                top:-38px;
            }
            .ans{
                background:#7f9601;
                margin-right:10px;
                border-radius:5px;
                padding:5px;
                font-size:14px;
                color:#fff;
            }
            .del{
                background:#a08d7c;
                border-radius:5px;
                padding:5px;
                font-size:14px;
                color:#fff;
            }
        <?php }; ?>
    </style>
    <script>
        var arr_ans = <?php echo $array["answer"]; ?>

        var data = $(arr_ans);
        if(value = '답변대기'){
            data.css("background","#aaa");
        }else{
            data.css("background", "#ffba00");
        }
    </script>
</head>
<body>
    <header id="header" class="header">
        <h1 class="hide">대니멕켄지</h1>
        <a href="#" class="back" onclick="history.back();">뒤로가기</a>
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
        <section class="fixed_menu">
            <h2 class="hide">편의 메뉴</h2>
            <ul>
                <li><a href="#" class="f_m1">메뉴 열기</a></li>
                <li><a href="index.php" class="f_m2">홈</a></li>
                <li><a href="#" class="f_m3">찜 목록</a></li>
                <li><a href="#" class="f_m4">마이페이지</a></li>
            </ul>
        </section>
        <div class="u_menu">
            <h2 class="hide">편의성 메뉴</h2>
                <a href="index.php" class="home">홈으로 가기</a>
                <a href="#" class="search">검색창 열기</a>
                <a href="#" class="cart">장바구니</a>
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
        <section class="d_info">
            <h2 class="hide">상세정보 메뉴</h2>
            <ul>
                <li><a href="#" class="d_info1">상품설명</a></li>
                <li><a href="#" class="d_info2">상품구매안내</a></li>
                <li><a href="#" class="d_info3">Q&A</a></li>
            </ul>
        </section>

    <div class=d_1>
        <div class="pd_wrap">
            <h2 class="pd1"><img src="images/dp/perfume.png" alt="[퓨어오일퍼퓸] 씨 모스(Sea Moss)"></h2>
            <table class="pd_table">
                <caption class="hide">상품</caption>
                <tr>
                    <th class="pd_title" colspan="2">[퓨어오일퍼퓸] 씨 모스(Sea Moss)</th>
                </tr>
                <tr class="price">
                    <th>￦49,000</th>
                    <td>￦126,000</td>
                </tr>
                <tr>
                    <th>적립금</th>
                    <td>1%</td>
                </tr>
                <tr class="deli">
                    <th>배송</th>
                    <td>
                        2,500원
                        <span>50,000원 이상 무료배송</span>
                    </td>
                </tr>
                <tr><td class="line" colspan="2"></td></tr>
                <tr class="st">
                    <th>Scent Type</th>
                    <td>시트러스, 머스크, 워터리</td>
                </tr>
                <tr>
                    <th>Top</th>
                    <td>발렌시아 오렌지, 오션 릴리, 엠버</td>
                </tr>
                <tr>
                    <th>Middle</th>
                    <td>라벤더, 오크모스, 씨 모스</td>
                </tr>
                <tr>
                    <th>Base</th>
                    <td>베티버, 파츌리, 아가베</td>
                </tr>
            </table>
        </div>
        <div class="c_line"></div>
        <section class="cont">
            <h3 class="hide">상품 설명</h3>
            <ul>
                <li><img src="images/dp/dp1.jpg" alt="순수한 원료로만 만들어진 대니멕켄지 퓨어오일 퍼퓸은 에탄올을 첨가하지 않아 은은하게 발향되며 편안한 분위기를 선사합니다."></li>
                <li><img src="images/dp/dp2.jpg" alt="스포이드 타입으로 원하는 양을 조절해 편리하게 사용 가능하며 소량만으로도 오랜시간 발향이 지속됩니다."></li>
            </ul>
        </section>
    </div>
    <div class="d_2">
        <h3>상품 구매 안내</h3>
    <p>고액결제의 경우 안전을 위해 카드사에서 확인전화를 드릴 수도 있습니다. 확인과정에서 도난 카드의 사용이나 타인 명의의 주문등 정상적인 주문이 아니라고 판단될 경우 임의로 주문을 보류 또는 취소할 수 있습니다. </p>

    <p>
        무통장 입금은 상품 구매 대금은 PC뱅킹, 인터넷뱅킹, 텔레뱅킹 혹은 가까운 은행에서 직접 입금하시면 됩니다.<br>
        주문시 입력한 입금자명과 실제입금자의 성명이 반드시 일치하여야 하며, 7일 이내로 입금을 하셔야 하며 입금되지 않은 주문은 자동취소 됩니다.
    </p>
    <p>
        배송 방법 : 택배<br>
        배송 지역 : 전국지역<br>
        배송 비용 : ￦3,500<br>
        배송 기간 : 1일 ~ 3일<br>
        배송 안내 : - 산간벽지나 도서지방은 별도의 추가금액을 지불하셔야 하는 경우가 있습니다.<br>
        고객님께서 주문하신 상품은 입금 확인후 배송해 드립니다. 다만, 상품종류에 따라서 상품의 배송이 다소 지연될 수 있습니다.
    </p>
    <p>
        교환 및 반품 주소<br>
        - 서울특별시 성동구 연무장5가길 7 성수역 현대테라스타워 지하 105호
    </p>
    <p>
        교환 및 반품이 가능한 경우<br>
        - 상품을 공급 받으신 날로부터 7일이내 단, 가전제품의<br>
        경우 포장을 개봉하였거나 포장이 훼손되어 상품가치가 상실된 경우에는 교환/반품이 불가능합니다.<br>
        - 공급받으신 상품 및 용역의 내용이 표시.광고 내용과<br>
        다르거나 다르게 이행된 경우에는 공급받은 날로부터 3월이내, 그사실을 알게 된 날로부터 30일이내
    </p>
    <p>
        교환 및 반품이 불가능한 경우<br>
        - 고객님의 책임 있는 사유로 상품등이 멸실 또는 훼손된 경우. 단, 상품의 내용을 확인하기 위하여<br>
        포장 등을 훼손한 경우는 제외<br>
        - 포장을 개봉하였거나 포장이 훼손되어 상품가치가 상실된 경우<br>
        (예 : 가전제품, 식품, 음반 등, 단 액정화면이 부착된 노트북, LCD모니터, 디지털 카메라 등의 불량화소에<br>
        따른 반품/교환은 제조사 기준에 따릅니다.)<br>
        - 고객님의 사용 또는 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우 단, 화장품등의 경우 시용제품을<br>
        제공한 경우에 한 합니다.<br>
        - 시간의 경과에 의하여 재판매가 곤란할 정도로 상품등의 가치가 현저히 감소한 경우<br>
        - 복제가 가능한 상품등의 포장을 훼손한 경우<br>
        (자세한 내용은 고객만족센터 1:1 E-MAIL상담을 이용해 주시기 바랍니다.)
    </p>
    <p>
        ※ 고객님의 마음이 바뀌어 교환, 반품을 하실 경우 상품반송 비용은 고객님께서 부담하셔야 합니다.<br>
        (색상 교환, 사이즈 교환 등 포함)
    </p>
    </div>
    <div class="d_3">
        <h3 class="hide">Q&A</h3>
            <button type="button" class="q_btn" onclick="location.href='qna/write.php'">Q&A 작성</button>
            <?php
            $start = ($page -1) * $list_num;

            $sql = "select * from qna order by idx desc limit $start, $list_num;";

            $result = mysqli_query($dbcon, $sql);
             while($array = mysqli_fetch_array($result)){
            ?>
        <div class="qna">
            <h3 class="hide">Q&A 목록</h3>
            <ul>
                <li>
                    <!-- <h4><?php echo $array["answer"]; ?></h4> -->
                    <h4 <?php if($array["answer"] == '답변대기'):?>style="background-color:#aaa;"<?php elseif($array["answer"] == '답변완료'):?>style="background-color:rgb(255, 166, 0);"<?php endif?>>
                        <?php echo $array["answer"]; ?>
                    </h4>
                    <div class="qna_w">
                        <p>
                            <span><?php echo $array["writer"]; ?></span>
                            <?php echo $array["w_date"]; ?>
                        </p>
                    </div>
                    <div class="quest">
                        <a href="#none">
                            <?php echo $array["n_content"]; ?>
                        </a>
                    </div>
                    <div class="qna_more">
                        <div class="question">
                            <span>문의</span>
                            <p><?php echo $array["n_content"]; ?></p>
                        </div>
                        <div class="answer">
                            <span>답변</span>
                            <p><?php echo $array["n_answer"]; ?></p>
                        </div>
                    </div>
                    <?php if($s_id == "admin") { ?>
                        <div class="qna_modi">
                            <a class="ans" href="qna/modify.php?n_idx=<?php echo $array["idx"]; ?>">답변하기</a>
                            <a class="del" href="#" onclick="remove_qna(<?php echo $array['idx']; ?>)">삭제</a>
                        </div>
                    <?php }; ?>
                </li>
            </ul>
        </div>
            <?php
                };
            ?>
        </div>
        <div class="topbtn">
            <a href="#" id="toTop">
                <span id="toTopHover"><img src="images/top_btn.png" alt="상단으로 이동"></span>
            </a>
        </div>
    </main>
    
    <footer id="footer" class="footer">
        <div class="f_wrap">
            <!-- 태블릿 -->
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
        <!-- 모바일 -->
        <div class="customer1">
            <h2 class="cs1">고객센터</h2>
            <ul>
                <li><a href="tel:15440805">TEL. 02) 1522 - 0805</a></li>
                <li><p>MON ~ THU : 10:00 ~ 16:30</p></li>
                <li><p>FRI : 10:00 ~ 15:30</p></li>
                <li><p>LUNCH : 12:00 ~ 13:30</p></li>
                <li><p>OFF : SAT, SUN, HOLIDAY</p></li>
            </ul>
        </div>
        
        <div class="f_info_1">
            <h2 class="comp1">회사 정보</h2>
            <div class="f_info1_1">
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
    </div>
    </footer>
</body>
</html>