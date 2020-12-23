<!DOCTYPE html>
<html>
<head>
	<title>Admin1</title>
</head>
<body>



<main id="main">
<!-- 
<div id="title">
	<h1>Pakistan Local Airline</h1>
</div>
 -->
<div id="image">
	<img src="a380.jpg">
</div>


	<form method="POST" id="iform">
<div id="login"><input class="header" type="submit" name="login" value="LOGIN"></div>
<div id="signup"><input class="header" type="submit" name="signup" value="SIGNUP"></div>
<div id="reservation"><input class="header" type="submit" name="reservation" value="RESERRVATION"></div>
<div id="availableflights"><input class="header" type="submit" name="availableflights" value="AvailableFlights"></div>
<div id="ticketstatus"><input class="header" type="submit" name="ticketstatus" value="TicketStatus"></div>
<div id="cancel"><input class="header" type="submit" name="cancel" value="CancelReservation"></div>
		
	</form>

</main>



<style type="text/css">
	*{margin: 0px;padding: 0px;box-sizing: border-box;}
#main{
			border: 1px solid red;
			margin: 50px auto;
			width: 75%;
			/*display: grid;
			grid-template-rows: 50px  ;
			grid-template-columns: repeat(2,1fr)  ;*/
		}
/*#login{border: 1px solid red;}
#signup{border: 1px solid red;
/*margin-left: 40%;}*/
#iform{display: grid;
			grid-template-rows: 50px 50px;
			grid-template-columns: repeat(3,1fr)  ;}
#loginorsignup{border: 1px solid black;
}
#availableflights{/*border: 1px solid black;*/}
.header{width: 100%;
height: 100%;}

#id{width: 100%;
height: 50%;}
img{width: 100%;
height: 400px;}
h1{text-align: center;}
</style>
</body>
</html>



<?php

if(isset($_POST['login']))
{
header("Location:login_form.php");
}
if(isset($_POST['signup']))
{
header("Location:signup_form.php");
}
if(isset($_POST['availableflights']))
{
header("Location:availableflights.php");
}
if(isset($_POST['reservation']))
{
header("Location:searching.php");
}



// session_start();


// echo $_SESSION["depcity"];





$fid=$_GET['fid'];

echo "$fid";







?>


















