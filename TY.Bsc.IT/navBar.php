<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<header class="w3-container" style="background-color:black; color:white" id="myHeader">

<!-- Logo -->
<img src="logo.jpg" alt="logo" class="w3-left" width="7%" height="12%" style="padding-left:1%"><h2>&nbsp;M.A.S.</h2>
<h3>Mumbai Ambulance Services &nbsp;&nbsp;
	<i class="fa fa-ambulance"></i>
</h3>
<!-- Logo -->
<!-- Emergency Contact -->
<h4 style="color:#fc4c4c; padding-top:2%" class="w3-right">
    <i class="fa fa-phone"></i>
        Helpline: 102 , 1298 , 022-24308888<br>
	<i style="color:#f71b1b">Centralised helpline no. 112 </i>
</h4><br>
<!-- Emergency Contact -->


<nav class="navbar navbar-inverse bg-transparent">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

</header>
  
<div class="container">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
</div>

</body>
</html>
