<?php

session_start();
include('dbConnection.php');

//define new variables
//$name = $password = $mobile = $addr = "";
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST["name"];
	$mobile= $_POST["mobile"];
	$address= $_POST["address"];
	$password= $_POST["password"];
	$cpassword= $_POST["cpassword"];
	$exists = false;
}

//--------- USER: creating session ------------
$_SESSION['name'] = $name;
$_SESSION['mobile'] = $mobile;
$_SESSION['address'] = $address;
$_SESSION['password'] = $password;
//--------- USER: creating session ------------

//check connection
if(!$conn){
    die("Connection error");
}
else{
	
	$query = "SELECT * FROM user_details WHERE umobile='$mobile'";
	$run = mysqli_query($conn, $query);
	if(mysqli_num_rows($run)>0){
		header('Location: userExists.php');
		exit();
	}
    if($password == $cpassword){
		$sql = "INSERT INTO user_details(`uname`, `umobile`,`uaddress`, `upassword`, `time`)
		VALUES ('$name', '$mobile','$address', '$password', current_timestamp())";
		$result = mysqli_query($conn,$sql);
		$_SESSION['status'] = "Try to Login!";
		header('location: ambulance_home.php');
	}
	else{
		header('Location: samePassword.php');
	}
}


$conn->close();

?>