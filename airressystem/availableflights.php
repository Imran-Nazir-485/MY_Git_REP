
<?php

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
echo "<td>EconomyClass</td>  ";
echo "<td>BusinessClass</td>  ";
echo "<td>EconomyPrice</td>  ";
echo "<td>BusinessPrice</td>  ";
echo "<td >ReturnDate</td>  ";
echo "<td>EconomyPrice</td>  ";
echo "<td>BusinessPrice</td>  ";
echo "<td>FlightDuration</td>  ";
echo "<td colspan='2'style='text-align:center;' >TourType</td>  ";

echo "</tr> ";
echo "<tr>";
while($myrow = mysqli_fetch_assoc($myresult)){


	if ($myrow['returndate']==0) {
 echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow['depcity']."</td>"." <td>".$myrow['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."<td>".$myrow['reseats']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."
      <td>"."NA"."</td>"."<td>".$myrow['reecprice']."</td>"."<td>".$myrow['rebcprice']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&deptime=$myrow[deptime]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=1'\">"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"myfun()\">"."</td>";
echo "</tr>";		
	}
	else{


  echo   "<td>".$myrow['fid']."</td>"."<td>".$myrow['depcity']."</td>"." <td>".$myrow['destcity']."</td>"."<td>".$myrow['deptime']."</td>"."<td>".$myrow['depdate']."</td>"."<td>".$myrow['reseats']."</td>"."<td>".$myrow['rbseats']."</td>"."<td>".$myrow['ecprice']."</td>"."<td>".$myrow['bcprice']."</td>"."
      <td>".$myrow['returndate']."</td>"."<td>".$myrow['reecprice']."</td>"."<td>".$myrow['rebcprice']."</td>"."<td>".$myrow['flightduration']."</td>"."<td>"."<input type=\"submit\" Value='OneWay'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&deptime=$myrow[deptime]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=1'\">"."</td>"."<td>"."<input type=\"submit\" Value='Return'   onclick=\"location.href='flightselection.php?fid=$myrow[fid]&depdate=$myrow[depdate]&depcity=$myrow[depcity]&deptime=$myrow[deptime]&returndate=$myrow[returndate]&rid=$myrow[rid]&way=2'\">"."</td>";
echo "</tr>";
}
}

echo "</table>";
echo "</center>";

// <td><a href='admin1.php?fid=$myrow[fid]'>SELECT</a></td></td>











  ?>

<script type="">
	

function myfun()
{
	alert("Return Route Is Not Available For This Flight");
}

</script>