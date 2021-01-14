<center>
<?php


echo "<h3>Add New Route</h3>";

if ($route=="adroute") {

echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
<lable>DepartureCity</lable>
<br>
<input type='text' name='depcity' placeholder='DepartureCity'><br>
<lable>DestinationCity</lable>
<br>
<input type='text' name='destcity' placeholder='DestinationCity'><br>
<lable>BusinessPrice</lable>
<br>
<input type='text' name='bclass' placeholder='BusinessPrice'><br>
<lable>EconomyPrice</lable>
<br>
<input type='text' name='eclass' placeholder='EconomyPrice'><br>
<lable>ReturnBusinessPrice</lable>
<br>
<input type='text' name='rbclass' placeholder='ReturnBusinessPrice'><br>
<lable>ReturnEconomyPrice</lable>
<br>
<input type='text' name='reclass' placeholder='ReturnEconomyPrice'><br>
<br>
<input type='submit' name='adroute' value='   ADD  '><br>
</form><main>";
}




include 'dbconn.php';
$count=0;
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
echo "Route Is Already Exists";
$count=1;
break;
}
}
if ($count==0) {
$insertquery="INSERT INTO `routes`(`rid`, `depcity`, `destcity`, `ecprice`, `bcprice`, `reecprice`, `rebcprice`) VALUES ('','$depcity','$destcity','$eclass','$bclass','reclass','rbclass')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
echo "Route Is Inserted Successfully";
}
}







}


















?>
</center>










