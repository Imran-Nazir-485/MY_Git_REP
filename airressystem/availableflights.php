<?php
include 'dbconn.php';

$count=0;
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
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


echo "</tr> ";
echo "<tr>";
while($myrow = mysqli_fetch_assoc($myresult)){
	$count=$count+1;
echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>";
echo "</tr>";

}


echo "</table>  ";
echo "</center>";












?>