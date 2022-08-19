<?php 
session_start(); 
include('dbConnection.php');

$_SESSION['pick'] = "";
$_SESSION['drop'] = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Driver Home</title>
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
    <h1><center>REQUESTS <i class="fa fa-ambulance"></i></center></h1>
	
	  <div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#myHeader">Home: REQUESTS</a></li>
	  <li><a href="driverHistory.php">Driver History</a></li>
	   <li><a href="driverLogin.php">Logout</a></li>
    </ul>
  </div>
	
</header>
<!-- Header --> 


<div style="padding-bottom: 4%; padding-top: 1%;">
    <div class="row"> <!--ROW-->
	
      <div class="col" style="padding-left:2%; padding-top:3%"><!--COLUMN 1-->
		<h3 style="text-align:center; color:red"><i>Requests for Ambulance:</i></h3>
			<div class="container" style="padding-top:4%">
			<table class="table table-border" style="border:2px solid; padding-top:5%">
			<thead>
			<tr>
				<th>Sr.No</th>
				<th>Patient Mobile</th>
				<th>Pick up</th>
				<th>Drop off</th>
				<th>Date/Time</th>
				<!--<th>Action</th>-->
			</tr>
			</thead>
			<tbody>
				<?php
				$c=1;
					$sql = "SELECT * FROM requests";
					$query=$conn->query($sql);
				while($row=$query->fetch_assoc())
				{
				?>
			<tr>
			<form>
				<td><?php echo $c++ ?></td>
				<td><?php $_SESSION['mobile']=$row['pat_mobile']; echo $_SESSION['mobile'];?></td>
				<td><?php $_SESSION['pick']=$row['pat_pick'] ; echo $_SESSION['pick'];?></td>
				<td><?php $_SESSION['drop']=$row['pat_drop']; echo $_SESSION['drop'];?></td>
				<td><?php echo $row['dt']; ?></td>
				<!--<td><button type="button" onClick="myFunct()" name="accept" class="btn btn-success">Accept</button></td> -->
			</form>
			</tr>
			<?php	
				} 
			?>
			</tbody>
			</table>
			<button type="submit" onClick="myFunct()" name="accept" class="btn btn-success">Accept</button> 	
	</div>
			
      </div> <!--COLUMN 1-->
	  
      <!-- COLUMN 2-->
      <div class="col" style="padding-right:3%; padding-top:4%"> 
	  <h5 style="color:blue">On call Confirmation (Patient's Contact No.): </h5>
	  <h5 id="pmob" style="color:red"></h5>
        <form action="trackOnMap.php" method="post">
            <div class="container">
				<label for="pickup"><b><u>Pick Up (Patient's Address): </u></b></label>
				<br>
				<p type="text" id="pick" name="pick"></p>
				<br>
				<label for="drop"><b><u>Drop off (Hospital Address): </u></b></label>
				<br>
				<p id="drop" name="drop"></p>
				<br>
				<button type="submit" name="track"><b>Track on Map</b></button>
			</div>
        </form>
      </div><!-- COLUMN 2-->
    </div> <!-- ROW -->
</div> <!-- CONTAINER -->

<?php
	$pick = $_SESSION['pick'];
	$drop = $_SESSION['drop'];
	$pmobile = $_SESSION['mobile'];
?>

<script>
function myFunct(){
var pick = "<?php echo $pick; ?>";
var drop = "<?php echo $drop; ?>";
var pmob = "<?php echo $pmobile; ?>";
document.getElementById("pick").innerHTML = pick;
document.getElementById("drop").innerHTML = drop;
document.getElementById("pmob").innerHTML = pmob;
}
</script>


<?php include('footer.php'); ?>
</body>
</html>