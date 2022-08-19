<?php 
session_start(); 
include('dbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Track On Map</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDyQXoVJIBcwn4D2mQhQ4P9ioZ7uDDG4ug">  </script>

  <link rel="stylesheet" href="driverStyle.css">
<style>
a{	color:red;	}
</style>
</head>

<body>

<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
    <!-- Logo -->
    <img src="logo.jpg" alt="logo" class="w3-left" width="8%" height="8%" 
      style="padding-left:1%"><h2>&nbsp;M.A.S.</h2> 
      <p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
		<h4 style="text-align:right; color:#ff4538">
			Ambulance Driver Contact used:<br>
				<i>
					<?php 
						echo $_SESSION['dmobile']; 
					?>
				</i>
		</h4>
    <!-- Logo -->
   
	
	  <div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#myHeader">TRACK</a></li>
	  <li><a href="driverHome.php">Home</a></li>
	   <li><a href="driverLogin.php">Logout</a></li>
    </ul>
  </div>
	
</header>
<!-- Header --> 


<div style="padding-bottom: 4%; padding-top: 1%;">
    <div class="row"> <!--ROW-->
	
      <div class="col" style="padding-left:2%; padding-top:3%"><!--COLUMN 1-->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160984904!2d72.741099723027!3d19.082197839405396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1643296253820!5m2!1sen!2sin" width="100%" height="100%" style="border:0;">
          </iframe>
      </div> <!--COLUMN 1-->
	  
      <!-- COLUMN 2-->
      <div class="col" style="padding-right:3%; padding-top:10%; background-color:white">
 <h1><center>TRACK ON MAP<i class="fa fa-ambulance"></i></center></h1>
	  <br><br><br><br><br><br><br><br><br>
	  
       <!-- <form>
            <div class="container">
				<label for="pickup"><b>Pick Up (Patient's Address): </b></label>
				<br>
				<p></p>
				<br>
				<label for="drop"><b>Drop off (Hospital Address): </b></label>
				<br>
				<p id="drop"></p>
				<br>
				<button type="submit" name="track"><b>Track on Map</b></button>
			</div>
        </form> -->
      </div><!-- COLUMN 2-->
    </div> <!-- ROW -->
</div> <!-- CONTAINER -->


<?php include('footer.php'); ?>
</body>
</html>