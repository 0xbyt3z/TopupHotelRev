<?php

session_start();

require_once '../db_connect.php';

$sub_revid = $_POST['sub_revid'];
$vas_id = $_POST['vas_id'];
$charges = $_POST['charges'];
$check = $_POST['check'];

$reslt = false;

for ($x = 0; sizeof($vas_id) > $x; $x++) {

    if(isset($check[$x])){

        $sql = "INSERT INTO reservation_additional_charges (reservation_sub_id, vas_id, amount)
        VALUES ('". $sub_revid  ."', '". $vas_id[$x]  ."', '". $charges[$x]  ."')";
        $reslt = $link->query($sql);

        // print_r($sql);

    }

}

if ($reslt === TRUE) {

    echo json_encode(true);

} else {

    echo json_encode(false);

}
