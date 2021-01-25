<?php
  $r1 = $_GET["v1"];

$myconn= mysqli_connect("localhost","root","","test");
$myquery = "SELECT * FROM student where rollno=$r1";
$myresult = mysqli_query($myconn,$myquery);
if(mysqli_num_rows($myresult)>0){
while($myrow = mysqli_fetch_assoc($myresult)){
echo $myrow["name"] . "<hr>";
}
}
else
echo "No Record Found";
?>