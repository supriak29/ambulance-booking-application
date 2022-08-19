<?php 
session_start(); 
include('dbConnection.php');

?>
<html>
<head>
<title>Empanedlled Hospitals</title>
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
<header class="w3-container" style="background-color:black; color:white" id="myHeader">
  <!-- Logo -->
  <img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%" 
	style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
	<p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
  <!-- Logo -->
  
<!--Title: Booking Procedure -->
<div class="w3-center">
<h1>Hospitals<i class="fa fa-ambulance"></i></h1>
<!--Title: Booking Procedure -->
    
      <h4 style="color:#fc4c4c" class="w3-right">
        <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
		 <i style="color:#f71b1b">Centralised helpline no. 112 </i>
      </h4><br>
    </div>

  <!-- navigation bar -->
  <div>
    <ul class="nav nav-tabs">
     <!-- <li class="active"><a href="#myHeader">Hospitals</a></li> -->
	  <li class="active dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">HOSPITALS
        </a>
        <ul class="dropdown-menu">
          <li><a href="#generalHosp" style="color:red">General Purpose Hospitals</a></li>
          <li><a href="#diagCentre" style="color:red">Diagnostic Center</a></li>
          <li><a href="#superS" style="color:red">Super Speciality</a></li>
		  <li><a href="#more" style="color:red">More</a></li>
        </ul>
      </li>
      <li><a href="user_BookingProcedure.php">Booking Procedure</a></li>
	  <li><a href="nursingHomes.php">Private Nursing Homes</a></li>
	  <li><a href="userHistory.php">Your History</a></li>
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
<!-- List of General Purpose Hospitals -->
<div class="w3-center" style="padding-top:2%">
   <h3 style="color:blue"><i>GOVERNMENT OF INDIA
	MINISTRY OF HEALTH & FAMILY WELFARE</i></h3>
<h3 style="color:#468a2d"><i>CENTRAL GOVERNMENT HEALTH SCHEME</i></h3>
<h3 style="color:white; background-color:#fa0d05"><i><b>UPDATED LIST OF EMPANELLED HOSPITALS IN CGHS
	MUMBAI AS ON DATED 27-12-2018<b></i></h3><br>
</div>

<div id="generalHosp" class="container mt-3" style="background-color:#f2f2f2">
  <h2 style="color:red"><i>GENERAL PURPOSE HOSPITALS</i></h2>
  <p></p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Name of the Hospital</th>
        <th>Address</th>
		<th>Tel. Phone No.</th>
		<th>Name of the nodal Officer</th>
		<th>Mobile/Telephone No.</th>
      </tr>
    </thead>
    <tbody id="myTable">
		<?php
			$c=1;
			$sql = "SELECT * FROM hospitals";
			$query=$conn->query($sql);
			while($row=$query->fetch_assoc())
			{
		?>
      <tr>
        <td><?php echo $c++ ?></td>
		<td><?php echo $row['hospital_name']; ?></td>
		<td><?php echo $row['hospital_address']; ?></td>
		<td><?php echo $row['telephone1']; ?></td>
		<td><?php echo $row['nodal_officer']; ?></td>
		<td><?php echo $row['telephone2']; ?></td>
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
<!-- List of General Purpose Hospitals -->

<br><br>
<!-- List of Diagnostic Centres -->
<div id="diagCentre" class="container mt-3" style="background-color:#f2f2f2">
  <h2 style="color:red"><i>DIAGNOSTIC CENTRES</i></h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Diagnostic Centres</th>
        <th>Address</th>
		<th>Telephone No.</th>
		<th>Name of the nodal Officer</th>
		<th>Mobile/Telephone No.</th>
      </tr>
    </thead>
    <tbody id="myTable">
		<?php
			$c=1;
			$sql = "SELECT * FROM diagnostic_centers";
			$query=$conn->query($sql);
			while($row=$query->fetch_assoc())
			{?>
      <tr>
        <td><?php echo $c++ ?></td>
		<td><?php echo $row['diag_center']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['tel1']; ?></td>
		<td><?php echo $row['nodal_officer']; ?></td>
		<td><?php echo $row['tel2']; ?></td>
      </tr>
		<?php } ?>
    </tbody>
  </table> 
</div>
<!-- List of Diagnostic Centres -->
<br><br>
<!-- Super Speciality -->
<div id="superS" class="container mt-3" style="background-color:#f2f2f2">
  <h2 style="color:red"><i>SUPER SPECIALITY</i></h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Centre</th>
        <th>Address</th>
		<th>Telephone No.</th>
		<th>Name of the nodal Officer</th>
		<th>Mobile/Telephone No.</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
	  <td>1</td>
        <td>WOCKHARDT HOSPITAL (Note: For Cardiology, Cardiac Surgeries, Liver Transplant,
			Kidney Transplant, Medical Admission, Orthopaedic, Bariatric, Oncology - Chemotherapy)
		</td>
		<td>1877, Dr. Anand Rao Marg, Mumbai Central - 400 011</td>
		<td>022- 61784444</td>
		<td>1. UJWALA TAMBE <br> 2. SHAURYA PATIL</td>
		<td>08451011656 <br> 8451011656</td>
      </tr>
    </tbody>
  </table> 
</div>
<!-- Super Speciality -->

<br><br>
<!-- MORE -->
<div id="more" class="container mt-3">
<h2 style="color:red; padding-bottom:2%"><i><u>MORE</u></i></h2>
<h4>OM regarding simplification of referral system under CGHS :
	<a style="color:blue" href="http://www.cghsmumbai.gov.in/htmldocs/simplification.pdf">
	<i>Click here!</i></a>
</h4>
<h4>Metropolis Center list under CGHS Mumbai :
	<a style="color:blue" href="http://www.cghsmumbai.gov.in/htmldocs/metropolis.pdf">
	<i>Click here!</i></a>
</h4>
<h4>2010 Rate list of CGHS Mumbai :
	<a style="color:blue" href="http://www.cghsmumbai.gov.in/htmldocs/Rate%20list.pdf">
	<i>Click here!</i></a>
</h4>
<h4>2002 Rate list of CGHS Mumbai :
	<a style="color:blue" href="http://www.cghsmumbai.gov.in/htmldocs/Rate2002.pdf">
	<i>Click here!</i></a>
</h4>
<h4>Rates list of Diagnostic Labs & Imaging Centres CGHS Mumbai :
	<a style="color:blue" href="http://www.cghsmumbai.gov.in/htmldocs/Diagnostic.pdf">
	<i>Click here!</i></a>
</h4><br>
<h4>AIIMS Rate list:
	<a style="color:blue"style="color:blue" href="http://www.aiims.edu/aiims/hosp-serv/revised-rate-list.htm"> http://www.aiims.edu/aiims/hosp-serv/revised-rate-list.htm</a>
</h4><br><br>
<h3 style="color:black; background-color:yellow">NOTE:</h3>
<p style="color:red">The HCO provides Cashless treatment facility/ investigation to CGHS Pensioners,
etc.,with prior permission and to CGHS beneficiaries for treatment under emergency
by Hospitals, Diagnostics laboratories and Image Centres empanelled under CGHS.</p>
<p style="color:black">(OM. No. C. 14012/45/2008/CGHSIII (Vol. II) dated 18the December 2015).</p>
</div>
<!-- MORE -->

<!-- body -->
<br><br>

<?php include('footer.php'); ?>
</body>
</html>