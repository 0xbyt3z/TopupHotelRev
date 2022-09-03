<?php

    session_start();    

    require_once '../db_connect.php';

	try {
		$sql = "select customer.* from customer inner join reservation on reservation.cus_id = customer.cus_id where reservation.reservation_id=".$_GET["resvno"]."";
        $result = $link->query($sql);

        $rows = array();
        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;                
            }

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($rows);
            
        } else {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($rows);
        }

        $link->close();
        
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($error,$status);
	}
?>
