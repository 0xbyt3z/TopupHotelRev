<?php

session_start();

require_once '../db_connect.php';

$cusid = $_POST['cusid'];
$crdhnm = $_POST['crdhnm'];
$crdno = $_POST['crdno'];
$expdt = $_POST['expdt'];
$crdcvv = $_POST['crdcvv'];
$rmid = $_POST['rmid'];
$chkin = $_POST['chkin'];
$chkout = $_POST['chkout'];

$sql = "INSERT INTO reservation (Name_on_card, cvv, expiry_date, card_number)
        VALUES ('$crdhnm', '$crdcvv', '$expdt', '$crdno')";
$link->query($sql);
$card_id = mysqli_insert_id($link);

$sql = "INSERT INTO reservation (created_date, reservation_type, cus_id, card_id, payment_type)
    VALUES ('" . date('Y-m-d') . "', '2', '$cusid', '$card_id', '2')";
$link->query($sql);
$reservation_id = mysqli_insert_id($link);

for ($x = 0; sizeof($rmid) > $x; $x++) {

    $sql = "INSERT INTO reservation_sub (check_out, check_in, reservation_id, room_id)
    VALUES ('". $chkout[$x]  ."', '". $chkin[$x]  ."', '$reservation_id', '". $rmid[$x]  ."')";
    $reslt = $link->query($sql);

}

if ($reslt === TRUE) {

    echo json_encode(true);

} else {

    echo json_encode(false);

}
