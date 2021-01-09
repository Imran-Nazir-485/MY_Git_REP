<?php 

echo "<center>
<h4>Flights Details</h4>
</center>";



$fid=$_GET['fid'];
$rid=$_GET['rid'];
$depdate=$_GET['depdate'];
$returndate=$_GET['returndate'];
$depcity=$_GET['depcity'];
$deptime=$_GET['deptime'];
$way=$_GET['way'];
$destcity=$_GET['destcity'];


// echo "$fid"."<br>";
// echo "$rid"."<br>";
// echo "$depdate"."<br>";
// echo "$returndate"."<br>";
// echo "$depcity"."<br>";
// echo "$deptime"."<br>";
// echo "$way"."<br>";
// echo "$destcity"."<br>";











 if ($returndate==0   && $way==1       || $returndate!=0   && $way==1  ) {
 echo "<center>
<main>
<form method=\"POST\" >
<label>FlightId</label>
<input type=\"text\" name=\"flightid\" placeholder=\"FlightId\"    value=\"  $fid \"         style='width:100px; text-align:center;'         readonly>
<label>Departure Date</label>
<input type=\"text\" name=\"depdate\" placeholder=\"Departure Date\"      value=\"  $depdate \"        style='width:100px;text-align:center;'        readonly>
<br>
<label>Departure Time</label>
<br>
<input type=\"text\" name=\"deptime\" placeholder=\"DepartureTime\"  value=\"  $deptime \"          style='width:100px;text-align:center;' readonly>
<br>
<label>Departure City</label>
<br>
<input type=\"text\" name=\"depcity\" placeholder=\"DepartureCity\"  value=\"  $depcity \"       style='width:100px;text-align:center;'  readonly>
<br>
<label>Destination City</label>
<br>
<input type=\"text\" name=\"destcity\" placeholder=\"DestinationCity\"  value=\"  $destcity \"             style='width:100px;text-align:center;' readonly>
<br>
<label>Tickets</label>
<br>
<input type=\"number\" name=\"tickets\"  max=\"5\"     min=\"1\" placeholder=\"Tickets\"        style='width:100px;text-align:center;'    >
<br>
<label>Cabin</label>
<br>
<select name=\"cabin\"         style='width:100px;text-align:center;'  >
	<option>Economy</option>
	<option>Business</option>
</select>
<input type=\"submit\" name=\"submit\" value=\"Continue\">
</form>
</main>	
</center>";
	
 }


 if ($returndate!=0   && $way==2 ) {
 echo "<center>
<main>
<form method=\"POST\" >
<label>FlightId</label>
<input type=\"text\" name=\"flightid\" placeholder=\"FlightId\"    value=\"  $fid \"         style='width:100px;text-align:center;'   readonly>
<label>Departure Date</label>
<input type=\"text\" name=\"depdate\" placeholder=\"Departure Date\"      value=\"  $depdate \"     style='width:100px;text-align:center;'     readonly>
<br>
<label>Return Date</label>
<input type=\"text\" name=\"returndate\" placeholder=\"Return Date\"      value=\"  $returndate \"     style='width:100px;text-align:center;'      readonly>
<br>

<label>Departure Time</label>
<br>
<input type=\"text\" name=\"deptime\" placeholder=\"DepartureTime\"  value=\"  $deptime \"  style='width:100px;text-align:center;'  readonly>
<br>
<label>Departure City</label>
<br>
<input type=\"text\" name=\"depcity\" placeholder=\"DepartureCity\"  value=\"  $depcity \"  style='width:100px;text-align:center;'  readonly>
<br>
<label>Destination City</label>
<br>
<input type=\"text\" name=\"destcity\" placeholder=\"DestinationCity\"  value=\"  $destcity \"     style='width:100px;text-align:center;'   readonly>
<br>
<label>Tickets</label>
<br>
<input type=\"number\" name=\"tickets\"  max=\"5\"     min=\"1\" placeholder=\"Tickets\"     style='width:100px;text-align:center;'    >
<br>
<label>Cabin</label>
<br>
<select name=\"cabin\"   style='width:100px;text-align:center;'>
	<option>Economy</option>
	<option>Business</option>
</select>
<input type=\"submit\" name=\"submit\" value=\"Continue\">
</form>
</main>	
</center>";
	
 }


 
 
if (isset($_POST['submit'])) {


$numoftickets=$_POST['tickets'];
$cabin=$_POST['cabin'];
$deptime=$_POST['deptime'];


$returndate=$_POST['returndate'];
// echo "$returndate";





include  'dbconn.php';
 $myquery = "SELECT * FROM flightschedule ";
 $myresult=mysqli_query($myconn,$myquery);
while($myrows = mysqli_fetch_assoc($myresult)){

if ($myrows["fid"]==$fid && $myrows["depcity"]==$depcity && $myrows["depdate"]==$depdate    && $myrows["destcity"]==$destcity) {
if ("Economy"==$cabin    && $myrows['reseats']>=$tickets) {

header("Location:passenger_info.php?fid=$fid&depcity=$depcity&destcity=$destcity&depdate=$depdate&returndate=$returndate&deptime=$deptime&tickets=$numoftickets&cabin=$cabin");	
}
if ("Business"==$cabin    && $myrows['rbseats']>=$tickets) {
header("Location:passenger_info.php?fid=$fid&depcity=$depcity&destcity=$destcity&depdate=$depdate&returndate=$returndate&deptime=$deptime&tickets=$numoftickets&cabin=$cabin");	
}


if ($myrows['rbseats']<$tickets  && $myrows['reseats']>=$tickets) {
	echo "<br>";
	echo "<br>";
	echo "<center>";
	echo "   $tickets  Business Seats Are Not Available "."$tickets"." Economy Seats Are Available";
    echo "</center>";
}

if ($myrows['rbseats']>=$tickets  && $myrows['reseats']<$tickets) {
echo "<br>";
	echo "<br>";
	echo "<center>";
	
echo "   $tickets  Economy Seats Are Not Available "."$tickets"." Business Seats Are Available";
    echo "</center>";
}


if ($myrows['rbseats']<$tickets  && $myrows['reseats']<$tickets) {
	echo "<br>";
	echo "<br>";
	echo "<center>";
	
echo "   $tickets  Economy Seats And Business Seats Are Not Available";
    echo "</center>";
}

}

}

}

 ?>



 











































