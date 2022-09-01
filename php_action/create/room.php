<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$rno = $data->rno;
	$rtid = $data->rtid;
	$status = "available";	

	try {
		$stmt = $link->prepare("INSERT INTO room (room_no,room_type_id,status) VALUES (?,?,?)");
        $stmt->bind_param("sis", $rno,$rtid,$status);
        $stmt->execute();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($error,$status);
	}
?>
