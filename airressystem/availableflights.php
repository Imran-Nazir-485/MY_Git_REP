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

























<!-- <?php -->
 // include 'dbconn.php';
 // if (isset($_POST['submit'])) {

// $cabin=0;
// $deptime=0;
// $flightid=0;
// $tickets=0;

 	
// $flightid=$_POST['flightid'];
// $depcity=$_POST['depcity'];
// $dateofdep=$_POST['depdate'];
// $deptime=$_POST['deptime'];
// $tickets=$_POST['tickets'];


//require "adsmin1.php";

}

 //session_start();
//$cabin=$_SESSION["cabin"];

// $_SESSION["depcity"]=$fromcity;
// $_SESSION["destcity"]=$destcity;
// $_SESSION["depdate"]=$dateofdep;
// $_SESSION["cabin"]=$cabin;


// $myquery = "SELECT * FROM flightschedule ";
// $myresult=mysqli_query($myconn,$myquery);
// echo "<center>";
// echo "<table border='1' width='300' style=\"border-collapse:collapse; \">  ";
// echo "<tr> ";
// echo "<td>FlightId</td>  ";
// echo "<td>DepartureCity</td>  ";
// echo "<td>DestinationCity</td>  ";
// echo "<td>DepartureTime</td>  ";
// echo "<td>DepartureDate</td>  ";
// echo "<td>DestinationDate</td>  ";
// echo "<td>Price</td>  ";
// echo "<td>FlightDuration</td>  ";
// // echo "<td>SelectFlight</td>  ";
// echo "</tr> ";
// echo "<tr>";

// while($myrow = mysqli_fetch_assoc($myresult)){
// if ("Economy"==$cabin) {	
// if ($myrow["depcity"]==$fromcity && $myrow["destcity"]==$destcity && $myrow["depdate"]==$dateofdep && $myrow["reseats"]>0) 
// {
// echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>";
// echo "</tr>";
// }
// }
// if ("Business"==$cabin) {
// if ($myrow["depcity"]==$fromcity && $myrow["destcity"]==$destcity && $myrow["depdate"]==$depdate && $myrow["rbseats"]>0) 
// {
// echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>";
// echo "</tr>";
// }
// echo "</table>  ";
// echo "</center>";

// }
// }
// echo "<br>";echo "<br>";
// echo "<center>";

// echo    "Flightid" ."<input type=\"text\" name=\"flightid\"   value=\"\" placeholder=\"FlightId\" >". "Flightid" ."DapartureDate"."<input type=\"date\" name=\"depdate\"   value=\"DapartureDate\" >"."<br>" ;
// echo    "DepartureTime" ."<input type=\"time\" name=\"deptime\"   value=\"DapartureTimw\" >". "Tickets" ."<input type=\"number\" name=\"tickets\"  max=\"5\"  min=\"1\" value=\"Tickets\" >"."<br>" ;

// echo "</center>";


// }
//?> 