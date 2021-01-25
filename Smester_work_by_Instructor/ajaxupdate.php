<?php
 $rr = $_GET["r1"]; 
 $nm = $_GET["m1"];  



//------------
$myconn= mysqli_connect("localhost","root","","test");
$myquery = "SELECT * FROM student WHERE rollno=$rr";
$myresult = mysqli_query($myconn,$myquery);
if(mysqli_num_rows($myresult)>0){
 $myquery = "UPDATE student SET name='$nm' WHERE rollno=$rr";
 $res=mysqli_query($myconn,$myquery);
 if ($res) {

 echo "Updated Successfully ..."; }

}
else
 echo "Not exists...";

?>