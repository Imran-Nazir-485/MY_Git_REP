<!DOCTYPE html>
<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</style>
</head>
<body>
	<center>


  <i id="garbage" class="fas fa-trash"     onclick="myfun();"></i>
<i id="garbage" class="fas fa-trash"     onclick="myfun();"></i>

  <!-- <i id="garbage" class="fas fa-trash"></i> -->


<br>

<input type="number" name="tickets"  id="t1" placeholder="Tickets"     style='width:100px;text-align:center;'    >
<input type="submit" name="tickets"  id="t2" placeholder="Tickets"     style='width:100px;text-align:center;'    onclick="myfunt();"     >
		
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

//2- Run SQL Query
$myquery = "SELECT * FROM flightschedule";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
//4- Show results
$rem=0;
$booked=30;
$myrow = mysqli_fetch_assoc($myresult);
while($rem<=($myrow["tbseats"]-$booked))
{
echo "<input type=\"button\"   id=\"free\" class=\"js\"   value=\"Business\" style=\"background-color: white;width: 50px\"; onclick=\"foo();background_color_change_function(this.value);\">";
$rem=$rem+1;
if($rem%4==0)
	{
		echo "<br><br>";
	}
	// $rem=$rem+1;
}
echo "<br><br>";
$rem=0;
echo "<tr>";
while($rem<=$booked)
{
echo  "<td>". "<input type=\"button\"  value=\"B$rem\" style=\"background-color: red;width: 50px\" ; onclick=\"myfunb()\">"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem=$rem+1;
if($rem%4==0)
	{
		echo "<br><br>";
	}
	// $rem=$rem+1;
}


// echo "<br>";
// $rem=0;
// while($rem<=$myrow["rbseats"])
// {echo "<input type=\"button\"  value=\"UnBooked\" style=\"background-color: white\">";
// $rem=$rem+1;
// if($rem%10==0)
// 	{
// 		echo "<br>";
// 	}
	
// }
	
// echo "<input type=\"button\"  value=\"Booked\" style=\"background-color: red\">";
// echo $myrow["rollno"] . "    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";





?>
<br><br>
</div>

<br><br>


<!-- <div>
<?php
// 1- Connect to database
$myconn= mysqli_connect("localhost","root","","airressystem");

//2- Run SQL Query
$myquery = "SELECT * FROM flightschedule";
//3- Run Query
$myresult = mysqli_query($myconn,$myquery);
//4- Show results
$rem=0;
$ebooked=20;
$myrow = mysqli_fetch_assoc($myresult);
while($rem<=($myrow["tbseats"]-$ebooked))
{
echo "<input type=\"button\"  value=\"E$rem\" style=\"background-color: green;width: 50px\"; >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem=$rem+1;
if($rem%4==0)
	{
		echo "<br><br>";
	}
	// $rem=$rem+1;
}
echo "<br><br>";
$rem=0;
while($rem<=$ebooked)
{
echo "<input type=\"button\"  value=\"E$rem\" style=\"background-color: red;width: 50px\"; >"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
$rem=$rem+1;
if($rem%4==0)
	{
		echo "<br><br>";
	}
	// $rem=$rem+1;
}


// echo "<br>";
// $rem=0;
// while($rem<=$myrow["rbseats"])
// {echo "<input type=\"button\"  value=\"UnBooked\" style=\"background-color: white\">";
// $rem=$rem+1;
// if($rem%10==0)
// 	{
// 		echo "<br>";
// 	}
	
// }
	
// echo "<input type=\"button\"  value=\"Booked\" style=\"background-color: red\">";
// echo $myrow["rollno"] . "    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";





?>
	
</div>
	 -->
</center>


	

 

</main>








<script type="text/javascript">

	function myfunt()
	{
		 v2=document.getElementById("t1").value;
        alert(v2);
        counter=0;
	}



	// function myfun()
	// {
	// 	alert("Too many Selections");
	// }





function foo() {

    // if( typeof foo.counter == 'undefined' ) {
    //     foo.counter = 0;
    // }
    // foo.counter++;
//alert("Too many Selections");
counter=counter+1;
  if (counter>v2) {alert("Too many Selections");
var gar = document.getElementById("t3").checked = false;
}
}









function myfunb()
	{
		alert("This is Booked");
	}

function background_color_change_function(str) {

if (str) {
 document.getElementById("free").style.backgroundColor = "red"; }}



function myfun()
{
var garbage = document.getElementById("garbage").style.color = "green";;

}


// // garbage.addEventListener("click",function()
// {
//   // garbage.style.color = "green";
// }



$( "#free" ).click(function() {
    $( "#free" ).css('background', 'red');
  });



</script>




</body>
</html>



































