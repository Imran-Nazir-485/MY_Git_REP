<center>
<?php


include 'dbconn.php';

$xml = simplexml_load_file("project.xml");
foreach($xml->children() as $stu){
// echo "FirstName: " . $stu->fname. "<br>";
// echo "LastName: " . $stu->lname . "<br>";
// echo "Email: " . $stu->email. "<br>";
// echo "Password: " . $stu->password . "<br>";
 



$fname1=$stu->fname;
$lname1=$stu->lname;
$email1=$stu->email;
$password1=$stu->password;


$insertquery="INSERT INTO `members`(`memid`, `fname`, `lname`, `email`, `password`)  VALUES ('','$fname1','$lname1','$email1','$password1')";
$myrow=mysqli_query($myconn,$insertquery);
if ($myrow) {
	echo "Record are Inserted";
}








}
  
?>
</center>