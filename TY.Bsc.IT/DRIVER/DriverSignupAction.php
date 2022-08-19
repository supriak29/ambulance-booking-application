<?php

session_start();

$servername = "localhost";
$username = "root";
$db = "ambulance";
$password = "";


//create connection
$conn = mysqli_connect($servername, $username, $password, $db);

	
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST["dname"];
	$mobile= $_POST["dmobile"];
	$password= $_POST["dpassword"];
	$cpassword= $_POST["cpassword"];
}

//check connection
if(!$conn){
    die("Connection error");
}
else{
	
	$query = "SELECT * FROM driver_details WHERE dmobile='$mobile'";
	$run = mysqli_query($conn, $query);

    if($dpassword == $cpassword){
		$sql = "INSERT INTO driver_details(`dname`, `dmobile`,`dpassword`, `dt`)
		VALUES ('$name', '$mobile','$password', current_timestamp())";
		$result = mysqli_query($conn,$sql);
		//$_SESSION['status'] = "Try to Login!";
		header('location: driverHome.php');
	}
	else{
		$_SESSION['status'] = "ERROR: Try to signup again";
		header('Location: driverSignup.php');
	}
}


$conn->close();

?>