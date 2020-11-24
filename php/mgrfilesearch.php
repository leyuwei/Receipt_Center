<?php

header("Content-Type:application/json; charset=utf-8");

include 'connection.php';

if (hash("sha256", $_POST['ctlpwd']) != "48b2ba399bb7f00b2f09616c989df790d04cc78a41fde9cd9ff0c195826344e3") {
    die("{\"result\": \"0\", \"content\": \"控制秘钥不正确\"}");
}

$query_statement = "SELECT * FROM records WHERE isfinished=0 AND (filetype REGEXP '" . $_POST['filetype'] . "') ORDER BY username;";
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