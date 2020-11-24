<?php

header("Content-Type:application/json; charset=utf-8");

include 'connection.php';

$query_statement = "SELECT * FROM records WHERE username='" . $_POST["username"] . "' AND userid='" . $_POST["usernumber"] . "' ORDER BY isfinished;";
$db_query = $conn -> query($query_statement);

if ($db_query) {
    $newArr = array();
    $newArr['content'] = array();
    while ($db_field = mysqli_fetch_assoc($db_query)) {
        $newArr['content'][] = $db_field;
    }
    $newArr['result'] = '1';
    echo json_encode($newArr);
} else {
    echo "{\"result\": \"0\", \"content\": \"检索出现错误\"}";
}


?>