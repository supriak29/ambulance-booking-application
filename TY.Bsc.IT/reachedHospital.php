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
	// INSERTING INTO driver_booking_history table	
	$sql = "INSERT INTO `driver_booking_history` (`pat_mobile`, `dpickup`, `ddropoff`, `dt`) 
			VALUES ('$pat_mobile', '$pat_pick', '$pat_drop',current_timestamp())";
	$result = mysqli_query($conn,$sql);
	//add a new data 
	if($result){
	//echo "Recorded into driver_booking_history table";
	//$_SESSION['display']="Patient Reached Hospital";
	$_SESSION['mobile'];
	header("location:delRequest.php");
	}
	else{
        echo "error";
	}		
}
$conn->close();

?>