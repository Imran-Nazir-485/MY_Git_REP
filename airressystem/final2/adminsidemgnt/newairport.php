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
<title>Airport_Management</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Add New Airport</p>
<br><br>
<!-- <form method="post">
<div class="row ml-5">
 -->




<form method="post">
  <div class="row">
    <div class="col">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="AirportName" >
    </div>
    <div class="col">
      <label>Address</label>
      <input type="text" name="address" class="form-control" placeholder="Address" >
    </div>
<div class="w-100"></div>
<div class="col">
      <label>City</label>
      <input type="text" name="city" class="form-control" placeholder="City" >
    </div>
<div class="col">
      <label>PostCode</label>
      <input type="number" name="pcode" class="form-control" placeholder="postCode" >
    </div>
<div class="w-100"></div>
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-danger" value="ADD" name="adapot">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-danger" value="GoTo  Management" name="airresmgmntsystm">
</div>
  





  </div>
</form>

</div>
</center>
</body>
</html>


<center>
<?php
$rid=0;
include 'dbconn.php';
if(isset($_POST['adapot']))
{
$name=$_POST['name'];
$city=$_POST['city'];
$address=$_POST['address'];
$pcode=$_POST['pcode'];


$insertquery="INSERT INTO `airport`(`apcode`, `name`, `city`, `address`, `postcode`) VALUES ('','$name','$city','$address','$pcode')";
$res=mysqli_query($myconn,$insertquery);

if ($res) {
echo "Airport Is Inserted Successfully";
}





}





if (isset($_POST['airresmgmntsystm'])) {
  header("Location:airresmgmntsystm.php");
}

?>
</center>










