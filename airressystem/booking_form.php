<!DOCTYPE html>
<html>
<head>
<title>Booking_Form</title>
</head>
<body>




<main>
<form method="POST">
<div id="main-div">

F-Name<input type="text" name="fname">
L-Name<input type="text" name="lname">

Gender<!-- <input type="text" name="gender"> -->
<select name="gender">
	<option>Male</option>
	<option>Female</option>
	<option>Other</option>
</select>
<br>
PassportNumber<input type="text" name="passportnum">
DateOfIssue<input type="date" name="dateofissue">
DateOfExpirey<input type="date" name="dateofexpirey">
<br>
PlaceOfBirth<!-- <input type="text" name="placeofbirth"> -->
<select name="placeofbirth">
<option>IRAN</option>
<option>PALESTINE</option>
<option>AFGHANISTAN</option>
<option>SAUDI-ARIBA</option>
<option>UAE</option>
<option>QATA</option>
<option>UK</option>
<option>CHINA</option>

</select>

Country<input type="text" name="country">
<br>
PhoneNumber<input type="text" name="phonenum">
Email<input type="email" name="email">

<input type="submit" name="submit">



</div>
</form>
</main>









</body>
<style >
*{margin: 0;padding: 0;box-sizing: border-box;}
main{margin: 5% 10%;
	padding: 10Px;
border: 1px solid black;}
#main-div{
	padding: 10px;
	border: 1px solid black;
}
</style>



</html>




<?php

$bid=2;
include 'dbconn.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$passportnum=$_POST['passportnum'];
	$dateofissue=$_POST['dateofissue'];
	$dateofexpirey=$_POST['dateofexpirey'];
	$placeofbirth=$_POST['placeofbirth'];
	$phonenum=$_POST['phonenum'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	
	$insertquery="INSERT INTO `booking`(`bid`, `fname`, `lname`, `gender`, `passportnum`, `dateofissue`, `dateofexpirey`, `placeofbirth`, `phonenum`, `email`, `country`) VALUES ('$bid','$fname','$lname','$gender','$passportnum','$dateofissue','$dateofexpirey','$placeofbirth','$phonenum','$email','$country')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {$bid=$bid+1;
	?>
<script type="text/javascript">
	alert("Data Inserted Successfully");	
</script>
<?php
}else{
	?>
<script type="text/javascript">
	alert("Data Not Inserted Successfully");
</script>
<?php
}
}
?>








}



?>














