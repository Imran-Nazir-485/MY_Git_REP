<?php
// fetch textbox values
$rn =  $_POST["t1"]; // rollno
$nm =  $_POST["t2"];  // name
$mr =  $_POST["t3"];  // marks
 
  
$myconn= mysqli_connect("localhost","root","","bscs52020");
$myquery = "SELECT * FROM student WHERE rollno=$rn";
$myresult = mysqli_query($myconn,$myquery);
if(mysqli_num_rows($myresult)>0)
 echo "Aleady exists...";
else{
 $myquery = "INSERT INTO student VALUES($rn,'$nm',$mr)";
 mysqli_query($myconn,$myquery);
 echo "Inserted Successfully ...";
}

?>
