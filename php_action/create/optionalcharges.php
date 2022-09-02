<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$service = $data->service;
	$charges = $data->charges;
	

	try {
		$stmt = $link->prepare("INSERT INTO value_added_service (service, charges) VALUES (?,?)");
        $stmt->bind_param("sd", $service,$charges);
        $stmt->execute();
        echo "success";
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		echo "error";
	}
?>
