<html>
<head>
<title>JS Example</title>
</head>
<body>
	<h1>JS EXAMPLE</h1>
	<p id="demo"></p>
	
<table class="table table-border">
<thead>
	<tr>
		<th>Sr.No</th>
		<th>Patient Mobile</th>
		<th>Pick up</th>
		<th>Drop off</th>
		<th>Date/Time</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<tr>
		<form>
			<td>1</td>
			<td>Supriya</td>
			<td>Saniya</td>
			<td>Kush</td>
			<td>Gunalaxmi</td>
			<td><button type="button" onClick="myFunct()">Accept</button></td>
		</form> 
	</tr>
</tbody>
</table>
	<p id="accept"><p>

<br><br>
<form action="#" method="post" id="move">
<div class="container">
        <label for="pickup"><b>Pick Up point</b></label>
        <input type="text" placeholder="Enter pickup point of patient" 
			   name="pickup" class="form-control" required><p id="pick"></p></input><br><br>
        <label for="dropoff"><b>Destination</b></label>
        <input type="text" placeholder="Enter destination (hospital)" 
			   name="dropoff" required><br><br>
		<button type="button" onClick="Funct2()"><b>Track on Map</b></button>
</div>
</form>

<p id="eg"></p>

<?php
session_start();
$_SESSION['place']= "borivali";
$placephp = $_SESSION['place'];
?>

<script>
	document.getElementById("demo").innerHTML = "My first JS";
	function myFunct(){
		document.getElementById("pick").innerHTML = "Dahisar";
	}
function Funct2(){
//alert(<?php echo $_SESSION['place']; ?>);
//document.getElementById("eg").innerHTML = alert(<?php echo $_SESSION['place']; ?>);
var vb = "<?php echo $placephp; ?>";
alert("place = "+vb);
document.getElementById("eg").innerHTML = vb;
}	

</script>

</body>
</html>