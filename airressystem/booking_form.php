<!DOCTYPE html>
<html>
<head>
<title>Booking_Form</title>
</head>
<body>




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

session_start();
echo $_SESSION["flightid"]."<br>";
$flightid=$_SESSION["flightid"];
echo $_SESSION["depcity"]."<br>";
$depcity=$_SESSION["depcity"];
echo $_SESSION["depdate"]."<br>";
$depdate=$_SESSION["depdate"];
echo $_SESSION["deptime"]."<br>";
$deptime=$_SESSION["deptime"];
echo $_SESSION["tickets"]."<br>";
$numoftickets=$_SESSION["tickets"];
echo $_SESSION["cabin"]."<br>";
$cabin=$_SESSION["cabin"];
echo $_SESSION["pid"];
$pid=$_SESSION["pid"];




$bid=2;
include 'dbconn.php';

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$passportnum=$_POST['passportnum'];
	$dateofissue=$_POST['dateofissue'];
	$dateofexpirey=$_POST['dateofexpirey'];
	$placeofbirth=$_POST['placeofbirth'];
	$phonenum=$_POST['phonenum'];
	$email=$_POST['email'];
	$country=$_POST['country'];
//$pid=6;	
	$insertquery="INSERT INTO `booking`(`pid`, `fname`, `lname`, `gender`, `passportnum`, `dateofissue`, `dateofexpirey`, `placeofbirth`, `phonenum`, `email`, `country`) VALUES ('$pid','$fname','$lname','$gender','$passportnum','$dateofissue','$dateofexpirey','$placeofbirth','$phonenum','$email','$country')";
// $_SESSION["pid"]=$last_id;
$res=mysqli_query($myconn,$insertquery);
//  echo "New record created successfully. Last inserted ID is: " . $last_id;
if ($res) {
$last_bid = $myconn->insert_id;
echo "<br>";
echo "New record created successfully. Last inserted ID is: " . $last_bid;
 $myquery2 = "SELECT * FROM `flightschedule` ";
 $myresult2=mysqli_query($myconn,$myquery2);
while($myrows2 = mysqli_fetch_assoc($myresult2)){

if ($myrows2['fid']==$flightid) {
	$rid2=$myrows2['rid'];
	echo "<br>"."$rid2";
	$flightid=$myrows2['fid'];
	$destcity=$myrows2['destcity'];
	echo "<br>"."$flightid";
$insertquery3="INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `date`, `time`, `numoftickets`, `cabin`) VALUES ('$last_bid','$flightid','$depcity','$destcity','$depdate','$deptime','$numoftickets','$cabin')";
$res3=mysqli_query($myconn,$insertquery3);


if ($res3) {
	echo "<br>"."Your Seat is Reservesd";
$myquery5 = "SELECT * FROM `flightschedule` ";
 $myresult5=mysqli_query($myconn,$myquery5);
while($myrows5 = mysqli_fetch_assoc($myresult5)){
if ("Economy"==$cabin && $myrows5['fid']==$flightid ) {
 $myrows5['reseats']=$myrows5['reseats']-$numoftickets;
 $reseats=$myrows5['reseats'];
$insertquery6="UPDATE `flightschedule` SET `reseats`='$reseats'"; 
$res6=mysqli_query($myconn,$insertquery6);
if ($res6) {
	echo "<br>"."flightschedule Is Updated";
}}

if ("Business"==$cabin  && $myrows5['fid']==$flightid) {
	$myrows5['rbseats']=$myrows5['rbseats']-$numoftickets;
 $rbseats=$myrows5['rbseats'];
$insertquery7="UPDATE `flightschedule` SET `rbseats`='$rbseats'"; 
$res7=mysqli_query($myconn,$insertquery7);
if ($res7) {
	echo "<br>"."flightschedule Is Updated";
}}
}}}}
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






















