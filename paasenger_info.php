<!DOCTYPE html>
<html>
<head>
<title>Passenger_Info</title>
</head>
<body>




<main>
<form method="POST">
<div id="main-div">

F-Name<input type="text" name="fname">
L-Name<input type="text" name="lname">
<br>
DateOfBirth<input type="date" name="dateofbirth">
Nationality
<select name="nationality">
<option>PAKISTAN</option>
<option>IRAN</option>
<option>PALESTINE</option>
<option>AFGHANISTAN</option>
<option>SAUDI-ARIBA</option>
<option>UAE</option>
<option>QATA</option>
<option>UK</option>
<option>CHINA</option>

</select>
OtherServices<!-- <input type="text" name="gender"> -->
<select name="otherservices">
	<option>None</option>
<option>WheelChair</option>
<!-- <option>Female</option>
<option>Other</option> -->
</select>
<br>
CNIC<input type="text" name="cnic">
PassportNumber<input type="text" name="passport">

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

$pid=2;
include 'dbconn.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dateofbirth'];
	$nationality=$_POST['nationality'];
	$otherservices=$_POST['otherservices'];
	$cnic=$_POST['cnic'];
	$passport=$_POST['passport'];
	
	$insertquery="INSERT INTO `passenger`(`pid`, `fname`, `lname`, `dob`, `nationality`, `othservices`, `cnic`, `passport`) VALUES ('$pid','$fname','$lname','$dob','$nationality','$otherservices','$cnic','$passport')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
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
 
 















</body>
</html>