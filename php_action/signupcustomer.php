<?php

session_start();

require_once 'db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$fname = $data->fname;
	$lname = $data->lname;
	$username = $data->username;
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
			//first insert the user record and then enter the customer record.

			$sql = "INSERT INTO users (f_name, l_name,password,user_name,type_id) VALUES ('".$fname."','".$lname."' ,'".md5($pass)."','".$username."','4')";
			
			if (mysqli_query($link, $sql)) {
				$last_id = mysqli_insert_id($link);
			
				$customerquery = "INSERT INTO customer (f_name, l_name,nic_or_br,addr_01,addr_02,addr_03,type,user_id) VALUES ('".$fname."','".$lname."' ,'".$nic."','".$address1."','".$address2."', '".$address3."','".$type."','".$last_id."')";
				mysqli_query($link,$customerquery);
				echo "success";
			}
		}else{
			$error = "passwords do not match";
			$status = 500;
			header('Content-Type: application/json; charset=utf-8');
			echo "error";
		}
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo "error";
	}
?>
