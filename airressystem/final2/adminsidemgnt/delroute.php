<center>
	<?php

include 'dbconn.php';
echo "<h3>Modification Of Routes</h3>";

echo "<center><main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' placeholder=\"DepartureCity\"    required><br>
<lable>DestinationCity</lable>
<br>
<input type='text' name='destcity' placeholder=\"DestinationCity\"  required><br>
<input type='submit' name='delroute' value='Delete'><br>
</form><main></center>";












if (isset($_POST['delroute'])) {


$depcity=$_POST['depcity'];

$destcity=$_POST['destcity'];



$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {

$rid=$myrow['rid'];


}


}
// ;echo $rid;





$sql = "DELETE FROM routes WHERE rid='$rid'";

if (mysqli_query($myconn, $sql)) {




// $myquery = "DELETE * FROM routes WHERE rid='$rid'";
// $myresult = mysqli_query($myconn,$myquery);


// if ($myresult) {

echo "Route Is Deleted";

}




}

















?>
</center>










