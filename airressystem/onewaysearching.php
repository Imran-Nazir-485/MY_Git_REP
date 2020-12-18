<!DOCTYPE html>
<html>
<head>
	<title>Searching In One Way</title>
</head>
<body>
<main>
<form method="POST" action="">

	One Way<input type="radio" name="triptype" value="v1"  checked="checked" > 
	Return<input type="radio" id="return" value="v2" name="triptype" onclick="location.href='returnsearching.php'">
	<br>
<input type="text" name="depcity" placeholder="From:Airport & City">
<input type="text" name="destcity" placeholder="To Airport & City">
<br>
<label>Departure Date</label>
<br>
<input type="date" name="depdate" placeholder="Select Daparture Date">
<br><!-- 
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
include 'dbconn.php';
if (isset($_POST['submit'])) {
	$count=1;
$fromcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$dateofdep=$_POST['depdate'];
// $passengers=$_POST['passengers'];
$cabin=$_POST['cabin'];

// session_start();
// $_SESSION["depcity"]=$fromcity;
// $_SESSION["destcity"]=$destcity;
// $_SESSION["depdate"]=$dateofdep;
// $_SESSION["cabin"]=$cabin;

 
//require 'flightselection.php';

//header("location:flightselection.php");



 $myquery = "SELECT * FROM flightschedule ";
 $myresult=mysqli_query($myconn,$myquery);

while($myrow = mysqli_fetch_assoc($myresult)){



 





if ("Economy"==$cabin) {	
if ($myrow["depcity"]==$fromcity && $myrow["destcity"]==$destcity && $myrow["depdate"]==$dateofdep  ) 
{

if ($count===1) {
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
echo "<td>BusinessClass</td>  ";
echo "<td>EconomyClass</td>  ";

// echo "<td>SelectFlight</td>  ";
echo "</tr> ";
echo "<tr>";
$count=$count+1;
}


echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['reseats']."</td>";
echo "</tr>";
}
}
if ("Business"==$cabin) {
	if ($count===1) {
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
echo "<td>BusinessClass</td>  ";
echo "<td>EconomyClass</td>  ";

// echo "<td>SelectFlight</td>  ";
echo "</tr> ";
echo "<tr>";
$count=$count+1;
}

if ($myrow["depcity"]==$fromcity && $myrow["destcity"]==$destcity && $myrow["depdate"]==$dateofdep ) 
{
echo   "<td>"  .$myrow['fid']."</td>" ."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destcity']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['deptime']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['depdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['destdate']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['price']."</td>"."&nbsp&nbsp&nbsp&nbsp&nbsp"."<td>".$myrow['flightduration']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['reseats']."</td>";
echo "</tr>";
}
echo "</table>  ";
echo "</center>";

}
}
// echo "<br>";echo "<br>";
// echo "<center>";

// echo    "Flightid" ."<input type=\"text\" name=\"flightid\"   value=\"\" placeholder=\"FlightId\" >". "Flightid" ."DapartureDate"."<input type=\"date\" name=\"depdate\"   value=\"DapartureDate\" >"."<br>" ;
// echo    "DepartureTime" ."<input type=\"time\" name=\"deptime\"   value=\"DapartureTimw\" >". "Tickets" ."<input type=\"number\" name=\"tickets\"  max=\"5\"  min=\"1\" value=\"Tickets\" >"."<br>" ;

// echo "</center>";


}

?>