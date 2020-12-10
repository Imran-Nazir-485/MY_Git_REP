



















<!DOCTYPE html>
<html>
<head>
	<title>Booked Seats</title>
</head>
<body style="width: ">


</body>
</html>




<?php
// 1- Connect to database
$myconn= mysqli_connect("localhost","root","","airressystem");

//2- Run SQL Query
$myquery = "SELECT * FROM flightschedule";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
//4- Show results
$rem=0;
while($myrow = mysqli_fetch_assoc($myresult)){
while($rem<=($myrow["tbseats"]-$myrow["rbseats"]))
{
echo "<input type=\"button\"  value=\"Booked\" style=\"background-color: red\" width:\" 30px\">";
$rem=$rem+1;
if($rem%10==0)
	{
		echo "<br>";
	}
	// $rem=$rem+1;
}
echo "<br>";
$rem=0;
while($rem<=$myrow["rbseats"])
{echo "<input type=\"button\"  value=\"UnBooked\" style=\"background-color: white\">";
$rem=$rem+1;
if($rem%9==0)
	{
		echo "<br>";
	}
	
}
	
// echo "<input type=\"button\"  value=\"Booked\" style=\"background-color: red\">";
// echo $myrow["rollno"] . "    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";




}
?>














































































<!-- <!DOCTYPE html>
<html>
<head>
	<title>PHP Working</title>
</head>
<body>

<form method="POST">
	Enter Your Favorite Color:
	<input type="text" name="favcolor">
<input type="submit" name="submit"  value="Check">

</form>

<p>
	
	<?php
if(isset($_POST['submit']))
{
     $favColor= $_POST['favcolor'];
     //echo $favColor;
switch ($favColor) {
	case 'blue':
		echo "<input type=\"button\"  value=\"Booked\" style=\"background-color: red\">";
		break;
	case 'black':
		echo "Your Favorite Coloris {$favColor}";
		break;
	case 'red':
		echo "Your Favorite Coloris {$favColor}";
		break;
	
	default:
		# code...
		break;
}




}

	?>
</p>

</body>
</html> -->