<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$sid = $data->sid;
	$service = $data->service;
	$charges = $data->charges;
	

	try {
		$stmt = $link->prepare("update value_added_service set service=?, charges=? where vas_id=?");
        $stmt->bind_param("sdi", $service,$charges,$sid);
        $stmt->execute();
        header('Content-Type: application/json; charset=utf-8');
        echo "Done";
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo $error;
	}
?>
