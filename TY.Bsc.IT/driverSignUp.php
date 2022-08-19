<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Driver Sign up</title>
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
  <link rel="stylesheet" href="driverStyle.css">
  <!--EXTERNAL CSS-->

</head>
<body> 

<?php 
session_start();
if(isset($_SESSION['error1'])){
?>
<div class='alert alert-danger alert-dismissible fade-show' role='alert'>
    <strong>ERROR: </strong>
	<?php echo $_SESSION['error1']; ?> 
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>	
<?php
}
unset($_SESSION['error1']);
if(isset($_SESSION['error2'])){
?>
<div class='alert alert-danger alert-dismissible fade-show' role='alert'>
    <strong>INVALID CREDENTIAL: </strong>
	<?php echo $_SESSION['error2']; ?> 
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
    <span aria-hidden='true'>&times;</span>
    </button>
</div>
<?php } unset($_SESSION['error2']); ?>



<!-- header -->
<header class="w3-container w3-theme" id="myHeader">
    <!-- Logo -->
    <img src="logo.jpg" alt="logo" class="w3-left" width="8%" height="12%" 
      style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
      <p>&nbsp;&nbsp;Mumbai Ambulance Services</p>
    <!-- Logo -->
    <h1>&nbsp;Driver Sign up <i class="fa fa-ambulance"></i></h1> 
</header>
<!-- Header --> 

<div>
  <h5 class="w3-center" style="padding-top:1%">
      <span class="DLogin">
          Already have an account?
          <a href="driverLogin.php"> Login.</a>
      </span>
  </h5>
</div>

<!-- Driver SignUp -->
<form action="driverSignUpAction.php" method="post" id="signup">
    <div class="container">
	  <label for="name"><b>Full Name</b></label>
      <input type="text" placeholder="Enter your name" name="name" required>
	  
      <label for="Mobile"><b>Mobile No.</b></label>
      <input type="text" placeholder="Enter your Mobile No." name="mobile" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="toggle1" required>
       
	   <label for="cpassword"><b>Confirm Password</b></label>
      <input type="password" placeholder="Re-enter your password" name="cpassword" id="toggle2" required>
       
	   <!-- An element to toggle between password visibility -->
       <input type="checkbox" onclick="myFunction()">Show Password

      <button type="submit" name="signup" id="signup">Sign Up</button>
    </div>
</form>
<!-- Driver Login -->

<!-- Script to Popup - Signup / Login -->
<script>

function myFunction() {
    var x = document.getElementById("toggle1");
	var y = document.getElementById("toggle2");
    if ((x.type === "password") || (y.type === "password")) {
      x.type = "text";
	  y.type = "text";
    } else {
      x.type = "password";
	  y.type = "password";
    }
}

</script>


<?php include('footer.php'); ?>
</body>
</html>