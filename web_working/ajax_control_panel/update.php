<?php


$fname = $_GET["v1"];
$lname = $_GET["v2"];
$email = $_GET["v3"];
$password = $_GET["v4"];



include 'dbconn';







    $query = "SELECT * FROM 'members' WHERE 'email'='$email'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 0) {
        $query = "UPDATE `members` SET `fname` = '$fname', `password` = '$password' WHERE `members`.`email` = '$email'";
        mysqli_query($con, $query);
        
        echo "Updated Successfully.......";
    } 
    else {

    }
}
?>
