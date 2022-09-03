<?php

    session_start();    

    require_once '../db_connect.php';

	try {
		$sql = "select * from payment where date=date(now())";
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            //output data of each row
            $rows = array();
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;                
            }
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($rows);
            
        } else {
           
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
