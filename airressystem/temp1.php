<?php
include 'dbconn.php';

$count=0;
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);

while($myrow = mysqli_fetch_assoc($myresult)){
echo "<center>";
echo "<table border='1' width='300' style=\"border-collapse:collapse; \">  ";
echo "<tr> ";
echo "<td>FlightId</td>  ";
echo "<td>DepartureCity</td>  ";
echo "<td>DestinationCity</td>  ";
echo "<td>DepartureTime</td>  ";
echo "<td>DepartureDate</td>  ";
echo "<td>DestinationDate</td>  ";
echo "<td>EconomyPrice</td>  ";
echo "<td>BusinessPrice</td>  ";
echo "<td>FlightDuration</td>  ";
echo "<td>TripType</td>  ";

echo "</tr> ";
echo "<tr>";

	if ($myrow['returndate']==0) {
	
echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>"."OneWay"."</td>";
echo "<input type=\"radio\"  name=\"triptype\" onclick=\"location.href=\"admin1.php?fid=$myrow['fid']\"\">";
echo "</tr>";

}
else{


echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>"."Return"."</td>";
echo "</tr>";

}

echo "</table>  ";
echo "</center>";
}











?>
