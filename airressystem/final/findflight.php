<?php



echo "<center>
<h4>Flights Details</h4>
</center>";







echo "<center>";
echo "<input  type=\"submit\" name=\"\" value=\"Click On Desired Trip Type\"     >";
echo "<br>";
echo "<br>";
echo "<form method=\"post\">";
echo "<input  type=\"submit\" name=\"interchnage\" value=\"OneWay Ticket Reservation\"     >";
echo "<input  type=\"submit\" name=\"interchnage1\" value=\"Return  Ticket Reservation\"     >";
echo "</form>";
echo "</center>";
if (isset($_POST['interchnage'])) {
echo "<center>";
echo "<input type=\"submit\" name=\"submit\" value=\"OneWay\">"."<input type=\"radio\" name=\"triptype\" value=\"v1\"  checked=\"checked\" >";
echo "<br>";
echo "<br>";
echo "<main>";
echo "<form method=\"POST\" >";
echo"<label>From:Airport & City</label>";
echo "<br>";
echo "<select size='1' style=\"width:150px\" name=\"depcity\">
<option>Multan</option>
<option>Lahore</option>
<option>Karachi</option>
<option>Sialkot</option>
<option>Haidrabad</option>
<option>Rawalpindi</option>
<option>Islamabad</option>
<option>Peshawar</option>
<option>Jeddah</option>
<option>London</option>
<option>Sharjah</option>
<option>Quetta</option>
<option>Chitral</option>
<option>Beijing</option>

</select>";

echo "<br>";
echo"<label>To Airport & City</label>";
echo "<br>";
echo "<select size='1' style=\"width:150px\"    name=\"destcity\">

<option>Beijing</option>
<option>Rayaz</option>
<option>AbuDabhi</option>
<option>Karachi</option>
<option>Sialkot</option>
<option>Haidrabad</option>
<option>Rawalpindi</option>
<option>Islamabad</option>
<option>Peshawar</option>
<option>Jeddah</option>
<option>London</option>
<option>Sharjah</option>
<option>Quetta</option>
<option>Chitral</option>



</select>";

echo "<br>";
echo"<label>Departure Date</label>";
echo "<br>";
echo"<input type=\"date\" name=\"depdate\" placeholder=\"Select Daparture Date\">";
echo"<br>";
echo"<label>Departure Time</label>";
echo"<br>";
echo"<input type=\"time\" name=\"deptime\" placeholder=\"Select Daparture Time\">";
echo"<br>";
echo "<input type=\"submit\" name=\"findlightone\" value=\"FindFlight\">";

echo "</form>";
echo "</main>";
echo "</center>";
}









if (isset($_POST['interchnage1'])) {
echo "<center>";
echo "<input type=\"submit\" name=\"submit\" value=\"Return\">"."<input type=\"radio\" name=\"triptype\" value=\"v1\"  checked=\"checked\" >";
echo "<br>";
echo "<br>";
echo "<main>";
echo "<form method=\"POST\">";
echo "<label>From:Airport & City</label>";
echo "<br>";
echo "<select size='1' style=\"width:150px\" name=\"depcity\">
<option>Multan</option>
<option>Lahore</option>
<option>Karachi</option>
<option>Sialkot</option>
<option>Haidrabad</option>
<option>Rawalpindi</option>
<option>Islamabad</option>
<option>Peshawar</option>
<option>Jeddah</option>
<option>London</option>
<option>Sharjah</option>
<option>Quetta</option>
<option>Chitral</option>
<option>Beijing</option>

</select>";
echo "<br>";
echo "<label>To Airport & City</label>";
echo "<br>";
echo "<select size='1' style=\"width:150px\"    name=\"destcity\">

<option>Beijing</option>
<option>Rayaz</option>
<option>AbuDabhi</option>
<option>Karachi</option>
<option>Sialkot</option>
<option>Haidrabad</option>
<option>Rawalpindi</option>
<option>Islamabad</option>
<option>Peshawar</option>
<option>Jeddah</option>
<option>London</option>
<option>Sharjah</option>
<option>Quetta</option>
<option>Chitral</option>



</select>";
echo "<br>";
echo "<label>Departure Date</label>";
echo "<br>";
echo "<input type=\"date\" name=\"depdate\" placeholder=\"Select Daparture Date\">";
echo "<br>";
echo "<label>Return Date</label>";
echo "<br>";
echo "<input type=\"date\" name=\"returndate\" placeholder=\"Select Return Date\">";
echo "<br>";
echo "<label>Departure Time</label>";
echo "<br>";
echo "<input type=\"time\" name=\"retdate\" placeholder=\"Select Departure Time\">";
echo "<br>";
echo "<input type=\"submit\" name=\"findflightreturn\" value=\"FindFlight\">";
echo "</form>";
echo "</main>";
echo "</center>";
}










if (isset($_POST['findlightone'])) {
	


$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$depdate=$_POST['depdate'];
$deptime=$_POST['deptime'];
$returndate=0;
$w=12;

session_start();
$_SESSION['depcity']=$depcity;
$_SESSION['destcity']=$destcity;
$_SESSION['depdate']=$depdate;
$_SESSION['deptime']=$deptime;
$_SESSION['returndate']=-1;
$_SESSION['adminside']=$w;

header("Location:availableflights.php?w=11");





}






if (isset($_POST['findflightreturn'])) {
	


$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$depdate=$_POST['depdate'];
$deptime=$_POST['deptime'];
$returdate=$_POST['deptime'];
$returndate=$_POST['returndate'];
$w=12;



session_start();
$_SESSION['depcity']=$depcity;
$_SESSION['destcity']=$destcity;
$_SESSION['depdate']=$depdate;
$_SESSION['deptime']=$deptime;
$_SESSION['returndate']=$returndate;
$_SESSION['adminside']=$w;
header("Location:availableflights.php?w=11");




 }


























 ?>