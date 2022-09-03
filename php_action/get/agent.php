<?php

session_start();

require_once '../db_connect.php';

$sql = "select * from customer where user_id IN (select user_id from users where type_id = 3)";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    // header('Content-Type: application/json; charset=utf-8');
    echo json_encode($rows);

} else {

    echo json_encode(false);

}

$link->close();
