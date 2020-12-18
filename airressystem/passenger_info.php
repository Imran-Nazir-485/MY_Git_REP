<!DOCTYPE html>
<html>
<head>
<title>Passenger_Info</title>
</head>
<body>




<main>
<form method="POST">
<div id="main-div">

F-Name<input type="text" name="fname">
L-Name<input type="text" name="lname">
<br>
DateOfBirth<input type="date" name="dateofbirth">
Nationality
<select name="nationality">
<option>PAKISTAN</option>
<option>IRAN</option>
<option>PALESTINE</option>
<option>AFGHANISTAN</option>
<option>SAUDI-ARIBA</option>
<option>UAE</option>
<option>QATA</option>
<option>UK</option>
<option>CHINA</option>

</select>
OtherServices<!-- <input type="text" name="gender"> -->
<select name="otherservices">
	<option>None</option>
<option>WheelChair</option>
<!-- <option>Female</option>
<option>Other</option> -->
</select>
<br>
CNIC<input type="text" name="cnic">
PassportNumber<input type="text" name="passport">

<input type="submit" name="submit">



</div>
</form>
</main>









</body>
<style >
*{margin: 0;padding: 0;box-sizing: border-box;}
main{margin: 5% 10%;
	padding: 10Px;
border: 1px solid black;}
#main-div{
	padding: 10px;
	border: 1px solid black;
}
</style>



</html>




<?php

$pid=2;
include 'dbconn.php';




session_start();
echo $_SESSION["depcity"]."<br>";
echo $_SESSION["destcity"]."<br>";
echo $_SESSION["depdate"]."<br>";
echo $_SESSION["cabin"]."<br>";
$fromcity=$_SESSION["depcity"];
$_SESSION["depcity"]=$fromcity;
$destcity=$_SESSION["destcity"];
$_SESSION["destcity"]=$destcity;
$dateofdep=$_SESSION["depdate"];
$_SESSION["depdate"]=$dateofdep;
$cabin=$_SESSION["cabin"];
$_SESSION["cabin"]=$cabin;


if (isset($_POST['submit'])) {






//$depcity=$_SESSION["depcity"];
//$_SESSION["depcity"]=$depcity;

 //echo $_SESSION["depcity"]."<br>";
// $_SESSESION["depcity"]=$depcity;
//header('Location:booking_form.php');



// sessesion_start();
// //$depcity=$_SESSESION["depcity"];
// echo $_SESSESION["depcity"];
// $_SESSESION["depcity"]=$depcity;

	//header('Location:booking_form.php');

}

if(isset($_POST['']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dateofbirth'];
	$nationality=$_POST['nationality'];
	$otherservices=$_POST['otherservices'];
	$cnic=$_POST['cnic'];
	$passport=$_POST['passport'];
	



	$insertquery="INSERT INTO `passenger`( `fname`, `lname`, `dob`, `nationality`, `othservices`, `cnic`, `passport`) VALUES ('$fname','$lname','$dob','$nationality','$othservices','$cnic','$passport')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
header('Location:booking_form.php');

	?>
<script type="text/javascript">
	alert("Data Inserted Successfully");	
</script>
<?php
}else{
	?>
<script type="text/javascript">
	alert("Data Not Inserted Successfully");
</script>
<?php
}
}
?>
 
 















</body>
</html>









































































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