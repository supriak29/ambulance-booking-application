<?php

session_start();
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
	$sql ="SELECT * FROM driver_details WHERE dmobile='$mobile' AND dpassword='$password'";
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result);
	if($num == 1){
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['dmobile'] = $mobile;
		header("Location: driverHome.php");
	}
	else{
		$_SESSION["error"] = "Mobile no. and password don't match. Try to login again.";
		header("Location: driverLogin.php");
	}
	
}



 $conn->close();

?>