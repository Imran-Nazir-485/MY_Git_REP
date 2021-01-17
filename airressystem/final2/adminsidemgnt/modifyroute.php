<center>
	<?php
$depcity=$_GET['depcity'];
$destcity=$_GET['destcity'];



include 'dbconn.php';
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {

$depcity=$myrow['depcity'];
$destcity=$myrow['destcity'];
$bcprice=$myrow['bcprice'];
$ecprice=$myrow['ecprice'];
$rebcprice=$myrow['rebcprice'];
$reecprice=$myrow['reecprice'];



}

}
echo "<h3>Modification Of Routes</h3>";

echo "<center><main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' value=\"$depcity\"    required><br>
<lable>DestinationCity</lable>
<br>
<input type='text' name='destcity' value=\"$destcity\"  required><br>
<lable>BusinessPrice</lable>
<br>
<input type='number'   min=\"20000\"    name='bclass' value=\"$bcprice\"   required><br>
<lable>EconomyPrice</lable>
<br>
<input type='number' min=\"15000\" name='eclass' value=\"$ecprice\"    required><br>
<lable>ReturnBusinessPrice</lable>
<br>
<input type='number'  min=\"40000\" name='rbclass' value=\"$rebcprice\"   required><br>
<lable>ReturnEconomyPrice</lable>
<br>
<input type='number' min=\"30000\" name='reclass' value=\"$reecprice\"   required><br>
<br>
<input type='submit' name='modify' value='Modify'><br>
</form><main></center>";

?>
</center>










