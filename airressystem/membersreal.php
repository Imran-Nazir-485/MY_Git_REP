
<?php
include 'dbconn.php';
$count=0;
extract($_POST);
if(isset($_POST['signup']))
{

	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['usermail'];
	$password=$_POST['password'];
$insertquery="SELECT * FROM `members` ";
$myresult=mysqli_query($myconn,$insertquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['email']==$usermail) {
$count=$count+1;
}
}
if($count>0)
{echo "Already Exists"."<br>";}
elseif ($count==0){
$insertquery="INSERT INTO `members`( `fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";
$myrow=mysqli_query($myconn,$insertquery);
header('Location:admin1.php');
}
elseif($myrow) {
	?>
<script type="text/javascript">
	alert("Data Inserted Successfully");	
</script>
<?php
}else{
	?>
<script type="text/javascript">
	alert("Data Not Inserted Successfully");
</script>
<?php
}
}
?>

