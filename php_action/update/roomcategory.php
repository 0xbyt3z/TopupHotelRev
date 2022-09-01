<?php

    session_start();    

    require_once '../db_connect.php';
	$data = json_decode(file_get_contents('php://input'));
	$rtid = $data->rtid;
	$rtname = $data->rtname;
	$gcount = $data->gcount;
	$desc = $data->desc;
	$pncharge = $data->pncharge;
	$pdcharge = $data->pdcharge;
	$wcharge = $data->wcharge;
	$mcharge = $data->mcharge;
	$disc = $data->disc;
	

	try {
		$stmt = $link->prepare("update  room_type set room_type_name=?,maximum_guest=?,description=?,charges_per_night=?,charges_per_day=?, charges_per_week=?,charges_per_month=?,discount=? where room_type_id=?");
        $stmt->bind_param("sisdddddi", $rtname,$gcount,$desc,$pncharge,$pdcharge,$wcharge,$mcharge,$disc,$rtid);
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
