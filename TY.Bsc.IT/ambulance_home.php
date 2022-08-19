<!DOCTYPE html>
<html lang="en">
<head>
  <title>M.A.S.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--EXTERNAL CSS-->
  <link rel="stylesheet" href="userStyle.css">
  <!--EXTERNAL CSS-->
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 50px;
  background-color: white;
  padding: 10px;
}
.grid-container > div {
  color:white;
  text-align: center;
  padding: 20px;
}
a{
	color:red;
}
a:hover{
	background-color:white;
}
</style>
</head>
<body> 
  
<?php 
session_start();
if(isset($_SESSION['status'])){
?>
<div class='alert alert-success alert-dismissible fade-show' role='alert'>
    <strong>Successfully Signed Up! </strong>
	<?php //echo $_SESSION['status']; ?> 
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>	
<?php	
	unset($_SESSION['status']);
}
?>
  
<!-- header -->
<header class="w3-container" style="background-color:black; color:white" id="myHeader">
	<!-- Logo & M.A.S. -->
	<img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%">
		<h2>&nbsp;M.A.S.</h2>
		<h3>&nbsp;Mumbai Ambulance Services</h3>
	<!-- Logo & M.A.S. -->
  
	<!-- Helpline No. -->
    <h4 style="color:#fc4c4c; text-align:right">
    <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
	<i style="color:#f71b1b">Centralised helpline no. 112 </i>
    </h4><br>
	<!-- Helpline No. -->
	  
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-sm" style="padding-bottom:0px">
		<ul class="navbar-nav">
			<li class="nav-item" onclick="document.getElementById('id02').style.display='block'">
				<a class="nav-link" href="#login">Login</a>
			</li>
			<li class="nav-item" onclick="document.getElementById('id01').style.display='block'">
				<a class="nav-link" href="#signup">Sign Up</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#services">Services in Mumbai</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#types">Types of Ambulance</a>
			</li>
		</ul>
	</nav>
	<!-- navigation bar -->
</header>
<!-- header--> 

<!-- CONTAINER: slogan & ambulance image -->
<div style="padding-bottom: 4%; padding-top: 3%;">
  <!--ROW 1-->
  <div class="row"> 
    <!--COLUMN 1-->
    <div class="col"> 
        <h1 style="padding-left:5%; padding-top: 10%;">
            AT YOUR SERVICE<BR>BOOKING AN AMBULANCE MADE EASY...
        </h1>
    </div>
    <!--COLUMN 1-->
    <!-- COLUMN 2-->
   <div class="col"> 
      <img class="w3-image" src="amb2.jpg" style="box-shadow: 10px 10px 5px grey"
          alt="Ambulance" width="95%" height="100%">
    </div>
    <!-- COLUMN 2-->
  </div> 
  <!-- ROW -->
</div> 
<!-- CONTAINER:  slogan & ambulance image -->

<!-- Signup Popup -->
<div id="id01" class="modal">
	<!-- Form: sign up -->
  <form class="modal-content animate" action="userSignupAction.php" method="post">
   
   <!-- Form title: sign up -->
	<div class="w3-center" style="padding-top:1%">
      <h3><b>Sign Up</b></h3>   
    </div>
	<!-- Form title: sign up -->
	
	<!-- Sign up: Body -->
    <div class="container"> 
      <label for="name" style="padding-top:10px;"><b>Full Name</b></label>
      <input type="text" placeholder="Enter your name" id="name" name="name" required>

      <label for="mobile"><b>Mobile no.</b></label>
      <input type="text" placeholder="Enter mobile no." id="signupMob" name="mobile" required>
	   
      <label for="addr"><b>Address</b></label>
	  <textarea class="form-control" rows="5" name="address"></textarea>
  
      <label for="pwd"><b>Set Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="toggle" required>
      <label for="cpwd"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password again" name="cpassword" id="toggle2" required>
      <!-- An element to toggle between password visibility -->
      <input type="checkbox" onclick="myFunction()">Show Password

      <button type="submit" name="signup_submit">Sign up</button>
    </div>
	<!-- Sign up: Body -->
  </form>
  <!-- Form: sign up -->
</div>
<!-- Signup Popup -->


