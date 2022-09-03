<?php

session_start();

require_once '../db_connect.php';

	$revid = $_POST['revid'];
	$stat = $_POST['stat'];

    $sql = "update reservation_sub set status = '$stat' where reservation_sub_id = '$revid'";

    if ($link->query($sql) === TRUE) {


        echo json_encode(true);


    } else {


        echo json_encode(false);


    }

	?>