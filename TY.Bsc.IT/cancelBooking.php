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
	$sql = "UPDATE `user_booking` SET `status`='cancelled' WHERE umobile='$pat_mobile' ";
	$result = mysqli_query($conn,$sql);
	//add a new data 
	if($result){
		//echo "Deleted from requests table";
		header("location:delRequest.php");
	}
	else{
        echo "error";
	}		
}
$conn->close();
?>
	
		