<?php

session_start();

require_once '../db_connect.php';

$revid = $_POST['revid'];
$rmchg = $_POST['rmchg'];
$adtchg = $_POST['adtchg'];

$ttl = $rmchg + $adtchg;

$date = date('Y-m-d');


$sql = "select * from reservation where payment_status = 0 AND reservation_id = '$revid'";
$result = $link->query($sql);

if ($result) {

    if ($result->num_rows > 0) {

        $sql = "INSERT INTO payment (reservation_id, revchg, adtchg, total, date)
            VALUES ('$revid', '$rmchg', '$adtchg', '$ttl', '$date')";
        $link->query($sql);

        $sql = "update reservation set payment_status = '1' where reservation_id = '$revid'";

        if ($link->query($sql) === TRUE) {

            echo json_encode(true);
        } else {

            echo json_encode(false);
        }
    }else{
        echo json_encode(false);

    }
} else {

    echo json_encode(false);
}
