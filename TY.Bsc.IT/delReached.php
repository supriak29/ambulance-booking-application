<?php
session_start();

include('dbConnection.php');

$dmobile = $_SESSION['dmobile'];

// getting values with the help of session
$pat_mobile = $_SESSION['mobile'];
//check connection
if(!$conn){
    die("Connection error"); 
}
else{	
	$sql = "DELETE FROM `requests` WHERE pat_mobile='$pat_mobile'";
	$result = mysqli_query($conn,$sql);
	//add a new data 
	if($result){ // REACHED HOSPITAL
	$sql2 = "INSERT INTO `driver_booking_history` (`dmobile`, `pat_mobile`, `dpickup`, `ddropoff`, `dt`) 
			VALUES ('$dmobile', '$pmobile', '$pick', '$drop', current_timestamp())";
	$result = mysqli_query($conn,$sql2);
		//echo "Deleted from requests table after reaching the location";
		//header("location:User_bookingProcedure");
		header('location:driverHistoryDB.php');
	}
	else{
        echo "error";
	}		
}
$conn->close();
?>
		
		