<!-- Login Popup -->
<div id="id02" class="modal">
  <!-- Form: Login -->
  <form class="modal-content animate" action="userLoginAction.php" method="post">
	<!-- Title: Login -->
    <div class="w3-center" style="padding-top:1%">
      <h3><b>Login</b></h3>   
    </div>
	<!-- Title: Login -->

    <div class="container">
      <label for="mobile" style="padding-top:10px;"><b>Mobile</b></label>
      <input type="text" placeholder="Enter your Mobile no." id="loginMob" name="mobile" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="toggle3" required>
       <!-- An element to toggle between password visibility -->
       <input type="checkbox" onclick="myFunction()">Show Password

      <button type="submit" name="login_submit">Login</button>
    </div>
  </form>
  <!-- Form: Login -->
</div>
<!-- Login Popup -->

<!-- Script to Popup AND Set visibility of password -->
<script>
//Script to toggle password
  function myFunction() {
    var y = document.getElementById("toggle");
    var z = document.getElementById("toggle2");
    var x = document.getElementById("toggle3");
    
    if (y.type === "password" || z.type === "password" || x.type === "password") {
      y.type = "text";
      z.type = "text";
      x.type = "text";
    } else {
      y.type = "password";
      z.type = "password";
      x.type = "password";
    }

}

// Script to Popup - Signup / Login
var x = document.getElementById('id01');
var y = document.getElementById('id02');
  
// When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == x) {
          x.style.display = "none";
      }
      if(event.target == y) {
        y.style.display = "none";
      }
  }
</script>
<!-- Script to Popup AND Set visibility of password -->



<!-- page content -->
<div class="w3-content" style="padding-bottom:5%">

<!-- Title 1 -->
<h3 id="services">
<center>
	AMBULANCE SERVICES IN MUMBAI
<center>
</h3>
<center><i class="fa fa-ambulance fa-3x"></i></center>
<!-- Title 1 -->

<!-- Row 1 -->
<div class="grid-container">
  <div class="item1" style="background-color:black">
		<h3>Patient Transfer</h3><br>
        <p class="up">For pre-planned non-emergency
		medical transfer and 
		Inter-facility transfer.</p>
  </div>
  <div class="item2" style="background-color:black">
		<h3>Emergency Services</h3><br>
        <p class="up">For illness and injuries that require
		an urgernt medical response.</p>
  </div>
  <div class="item3" style="background-color:black">
		<h3>Ambulance for Events</h3><br>
        <p class="up">For pre hospital care & transfer to the nearest hospital in case
		of emergency occurs during the event</p>
  </div>  
  <div class="4" style="background-color:black">
		<h3>Intercity Transfer</h3><br>
        <p class="up">For pre-planned non-emergency medical transfer & Inter-facility transfer</p>
  </div>
</div>
<!-- Row 1 -->

<!-- Title -->
<div class="w3-container w3-margin-top w3-center" id="types" 
	 style="padding-top:40px">
    <h3>TYPES OF AMBULANCE IN MUMBAI</h3>
	<i class="fa fa-ambulance fa-3x"></i>
</div>
    <!-- Title -->

<!-- Row 2 -->
<div class="grid-container">
  <div class="item1" style="background-color:red">
		<h3>Basic Ambulance</h3><br>
        <p class="up">For pre-planned medical transfer and less critical cases</p>
  </div>
  <div class="item2" style="background-color:red">
		<h3>Advance Ambulance</h3><br>
        <p class="up">For emergency cases transferring critically ill patients</p>
  </div>
  <div class="item3" style="background-color:red">
		<h3>Neo Natal Ambulance</h3><br>
        <p class="up">For emergency transfers for neonated who require more specialist treatment
		at another hospital</p>
  </div>  
  <div class="item4" style="background-color:red">
		<h3>Air Ambulance</h3><br>
        <p class="up">For immediate transfer to another states or country</p>
  </div>
</div>
<!-- Row 2 -->

</div><!-- page content -->


<?php include('footer.php'); ?>
</body>
</html>

<script>
	$(document).ready(function(){
		$(#loginMob).keyup(function(){
			var Value=$(#loginMob).val();
		});
	});
</script>
