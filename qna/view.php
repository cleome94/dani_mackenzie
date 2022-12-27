<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
include "../inc/dbcon.php";
$sql ="select * from qna where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문의 보기</title>
</head>
<body>
    <h2>문의사항</h2>
    <table class="notice_list_set">
        <tr class="notice_view_content">
            <th class="v_title">작성자</th>
            <td class="v_content"><?php echo $array["writer"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">날짜</th>
            <td class="v_content"><?php echo $array["w_date"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <td colspan="2" class="v_text">
            <?php
                $n_content = str_replace("\n","<br>", $array["n_content"]);
                $n_content = str_replace(" ","&nbsp;", $n_content);
                echo $n_content;
            ?>
            </td>
        </tr>
    </table>
    <p class="list">
        <a href="list.php">[목록]</a>
        <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
        <a href="#" onclick="remove_notice()">[삭제]</a>
    </p>
</body>
</html>