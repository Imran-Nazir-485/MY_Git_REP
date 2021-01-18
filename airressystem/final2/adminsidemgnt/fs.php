<center>
<?php


echo "<h3>Add New Flight Schedule</h3>";
echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>FlightId</lable>
<br>
<input type='text' name='fid' placeholder='FlightId'  style=\"text-transform:lowercase\"   required><br>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' placeholder='DepartureCity'    required><br>
<lable>DestinationCity</lable>
<br>
<input type='text' name='destcity' placeholder='DestinationCity'  required><br>
<lable>DepartureDate</lable>
<br>
<input type='date'      name='depdate' placeholder='DepartureDate'   required><br>
<lable>DestinationDate</lable>
<br>
<input type='date'  name='destdate' placeholder='DestinationDate'    required><br>
<lable>ReturnDate</lable>
<br>
<input type='date'   name='returndate' placeholder='ReturnBusinessPrice'   required><br>
<lable>DestinationTime</lable>
<br>
<input type='time'  name='deptime' placeholder='DepatureTime'   required><br>
<br>
<input type='submit' name='adfs' value='   ADD  '><br>
</form><main>";



include 'dbconn.php';
if(isset($_POST['adfs']))
{

$fid=$_POST['fid'];
$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$depdate=$_POST['depdate'];
$destdate=$_POST['destdate'];
$deptime=$_POST['deptime'];
$returndate=$_POST['returndate'];
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {

$rid=$myrow['rid'];

}

}

$myquery = "SELECT * FROM flights ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['fid']==$fid) {

$fid=$myrow['fid'];

}
else{
$fid=-1;
}
}




if ($fid==-1) {
?>
<script type="text/javascript">
	alert("No Such Flight Exists")
</script>
<?php
}
$date=date("y-m-d");
$myquery = "SELECT * FROM flightschedule ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['rid']==$rid  && $myrow['depdate']==$date &&  $myrow['fid']==$fid   ) {
$rid=-1;
?>
<script type="text/javascript">
	alert("This FLight is Already Scheduled")
</script>

<?php
}
}



$insertquery="INSERT INTO `flightschedule`(`fsid`, `fid`, `rid`, `reseats`, `rbseats`, `ecprice`, `bcprice`, `flightduration`, `destdate`, `deptime`, `depdate`, `returndate`, `reecprice`, `rebcprice`, `flightstatus`) VALUES ('','$fid','$rid','$destdate','$deptime','$depdate','$returndate')";
$res=mysqli_query($myconn,$insertquery);

if ($res) {
echo "Route Is Inserted Successfully";
}









}
?>
</center>










