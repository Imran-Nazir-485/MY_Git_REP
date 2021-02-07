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
<title>Add_New_Flight_Schedule</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Add New Flight Schedule</p>
<br><br>
<!-- <form method="post">
<div class="row ml-5">
 -->




<form method="post">
  <div class="row">
    <div class="col-6">
      <label>FlightId</label>
      <input type="text" name="fid" class="form-control" placeholder="FlightId" >
    </div>


    <div class="col">
      <label>DepartureCity</label>
      <input type="text" name="depcity" class="form-control" placeholder="DepartureCity" >
    </div>
    <div class="col">
        <label>DestinationCity</label>
      <input type="text" name="destcity" class="form-control" placeholder="DestinationCity" >
    </div>
<div class="w-100"></div>

<div class="col">
        <label>DateOfDeparture</label>
      <input type="date" name="depdate"  class="form-control" placeholder="DateOfDeparture" >
    </div>

<div class="col">
        <label>ReturnDate</label>
      <input type="date" name="retdate"  class="form-control" placeholder="ReturnDate" >
    </div>


<div class="w-100"></div>


<div class="col">
        <label>DepartureTime</label>
      <input type="time" name="deptime"  class="form-control" placeholder="DepartureTime" >
    </div>

<div class="col">
        <label>Flight Duration</label>
      <input type="number" name="fduration"   class="form-control" placeholder="FlightDuration" >
    </div>
<div class="w-100"></div>


<br>
<div class="col">
    <input type="submit" class="form-control btn btn-info" value="ADD" name="adfs">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-info" value="GoTo Schedule Management" name="fsmanagement">
</div>
  





  </div>
</form>

</div>
</center>
</body>
</html>







<?php
$rid=0;
include 'dbconn.php';
if(isset($_POST['adfs']))
{


$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$depdate=$_POST['depdate'];
$retdate=$_POST['retdate'];
$deptime=$_POST['deptime'];
$fduration=$_POST['fduration'];
$fid=$_POST['fid'];

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

// echo $rid."<br>";
// echo $depcity."<br>";
// echo $destcity."<br>";
// echo $bcprice."<br>";
// echo $ecprice."<br>";
// echo $rebcprice."<br>";
// echo $reecprice."<br>";




$status=-1;
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





// echo $fid."<br>";
// echo $bseats."<br>";
// echo $eseats."<br>";





if ($status==-1) {
    echo "Either This Flight Is Grounded Or Not Exits";
}


$insertquery="INSERT INTO `flightschedule`(`fsid`, `fid`, `rid`, `reseats`, `rbseats`, `ecprice`, `bcprice`, `flightduration`, `deptime`, `depdate`, `returndate`, `reecprice`, `rebcprice`, `flightstatus`) VALUES ('','$fid','$rid','$eseats','$bseats','$ecprice','$bcprice','$fduration','$deptime','$depdate','$retdate','$rebcprice','$reecprice','')";
//echo "Inserted";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
    echo "Flight Inserted";
}

$date=date('Y-m-d ');





$myquery = "SELECT * FROM flightschedule";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depdate']<$date ) {
$depdate1=$myrow['depdate'];
$insertquery="UPDATE `flightschedule` SET `flightstatus`='Departured' where depdate='$depdate1'";
$res=mysqli_query($myconn,$insertquery);


}



}










}


if (isset($_POST['fsmanagement'])) {
    header("Location:fsmanagement.php");
}











?>
