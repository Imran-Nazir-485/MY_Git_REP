<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
</head>
<body>

<main>
<form method="POST">
	
<input type="text" name="dep-city" placeholder="From:Airport & City">
<input type="text" name="dest-city" placeholder="To Airport & City">
<br>
<label>Departure Date</label>
<br>
<input type="date" name="dep-date" placeholder="Select Daparture Date">
<br>
<label>Passengers</label>
<br>
<input type="text" name="passengers" placeholder="Adult, Child, Infrant">
<br>
<label>Cabin</label>
<br>
<input type="text" name="cabin" placeholder="Economy">
<input type="submit" name="submit" value="FindFlight">

</form>
</main>


<style >
	*{margin: 0;padding: 0;box-sizing: border-box;}
	main{
		padding: 20px;
		margin: 10% 10%;
		border: 1px solid black;
	}
</style>
</body>
</html>




<?php

$connection=mysqli_connect("localhost","root","","airressystem");
// $db=mysqli_select_db($connection,"airressystem");

if(isset($_POST['submit']))
{
	$fromcity=$_POST['dep-city'];
	// $destcity=$_POST['dest-city'];
	// $dateofdep=$_POST['dep-date'];
	// $passengers=$_POST['passengers'];
	// $cabin=$_POST['cabin'];
// echo "$totcity";
$query = "SELECT * FROM `flightschedule` WHERE depcity='$fromcity'";
// 3- Run Query
$query_run = mysqli_query($connection,$query);
// 4- Show results
// $row=myslqi_fetch_assoc($query_run);
echo $query_run['price'];

}
?>




