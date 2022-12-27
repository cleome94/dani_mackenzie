<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대니멕켄지 회원가입완료</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/welcome.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/welcome.js"></script>
</head>
<body>
    <header id="header" class="header">
        <h1 class="logo"><a href="../index.php">대니멕켄지</a></h1>
        <div class="back_menu">
            <h2 class="hide">이전 메뉴</h2>
            <ul>
                <li><a href="#" class="back" id="back1" onclick="history.back();">뒤로가기</a></li>
                <li><a href="../index.php" class="home">홈으로 가기</a></li>
            </ul>
        </div>
</header>
<main id="content" class="content">
    <div class="join">
        <h2>회원가입 완료</h2>
        <form class="join_form">
            <fieldset>
                <legend class="hide">회원가입 완료</legend>
                <p class="txt1">회원가입이 완료되었습니다.</p>
                <p class="welcome">환영합니다.</p>
                <button type="button" name="next" id="next" onclick="location.href='../index.php'">홈으로 가기</button>
            </fieldset>
        </form>
    </div>
</main>
</body>
</html>