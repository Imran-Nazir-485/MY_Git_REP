<?php 

echo "<center>
<h4>Flights Details</h4>
</center>";

include 'dbconn.php';
$fid=$_GET['fid'];
$way=$_GET['way'];

// $rid=$_GET['rid'];
// $depdate=$_GET['depdate'];
// $returndate=$_GET['returndate'];
// $depcity=$_GET['depcity'];
// $deptime=$_GET['deptime'];
// $way=$_GET['way'];
// $destcity=$_GET['destcity'];




$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
$date = date("Y-m-d");
$rid=$myrow['rid'];
$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrow['fid']==$fid && $myrow['rid']==$myrow1['rid'] && $myrow['depdate']>=$date) {
$depdate=$myrow['depdate'];
$returndate=$myrow['returndate'];
$depcity=$myrow1['depcity'];
$deptime=$myrow['deptime'];
$destcity=$myrow1['destcity'];
}
}













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
echo "$returndate";





include  'dbconn.php';
 $myquery = "SELECT * FROM flightschedule ";
 $myresult=mysqli_query($myconn,$myquery);
while($myrows = mysqli_fetch_assoc($myresult)){


$date = date("Y-m-d");
$rid=$myrow['rid'];
$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrows["fid"]==$fid&&$myrow1["depcity"]==$depcity&&$myrows["depdate"]==$depdate&&$myrow1["destcity"]==$destcity&&$myrow['rid']==$myrow1['rid']&&$myrow['depdate']>=$date) {
if ("Economy"==$cabin    && $myrows['reseats']>=$tickets) {

header("Location:passenger_info2.php");	
session_start();
$_SESSION['fid']=$fid;
$_SESSION['rid']=$myrows['rid'];
$_SESSION['depcity']=$depcity;
$_SESSION['destcity']=$destcity;
$_SESSION['depdate']=$depdate;
$_SESSION['deptime']=$deptime;
$_SESSION['returndate']=$returndate;
$_SESSION['tickets']=$numoftickets;
$_SESSION['cabin']=$cabin;
$_SESSION['way']=$way;




// fid=$fid&depcity=$depcity&destcity=$destcity&depdate=$depdate&returndate=$returndate&deptime=$deptime&tickets=$numoftickets&cabin=$cabin




}
if ("Business"==$cabin    && $myrows['rbseats']>=$tickets) {
header("Location:passenger_info2.php");	
session_start();
$_SESSION['fid']=$fid;
$_SESSION['rid']=$myrows['rid'];
$_SESSION['depcity']=$depcity;
$_SESSION['destcity']=$destcity;
$_SESSION['depdate']=$depdate;
$_SESSION['deptime']=$deptime;
$_SESSION['returndate']=$returndate;
$_SESSION['tickets']=$numoftickets;
$_SESSION['cabin']=$cabin;
$_SESSION['way']=$way;




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



 











































