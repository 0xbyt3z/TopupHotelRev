<?php

session_start();

require_once 'db_connect.php';

	$username = $_POST['user'];

    $user_name = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $_POST['pass']);
	$password = md5($password);
	$sql = "SELECT * FROM users WHERE user_name='$user_name' AND password = '$password'";
	$query = mysqli_query($link, $sql);
	$res=mysqli_num_rows($query);
	
	//If result match $username and $password Table row must be 1 row
	if($res > 0)
	{
		$_SESSION['user'] = $username;

		echo json_encode(true);
		
	}
	else
	{
		echo json_encode(false);
	}


	?>
