<?php

include 'dbconn.php';





$myquery = "SELECT * FROM routes t, flightschedule c WHERE 't.rid' = 'c.rid'";

$myresult = mysqli_query($myconn,$myquery);
while($myrow = mysqli_fetch_assoc($myresult)){
echo "this is called";
	echo $myrow['rid']."<br>";
}

?>