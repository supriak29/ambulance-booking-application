<?php

session_start();
include('dbConnection.php');
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST["name"];
	$mobile= $_POST["mobile"];
	$password= $_POST["password"];
	$cpassword= $_POST["cpassword"];
}

//--------- creating session ------------
$_SESSION['dmobile'] = $mobile;
$_SESSION['dpassword'] = $password;
//--------- creating session ------------

//check connection
if(!$conn){
    die("Connection error");
}
else{
	
	$query = "SELECT * FROM driver_details WHERE dmobile='$mobile'";
	$run = mysqli_query($conn, $query);
	if(mysqli_num_rows($run)>0){
		$_SESSION["error1"] = "Mobile no. is a registered no.";
		header('Location: driverSignup.php');
		exit();
	}
    if($password == $cpassword){
		$sql = "INSERT INTO driver_details(`dname`, `dmobile`,`dpassword`, `dt`)
		VALUES ('$name', '$mobile','$password', current_timestamp())";
		$result = mysqli_query($conn,$sql);
		$_SESSION['status'] = "Try to Login!";
		header('location: driverLogin.php');
	}
	else{
		$_SESSION["error2"] = "Passwords don't match.";
		header('Location: driverSignup.php');
	}
}


$conn->close();

?>