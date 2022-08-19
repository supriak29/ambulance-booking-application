<?php 
session_start(); 
include('dbConnection.php');

?>
<html>
<head>
<title>UserHistory</title>
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
  <style>
  a{
	  color:red;
  }
  </style>
</head>
<body>


<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
    <!-- Logo -->
    <img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%" 
      style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
      <p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
    <!-- Logo -->
  
<!--Title: Booking Procedure -->
<h1 class="w3-center">HISTORY&nbsp;<i class="fa fa-ambulance"></i></h1>
<!--Title: Booking Procedure -->
  
<h4 style="color:#fc4c4c; padding-top:2%" class="w3-right">
        <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
		 <i style="color:#f71b1b">Centralised helpline no. 112 </i>
      </h4><br><br>

  <!-- navigation bar -->
  <div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#myHeader">Your History</a></li>
	  <li><a href="user_BookingProcedure.php">Booking Procedure</a></li>
	  <li><a href="hospitals.php">Hospitals</a></li>
	  <li><a href="nursingHomes.php">Private Nursing Homes</a></li>
	   <li><a href="ambulance_home.php">Logout</a></li>
      <!--
      <li onclick="document.getElementById('id02').style.display='block'" 
      style="width:auto;"><a href="settings.html">Settings</a></li>
  -->
    </ul>
  </div>
  <!-- navigation bar -->
 </header>
  <!-- header--> 
  
<!-- body -->
<h1><?php $umobile = $_SESSION['mobile']?></h1>
<div class="container mt-3" style="background-color:#f2f2f2">
  <h2 style="color:red"><i>Your Records:</i></h2>
  <p></p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Pick up location</th>
		<th>Drop off location</th>
		<th>Status</th>
		<th>Date/Time</th>
      </tr>
    </thead>
    <tbody id="myTable">
		<?php
			$c=1;
			$sql = "SELECT * FROM user_booking WHERE umobile='$umobile'";
			$query=$conn->query($sql);
			while($row=$query->fetch_assoc())
			{ 
		?>
      <tr>
        <td><?php echo $c++ ?></td>
		<td><?php echo $row['pickup']; ?></td>
		<td><?php echo $row['dropoff']; ?></td>
		<td><?php echo $row['status']; ?></td>
		<td><?php echo $row['dt']; ?></td>
      </tr>
		<?php } ?>
    </tbody>
  </table> 
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<!-- body -->



<?php include('footer.php'); ?>
</body>
</html>