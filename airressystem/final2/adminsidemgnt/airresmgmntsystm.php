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
<title>Flight_Management</title>
<body>



<div  class="container text-center" style="padding: 5%;">
<center>
<p class="h2 " >Air Resservation Management System</p>
<br><br>
<form method="post">
<div class="row ml-5">
    
<input type="submit" name="routemanagement" value="Route Management" class="row mt-2 col-sm-5    btn btn-success  m-1  ">
 
<input type="submit" name="flightsmanagement"value="Flights Management"class=" row mt-2 col-sm-5  btn btn-success    m-1">
<div class="w-100"></div>

<input type="submit" name="fsmanagement"   value="FS Management"    class="row mt-2 col-sm-5    btn btn-success  m-1 ">
 
<input type="submit" name="airportmanagement" value="Airport Management"  class="row mt-2 col-sm-5 btn btn-success  m-1">


</div>
</form>
</div>
</center>
</body>
</html>

<?php

if (isset($_POST['routemanagement'])) {
header("Location:routemgmnt.php"); 
}

if (isset($_POST['flightsmanagement'])) {
header("Location:flightsmanagement.php"); 
    
}
if (isset($_POST['fsmanagement'])) {
header("Location:fsmanagement.php"); 
    
}
if (isset($_POST['airportmanagement'])) {

// header("Location:routemgmnt.php"); 

}













?>