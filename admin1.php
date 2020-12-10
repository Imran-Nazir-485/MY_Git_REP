<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>


<main>
	<form method="POST">
	<div id="login"><input type="submit" name="submit" value="LOGIN"></div>
	<div id="signup"><input type="submit" name="submit" value="SIGNUP"></div>	
	</form>
	
	
</main>



<style type="text/css">
	*{margin: 0;padding: 0;box-sizing: border-box;}
	main{
		margin: 5% 10%;
		border: 1px solid red;
padding: 10px;
display: flex;
	}
	#login{
		border: 1px solid black;
		width: 40%;
	}
#signup{
	border: 1px solid black;
width: 40%;
}
input{width: 100%;}
</style>
</body>
</html>



<?php
$bid=2;
include 'dbconn.php';
if(isset($_POST['submit']))
{
$myfile = fopen("booking_form.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("booking_form.php"));
fclose($myfile);

	// $fname=$_POST['fname'];
	// $lname=$_POST['lname'];
	// $gender=$_POST['gender'];
	// $passportnum=$_POST['passportnum'];
	// $dateofissue=$_POST['dateofissue'];
	// $dateofexpirey=$_POST['dateofexpirey'];
	// $placeofbirth=$_POST['placeofbirth'];
	// $phonenum=$_POST['phonenum'];
	// $email=$_POST['email'];
	// $country=$_POST['country'];
	
	// $insertquery="INSERT INTO `booking`(`bid`, `fname`, `lname`, `gender`, `passportnum`, `dateofissue`, `dateofexpirey`, `placeofbirth`, `phonenum`, `email`, `country`) VALUES ('$bid','$fname','$lname','$gender','$passportnum','$dateofissue','$dateofexpirey','$placeofbirth','$phonenum','$email','$country')";


}

?>


















