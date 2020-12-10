<!DOCTYPE html>
<html>
<head>
	<title>SignUp Form</title>
<style type="text/css">
body{
background-color: black;

}
#login{
border:0px solid red ;
margin-top:  5%;
width: 20%;
height:400px;
background-color: black;
border-radius: 10px;
}
img{
width: 100px;
height: 100px;

margin-top: -20%;
margin-left: 40%;
border-radius: 50%;
object-fit: fill;
}
.input
{
color: white;
display: flex;
align-items: center;
justify-content: center;

height: 15px;
margin: auto;
margin-top: -20px;
font-size: 20px;
height: 40px;
border:none;
background-color: black;
border-bottom: 1px solid white;

}
h3{margin-left: 57%;
color: white;
margin-top:10px; 
}
h4{
padding-left: 10px;
margin-left: : 30%;
color: white;
}
.button{
justify-content: center;
display: flex;
width: 200px;
height: 35px;
border:none;
background-color: red;
color: white;
font-size: 20px;
font-weight: 15px;
margin-left: 27px;
border-radius: 10px;
margin-top: -5px;
}
h6{
color: white;
margin-top: -2px;
justify-content: center;
padding-left: 80px;

}
h1{
color: white;
font-size: 20px;
}
#head{
palace-item:center;
justify-content: center;
margin-left: 40%;
}
</style>
</head>
<body>
<div id="head">
<h1>Web Ticket Reservation System</h1>
<form method="POST">
<div id="login">
<img src="download.png">
<h3>SignUp</h3 >
<h4>FirstName</h4>
<input class="input"  type="text" name="firstname" placeholder="FirstName....">
<h4>LastName</h4>
<input class="input" type="text" name="lastname" placeholder="LastName....">
<h4>UserMail</h4>
<input class="input"  type="email" name="usermail" placeholder="usermail@gmail.com....">
<h4>Password</h4>
<input class="input" type="password" name="password" placeholder="password....">
<br>
<input class="button" type="submit" name="signup"  value="Sign Up">
<br>
</div>
</form>
</div>
</body>
</html>








<?php
include 'dbconn.php';
if(isset($_POST['signup']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['usermail'];
	$password=$_POST['password'];
	$insertquery="INSERT INTO `members`(`memid`, `fname`, `lname`, `email`, `password`) VALUES ('2','$fname','$lname','$email','$password')";
$res=mysqli_query($myconn,$insertquery);
if ($res) {
	?>
<script type="text/javascript">
	alert("Data Inserted Successfully");	
</script>
<?php
}else{
	?>
<script type="text/javascript">
	alert("Data Not Inserted Successfully");
</script>
<?php
}
}
?>








}



?>
