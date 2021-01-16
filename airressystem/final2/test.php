<?php

include 'dbconn.php';










// $date = date('Y/m/d ');

// echo "$date";





$myquery = "SELECT * FROM  flightschedule ";

$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){

$date = date("Y-m-d");
$rid=$myrow['rid'];

$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrow['rid']==$myrow1['rid'] && $myrow['depdate']>=$date) {
echo $myrow['depdate']."<br>";
	echo $myrow['rid']."<br>";
}




else{



$flightstatus='Departured';

$myquery2 = "UPDATE flightschedule SET flightstatus='$flightstatus' WHERE rid='$rid'";

$myresult2 = mysqli_query($myconn,$myquery2);


}
}

?>














