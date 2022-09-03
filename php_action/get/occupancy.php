<?php

    session_start();    

    require_once '../db_connect.php';

	try {
		$sql = "select room.*,room_type.room_type_name from room inner join room_type on room.room_type_id = room_type.room_type_id;";
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
