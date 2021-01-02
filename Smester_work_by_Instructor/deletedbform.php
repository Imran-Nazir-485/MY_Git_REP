<?php
 $rn = $_POST["t1"];
$myconn= mysqli_connect("localhost","root","","bscs52020");
$myquery = "SELECT * FROM student WHERE rollno=$rn";
$myresult = mysqli_query($myconn,$myquery);
 if(mysqli_num_rows($myresult)>0){
  $myquery = "DELETE FROM student WHERE rollno=$rn";
  mysqli_query($myconn,$myquery);
  echo "Deleted Successfully ...";
 }
 else
  echo " Record Not exist , Can't be deleted!";
?>
