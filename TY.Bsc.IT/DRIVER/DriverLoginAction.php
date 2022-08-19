<?php 

$servername = "localhost";
$username = "root";
$db = "ambulance";
$password = "";


//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if($conn->connect_error){
    die("Connection error");
}

//define new variables
$name = $pwd = $mobile = $addr = $cpwd = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $addr = $_POST["addr"];
    $pwd = $_POST["pwd"];
    $cpwd = $_POST["cpwd"];
}

?>