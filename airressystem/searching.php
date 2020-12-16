<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
</head>
<body>

<main>
<form method="POST">
	
<input type="text" name="depcity" placeholder="From:Airport & City">
<input type="text" name="destcity" placeholder="To Airport & City">
<br>
<label>Departure Date</label>
<br>
<input type="date" name="depdate" placeholder="Select Daparture Date">
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
include 'dbconn.php';
if (isset($_POST['submit'])) {

$fromcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$dateofdep=$_POST['depdate'];
$passengers=$_POST['passengers'];
$cabin=$_POST['cabin'];

$myquery = "SELECT * FROM flightschedule ";

$myresult=mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if($myrow['depcity']==$fromcity){
	echo $myrow['depcity']."&nbsp&nbsp&nbsp&nbsp&nbsp".$myrow['destcity']."&nbsp&nbsp&nbsp&nbsp".$myrow['depdate']."<br>"."<hr>";
}

}
}


?>











