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
echo "<center>";
echo "<table border='1' width='300' style=\"border-collapse:collapse; \">  ";
echo "<tr> ";
echo "<td>FlightId</td>  ";
echo "<td>DepartureCity</td>  ";
echo "<td>DestinationCity</td>  ";
echo "<td>DepartureTime</td>  ";
echo "<td>DepartureDate</td>  ";
echo "<td>DestinationDate</td>  ";
echo "<td>Price</td>  ";
echo "<td>FlightDuration</td>  ";
echo "<td>SelectFlight</td>  ";

echo "</tr> ";
echo "<tr>";
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow["depcity"]==$fromcity) 
{
echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>". "<input type=\"checkbox\"  value=\"Booked\" style=\" width:\" 30px\">"."</td>";
echo "</tr>";
}



}


echo "</table>  ";
echo "</center>";

}


?>











