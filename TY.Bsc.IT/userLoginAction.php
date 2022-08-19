<?php


include('dbConnection.php');

//define new variables
$password = $mobile = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$password= $_POST["password"];
	$mobile= $_POST["mobile"];
}
//check connection
if(!$conn){
    die("Connection error");
}
else{
	$sql ="SELECT * FROM user_details WHERE umobile='$mobile' AND upassword='$password'";
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result);
	if($num == 1){
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['status'] = true;
		$_SESSION['mobile'] = $mobile;
		header("Location: User_BookingProcedure.php");
	}
	else{
		header("Location: invalid.php");
	}
}

/* 

if pickup != null AND dropoff != NULL ---> insert into user_booking table 

insert only after submit button is clicked 

*/


 $conn->close();

?>