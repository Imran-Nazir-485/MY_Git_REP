<!DOCTYPE html>
<html>
<head>
	<title>Admin1</title>
</head>
<body>


<main id="main">
	<form method="POST" id="iform">
<div id="loginorsignup"><input class="header" type="submit" name="loginorsignup" value="LOGIN OR SIGNUP"></div>
<div id="availableflights"><input class="header" type="submit" name="submit" value="AvailableFlights"></div>
		
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
			grid-template-rows: 50px  ;
			grid-template-columns: repeat(2,1fr)  ;}
#loginorsignup{border: 1px solid black;
}
#availableflights{border: 1px solid black;}
.header{width: 100%;
height: 100%;}

</style>
</body>
</html>



<?php
$bid=2;
include 'dbconn.php';
if(isset($_POST['loginorsignup']))
{
$myfile = fopen("login_form.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("login_form.php"));
fclose($myfile);

	

}

?>


















