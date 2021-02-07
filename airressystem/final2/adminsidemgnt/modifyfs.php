<center>
	<?php
$rid=$_GET['rid'];
$fid=$_GET['fid'];
$deptime=$_GET['deptime'];
$depdate=$_GET['depdate'];
$retdate=$_GET['returndate'];


// echo $fid."<br>";
// echo $depdate."<br>";
// echo $deptime."<br>";
// echo $retdate."<br>";




include 'dbconn.php';
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['rid']==$rid) {

$rid=$myrow['rid'];
$depcity=$myrow['depcity'];
$destcity=$myrow['destcity'];
$bcprice=$myrow['bcprice'];
$ecprice=$myrow['ecprice'];
$rebcprice=$myrow['rebcprice'];
$reecprice=$myrow['reecprice'];



}

}

// echo $destcity;


$myquery = "SELECT * FROM flights";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['fid']==$fid && $myrow['status']=="operational" ) {


$fid=$myrow['fid'];
$status=1;
$bseats=$myrow['bseats'];
$eseats=$myrow['eseats'];


}



}
// echo $fid;




?>
<!DOCTYPE>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<title>Update_FS</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Update Flight Schedule</p>
<br><br>
<!-- <form method="post">
<div class="row ml-5">
 -->




<form method="post">
  <div class="row">
    <div class="col">
    <label>FlightId</label>
      <input type="text" name="fid" class="form-control"   value="<?php   echo $fid   ?>"  >
    </div>

<div class="col">
    	<label>DepartureDate</label>
      <input type="date" name="depdate"   class="form-control"  value="<?php   echo $depdate  ?>">
    </div>
<div class="col">
      <label>ReturnDate</label>
      <input type="text" name="retdate"   class="form-control"  value="<?php   echo $retdate  ?>">
    </div>
    <div class="w-100"></div>

<div class="col">
    	<label>DepartureTime</label>
      <input type="text" name="deptime"  class="form-control"  value="<?php   echo $deptime   ?>">
    </div>

<div class="col">

<label>DepartureCity</label>
      <input type="text" name="depcity"   class="form-control"  value="<?php   echo $depcity  ?>">
    </div>
<div class="col">
      <label>DestinationCity</label>
      <input type="text" name="destcity"  class="form-control"  value="<?php   echo $destcity   ?>">
    </div>
<div class="w-100"></div>
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="UPDATE" name="modify">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="GoTo FS Management" name="fsmanagement">
</div>
  





</div>
</form>
</div>
</center>
</body>
</html>






<?php




if (isset($_POST['modify'])) {

$fid2=$_POST['fid'];
$depcity2=$_POST['depcity'];
$destcity2=$_POST['destcity'];
$depdate2=$_POST['depdate'];
$deptime2=$_POST['deptime'];
$returndate2=$_POST['retdate'];




echo $depcity2."<br>";

echo $destcity2."<br>";




if ($depcity==$depcity2 && $destcity==$destcity2) {
  echo "No Changes To Commit";
}
else
{
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
$check=-1;
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity2 && $myrow['destcity']==$destcity2) {
$check=1;
$rid2=$myrow['rid'];
$depcity2=$myrow['depcity'];
$destcity2=$myrow['destcity'];
$bcprice2=$myrow['bcprice'];
$ecprice2=$myrow['ecprice'];
$rebcprice2=$myrow['rebcprice'];
$reecprice2=$myrow['reecprice'];
}
}
if ($check==-1) {
  echo "No Such Route Exists";
}
else{


$insertquery="UPDATE `flightschedule` SET `rid`='$rid2',`ecprice`='$ecprice2',`bcprice`='$bcprice',`deptime`='$deptime2',`depdate`='$depdate2',`returndate`='$returndate2',`reecprice`='$reecprice2',`rebcprice`='$rebcprice2'  WHERE rid='$rid'";
//echo "Inserted";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
    echo "";
}
}




}








if ($fid==$fid2) {
  echo "No Changes To Commit";
}
else
{
$myquery = "SELECT * FROM flights ";
$myresult = mysqli_query($myconn,$myquery);
$check1=-1;
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['fid']==$fid2) {
$check1=1;
$fid2=$myrow['fid'];
$bseats=$myrow['bseats'];
$eseats=$myrow['eseats'];



}
}
if ($check1==-1) {
  echo "No Such Route Exists";
}
else{


$insertquery="UPDATE `flightschedule` SET `fid`='$fid2',`reseats`='$eseats',`rbseats`='$bseats' WHERE fid='$fid'";
//echo "Inserted";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
    echo "";
}
}




}


















































// $myquery = "UPDATE `routes` SET `rid`='$rid',`depcity`='$depcity',`destcity`='$destcity',`ecprice`='$ecprice',`bcprice`='$bcprice',`reecprice`='$reecprice',`rebcprice`='$rebcprice' WHERE rid='$rid'";
// $myresult = mysqli_query($myconn,$myquery);
// if ($myresult) {
// }
 }







if (isset($_POST['fsmanagement'])) {
	header("Location:fsmanagement.php");
}









?>
</center>










