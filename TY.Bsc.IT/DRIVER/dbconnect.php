<?php

$servername = "localhost";
$username = "root";
$db = "ambulance";
$password = "";

//create connection
//$conn = new mysqli($servername, $username, $password, $db);
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
	die("Error".mysqli_connect_error());
}

?>