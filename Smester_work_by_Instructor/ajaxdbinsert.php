<?php
 $r1 = $_GET["v1"]; 
 $n1 = $_GET["v2"];
 // $m1 = $_GET["v3"];  
//------------
$myconn= mysqli_connect("localhost","root","","test");
$myquery = "SELECT * FROM student WHERE rollno=$r1";
$myresult = mysqli_query($myconn,$myquery);
if(mysqli_num_rows($myresult)>0)
 echo "Aleady exists...";
else{
 $myquery = "INSERT INTO student VALUES('$r1','$n1')";
 mysqli_query($myconn,$myquery);
 echo "Inserted Successfully ...";
}
?>