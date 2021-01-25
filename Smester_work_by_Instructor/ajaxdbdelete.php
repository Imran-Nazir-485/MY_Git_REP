<?php
  $r1 = $_GET["v1"];

$myconn= mysqli_connect("localhost","root","","test");
$myquery = "SELECT * FROM student WHERE rollno=$r1";
$myresult = mysqli_query($myconn,$myquery);
 if(mysqli_num_rows($myresult)>0){
  $myquery = "DELETE FROM student WHERE rollno=$r1";
  mysqli_query($myconn,$myquery);
  echo "Deleted Successfully ...";
 }
 else
  echo " Record Not exist , Can't be deleted!";
?>