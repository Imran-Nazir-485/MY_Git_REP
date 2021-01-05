<!DOCTYPE html>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>

<style type="text/css">
	*{margin:0; padding: 0;box-sizing: border-box;}
main{
	border: 1px solid red; margin: 3% 20%;
	}

div
{

	border: 1px solid black;
}
h3{text-align: center;}
/*#free:hover {
  background-color: #4CAF50; 
  color: white;
}*/
/*#free:focus {
  background-color: #4CAF50; 
  color: white;
}*/


.featuredBtn.active {
  background-color: red;
  color:black;
}


</style>
</head>
<body>
	<center>


<!--   <i id="garbage" class="fas fa-trash"     onclick="myfun();"></i>
<i id="garbage" class="fas fa-trash"     onclick="myfun();"></i>
 -->
  <!-- <i id="garbage" class="fas fa-trash"></i> -->


<br>
<!-- <form method="post"  action="admin1.php">
<input type="submit" name="tickets"  id="t2" placeholder="Tickets"     style='width:100px;text-align:center;'     >
	
</form>
 -->		
	</center>


<main>

<h3 >Select Desired Seats</h3>
<br><br><br><br>


<center>
<div>

<br><br>


<?php
// 1- Connect to database
$myconn= mysqli_connect("localhost","root","","airressystem");



$rem=0;
$ar = array();
$myquery = "SELECT * FROM reservations";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
// $myrow = mysqli_fetch_assoc($myresult);
while($myrow = mysqli_fetch_assoc($myresult))
{

array_push($ar,$myrow['ticketnum']);
//$rem=$rem+1;
}

// foreach($ar as $value){
//     echo $value . "<br>";
// }

//2- Run SQL Query
$myquery = "SELECT * FROM flightschedule";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
//4- Show results
$rem=0;
$booked=30;
//echo "<form method=\"post\">";
$myrow = mysqli_fetch_assoc($myresult);
echo "<form method=\"POST\" action=\"\"  >";
// onsubmit = function() { location. reload(true); }
while($rem<=($myrow["tbseats"]-$booked))
{

if (in_array("B$rem", $ar)) 
  { 

echo "<input  type=\"submit\"       value=\"B$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px ; background-color:red \"  >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;
}
else
{

echo "<input  type=\"submit\"   name=\"seat\"    value=\"B$rem\"      class=\"featuredBtn\" id=\"btn\" style=\"width: 50px\"     >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem++;


}

}
echo "</form>";

// <button type=\"button\"   class=\"featuredBtn\" id=\"btn\" style=\"width: 50px\"  onclick=\"foo();\">B$rem</button>
// <input type=\"button\"    class=\"featuredBtn \" id=\"btn\"  value=\"Business\" style=\"background-color: white;width: 50px\"; onclick=\"foo();background_color_change_function(this.value);


// <button type="button"  name="b1" class="featuredBtn " id="btn">BUTTON ONE</button>



// $rem=$rem+1;
// if($rem%4==0)
// 	{
// 		echo "<br><br>";
// 	}
// 	// $rem=$rem+1;
// }

// echo "</form>";


// echo "<br><br>";
// $rem=0;
// echo "<tr>";
// while($rem<=$booked)
// {

// echo  "<td>". "<input type=\"button\"  value=\"B$rem\" style=\"background-color: red;width: 50px\" ; onclick=\"myfunb()\">"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
// $rem=$rem+1;
// if($rem%4==0)
// 	{
// 		echo "<br><br>";
// 	}
// 	// $rem=$rem+1;
// }

?>
</main>








<script type="text/javascript">

// 	function myfunt()
// 	{
// 		 v2=document.getElementById("t1").value;
//         //alert(v2);
//         counter=0;
// 	}

// function myfunb()
// 	{
// 		alert("This is Not Available");
// 	}



// $("button").click(function () {
//       clicked = true;
//       if (clicked) {
//       	counter=counter+1
//   if (counter>v2) {alert("Too many Selections");
//   //counter=counter-1;
// }



// else{
// 	    $(this).toggleClass('active');
//         clicked = true;
    
// }
//       } 
//       // else {
//       //   $(this).removeClass('active');
//       //   clicked = false;
//       // }
//     });





// $("button").click(function () {
//       clicked = true;
//       if (clicked) {
//         $(this).toggleClass('active');
//         clicked = true;
//       } else {
//         $(this).removeClass('active');
//         clicked = false;
//       }
//     });













</script>





















</body>
</html>








<?php

$count=0;
if (isset($_POST['seat'])) {
	$seat=$_POST['seat'];
	// echo "$seat";
// session_start();






	$insertquery="INSERT INTO `reservations`(`bid`, `rid`, `depcity`, `destcity`, `date`, `time`, `numoftickets`, `ticketnum`, `cabin`, `status`) VALUES ('22','pk2300','Karachi','Jeddah','2020-12-06','08:08:00','4','$seat','Business','Booked')";
	//$count=$count+1
$res=mysqli_query($myconn,$insertquery);
if ($res) {


$myquery = "SELECT * FROM reservations";
$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult))
{

if ($myrow['bid']==22) {
	$count++;
}



}



echo "$count";



if ($count==4) {
	echo "<br>";
	echo "<br>";
	echo "<br>";
echo "<form method=\"post\"  action=\"admin1.php\">
<input type=\"submit\" name=\"tickets\"  style='width:100px;text-align:center;'     >
	
</form>";
		
	
}




// $last_id = $myconn->insert_id["rid"];
// echo "$last_id";


 // $_SESSION['count']++;



// echo "<meta http-equiv='refresh' content='0'>";



// echo "Inserted Suscessfully";
// header("Location:booked_seats.php");
}




}



if (isset($_POST['tickets'])) {
	
}
// buffer_output = on
// ob_start();
// header('Location:admin1.php');

// ob_end_clean();
// include 'admin1.php';
  ?>