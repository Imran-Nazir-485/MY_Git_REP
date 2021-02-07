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
<title>Routes_Management</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Add New Route</p>
<br><br>
<!-- <form method="post">
<div class="row ml-5">
 -->




<form method="post">
  <div class="row">
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
    	<label>BusinessPrice</label>
      <input type="number" name="bcprice"  min="20000" class="form-control" placeholder="BusinessPrice" >
    </div>
<div class="col">
    	<label>EconomyPrice</label>
      <input type="number" name="ecprice" min="15000" class="form-control" placeholder="EconomyPrice" >
    </div>
<div class="w-100"></div>
<div class="col">
    	<label>Ret_BusinessPrice</label>
      <input type="number" name="rebcprice" min="40000" class="form-control" placeholder="Ret_BusinessPrice" >
    </div>
<div class="col">
    	<label>Ret_EconomyPrice</label>
      <input type="number" name="reecprice" min="30000" class="form-control" placeholder="Ret_EconomyPrice" >
    </div>
<div class="w-100"></div>
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-secondary" value="ADD" name="adroute">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-secondary" value="GoTo Route Management" name="routemanagement">
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
if(isset($_POST['adroute']))
{
$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$bclass=$_POST['bcprice'];
$eclass=$_POST['ecprice'];
$rbclass=$_POST['rebcprice'];
$reclass=$_POST['reecprice'];
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
$insertquery="INSERT INTO `routes`(`rid`, `depcity`, `destcity`, `ecprice`, `bcprice`, `reecprice`, `rebcprice`) VALUES ('','$depcity','$destcity','$eclass','$bclass','$reclass','$rbclass')";
$res=mysqli_query($myconn,$insertquery);

if ($res) {
echo "Route Is Inserted Successfully";
}
}
}





if (isset($_POST['routemanagement'])) {
	header("Location:routemgmnt.php");
}











?>
</center>










