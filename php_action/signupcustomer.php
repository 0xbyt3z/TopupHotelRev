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
	$type = "customer";

	try {
		if($pass == $cpass){
			$stmt = $link->prepare("INSERT INTO customer (f_name, l_name,contact,nic_or_br, addr_01,addr_02,addr_03,type,pass) VALUES (?, ?, ?,?,?,?,?,?,?)");
			$pass = md5($pass);
			$stmt->bind_param("sssssssss", $fname, $lname, $contact,$nic,$address1,$address2,$address3,$type,$pass);
			$stmt->execute();
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode($data);
		}else{
			$error = "passwords do not match";
			$status = 500;
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode($error,$status);
		}
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($error,$status);
	}

	

	?>
