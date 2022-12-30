<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대니멕켄지 회원가입</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/join.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/join.js"></script>
</head>
<body>
    <header id="header" class="header">
            <h1 class="logo"><a href="../index.php">대니멕켄지</a></h1>
            <div class="back_menu">
                <h2 class="hide">이전 메뉴</h2>
                <ul>
                    <li><a href="#" class="back" id="back1" onclick="history.back();">뒤로가기</a></li>
                    <li><a href="#" class="back" id="back2" onclick="history.back();">뒤로가기</a></li>
                    <li><a href="../index.php" class="home">홈으로 가기</a></li>
                </ul>
            </div>
    </header>
    <main id="content" class="content">
        <div class="join">
            <h2>회원가입</h2>
            <form class="join_form" action="insert.php" method="post" onsubmit="return join_form_check()">
                <fieldset class="join1">
                    <legend class="hide">회원정보 입력1</legend>
                    <p class="txt1">약관에 동의해 주세요.</p>
                    <p><input type="checkbox" class="all_apply" id="all_apply"><label for="all_ck">전체 동의하기</label></p>
                    <p><input type="checkbox" class="apply" id="apply_1"><label for="apply_1">서비스 이용약관 동의 (필수)</label>
                        <a href="#">자세히보기</a>
                        <br><span id="err_apply" class="err_txt"></span>
                    </p>
                    <p><input type="checkbox" class="apply" id="apply_2"><label for="apply_2">개인정보 수집 및 이용 동의 (필수)</label>
                        <a href="#">자세히보기</a>
                        <br><span id="err_apply" class="err_txt"></span>
                    </p>
                    <p><input type="checkbox" class="apply" id="apply_3"><label for="apply_3">개인정보 처리 위탁 동의 (선택)</label>
                        <a href="#">자세히보기</a>
                    </p>
                    <p><input type="checkbox" class="apply" id="apply_4"><label for="apply_4">쇼핑정보 수신 동의 (선택)</label></p>
                    <p><input type="checkbox" class="apply" id="apply_5"><label for="apply_5">SMS 수신 동의</label>
                    <input type="checkbox" class="apply" id="apply_6"><label for="apply_6">이메일 수신 동의</label></p>
                    <p><button type="button" name="next1" id="next1">다음</button></p>
                </fieldset>
                <fieldset class="join2">
                    <legend class="hide">회원정보 입력2</legend>
                    <p class="txt1">회원 정보를 입력해 주세요.</p>
                    <p>
                        <label for="u_id">아이디</label>
                        <input type="text" class="u_id" name="u_id" id="u_id" placeholder="아이디를 입력하세요." onkeyup="getCont(this.value)">
                        <span id="err_id" class="err_txt"></span>
                        <br><span id="dsp"></span>
                    </p>
                    <!-- <button type="button" class="id_btn" id="id_btn" onclick="id_search()">중복 확인</button> -->
                    <p>
                        <label for="pwd">비밀번호</label>
                        <input type="password" class="pwd" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요.">
                        <span id="err_pwd" class="err_txt"></span>
                    </p>
                    <p>
                        <label for="repwd">비밀번호 확인</label>
                        <input type="password" class="repwd" name="repwd" id="repwd" placeholder="비밀번호를 한번 더 입력하세요.">
                        <span id="err_repwd" class="err_txt"></span>
                    </p>
                    <p>
                        <label for="u_name">이름</label>
                        <input type="text" class="u_name" name="u_name" id="u_name" placeholder="이름을 입력하세요.">
                        <span id="err_name" class="err_txt"></span>
                    </p>
                    <p>
                        <label for="birth">생년월일</label>
                        <input type="text" class="birth" name="birth" id="birth" placeholder="생년월일을 입력하세요.">
                        <span id="err_birth" class="err_txt"></span>
                    </p>
                    <p>
                        <label for="phone">휴대폰 번호</label>
                        <input type="text" class="phone" name="phone" id="phone" placeholder="휴대폰번호를 입력하세요.">
                        <span id="err_phone" class="err_txt"></span>
                    </p>
                    <button type="submit" name="next2" id="next2">다음</button>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>