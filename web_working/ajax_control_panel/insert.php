<?php
$name = $_GET["v1"];
$email = $_GET["v2"];
$pwd = $_GET["v3"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "sablayja";

$con = mysqli_connect($servername, $username, $password, $database) or die("Not Connected");
if ($con->connect_error == false) {
    $query = "SELECT * FROM 'login' WHERE 'email'='$email'";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) == 0) {
        $query = "INSERT INTO `login` (`email`, `name`, `password`) VALUES ('$email', '$name', '$pwd')";
        mysqli_query($con, $query);

        echo "Inserted Successfully.......";
    } 
    else {
    }
}
?>
