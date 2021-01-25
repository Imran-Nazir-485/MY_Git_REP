<?php
session_start();
if (!isset($_SESSION["s1"]))
 header("location: logout.php");
else{
 echo "i am insession.php";
 echo " it is inbox ....";
}
?>