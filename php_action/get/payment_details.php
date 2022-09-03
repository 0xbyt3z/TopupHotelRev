<?php

    session_start();    

    require_once '../db_connect.php';

	try {

        $revid = $_POST['revid'];

		$sql = "SELECT *, 
        DATE_FORMAT(sub.check_in, '%Y-%m-%d') AS checkin, DATE_FORMAT(sub.check_out, '%Y-%m-%d') AS checkout,
        (select SUM(amount) from reservation_additional_charges where reservation_sub_id = sub.reservation_sub_id) AS optchg,
        (select CONCAT(f_name,' ',l_name) from customer where cus_id = rev.cus_id) AS cusnm
        FROM reservation_sub sub 
        inner join reservation rev on rev.reservation_id = sub.reservation_id 
        inner join room rom on rom.room_id = sub.room_id 
        inner join room_type typ on typ.room_type_id = rom.room_type_id
        where sub.reservation_id = '$revid' ";
        $result = $link->query($sql);

        // print_r($sql);

        $rows = array();

        if($result){

            if ($result->num_rows > 0) {
                //output data of each row

                $rsv_chg = 0;

                $optchg = 0;

                $cusnm = '';

                $daycnt = 0;

                while($row = $result->fetch_assoc()) {

                    $checkin = $row["checkin"];
                    $checkout = $row["checkout"];

                    $earlier = new DateTime($checkin);
					$later = new DateTime($checkout);
					$diff = $later->diff($earlier)->format("%a") + 1;

                    $daycnt += $diff;

                    if($diff < 7){

                        $rsv_chg += $diff * $row["charges_per_day"];

                    } else {

                        if($diff < 30){

                            $wkcnt = $diff / 7;
                            $dycnt = $diff % 7;
    
                            $rsv_chg += $wkcnt * $row["charges_per_week"];
                            $rsv_chg += $dycnt * $row["charges_per_day"];

                        } else {

                            $mncnt = $diff / 30;
                            $dycnt = $diff % 30;

                            $rsv_chg += $mncnt * $row["charges_per_week"];
                            $rsv_chg += $dycnt * $row["charges_per_day"];

                        }

                    }

                    $optchg += $row["optchg"];

                    $cusnm = $row["cusnm"];

                }

                $rows[] = $cusnm;
                $rows[] = $rsv_chg;
                $rows[] = $optchg;
                $rows[] = $daycnt;

                // header('Content-Type: application/json; charset=utf-8');
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
