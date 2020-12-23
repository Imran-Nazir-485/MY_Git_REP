<?php
$email = $_GET["v1"];
    $query = "SELECT * FROM 'members' WHERE 'email'=$email";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 0) {
        $query = "DELETE FROM 'members' WHERE 'email'=$email";
        mysqli_query($con, $query);

        echo "Deleted Successfully.....";
    } 
    else {
        echo "No record found for this Email..";
    }
}
?>
