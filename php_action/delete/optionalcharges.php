<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$sid = $data->sid;

	try {
		$stmt = $link->prepare("delete from value_added_service  where vas_id=?");
        $stmt->bind_param("i", $sid);
        $stmt->execute();
        header('Content-Type: application/json; charset=utf-8');
        echo "success";
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo "success";
	}
?>
