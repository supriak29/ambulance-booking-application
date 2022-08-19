<?php
session_start();
include('dbConnection.php');

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
	if($result){
		//echo "Deleted from requests table --- BOOKING CANCELLED";
		header("location:User_BookingProcedure.php");
	}
	else{
        echo "error";
	}
}
$conn->close();
?>
		
		