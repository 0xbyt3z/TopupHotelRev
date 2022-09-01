<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$rno = $data->rno;

	try {
		$stmt = $link->prepare("delete from room  where room_no=?");
        $stmt->bind_param("s", $rno);
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
