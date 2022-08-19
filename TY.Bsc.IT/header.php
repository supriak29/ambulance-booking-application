<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


 <!-- Logo -->
  <img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%" 
	style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
	<h3>Mumbai Ambulance Services &nbsp;&nbsp;<i class="fa fa-ambulance"></i></h3>
  <!-- Logo -->

<nav class="navbar navbar-expand-sm bg-transparent">
  <ul class="navbar-nav">
    <li class="nav-item" onclick="document.getElementById('id02').style.display='block'">
      <a class="nav-link" href="#login">Login</a>
    </li>
    <li class="nav-item" onclick="document.getElementById('id01').style.display='block'">
      <a class="nav-link" href="#signup">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#services">Services</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link" href="#types">Types</a>
    </li>
	    <li class="nav-item">
      <a class="nav-link" href="#hospitals.php">Hospitals</a>
    </li>
	    <li class="nav-item">
      <a class="nav-link" href="#nursingHomes.php">Private Nursing Homes</a>
    </li>
  </ul>
</nav>
<br>

<div class="container-fluid">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <p>The navbar-expand-xl|lg|md|sm class determines when the navbar should stack vertically (on extra large, large, medium or small screens).</p>
</div>

</body>
</html>
