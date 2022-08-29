<?php

session_start();

require_once 'db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$fname = $data->fname;
	$lname = $data->lname;
	$contact = $data->contact;
	$nic = $data->nic;
	$address1 = $data->address1;
	$address2 = $data->address2;
	$address3 = $data->address3;
	$pass = $data->pass;
	$cpass = $data->cpass;
	
	try {
		$stmt = $conn->prepare("INSERT INTO users (fname, lname,nic_or_br password,username) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $fname, $lname, $email);
		$stmt->execute();
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($data);
	} catch(Exception $th) {
		$error = "Error occured";
		$status = 500;
		echo json_encode($error,$status);
	}

	

	?>
