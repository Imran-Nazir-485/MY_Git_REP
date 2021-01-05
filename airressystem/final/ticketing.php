<?php

include 'dbconn.php';



session_start();





echo "<br>".$_SESSION["flightid"];
echo "<br>".$_SESSION["bid"];
echo "<br>".$_SESSION["tottalfare"];

$tottalfare=$_SESSION["tottalfare"];
echo "$tottalfare";


 //$flightid=$_SESSION["rid"]=$flightid;
 $bookingid=$_SESSION["bid"];
 //$totalprice=$_SESSION["totalprice"];

if (isset($_POST['submit'])) {
	$tottalfare=$_POST['tottalfare'];
	$accnum=$_POST['accnum'];
	$paymethod=$_POST['paymentmethod'];
$status="Booked";



header("Location:booked_seats.php");




// $insertquery3="INSERT INTO `ticketing`(`bid`, `tfare`, `paymethod`, `status`, `accnum`) VALUES ('$bookingid','$tottalfare','$paymethod','$status','$accnum')";
$res3=mysqli_query($myconn,$insertquery3);
if ($res3) {
	echo "<br>"."Your Ticket is Reservesd";



}









}










?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<center>
<main>
<form method="post">
<label>Total Fare</label>
<input type="text" name="tottalfare"   value="<?php  echo "$tottalfare ";       ?>">
<br>
<br>
<label>Payment Method</label>
<select name="paymentmethod">
<br>
<br>
<option>Credit Card</option>
<option>PayPal</option>
</select>
<br>
<br>
<label>Account Number</label>
<input type="text" name="accnum" placeholder="Account Number">
<br>
<br>
<input type="submit" name="submit" >	
</form>
</main>
	
</center>




</body>
</html>



