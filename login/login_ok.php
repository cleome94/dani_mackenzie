<?php
session_start();

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

include "../inc/dbcon.php";

$sql = "select idx, u_name, u_id, pwd from members where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);

if(!$num){
    echo"
        <script type=\"text/javascript\">
        alert(\"일치하는 아이디가 없습니다.\");
        history.back();
        </script>
    ";
} else{
    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];

    if($pwd != $g_pwd){
        echo"
            <script type=\"text/javascript\">
            alert(\"비밀번호가 일치하지 않습니다.\");
            history.back();
            </script>
        ";
    } else{
        echo"
            <script type=\"text/javascript\">
            alert(\"로그인 되었습니다.\");
            </script>
        ";
        $_SESSION["s_idx"] = $array["idx"];
        $_SESSION["s_name"] = $array["u_name"];
        $_SESSION["s_id"] = $array["u_id"];
    };
};
mysqli_close($dbcon);

echo"
    <script type=\"text/javascript\">
        location.href=\"../index.php\";
    </script>
";
?>