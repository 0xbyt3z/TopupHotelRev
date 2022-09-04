<?php

session_start();

require_once '../db_connect.php';

	$cusid = $_POST['cusid'];
	$roomid = $_POST['roomid'];
	$pymtid = $_POST['pymtid'];
	$crdhnm = $_POST['crdhnm'];
	$crdno = $_POST['crdno'];
	$expdt = $_POST['expdt'];
	$crdcvv = $_POST['crdcvv'];
	$chkindt = $_POST['chkindt'];
	$chkoutdt = $_POST['chkoutdt'];

    $card_id = 0;

    if($pymtid == 2) {

        $sql = "INSERT INTO reservation (Name_on_card, cvv, expiry_date, card_number)
        VALUES ('$crdhnm', '$crdcvv', '$expdt', '$crdno')";
        $link->query($sql);
        $card_id = mysqli_insert_id($link);

    }

    $sql = "INSERT INTO reservation (created_date, reservation_type, cus_id, card_id, payment_type)
    VALUES ('". date('Y-m-d') ."', '1', '$cusid', '$card_id', '$pymtid')";
    $link->query($sql);
    $reservation_id = mysqli_insert_id($link);

    $sql = "INSERT INTO reservation_sub (check_out, check_in, reservation_id, room_id)
    VALUES ('$chkoutdt', '$chkindt', '$reservation_id', '$roomid')";


    // $link->query($sql);
    // $reservation_sub_id = mysqli_insert_id($link);

    // $sql = "UPDATE room SET status = 1 where '$roomid'";

    if ($link->query($sql) === TRUE) {


        echo json_encode(true);


    } else {


        echo json_encode(false);


    }

	?>