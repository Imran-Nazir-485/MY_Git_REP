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
$bid=$_GET['bid'];
$tickets=$_GET['tickets'];




$way=$_GET['way'];
$cabin=$_GET['cabin'];




// $resid=$_GET['resid'];

$way=$_GET['way'];




echo "$tickets"."<br>";



// $depcity=$_GET['depcity'];
// $destcity=$_GET['destcity'];
// $depdate=$_GET['depdate'];
// $deptime=$_GET['deptime'];
// $lastbid=$_GET['bid'];
//$tickets=$_GET['tickets'];
// $cabin=$_GET['cabin'];
// $lastpid=$_GET['pid'];

// $returndate=$_GET['returndate'];









// // // 1- Connect to database
 $myconn= mysqli_connect("localhost","root","","airressystem");
$rem=0;
$ar = array();
$arr = array();
$myquery = "SELECT * FROM ticketing";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
while($myrow = mysqli_fetch_assoc($myresult))
{

if ($myrow['bid']=="2") {

if ($myrow['status']=="ND") {
array_push($ar,$myrow['seatnumber']);	
}
if ($myrow['status']=="Booked") {
array_push($arr,$myrow['seatnumber']);	
}


}





//$rem=$rem+1;
}

// // foreach($ar as $value){
// //     echo $value . "<br>";
// // }















$date = date("Y-m-d");
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while ($myrow = mysqli_fetch_assoc($myresult)) {

// $myrow['depdate']>=$date &&
if ( $myrow['fid']=="$fid"){
$fid=$myrow['fid'];
$rid=$myrow['rid'];
}
}







$myquery1 = "SELECT * FROM  flights WHERE fid='$fid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
{
$tbseats=$myrow1['bseats'];
$teseats=$myrow1['eseats'];

}









$myquery2 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult2 = mysqli_query($myconn,$myquery2);
$myrow2 = mysqli_fetch_assoc($myresult2);
{
if ($way==1  && $cabin=="Economy") {

$ecprice=$myrow2['ecprice'];
$tfare=$ecprice*$tickets;
}
if ($way==1 &&  $cabin=="Business") {

$bcprice=$myrow2['bcprice'];
$tfare=$bcprice*$tickets;		
}
if ($way==2 && $cabin=="Economy") {

$reecprice=$myrow2['reecprice'];
$tfare=	$reecprice*$tickets;
}



if ($way==2 && $cabin=="Business") {

$rebcprice=$myrow2['rebcprice'];
$tfare=	$rebcprice*$tickets;
}
}




// $rebcprice=$rebcprice*5;
// echo "$tfare"."<br>";
// $reecprice=$reecprice*5;

// echo "$reecprice"."<br>";

// echo "$bcprice"."<br>";
// echo "$ecprice"."<br>";



// $fare=($rebcprice*5);
// echo "$fare";







if (isset($_POST['t'])) {
	

$a=sizeof($ar);
// echo "$a";
if ($a==$tickets) {
	// echo "This is called";

// echo "$lastpid";


// $fare=$rebcprice*$tickets+$reecprice*$tickets+$bcprice*$tickets+$ecprice*$tickets;

header("Location:ticketing2.php?fid=$fid&way=$way&tickets=$tickets&cabin=$cabin&bid=2&tfare=$tfare");


}

}

















$rem=1;
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=$tbseats && $cabin=="Business")
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
while($rem<=$teseats  && $cabin=="Economy")
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



$insertquery="DELETE FROM `ticketing` WHERE seatnumber='$seat'";
$res=mysqli_query($myconn,$insertquery);
echo "Deleted";

echo "<script type='text/javascript'>
        window.location=document.location.href;
        </script>";



}



if ($count==0) {
	



// INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `date`, `time`, `numoftickets`, `seatnumber`, `cabin`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

// echo "this is called";

$bid=2;



$a=sizeof($ar);
// echo "$a";
if ($a+1>$tickets) {
$bid=-1;
?>
<script type="text/javascript">
	alert("Too Many Selections")
</script>

<?php

}







$insertquery="INSERT INTO `ticketing`(`tid`, `bid`, `tfare`, `paymethod`, `seatnumber`, `status`, `accnum`) VALUES ('','$bid','0','NA','$seat','ND','0')";
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














// echo "$fid"."<br>"; 
// echo "$depcity"."<br>"; 
// echo "$destcity"."<br>"; 
// echo "$depdate"."<br>"; 
// echo "$tickets"."<br>"; 
// echo "$cabin"."<br>"; 
// echo "$lastbid"."<br>"; 
//   echo "$deptime"."<br>"; 
// echo "$lastpid"."<br>"; 

// echo "$returndate"."<br>";















?>








