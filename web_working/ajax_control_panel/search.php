<?php
$email = $_GET["v1"];


    $query = "SELECT * FROM 'members' WHERE 'email'='$email'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 0) {
        $row = mysqli_fetch_assoc($res);
        echo "Record Found". "<br>";
        echo "<table style='font-size: 50px;'>";
            echo "<tr>";
                echo "<td>". $row["fname"]. "</td>";
                echo "<td>". $row["lname"]. "</td>";
                echo "<td>". $row["email"]. "</td>";
                echo "<td>". $row["password"]. "</td>";
            echo "</tr>";
        echo "</table>";
    } 
    else {
    }
}
?>
