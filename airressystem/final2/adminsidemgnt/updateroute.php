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
<title>Update_Routes</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Update Route</p>
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
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="FIND" name="modifyroute">
</div>
<div class="col">
    <input type="submit" class="form-control btn btn-primary" value="GoTo Route Management" name="routemanagement">
</div>
  





  </div>
</form>

</div>
</center>
</body>
</html>











<center>
<?php
// $myquery = "SELECT * FROM `routes` WHERE rid=(SELECT MAX(rid) FROM `routes`)";
// $myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
// echo $myrow['rid'];














// echo "<h3>Update Route</h3>";
// echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
// <lable>DepartureCity</lable>
// <br>
// <input type='text' name='depcity' placeholder='DepartureCity'    required><br>
// <br>
// <lable>DestinationCity</lable>
// <br>
// <input type='text' name='destcity' placeholder='DestinationCity'    required><br>
// <br>




// <input type='submit' name='uproute' value='Update'><br>
// </form><main>";


if(isset($_POST['modifyroute']))
{
$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$rid=0;
include 'dbconn.php';
$myquery = "SELECT * FROM routes ";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['depcity']==$depcity && $myrow['destcity']==$destcity) {


$bcprice=$myrow['bcprice'];
$ecprice=$myrow['ecprice'];
$rebcprice=$myrow['rebcprice'];
$reecprice=$myrow['reecprice'];
$rid=$myrow['rid'];

$rid=1;

}

}

if ($rid!=1) {
	?>
<script >
	alert("No Such Route Exists");
</script>
<?php
}


if ($rid==1) {

header("Location:modifyroute.php?rid=$rid1&depcity=$depcity&destcity=$destcity&bcprice=$bcprice&ecprice=$ecprice&rebcprice=$rebcprice&reecprice=$reecprice");


}

}
?>
</center>










