<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<style type="text/css">
*{margin: 0;padding: 0;box-sizing: border-box;}
body{

/*background-color: black;*/

}
/*#login{
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

height: 20px;
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
height: 40px;
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
*/

/*#loginf_main{
display: flex;
border: 1px solid red;
width: 80%;
height: 90%;*/

}
</style>
</head>
<body>




<main id="loginf_main">
<center>
<h1>Web Ticket Reservation System</h1>
<!-- <form method="POST" action="membersreal.php "> -->
<form method="POST" >
<div id="login">

<img src="download.png">
<h3>Login</h3 >
<h4>UserName</h4>
<input class="input"  type="text" name="usermail" placeholder="usermail@gmail.com....">

<h4>Password</h4>
<input class="input" type="password" name="password" placeholder="password....">
<br>
<input class="button" type="submit" name="login"  value="Login">
<br>
<br>
</div>



</form>

</center>

</main>

</body>
</html>





<?php
include 'dbconn.php';
if (isset($_POST['login'])) {
$usermail=$_POST['usermail'];
$password=$_POST['password'];

$insertquery="SELECT * FROM `members` ";

$myresult=mysqli_query($myconn,$insertquery);
while($myrow = mysqli_fetch_assoc($myresult)){
if ($myrow['email']==$usermail &&   $myrow['password']==$password  ) {
//echo "datafounded"."<br>";
header('Location:admin1.php');


}
}
}
?>






