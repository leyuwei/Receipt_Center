<?php

header("Content-Type:application/json; charset=utf-8");

include 'connection.php';

if (hash("sha256", $_POST['ctlpwd']) != "48b2ba399bb7f00b2f09616c989df790d04cc78a41fde9cd9ff0c195826344e3") {
    die("{\"result\": \"0\", \"content\": \"控制秘钥不正确\"}");
}

$query_statement = "UPDATE records SET isfinished=1 WHERE id=" . $_POST['id'] . ";";
$db_query = $conn -> query($query_statement);

if ($db_query) {
    echo "{\"result\": \"1\", \"content\": \"标记处理成功\"}";
} else {
    echo "{\"result\": \"0\", \"content\": \"标记处理时出现错误\"}";
}


?>