<?php
$myconn= mysqli_connect("localhost","root","","test");
$myquery = "SELECT * FROM student WHERE seatnumber=1";
$myresult =  mysqli_query($myconn,$myquery);
 if( mysqli_num_rows($myresult) > 0){
 session_start();
 $_SESSION["s1"]="111";
 header("location: insession.php");
}
else
 header("location: logout.php");
?>
