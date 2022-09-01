<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$rtname = $data->rtname;
	$gcount = $data->gcount;
	$desc = $data->desc;
	$pncharge = $data->pncharge;
	$pdcharge = $data->pdcharge;
	$wcharge = $data->wcharge;
	$mcharge = $data->mcharge;
	$disc = $data->disc;
	

	try {
		$stmt = $link->prepare("INSERT INTO room_type (room_type_name,maximum_guest,description,charges_per_night,charges_per_day, charges_per_week,charges_per_month,discount) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisddddd", $rtname,$gcount,$desc,$pncharge,$pdcharge,$wcharge,$mcharge,$disc);
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
