
<?php



echo "<center>
<h3>Available Flights</h3>
</center>";





$way=$_GET['way'];
 echo "$way"."<br>";

session_start();
// echo $_SESSION['admin'];
// echo $_SESSION['depcity'];
// echo $_SESSION['destcity'];
// echo $_SESSION['depdate'];
// echo $_SESSION['deptime'];
// echo $_SESSION['returndate'];

$depcity=$_SESSION['depcity'];
$destcity=$_SESSION['destcity'];
$depdate=$_SESSION['depdate'];
$deptime=$_SESSION['deptime'];
$returndate=$_SESSION['returndate'];



include 'dbconn.php';
$count=0;
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
echo "<center>";
echo "<table border='1'  style=\"border-collapse:collapse ;text-align:center;\">  ";
echo "<tr> ";
echo "<td>FlightId</td>  ";
echo "<td>DeptCity</td>  ";
echo "<td>DestCity</td>  ";
echo "<td>DepartTime</td>  ";
echo "<td>DeptDate</td>  ";
echo "<td >ReturnDate</td>  ";
echo "<td>FlightDuration</td>  ";
echo "<td colspan='3'style='text-align:center;' >Select</td>  ";
echo "</tr> ";
echo "<tr>";
while($myrow = mysqli_fetch_assoc($myresult)){



if ($way=="adminside") {



$date = date("Y-m-d");
$rid=$myrow['rid'];
$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrow['rid']==$myrow1['rid'] && $myrow['depdate']>=$date) {
if ($myrow['returndate']==0) {
echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow1['depcity']."</td>"." <td>".$myrow1['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."
<td>"."NA"."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=1'\">"."</td>"."<td>"."</td>"."<td>"."<input type=\"submit\" Value='   NA    '   onclick=\"fun()\">"."</td>";
echo "</tr>";		
}
 if ($myrow['returndate']!=0){
echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow1['depcity']."</td>"." <td>".$myrow1['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."
<td>".$myrow['returndate']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=1'\">"."</td>"."<td>"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=2'\">"."</td>";
echo "</tr>";
}
}
}
}








$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){


if ($way==1) {


$date = date("Y-m-d");
$rid=$myrow['rid'];
$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrow['rid']==$myrow1['rid'] && $myrow['depdate']>=$date) {


if ($myrow['returndate']==0 && $destcity==$myrow1['destcity'] && $depcity==$myrow1['depcity']) {
echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow1['depcity']."</td>"." <td>".$myrow1['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."
<td>"."NA"."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=1'\">"."</td>"."<td>"."</td>"."<td>"."<input type=\"submit\" Value='   NA    '   onclick=\"fun()\">"."</td>";
echo "</tr>";		
		
}
if ($myrow['returndate']!=0 && $destcity==$myrow1['destcity'] && $depcity==$myrow1['depcity']){
echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow1['depcity']."</td>"." <td>".$myrow1['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."
<td>".$myrow['returndate']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=1'\">"."</td>"."<td>"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=2'\">"."</td>";
echo "</tr>";

}
}


}
}
$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){


if ($way==2) {



$date = date("Y-m-d");
$rid=$myrow['rid'];
$myquery1 = "SELECT * FROM  routes WHERE rid='$rid'";
$myresult1 = mysqli_query($myconn,$myquery1);
$myrow1 = mysqli_fetch_assoc($myresult1);
if ($myrow['rid']==$myrow1['rid'] && $myrow['depdate']>=$date) {







if ($myrow['returndate']!=0   && $destcity==$myrow1['destcity'] && $depcity==$myrow1['depcity']){
echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow1['depcity']."</td>"." <td>".$myrow1['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."
<td>".$myrow['returndate']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=1'\">"."</td>"."<td>"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"location.href='flightselection2.php?fid=$myrow[fid]&way=2'\">"."</td>";
echo "</tr>";

}
}
}

}












// $myquery = "SELECT * FROM flightschedule";
// $myresult = mysqli_query($myconn,$myquery);
// while($myrow = mysqli_fetch_assoc($myresult)){
// 	if ($destcity==$myrow['destcity'] && $depcity==$myrow['depcity'] && $returndate!=-1) {
//  echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow['depcity']."</td>"." <td>".$myrow['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."<td>".$myrow['reseats']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."
//       <td>"."NA"."</td>"."<td>".$myrow['reecprice']."</td>"."<td>".$myrow['rebcprice']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&destcity=$myrow[destcity]&deptime=$myrow[deptime]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=1'\">"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"myfun()\">"."</td>";
// echo "</tr>";		
// 	}
// 	if ($myrow['destcity']==$destcity && $myrow['depcity']==$depcity  &&   $returndate=$myrow['returndate']){
//   echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow['depcity']."</td>"." <td>".$myrow['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."<td>".$myrow['reseats']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."
//       <td>".$myrow['returndate']."</td>"."<td>".$myrow['reecprice']."</td>"."<td>".$myrow['rebcprice']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&destcity=$myrow[destcity]&deptime=$myrow[deptime]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=1'\">"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&deptime=$myrow[deptime]&destcity=$myrow[destcity]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=2'\">"."</td>";
// echo "</tr>";
// }
// }
// echo "</table>";
// echo "</center>";

// <td><a href='admin1.php?fid=$myrow[fid]'>SELECT</a></td></td>

  ?>

<script type="">
	

function fun()
{
	alert("Return Route Is Not Available For This Flight");
}

</script>