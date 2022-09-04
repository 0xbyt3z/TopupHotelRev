<?php

session_start();

require_once 'db_connect.php';

	$username = $_POST['user'];

    $user_name = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $_POST['pass']);
	$password = md5($password);
	$sql = "SELECT usr.*, 
	(select IFNULL(cus_id,'') from customer where user_id = usr.user_id) AS cus_id
	FROM users usr WHERE usr.user_name='$user_name' AND usr.password = '$password'";
	$query = mysqli_query($link, $sql);
	$res=mysqli_num_rows($query);
	$row = $query->fetch_assoc();
	
	//If result match $username and $password Table row must be 1 row
	if($res > 0)
	{
		
		$_SESSION['user'] = $username;
		$_SESSION['userType'] = $row["type_id"];
		$_SESSION['cus_id'] = $row["cus_id"];

		echo json_encode(true);
		
	}
	else
	{
		echo json_encode(false);
	}


	?>
