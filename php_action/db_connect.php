<?php 	

$localhost = "127.0.0.1";
$username = "root";
$password = "$3h2vABc";
$dbname = "hotel";

//Connect and select the database
$link = mysqli_connect($localhost, $username, $password, $dbname);

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>