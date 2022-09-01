<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$rtid = $data->rtid;

	try {
		$stmt = $link->prepare("delete from room_type  where room_type_id=?");
        $stmt->bind_param("i", $rtid);
        $stmt->execute();
        header('Content-Type: application/json; charset=utf-8');
        echo "Done";
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo "Error";
	}
?>
