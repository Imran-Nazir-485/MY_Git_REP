<center>
	<?php
$depcity=$_GET['depcity'];
$bcprice=$_GET['bcprice'];
$ecprice=$_GET['ecprice'];
$rebcprice=$_GET['rebcprice'];
$reecprice=$_GET['reecprice'];
$destcity=$_GET['destcity'];
$rid=$_GET['rid'];



include 'dbconn.php';
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {

$rid=$myrow['rid'];
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












if (isset($_POST['modify'])) {

$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$bcprice=$_POST['bclass'];
$ecprice=$_POST['eclass'];
$rebcprice=$_POST['rbclass'];
$reecprice=$_POST['reclass'];





$myquery = "UPDATE `routes` SET `rid`='$rid',`depcity`='$depcity',`destcity`='$destcity',`ecprice`='$ecprice',`bcprice`='$bcprice',`reecprice`='$reecprice',`rebcprice`='$rebcprice' WHERE rid='$rid'";
$myresult = mysqli_query($myconn,$myquery);
if ($myresult) {
}
}

















?>
</center>










