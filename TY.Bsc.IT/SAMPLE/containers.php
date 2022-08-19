<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>

<!--CONTAINER-->
<div style="padding-bottom: 4%; padding-top: 3%;">
  <!--ROW-->
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
<!-- CONTAINER -->

<h1><center>SERVICES<center></h1>

<div class="grid-container">
  <div class="item1" style="background-color:black">
		<h3>Patient Transfer</h3><br>
        <p class="up">For pre-planned non-emergency
		medical transfer and 
		Inter-facility transfer.</p>
  </div>
  <div class="border-right" style="background-color:black">
		<h3>Emergency Services</h3><br>
        <p class="up">For illness and injuries that require
		an urgernt medical response.</p>
  </div>
  <div class="grid3" style="background-color:black">
		<h3>Ambulance for Events</h3><br>
        <p class="up">For pre hospital care & transfer to the nearest hospital in case
		of emergency occurs during the event</p>
  </div>  
  <div class="grid4" style="background-color:black">
		<h3>Intercity Transfer</h3><br>
        <p class="up">For pre-planned non-emergency medical transfer & Inter-facility transfer</p>
  </div>
</div>


<h1><center>TYPES<center></h1>

<div class="grid-container">
  <div class="shadow p-3 mb-5 bg-white rounded" style="background-color:red">
		<h3>Basic Ambulance</h3><br>
        <p class="up">For pre-planned medical transfer and less critical cases</p>
  </div>
  <div class="border-right" style="background-color:red">
		<h3>Advance Ambulance</h3><br>
        <p class="up">For emergency cases transferring critically ill patients</p>
  </div>
  <div class="grid3" style="background-color:red">
		<h3>Neo Natal Ambulance</h3><br>
        <p class="up">For emergency transfers for neonated who require more specialist treatment
		at another hospital</p>
  </div>  
  <div class="grid4" style="background-color:red">
		<h3>Air Ambulance</h3><br>
        <p class="up">For immediate transfer to another states or country</p>
  </div>
</div>


</body>
</html>
