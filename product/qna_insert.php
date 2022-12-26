<?php
include "../inc/session.php";
$answer = $_POST["answer"];
$n_content = $_POST["n_content"];
$w_date = date("Y-m-d");
include "../inc/dbcon.php";

$sql = "insert into qna(";
$sql .= "answer, n_content, writer, w_date";
$sql .= ") values(";
$sql .= "'$answer', '$n_content', '$s_name', '$w_date'";
$sql .= ");";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "  
    <script type=\"text/javascript\">
        location.href = \"../pd01.php\";
    </script>
    ";
?>