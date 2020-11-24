<?php

header("Content-Type:application/json; charset=utf-8");

include 'connection.php';

$query_statement = "DELETE FROM records WHERE id=" . $_POST["id"] . ";";
$db_query = $conn -> query($query_statement);

if ($db_query) {
    echo "{\"result\": \"1\", \"content\": \"撤销发票成功！\"}";
} else {
    echo "{\"result\": \"0\", \"content\": \"撤销发票过程出现错误，请重试\"}";
}


?>