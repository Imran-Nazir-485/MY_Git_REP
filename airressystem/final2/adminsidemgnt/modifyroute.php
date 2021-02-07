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
<title>Update_Route</title>
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
      <input type="text" name="depcity" class="form-control"   value="<?php   echo $depcity   ?>"  >
    </div>
    <div class="col">
    	<label>DestinationCity</label>
      <input type="text" name="destcity" class="form-control"  value="<?php   echo $destcity   ?>">
    </div>
<div class="w-100"></div>
<div class="col">
    	<label>BusinessPrice</label>
      <input type="number" name="bcprice"  min="20000" class="form-control"  value="<?php   echo $bcprice   ?>">
    </div>
<div class="col">
    	<label>EconomyPrice</label>
      <input type="number" name="ecprice" min="15000" class="form-control"  value="<?php   echo $ecprice   ?>">
    </div>
<div class="w-100"></div>
<div class="col">
    	<label>Ret_BusinessPrice</label>
      <input type="number" name="rebcprice" min="40000" class="form-control"  value="<?php   echo $rebcprice   ?>">
    </div>
<div class="col">
    	<label>Ret_EconomyPrice</label>
      <input type="number" name="reecprice" min="30000" class="form-control"  value="<?php   echo $reecprice   ?>">
    </div>
<div class="w-100"></div>
<br>
<div class="col">
    <input type="submit" class="form-control btn btn-secondary" value="UPDATE" name="modify">
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






<?php

// echo "<h3>Modification Of Routes</h3>";

// echo "<center><main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'>
// <lable>DepartureCity</lable>
// <br>
// <input type='text' name='depcity' value=\"$depcity\"    required><br>
// <lable>DestinationCity</lable>
// <br>
// <input type='text' name='destcity' value=\"$destcity\"  required><br>
// <lable>BusinessPrice</lable>
// <br>
// <input type='number'   min=\"20000\"    name='bclass' value=\"$bcprice\"   required><br>
// <lable>EconomyPrice</lable>
// <br>
// <input type='number' min=\"15000\" name='eclass' value=\"$ecprice\"    required><br>
// <lable>ReturnBusinessPrice</lable>
// <br>
// <input type='number'  min=\"40000\" name='rbclass' value=\"$rebcprice\"   required><br>
// <lable>ReturnEconomyPrice</lable>
// <br>
// <input type='number' min=\"30000\" name='reclass' value=\"$reecprice\"   required><br>
// <br>
// <input type='submit' name='modify' value='Modify'><br>
// </form><main></center>";












if (isset($_POST['modify'])) {

$depcity=$_POST['depcity'];
$destcity=$_POST['destcity'];
$bcprice=$_POST['bcprice'];
$ecprice=$_POST['ecprice'];
$rebcprice=$_POST['rebcprice'];
$reecprice=$_POST['reecprice'];





$myquery = "UPDATE `routes` SET `rid`='$rid',`depcity`='$depcity',`destcity`='$destcity',`ecprice`='$ecprice',`bcprice`='$bcprice',`reecprice`='$reecprice',`rebcprice`='$rebcprice' WHERE rid='$rid'";
$myresult = mysqli_query($myconn,$myquery);
if ($myresult) {
}
}







if (isset($_POST['routemanagement'])) {
	header("Location:routemgmnt.php");
}









?>
</center>










