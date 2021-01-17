<center>
<?php


echo "<h3>Update Route</h3>";
echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' placeholder='DepartureCity'    required><br>
<br>
<input type='submit' name='adroute' value='   ADD  '><br>
</form><main>";




include 'dbconn.php';
if(isset($_POST['adroute']))
{
$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$bclass=$_POST['bclass'];
$eclass=$_POST['eclass'];
$rbclass=$_POST['rbclass'];
$reclass=$_POST['reclass'];
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {

$rid=-1;

}

}
if ($rid==-1) {
	?>
<script >
	alert("This Route Is Exists Already");
</script>
<?php
}


if ($rid!=-1) {
	

$insertquery="INSERT INTO `routes`(`rid`, `depcity`, `destcity`, `ecprice`, `bcprice`, `reecprice`, `rebcprice`) VALUES ('','$depcity','$destcity','$eclass','$bclass','reclass','rbclass')";
$res=mysqli_query($myconn,$insertquery);

if ($res) {
echo "Route Is Inserted Successfully";
}
}

}
?>
</center>










