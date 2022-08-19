<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$uname= $_POST["uname"];
	$umobile= $_POST["umobile"];
}

$_SESSION['uname'] = $uname;
$_SESSION['umobile'] = $umobile;
echo "success";

?>
