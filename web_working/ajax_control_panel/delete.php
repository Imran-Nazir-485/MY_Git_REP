<?php
$email = $_GET["v1"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "sablayja";

$con = mysqli_connect($servername, $username, $password, $database) or die("Not Connected");
if ($con->connect_error == false) {
    $query = "SELECT * FROM 'login' WHERE 'email'=$email";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) == 0) {
        $query = "DELETE FROM 'login' WHERE 'email'=$email";
        mysqli_query($con, $query);

        echo "Deleted Successfully.....";
    } 
    else {
        echo "No record found for this Email..";
    }
}
?>
