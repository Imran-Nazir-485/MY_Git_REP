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
<title>Add_New_Flight</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Add New Flight</p>
<br><br>
<!-- <form method="post">
<div class="row ml-5">
 -->




<form method="post">
  <div class="row">
    <div class="col">
      <label>FlightId</label>
      <input type="text" name="flightid" class="form-control" placeholder="FlightId" >
    </div>
    <div class="col">
    	<label>Model</label>
      <input type="text" name="model" class="form-control" placeholder="FlightModel" >
    </div>
<div class="w-100"></div>

<div class="col">
    	<label>DateOfOperation</label>
      <input type="date" name="dateofoperation"  class="form-control" placeholder="DateOfOperation" >
    </div>

<div class="col">
    	<label>DateOfExpirey</label>
      <input type="date" name="dateofexpirey"  class="form-control" placeholder="DateOfExpirey" >
    </div>


<div class="w-100"></div>


<div class="col">
    	<label>BusinessSeats</label>
      <input type="number" name="bseats"   class="form-control" placeholder="BusinessSeats" >
    </div>
<div class="col">
    	<label>EconomySeats</label>
      <input type="number" name="eseats"  class="form-control" placeholder="EconomySeats" >
    </div>
<div class="w-100"></div>


<div class="col">
    	<label>Engines</label>
      <input type="number" name="engines"   class="form-control" placeholder="No of Engines" >
    </div>
<div class="col">
    	<label>Maintenace</label>
      <input type="number" name="maintenace"  class="form-control" placeholder="Maintenace" >
    </div>
<div class="w-100"></div>


<div class="col">
    	<label>Life</label>
      <input type="number" name="life"   class="form-control" placeholder="FlightLife" >
    </div>
<div class="col">
    	<label>Status</label>
      <input type="number" name="status"  class="form-control" placeholder="Operational/Grounded" >
    </div>
<div class="w-100"></div>
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="ADD" name="adflight">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="GoTo Flight Management" name="routemanagement">
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
if(isset($_POST['adflight']))
{


$flightid=$_POST['flightid'];
$model=$_POST['model'];
$operation=$_POST['dateofoperation'];
$expirey=$_POST['dateofexpirey'];
$status=$_POST['status'];
$bseats=$_POST['bseats'];
$eseats=$_POST['eseats'];
$engines=$_POST['engines'];
$maintenace=$_POST['maintenace'];
$life=$_POST['life'];



include 'dbconn.php';
$insertquery="INSERT INTO `flights`(`fid`, `apcode`, `model`, `life`, `dateofoperation`, `dateofexpirey`, `bseats`, `eseats`, `engines`, `maintservices`, `status`) VALUES ('$flightid','MUL60000
','$model','$life','$operation','$expirey','$bseats','$eseats','$engines','$maintenace','$status')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
	echo "Flight Inserted";
}






}


if (isset($_POST['routemanagement'])) {
	header("Location:routemgmnt.php");
}











?>
