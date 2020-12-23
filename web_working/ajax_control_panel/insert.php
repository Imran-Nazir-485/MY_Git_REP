<?php
$fname = $_GET["v1"];
$lname = $_GET["v2"];
$email = $_GET["v3"];
$password = $_GET["v4"];

include 'dbconn';






$insertquery="INSERT INTO `members`( `fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";
$res=mysqli_query($myconn,$insertquery);



// $insertquery="INSERT INTO `members`(`memid`, `fname`, `lname`, `email`, `password`) VALUES ('26',$fname','$lname','$email','$pwd')";
// $_SESSION["pid"]=$last_id;
$res=mysqli_query($myconn,$insertquery);
//  echo "New record created successfully. Last inserted ID is: " . $last_id;
if ($res) {

echo "<Record Inserted";

}






?>
