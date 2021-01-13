<!DOCTYPE html>
<html>
<head>
<title>Booking_Form</title>
</head>
<body>



<h4 style="text-align: center;">Booking Credentials</h4>


<main>

<form method="POST">
<div id="main-div">

F-Name<input type="text" name="fname">
L-Name<input type="text" name="lname">

Gender<!-- <input type="text" name="gender"> -->
<select name="gender">
	<option>Male</option>
	<option>Female</option>
	<option>Other</option>
</select>
<br>
PassportNumber<input type="text" name="passportnum">
DateOfIssue<input type="date" name="dateofissue">
DateOfExpirey<input type="date" name="dateofexpirey">
<br>
PlaceOfBirth<!-- <input type="text" name="placeofbirth"> -->
<select name="placeofbirth">
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

Country<input type="text" name="country">
<br>
PhoneNumber<input type="text" name="phonenum">
Email<input type="email" name="email">

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
 

// $pid=$_GET['pid'];
// echo "$pid";



// $fid=$_GET['fid'];
// $depcity=$_GET['depcity'];
// $destcity=$_GET['destcity'];
// $depdate=$_GET['depdate'];
// $deptime=$_GET['deptime'];
// $tickets=$_GET['tickets'];
// $cabin=$_GET['cabin'];
// $pid=$_GET['pid'];
// $returndate=$_GET['returndate'];



// echo "$fid"."<br>"; 
// echo "$depcity"."<br>"; 
// echo "$destcity"."<br>"; 
// echo "$depdate"."<br>"; 
// echo "$tickets"."<br>"; 
// echo "$cabin"."<br>"; 
// echo "$deptime"."<br>"; 
// echo "$pid"."<br>"; 
// echo "$returndate"."<br>"; 
  




$bid=2;
include 'dbconn.php';



$bis=2;


session_start();
$fid=$_SESSION['fid'];
$rid=$_SESSION['rid'];
$depcity=$_SESSION['depcity'];
$destcity=$_SESSION['destcity'];
$depdate=$_SESSION['depdate'];
$deptime=$_SESSION['deptime'];
$returndate=$_SESSION['returndate'];
$tickets=$_SESSION['tickets'];
$cabin=$_SESSION['cabin'];
$way=$_SESSION['way'];


echo "$fid"."<br>";

echo "$rid"."<br>";

echo "$depcity"."<br>";

echo "$destcity"."<br>";

echo "$depdate"."<br>";

echo "$deptime"."<br>";


echo "$returndate"."<br>";

echo "$tickets"."<br>";


echo "$cabin"."<br>";

echo "$way"."<br>";







	 // $insertquery="INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `depdate`, `deptime`, `numoftickets`, `cabin`, `way`, `status`) VALUES ('$bid','$rid','$depcity','$destcity','depdate','$deptime','$tickets','$cabin','$way','ND')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {



echo "inserted";
header("Location:booked_seats.php?fid=$fid&tickets=$tickets&bid=2");
}




if(isset($_POST['submit']))
{

header("Location:booked_seats2.php?fid=$fid&tickets=$tickets&bid='2'");

$last_bid=2;

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$passportnum=$_POST['passportnum'];
	$dateofissue=$_POST['dateofissue'];
	$dateofexpirey=$_POST['dateofexpirey'];
	$placeofbirth=$_POST['placeofbirth'];
	$phonenum=$_POST['phonenum'];
	$email=$_POST['email'];
	// $country=$_POST['country'];
	// $insertquery="INSERT INTO `booking`(`pid`, `fname`, `lname`, `gender`, `passportnum`, `dateofissue`, `dateofexpirey`, `placeofbirth`, `phonenum`, `email`, `country`) VALUES ('$pid','$fname','$lname','$gender','$passportnum','$dateofissue','$dateofexpirey','$placeofbirth','$phonenum','$email','$country')";
$res=mysqli_query($myconn,$insertquery);
//  echo "New record created successfully. Last inserted ID is: " . $last_id;
if ($res) {
$last_bid = $myconn->insert_id;

header("Location:booked_seats.php?bid=$last_bid");

echo "<br>";
// echo "New record created successfully. Last inserted ID is: " . $last_bid;
 





}
}





//  $myquery2 = "SELECT * FROM `flightschedule` ";
//  $myresult2=mysqli_query($myconn,$myquery2);
// while($myrows2 = mysqli_fetch_assoc($myresult2)){

// if ($myrows2['fid']==$flightid) {
// 	$rid2=$myrows2['rid'];
// 	echo "<br>"."$rid2";
// 	$flightid=$myrows2['fid'];
// 	$destcity=$myrows2['destcity'];
// 	echo "<br>"."$flightid";
// $insertquery3="INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `date`, `time`, `numoftickets`, `cabin`) VALUES ('$last_bid','$flightid','$depcity','$destcity','$depdate','$deptime','$numoftickets','$cabin')";
// $res3=mysqli_query($myconn,$insertquery3);


// if ($res3) {
// 	echo "<br>"."Your Seat is Reservesd";




// $myquery5 = "SELECT * FROM `flightschedule` ";
//  $myresult5=mysqli_query($myconn,$myquery5);
// while($myrows5 = mysqli_fetch_assoc($myresult5)){
// if ("Economy"==$cabin && $myrows5['fid']==$flightid ) {
//  $myrows5['reseats']=$myrows5['reseats']-$numoftickets;
//  $reseats=$myrows5['reseats'];
// $insertquery6="UPDATE `flightschedule` SET `reseats`='$reseats'"; 
// $res6=mysqli_query($myconn,$insertquery6);
// if ($res6) {


// $_SESSION["bid"]=$last_bid;
// $_SESSION["flightid"]=$flightid;
// $_SESSION["tottalfare"]=$myrows5['ecprice']*$numoftickets;


// 	echo "<br>"."flightschedule Is Updated";

// header("Location:booked_seats.php?fid=$fid&bid=$last_bid&depcity=$depcity&destcity=$destcity&depdate=$depdate&deptime=$deptime&tickets=$tickets&cabin=$cabin");


// }}

// if ("Business"==$cabin  && $myrows5['fid']==$flightid) {
// 	$myrows5['rbseats']=$myrows5['rbseats']-$numoftickets;
//  $rbseats=$myrows5['rbseats'];
// $insertquery7="UPDATE `flightschedule` SET `rbseats`='$rbseats'"; 
// $res7=mysqli_query($myconn,$insertquery7);
// if ($res7) {
// 	echo "<br>"."flightschedule Is Updated";
	
// header("Location:booked_seats.php?fid=$fid&bid=$last_bid&depcity=$depcity&destcity=$destcity&depdate=$depdate&deptime=$deptime&tickets=$tickets&cabin=$cabin");

// }}
// }}}}
// 	?>
 <script type="text/javascript">
// 	alert("Data Inserted Successfully");	
// </script>
 <?php
// }else{
// 	?>
 <script type="text/javascript">
// 	alert("Data Not Inserted Successfully");
// </script>
 <?php
// }
// }




















?>






















