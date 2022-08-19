<?php 
session_start(); 
include('dbConnection.php');

?>
<html>
<head>

<title>Private Nursing Homes</title>

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
table, th, td{
	border: 1px solid;
}
.table-fixed thead{

	background: #f2322c;
	color: #fff;
}
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
<h1 class="w3-center">Private Nursing Homes<i class="fa fa-ambulance"></i></h1>
<!--Title: Booking Procedure -->
  
<h4 style="color:#fc4c4c; padding-top:2%" class="w3-right">
        <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
		 <i style="color:#f71b1b">Centralised helpline no. 112 </i>
      </h4><br><br>
  <!-- navigation bar -->
  <div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#myHeader">Private Nursing Homes</a></li>
	  <li><a href="hospitals.php">Hospitals</a></li>
      <li><a href="user_BookingProcedure.php">Home</a></li>
	  <li><a href="userHistory.php">Your History</a></li>
	  <li><a href="ambulance_home.php">Logout</a></li>
    </ul>
  </div>
  <!-- navigation bar -->
  </header>
<!-- header--> 



<!-- body -->
<div class="w3-center" style="padding-top:2%">
   <h3 style="color:blue"><i>MUNICIPAL CORPORATION OF GREATER MUMBAI</i></h3>
<h3 style="color:white; background-color:#fa0d05"><i>
<b>REGISTERED PRIVATE NURSING HOME LIST<b></i></h3><br>
</div>

<div class="container mt-3" style="background-color:#f2f2f2">
  <h2 style="color:#f00d05"><i>PRIVATE NURSING HOMES</i></h2>
  <p></p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-condensed table-fixed">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Ward</th>
        <th>Name of Registered Nursing Home</th>
		<th>Address</th>
		<th>No. of Beds</th>
		<th>Contact No.</th>
      </tr>
    </thead>
    <tbody id="myTable">
		<?php
			$c=1;
			$sql = "SELECT * FROM nursing_home";
			$query=$conn->query($sql);
			while($row=$query->fetch_assoc())
			{
		?>
      <tr>
        <td><?php echo $c++ ?></td>
		<td><?php echo $row['ward']; ?></td>
		<td><?php echo $row['nursing_home_name']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['beds']; ?></td>
		<td><?php echo $row['contact']; ?></td>
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