<center>
<?php
// $myquery = "SELECT * FROM `routes` WHERE rid=(SELECT MAX(rid) FROM `routes`)";
// $myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
// echo $myrow['rid'];














echo "<h3>Update Route</h3>";
echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' placeholder='DepartureCity'    required><br>
<br>
<lable>DestinationCity</lable>
<br>
<input type='text' name='destcity' placeholder='DestinationCity'    required><br>
<br>




<input type='submit' name='uproute' value='Update'><br>
</form><main>";


if(isset($_POST['uproute']))
{
$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$rid=0;
include 'dbconn.php';
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {


$bcprice=$myrow['bcprice'];
$ecprice=$myrow['ecprice'];
$rebcprice=$myrow['rebcprice'];
$reecprice=$myrow['reecprice'];
$rid=$myrow['rid'];

$rid=1;

}

}

if ($rid!=1) {
	?>
<script >
	alert("No Such Route Exists");
</script>
<?php
}


if ($rid==1) {

header("Location:modifyroute.php?rid=$rid1&depcity=$depcity&destcity=$destcity&bcprice=$bcprice&ecprice=$ecprice&rebcprice=$rebcprice&reecprice=$reecprice");


}

}
?>
</center>










