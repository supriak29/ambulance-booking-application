<?php						


// STORE User's Data into user_details table and then go to 
// ---->  location:bookingConfirmedAction.php   <-----------


session_start();
include('dbConnection.php');

//define new variables
$pickup = $dropoff = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$pickup= $_POST["pickup"];
$dropoff= $_POST["dropoff"];
}


// ------- creating session ---------
$_SESSION['pickup'] = $pickup;
$_SESSION['dropoff'] = $dropoff;
// ------- creating session ---------

//check connection
if(!$conn){
    die("Connection error");
}
else{	
	
	// INSERTING INTO user_booking table
	$mobile = $_SESSION['mobile'];	
	$sql = "INSERT INTO `user_booking` (`umobile`, `pickup`, `dropoff`, `status`, `dt`)
			VALUES ('$mobile', '$pickup', '$dropoff', 'booked', current_timestamp())";
	$result = mysqli_query($conn,$sql);
	//add a new data 
	if($result){
		//echo "Recorded into user_booking table";
		header("location:bookingConfirmedAction.php");
	}
	else{
        echo "error";
	}	

}

$conn->close();

?>


