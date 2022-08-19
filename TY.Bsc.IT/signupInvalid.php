<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Error</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!--EXTERNAL CSS-->
  <link rel="stylesheet" href="userStyle.css">
  <!--EXTERNAL CSS-->

</head>

<body> 
  
<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
  <!-- Logo -->
  <img src="logo.jpg" alt="logo" class="w3-left" width="8%" height="8%" 
	style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
	<p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
  <!-- Logo -->


<h4 style="color:#fc4c4c; padding-top:2%" class="w3-right">
        <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
		 <i style="color:#f71b1b">Centralised helpline no. 112 </i>
      </h4><br>
</header>
<!-- header--> 


<div class="container" style="background-color:brown; padding:10%; color:white">
  <h1>Passwords do not match</h1>
  <h3>Go Back to home page and try to signup again</h3>
  <form action="ambulance_home.php">
  <button type="submit" class="w3-center">Go Back To Home</button>
</form>
</div><!-- page content -->


<?php include('footer.php'); ?>
</body>
</html>
