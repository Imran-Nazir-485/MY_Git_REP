<?php
$myconn= mysqli_connect("localhost","root","","bscs52020");
$myquery = "SELECT * FROM student WHERE rollno=9";
$myresult = mysqli_query($myconn,$myquery);
if(mysqli_num_rows($myresult)>0)
 echo "Aleady exists...";
else{
 $myquery = "INSERT INTO student VALUES(9,'Asif',65)";
 mysqli_query($myconn,$myquery);
 echo "Inserted Successfully ...";
}

?>
