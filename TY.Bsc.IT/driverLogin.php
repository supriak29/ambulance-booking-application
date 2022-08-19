<!DOCTYPE html>
<html lang="en">
<head>
  <title>Driver Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="driverStyle.css">

</head>

<body>

<?php 
session_start();
if(isset($_SESSION['error'])){
?>

<div class='alert alert-danger alert-dismissible fade-show' role='alert'>
    <strong>Invalid Credentials!</strong>
	<?php echo $_SESSION['error']; ?> 
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>	
<?php	
} unset($_SESSION['error']);
?>

<?php 
if(isset($_SESSION['status'])){
?>
<!--
<div class='alert alert-success alert-dismissible fade-show' role='alert'>
    <strong>Driver Registered</strong>
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>	 -->
<?php	
} unset($_SESSION['status']);
?>

<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
    <!-- Logo -->
    <img src="logo.jpg" alt="logo" class="w3-left" width="8%" height="8%" 
      style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
      <p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
    <!-- Logo -->
    <h1>&nbsp;Driver Login <i class="fa fa-ambulance"></i></h1> 
</header>
<!-- Header --> 

<div>
  <h5 class="w3-center" style="padding-top:1%">
      <span class="DSignup">
	  
	  <?php 
		if(!isset($_SESSION['status'])){
		?>
			Don't have an account? 
          <a href="driverSignup.php">Sign Up.</a>
		<?php	
			}
		?>
      </span>
  </h5>
</div>

<!-- Driver Login -->
<form action="driverLoginAction.php" method="post" id="login">
    <div class="container">
      <form>
		<label for="phone"><b>Mobile No.</b></label>
		<input type="text" placeholder="Enter Registered Mobile No." name="mobile" required>
  
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" id="Dtoggle" required>
		<!-- An element to toggle between password visibility -->
		<input type="checkbox" onclick="myFunction()">Show Password
	   
		<button type="submit">Login</button>
		</form>
    </div>
</form>
<!-- Driver Login -->

<!-- Script to TOGGLE - Signup / Login -->
<script>

function myFunction() {
    var x = document.getElementById("Dtoggle");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}
</script>




<?php include('footer.php'); ?>
</body>
</html>