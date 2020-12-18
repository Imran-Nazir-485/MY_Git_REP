<!DOCTYPE html>
<html>
<head>
	<title>Flight Selection</title>
</head>
<body>
<main>
<form method="POST" action="">



<label>FlightId</label>
<input type="text" name="flightid" placeholder="FlightId">
<label>Departure Date</label>
<input type="date" name="depdate" placeholder="Departure Date"    value="$dateofdep">
<br>
<label>Departure Time</label>
<br>
<input type="time" name="deptime" placeholder="DepartureTime">
<br>
<label>Departure City</label>
<br>
<input type="text" name="depcity" placeholder="DepartureCity" value="$fromcity">
<br>
<label>Tickets</label>
<br>
<input type="number" name="Tickets"   max="5 "    min="1" placeholder="Tickets">
<br>


<!-- 
<label>Passengers</label>
<br>
 -->
<!-- <input type="number"       max="5" min="1"    name="passengers" placeholder="Adult, Child, Infrant"> -->
<label>Cabin</label>
<br>
<select name="cabin">
	<option>Economy</option>
	<option>Business</option>
</select>
<!-- <input type="text" name="cabin" placeholder="Economy"> -->
<input type="submit" name="submit" value="FindFlight">
<!-- <input type="submit" name="continue" value="Continue"> -->

<!-- <input type="submit" name="continue" value="Continue"> -->



</form>
</main>



<!-- <script type="text/javascript">
	function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}
</script> -->



<style >
	*{margin: 0;padding: 0;box-sizing: border-box;}
	main{
		padding: 20px;
		margin: 2% 10%;
		border: 1px solid black;
	}
</style>
</body>
</html>
<?php
// include 'dbconn.php';
 if (isset($_POST['submit'])) {
// $fromcity=$_POST['depcity'];
// $destcity=$_POST['destcity'];
// $dateofdep=$_POST['depdate'];
// // $passengers=$_POST['passengers'];
// $cabin=$_POST['cabin'];
// require "adsmin1.php";

}

// session_start();
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
?>