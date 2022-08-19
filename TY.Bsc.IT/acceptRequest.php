<?php
session_start();

include('dbConnection.php');

$dmobile = $_SESSION['dmobile'];
$pmobile = $_SESSION['mobile'];
$pick = $_SESSION['pick'];
$drop = $_SESSION['drop'];

//check connection
if(!$conn){
    die("Connection error"); 
}
else{	
	//header("location:driverHome.php");
	//header(); //  delete from requests
	echo "success";
}
$conn->close();
?>
	
		