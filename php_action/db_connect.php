<?php 	

$localhost = "127.0.0.1";
$username = "calicoco";
$password = "123456";
$dbname = "hotel";

//Connect and select the database
$link = mysqli_connect($localhost, $username, $password, $dbname);

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>