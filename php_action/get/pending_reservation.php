<?php

session_start();

require_once '../db_connect.php';

try {

    $stat = $_POST['stat'];
    $frmdt = date_format(date_create($_POST['frmdt']), "Y-m-d");
    $todt = date_format(date_create($_POST['todt']), "Y-m-d");

    $where = "";

    if ($stat != 'all') {

        $where = "sub.status = $stat AND";
    }

    $sql = "
        select sub.*, rom.room_no, typ.room_type_name, CONCAT(cus.f_name,' ',cus.l_name) AS cusnm, typ.maximum_guest,
        DATE_FORMAT(sub.check_in, '%Y-%m-%d') AS checkin, DATE_FORMAT(sub.check_out, '%Y-%m-%d') AS checkout, rev.payment_status
        from reservation_sub sub
        inner join reservation rev on rev.reservation_id = sub.reservation_id
        inner join room rom on rom.room_id = sub.room_id
        inner join room_type typ on typ.room_type_id = rom.room_type_id
        inner join customer cus on cus.cus_id = rev.cus_id
        where " . $where . " DATE_FORMAT(sub.check_in, '%Y-%m-%d') >= '$frmdt' AND DATE_FORMAT(sub.check_out, '%Y-%m-%d') <= '$todt'
        ";
    $result = $link->query($sql);

    // print_r( $sql);

    if ($result) {

        if ($result->num_rows > 0) {

            //output data of each row
            $rows = array();
            while ($row = $result->fetch_assoc()) {
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
} catch (Exception $th) {
    echo $th;
    $error = "Error occured";
    $status = 500;
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($error, $status);
}
