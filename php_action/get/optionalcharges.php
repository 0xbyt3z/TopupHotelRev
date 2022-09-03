<?php

    session_start();    

    require_once '../db_connect.php';

	try {

        $revid = $_POST['revid'];

		$sql = "SELECT * FROM value_added_service where vas_id NOT IN (select vas_id from reservation_additional_charges where reservation_sub_id = '$revid' )";
        $result = $link->query($sql);

        if($result){

            if ($result->num_rows > 0) {
                //output data of each row
                $rows = array();
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;                
                }
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode($rows);
                
            } else {
                echo json_encode(false);
            }
            
        } else {

            echo json_encode(false);

        }
        
        $link->close();
        
	} catch(Exception $th) {
		echo $th;
		$error = "Error occured";
		$status = 500;
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($error,$status);
	}
