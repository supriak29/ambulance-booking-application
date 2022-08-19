<?php
session_start();
include('dbConnection.php');

// getting values with the help of session
$pat_mobile = $_SESSION['mobile'];
$pat_pick = $_SESSION['pickup'];
$pat_drop = $_SESSION['dropoff'];
//check connection
if(!$conn){
    die("Connection error"); 
}
else{	
	// INSERTING INTO requests table	
	$sql = "INSERT INTO requests(`pat_mobile`,`pat_pick`, `pat_drop`, `dt`) 
			VALUES ('$pat_mobile','$pat_pick', '$pat_drop', current_timestamp())";
	$result = mysqli_query($conn,$sql);
	//add a new data 
	if($result){
		//echo "Recorded into requests table";
		header("location:bookingConfirmed.php");
	}
	else{
        echo "error";
	}		
}
$conn->close();
?>