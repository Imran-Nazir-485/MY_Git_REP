<?php
$email = $_GET["v1"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "sablayja";

$con = mysqli_connect($servername, $username, $password, $database) or die("Not Connected");
if ($con->connect_error == false) {
    $query = "SELECT * FROM 'login' WHERE 'email'='$email'";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) == 0) {
        $row = mysqli_fetch_assoc($res);
        echo "Record Found". "<br>";
        echo "<table style='font-size: 50px;'>";
            echo "<tr>";
                echo "<td>". $row["email"]. "</td>";
                echo "<td>". $row["name"]. "</td>";
                echo "<td>". $row["password"]. "</td>";
            echo "</tr>";
        echo "</table>";
    } 
    else {
    }
}
?>
