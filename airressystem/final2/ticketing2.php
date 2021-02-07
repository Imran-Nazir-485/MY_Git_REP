












<?php

include 'dbconn.php';

$fid=$_GET['fid'];
$bid=$_GET['bid'];


$tfare=$_GET['tfare'];



$way=$_GET['way'];
$cabin=$_GET['cabin'];
$tickets=$_GET['tickets'];

echo "$fid"."<br>";
echo "$bid"."<br>";




// $myquery = "SELECT * FROM flightschedule";
// $myresult = mysqli_query($myconn,$myquery);
// while ($myrow = mysqli_fetch_assoc($myresult)) {

// if ($myrow['fid']=="$fid"  && $cabin=="Business" && $way==1) {
// $tfare=$tickets*$myrow['bcprice'];
// echo "this is called";

// }

// if ($myrow['fid']=="$fid"  && $cabin=="Economy" && $way==1) {
// $tfare=$tickets*$myrow['ecprice'];
// }


// if ($myrow['fid']=="$fid"  && $cabin=="Business" && $way==2) {
// $tfare=$tickets*$myrow['retbcprice'];

// }



// if ($myrow['fid']=="$fid"  && $cabin=="Economy" && $way==2) {
// $tfare=$tickets*$myrow['retecprice'];

// }

// }



echo ";
<center>
<main>
<form method=\"post\">
<label>Total Fare</label><br>
<input type=\"text\" name=\"tottalfare\"   value=\"$tfare\">
<br>
<label>Payment Method</label>
<br>
<select name=\"paymentmethod\">
<br>
<br>
<option>Credit Card</option>
<option>PayPal</option>
</select>
<br>
<label>Account Number</label>
<br>
<input type=\"text\" name=\"accnum\" placeholder=\"Account Number\">
<br>
<input type=\"submit\" name=\"submit\" >	
</form>
</main>
	
</center>
";
































// echo "<center>
// <h3>Tour Details</h3></center>
// ";

// $r=1;


// while ($r <= 1) {
	
// echo "
// <center>
// <main>
// <form method=\"post\">
//<label>TicketID:</label><br><input type=\"text\" name=\"tid\" placeholder=\"TID\"><br>
// <label>FlightID:</label><br><input type=\"text\" name=\"fid\" placeholder=\"FID\"><br>
// <label>BookingID:</label><br><input type=\"text\" name=\"bid\" placeholder=\"BID\"><br>
// <label>DepatureDate:</label><br><input type=\"text\" name=\"depdate\" placeholder=\"DepDate\"><br>
// <label>DepartureTime:</label><br><input type=\"text\" name=\"deptime\" placeholder=\"DepTime\"><br>
// <label>SeatNumber:</label><br><input type=\"text\" name=\"seatnumber\" placeholder=\"SeatNumber\"><br>
// <label>class:</label><br><input type=\"text\" name=\"class\" placeholder=\"BusinessClass\"><br>
// </form>
// </main>
// </center>
// <br>

// ";


// $r++;
// }
// echo "
// <center>
// <main>
// <form method=\"post\">
// <input type=\"submit\" name=\"submit\" value='Print Tickets'>	
// </form>
// </main>
// </center>
// <br>

// ";

















?>








