



















<!DOCTYPE html>
<html>
<head>
	<title>Booked Seats</title>
</head>
<body style="width: ">

<h1   style="text-align: center;">This Is Working</h1 >
</body>
</html>








<?php











include 'dbconn.php';

$count=0;
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
echo "<center>";
echo "<table border='1' width='300' style=\"border-collapse:collapse; \">  ";
echo "<tr> ";
echo "<td>FlightId</td>  ";
echo "<td>DeptCity</td>  ";
echo "<td>DestCity</td>  ";
echo "<td>DepartTime</td>  ";
echo "<td>DeptDate</td>  ";
echo "<td>EconomyClass</td>  ";
echo "<td>BusinessClass</td>  ";
echo "<td>EconomyPrice</td>  ";
echo "<td>BusinessPrice</td>  ";
echo "<td>ReturnDate</td>  ";
echo "<td>EconomyPrice</td>  ";
echo "<td>BusinessPrice</td>  ";
echo "<td>FlightDuration</td>  ";
echo "<td colspan='2'>Operation</td>  ";

echo "</tr> ";
echo "<tr>";
while($myrow = mysqli_fetch_assoc($myresult)){
	














  echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow['depcity']."</td>"." <td>".$myrow['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."<td>".$myrow['reseats']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."
      <td>".$myrow['returndate']."</td>"."<td>".$myrow['reecprice']."</td>"."<td>".$myrow['rebcprice']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."Oneway"."<input type='radio'   name='SELECT' value='SELECT' onclick=\"location.href='admin1.php?fid=$myrow[fid]'\"  >"."</td>"."<td>"."Return"."<input type='radio'   name='SELECT' value='SELECT' onclick=\"location.href='admin1.php?fid=$myrow[fid]'\"  >"."</td>";
echo "</tr>";

}


echo "</table>";
echo "</center>";




// <td><a href='admin1.php?fid=$myrow[fid]'>SELECT</a></td></td>












  ?>










<!-- <?php
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
?> -->














































































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