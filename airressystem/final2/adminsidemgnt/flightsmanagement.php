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
<p class="h2 " >Flight  Management System</p>
<br><br>
<form method="post">
<div class="row ml-5">
    
<input type="submit" name="newflight" value="Add New Flight" class="row mt-2 col-sm-5    btn btn-warning  m-1  ">
 
<input type="submit" name="updateflight"value="Update Flight"class=" row mt-2 col-sm-5  btn btn-warning    m-1">
<div class="w-100"></div>

<input type="submit" name="deleteflight"   value="Delete Flight"    class="row mt-2 col-sm-5    btn btn-warning  m-1 ">
 
<input type="submit" name="management" value="GoTo Management"  class="row mt-2 col-sm-5 btn btn-warning  m-1">


</div>
</form>
</div>
</center>
</body>
</html>










<?php


if (isset($_POST['newflight'])) {
header("Location:newflight.php"); 
}

// if (isset($_POST['updateroute'])) {
// header("Location:updateroute.php"); 
    
// }
// if (isset($_POST['deleteroute'])) {
// header("Location:delroute.php"); 
    
// }
// if (isset($_POST['management'])) {

// header("Location:airresmgmntsystm.php");
// }


?>





