<?php

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$birth = $_POST["birth"];
$phone = $_POST["phone"];

$reg_date = date("Y-m-d");

echo "<p> 아이디 : ".$u_id."</p>";
echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 이름 : ".$u_name."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 휴대폰 번호 : ".$phone."</p>";

include "../inc/dbcon.php";

$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "birth, phone, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name', ";
$sql .= "'$birth', '$phone', '$reg_date');";
/* echo $sql; */

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo"
    <script type=\"text/javascript\">
        location.href = \"welcome.php\";
    </script>
";
?>