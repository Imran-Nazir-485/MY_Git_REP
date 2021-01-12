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
	<option>NA</option>
<option>WheelChair</option>
<!-- <option>Female</option>
<option>Other</option> -->
</select>
<br>
CNIC<input type="text" name="cnic">
PassportNumber<input type="text" name="passport" maxlength="9" minlength="9">

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



 
// $fid=$_GET['fid'];
// $depcity=$_GET['depcity'];
// $destcity=$_GET['destcity'];
// $depdate=$_GET['depdate'];
// $deptime=$_GET['deptime'];
// $tickets=$_GET['tickets'];
// $cabin=$_GET['cabin'];
// $returndate=$_GET['returndate'];



// echo "$fid"."<br>"; 
// echo "$depcity"."<br>"; 
// echo "$destcity"."<br>"; 
// echo "$depdate"."<br>"; 
// echo "$tickets"."<br>"; 
// echo "$cabin"."<br>"; 
// echo "$deptime"."<br>"; 
// echo "$returndate"."<br>"; 
  















$pid=2;
include 'dbconn.php';




// session_start();
// echo $_SESSION["flightid"]."<br>";
// echo $_SESSION["depcity"]."<br>";
// echo $_SESSION["depdate"]."<br>";
// echo $_SESSION["deptime"]."<br>";
// echo $_SESSION["tickets"]."<br>";
// echo $_SESSION["cabin"]."<br>";




// $flightid=$_SESSION["flightid"];
// $depcity =$_SESSION["depcity"];
// $depdate =$_SESSION["depdate"];
// $deptime =$_SESSION["deptime"];
// $tickets =$_SESSION["tickets"];
// $cabin= $_SESSION["cabin"];







// $flightid= $_SESSION["flightid"];
// $depcity= $_SESSION["depcity"];
// $depdate=$_SESSION["depdate"];
// $deptime=$_SESSION["deptime"];
// $tickets=$_SESSION["tickets"];
// $cabin=$_SESSION["cabin"];




 








 // $_SESSION["flightid"];
 // $_SESSION["depcity"];
 // $_SESSION["depdate"];
 // $_SESSION["deptime"];
 // $_SESSION["tickets"];
 // $_SESSION["cabin"];



// $fromcity=$_SESSION["depcity"];
// $_SESSION["depcity"]=$fromcity;
// $destcity=$_SESSION["destcity"];
// $_SESSION["destcity"]=$destcity;
// $dateofdep=$_SESSION["depdate"];
// $_SESSION["depdate"]=$dateofdep;
// $cabin=$_SESSION["cabin"];
// $_SESSION["cabin"]=$cabin;


if (isset($_POST['submit'])) {






//$depcity=$_SESSION["depcity"];
//$_SESSION["depcity"]=$depcity;

 //echo $_SESSION["depcity"]."<br>";
// $_SESSESION["depcity"]=$depcity;
//header('Location:booking_form.php');



// sessesion_start();
// //$depcity=$_SESSESION["depcity"];
// echo $_SESSESION["depcity"];
// $_SESSESION["depcity"]=$depcity;

	//header('Location:booking_form.php');

}

if(isset($_POST['submit']))
{



header("Location:booking_form2.php?pid=2");

	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dateofbirth'];
	$nationality=$_POST['nationality'];
	$otherservices=$_POST['otherservices'];
	$cnic=$_POST['cnic'];
	$passport=$_POST['passport'];
	



	// $insertquery="INSERT INTO `passenger`( `fname`, `lname`, `dob`, `nationality`, `othservices`, `cnic`, `passport`) VALUES ('$fname','$lname','$dob','$nationality','$otherservices','$cnic','$passport')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {


$last_pid = $myconn->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// $_SESSION["pid"]=$last_id;

header("Location:booking_form.php?pid=$last_pid");

// header('Location:booking_form.php');

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












//if ($conn->query($sql) === TRUE) {
  // $last_id = $myconn->insert_id;
  // echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>
 
 















</body>
</html>
