<?php
session_start();
include('dbConnection.php');

?>
<html>
<head>
<title>Booking Confirmed</title>
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

  <!--EXTERNAL CSS-->
  <link rel="stylesheet" href="userStyle.css">
  <!--EXTERNAL CSS-->
</head>
<body>

<!--Success message to be displayed-->
<div class='alert alert-success alert-dismissible fade-show' role='alert'>
    <strong>Booking Confirmed </strong>  
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>
<!--Success message to be displayed-->


<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
    <!-- Logo -->
    <img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%" 
      style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
      <p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
    <!-- Logo -->
  
<!--Title: Booking Procedure -->
<h1 class="w3-center">Booking Confirmed <i class="fa fa-ambulance"></i></h1>
<!--Title: Booking Procedure -->
  
<h4 style="color:#fc4c4c; padding-top:2%; text-align:right">
        <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
		 <i style="color:#f71b1b">Centralised helpline no. 112 </i>
      </h4><br>
    </div>

  <!-- navigation bar -->
  <div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#myHeader">Booking Confirmed</a></li>
	  <li><a href="user_BookingProcedure.php">Home</a></li>
      <li><a href="hospitals.php">Hospitals</a></li>
	  <li><a href="nursingHomes.php">Private Nursing Homes</a></li>
	  <!--<li><a href="userHistory.php">Your History</a></li>-->
      <li><a href="ambulance_home.php">Logout</a></li>
    </ul>
  </div>
  <!-- navigation bar -->
  </header>
  <!-- header--> 
  
  <div><!--CONTAINER-->
    <div class="row"> <!--ROW-->
  
    <!--COLUMN 1-->
      <div class="col" style="padding-left:2%; padding-top:2%"> <!--COLUMN 1-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160984904!2d72.741099723027!3d19.082197839405396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1643296253820!5m2!1sen!2sin" width="100%" height="85%" style="border:0;"  loading="lazy">
          </iframe>
      </div><!--COLUMN 1-->
    
      <!-- COLUMN 2-->
      <div class="col" style="padding:2%; background-color:#ab0306">
		
		<p style="text-align:right; color:white">
			Your Mobile No.: <i><?php echo $_SESSION['mobile'];?></i>
		</p> <!-- SESSION for user's mobile no. is been created -->
			
			<div style="color:white">
			<ul>
			<li><h3>Your Booking has been confirmed!</h3></li>
				<p>Ambulance will soon reach your location...</p>	
			<li><h3>You will get a call.</h3></li><br>
				<p>Payment to Ambulance Driver personally.</p>
			</div>
			<form action="cancelBooking.php" method="post"> <!--form 1-->
				<!-- Proceed Button-->
				<button type="submit" name="cancelBooking" id="cancelBooking" value="submit" style="width:25%; background-color:black">
                    Cancel Booking
				</button><br>
			</form> <!--form 1-->
			<form action="reachedHospital.php" method="post"> <!--form 2-->
					<button type="submit" name="reachedHospital" id="reachedHospital" value="submit" style="width:25%; background-color:black">
						Reached Hospital
					</button>
			</form> <!--form 2-->
      </div><!-- COLUMN 2-->
  
    </div> <!-- ROW -->
  </div> <!-- CONTAINER -->
  
<?php include('footer.php'); ?>
</body>
</html>
  