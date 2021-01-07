<!DOCTYPE html>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>

<style type="text/css">
	*{margin:0; padding: 0;box-sizing: border-box;}
main{
	border: 1px solid red; margin: 3% 20%;
	}
div
{
	border: 1px solid black;
}
h3{text-align: center;}
/*#free:hover {
  background-color: #4CAF50; 
  color: white;
}*/
/*#free:focus {
  background-color: #4CAF50; 
  color: white;
}*/
.featuredBtn.active {
  background-color: red;
  color:black;
}
</style>
</head>
<body>
	<center>
<br>
	</center>
<main>
<h3 >Select Desired Seats</h3>
<br><br><br><br>
<center>
<div>
<br><br>
 <?php
 include 'dbconn.php';

// // 1- Connect to database
// $myconn= mysqli_connect("localhost","root","","test");
$rem=0;

$arr = array();
$ar = array();
$myquery = "SELECT * FROM reservations";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
while($myrow = mysqli_fetch_assoc($myresult))
{

array_push($ar,$myrow['seatnumber']);
//$rem=$rem+1;
}

// foreach($ar as $value){
//     echo $value . "<br>";
// }
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
$rem=1;
$myrow = mysqli_fetch_assoc($myresult);
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=$myrow['tbseats'])
{


 if (in_array("BUS$rem", $ar)) 
   { 

if ($rem%4==0) {
	echo "<br>";
}
echo "<input type=\"submit\"     value=\"BUS$rem\"     class=\"featuredBtn\" id=\"btn\" style=\"width: 80px ; background-color:red \"  >
"."&nbsp&nbsp&nbsp&nbsp";
$rem++;
}


if (!in_array("BUS$rem", $ar)) 
{

if ($rem%4==0) {
	echo "<br>";
}
echo "<input  type=\"submit\"   name=\"seat\"    value=\"BUS$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 80px\"     >"."&nbsp&nbsp&nbsp&nbsp";
$rem++;


}
}
echo "</form>";




echo "<br>"."<br>";
	echo "<br>"."<br>";



$rem=1;
while($rem<=4)
{

echo "<input type=\"submit\"    value=\"Space\"     class=\"featuredBtn\" id=\"btn\" style=\"width: 80px ; background-color:red \"  >
"."&nbsp&nbsp&nbsp&nbsp";
$rem++;
}







	echo "<br>"."<br>";
	echo "<br>"."<br>";



$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
$rem=1;
$myrow = mysqli_fetch_assoc($myresult);
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=$myrow['teseats'])
{


 if (in_array("ECO$rem", $ar)) 
   { 

if ($rem%4==0) {
	echo "<br>";
}
echo "<input type=\"submit\"   name=\"seat\"  value=\"ECO$rem\"     class=\"featuredBtn\" id=\"btn\" style=\"width: 80px ; background-color:red \"  >
"."&nbsp&nbsp&nbsp&nbsp";
$rem++;
}
else
{

if ($rem%4==0) {
	echo "<br>";
}
echo "<input  type=\"submit\"   name=\"seat\"    value=\"ECO$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 76px\"     >"."&nbsp&nbsp&nbsp&nbsp";
$rem++;


}
}
echo "</form>";




?>
</main>


</body>
</html>








<?php

$arr = array();
$count=0;
$tcounter=0;
$ttickets=4;



if (isset($_POST['seat'])) {

$seat=$_POST['seat'];
echo "$seat";







$rem=0;
while($rem<=150)
{

 if (in_array("$seat", $ar)) 
   { 

echo "Same button is seleted twice"."<br>";
$count=1;
echo "$rem"."<br>";
break;
// $rem=$rem+1;

}



$rem=$rem+1;

//echo "$rem";
}


if ($count==1) {
	echo "Here We have To Delete The Record";


$insertquery="DELETE FROM `student` WHERE seatnumber='$seat'";
$res=mysqli_query($myconn,$insertquery);
echo "Deleted";


echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";





}

if ($count==0) {
$insertquery="INSERT INTO `reservations`(`seatnumber`) VALUES ('$seat')";
$res=mysqli_query($myconn,$insertquery);
echo "Inserted";

$tcounter++;
 header("booked_seats.php");
echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";
}





}





if ($tcounter==$ttickets) {
	echo "Completed";
}





// $fid=$_GET['fid'];
// $depcity=$_GET['depcity'];
// $destcity=$_GET['destcity'];
// $depdate=$_GET['depdate'];
// $tickets=$_GET['tickets'];
// $cabin=$_GET['cabin'];



// echo "$fid"."<br>"; 
// echo "$depcity"."<br>"; 
// echo "$destcity"."<br>"; 
// echo "$depdate"."<br>"; 
// echo "$tickets"."<br>"; 
// echo "$cabin"."<br>"; 
  





?>








