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
<form method="POST"  >
	
<input  type="submit"    name="t" value="tickets"  >

</form>
<br>
	</center>
<main>
<h3 >Select Desired Seats</h3>
<br><br><br><br>
<center>
<div>
<br><br>
 <?php

$fid=$_GET['fid'];
$depcity=$_GET['depcity'];
$destcity=$_GET['destcity'];
$depdate=$_GET['depdate'];
$deptime=$_GET['deptime'];
$lastbid=$_GET['bid'];
$tickets=$_GET['tickets'];
$cabin=$_GET['cabin'];
$lastpid=$_GET['pid'];

$returndate=$_GET['returndate'];









// // 1- Connect to database
 $myconn= mysqli_connect("localhost","root","","airressystem");
$rem=0;
$ar = array();
$arr = array();
$myquery = "SELECT * FROM reservations";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
while($myrow = mysqli_fetch_assoc($myresult))
{

if ($myrow['rid']=='pk2300') {

if ($myrow['status']=='ND') {
array_push($ar,$myrow['seatnumber']);	
}
if ($myrow['status']=="Booked") {
array_push($arr,$myrow['seatnumber']);	
}


}





//$rem=$rem+1;
}

// foreach($arr as $value){
//     echo $value . "<br>";
// }








if (isset($_POST['t'])) {
	

$a=sizeof($ar);
// echo "$a";
if ($a==$tickets) {
	// echo "This is called";

// echo "$lastpid";

header("Location:ticketing.php?fid=$fid&lastpid=$lastpid&lastbid=$lastbid&depcity=$depcity&destcity=$destcity&depdate=$depdate&returndate=$returndate&deptime=$deptime&tickets=$tickets&cabin=$cabin");


}

}









$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while ($myrow = mysqli_fetch_assoc($myresult)) {

if ($myrow['fid']=='pk2300') {
	$tbseats=$myrow['tbseats'];
	$teseats=$myrow['teseats'];



}


}










$rem=1;
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=$tbseats)
{





if ($rem%5==0) {
	echo "<br>";
}





 if (in_array("BUS$rem", $ar)) 
   { 
// echo "This is called";
echo "<input  type=\"submit\"    name=\"seat\"     value=\"BUS$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px ; background-color:green \"  >
"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;
}

if (in_array("BUS$rem", $arr)) 
   { 


// echo "This is called";

echo "<input  type=\"button\"       value=\"BUS$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px ; background-color:red \"  >
"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;
}
if (!in_array("BUS$rem", $arr) && !in_array("BUS$rem", $ar)) 

{
// echo "This is called";
echo "<input  type=\"submit\"   name=\"seat\"    value=\"BUS$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px\"     >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;


}














}
echo "</form>";








echo "<br><br>";









$rem=1;
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=$teseats)
{





if ($rem%5==0) {
	echo "<br>";
}





 if (in_array("ECO$rem", $ar)) 
   { 
// echo "This is called";
echo "<input  type=\"submit\"    name=\"seat\"     value=\"ECO$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px ; background-color:green \"  >
"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;
}

if (in_array("ECO$rem", $arr)) 
   { 


// echo "This is called";

echo "<input  type=\"button\"       value=\"ECO$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px ; background-color:red \"  >
"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;
}
if (!in_array("ECO$rem", $arr) && !in_array("ECO$rem", $ar)) 

{
// echo "This is called";
echo "<input  type=\"submit\"   name=\"seat\"    value=\"ECO$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px\"     >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;


}














}
echo "</form>";












?>
</main>





</body>
</html>







 
<?php


// $fid=$_GET['fid'];
// $depcity=$_GET['depcity'];
// $destcity=$_GET['destcity'];
// $depdate=$_GET['depdate'];
// $deptime=$_GET['deptime'];
// $lastbid=$_GET['bid'];
// $tickets=$_GET['tickets'];
// $cabin=$_GET['cabin'];
// $lastpid=$_GET['pid'];











$count=0;

$rem=1;
if (isset($_POST['seat'])) {

$seat=$_POST['seat'];
echo "$seat";

while($rem<=$tbseats  && $rem<=$teseats)
{

 if (in_array($seat, $ar)) 
   { 

//echo "Same button is seleted twice"."<br>";
$count=1;
break;

}
$rem++;
}




if ($count==1) {
	echo "Here We have To Delete The Record";



$insertquery="DELETE FROM `reservations` WHERE seatnumber='$seat'";
$res=mysqli_query($myconn,$insertquery);
echo "Deleted";

echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";



}

if ($count==0) {
	



// INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `date`, `time`, `numoftickets`, `seatnumber`, `cabin`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])



$insertquery="INSERT INTO `reservations`( `rid`,  `seatnumber`, `status`) VALUES ('pk2300','$seat','ND')";
$res=mysqli_query($myconn,$insertquery);
echo "Inserted";
// header("booked_seats.php");
echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";
}

// $a=sizeof($ar);


// echo "$a";

// if (isset($_POST['t'])) {


//  if ($a==3) {
	
// // header("Location:booked_seats.php?fid=$fid&pid=$pid&bid=$last_bid&depcity=$depcity&destcity=$destcity&depdate=$depdate&deptime=$deptime&tickets=$tickets&cabin=$cabin");

//  }
// }


}














echo "$fid"."<br>"; 
echo "$depcity"."<br>"; 
echo "$destcity"."<br>"; 
echo "$depdate"."<br>"; 
echo "$tickets"."<br>"; 
echo "$cabin"."<br>"; 
echo "$lastbid"."<br>"; 
  echo "$deptime"."<br>"; 
echo "$lastpid"."<br>"; 

echo "$returndate"."<br>";















?>








