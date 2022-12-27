<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$answer = $_POST["answer"];
$n_content = $_POST["n_content"];
$n_answer = $_POST["n_answer"];
$w_date = date("Y-m-d");
include "../inc/dbcon.php";

$sql = "update qna set ";
$sql .= "answer='$answer',";
$sql .= "n_content='$n_content',";
$sql .= "n_answer='$n_answer',";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$n_idx;";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "  
    <script type=\"text/javascript\">
        location.href = \"../pd01.php?n_idx=$n_idx\";
    </script>
    ";
?>