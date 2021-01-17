<center>
<?php

echo "<main  style=\"border:1px solid red; padding-top:5%;\"><form method='post'><input type='submit' name='adroute' value='        Add New Route       '  >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type='submit' name='uproute' value='      Update Routes        '  ><br>
<input type='submit' name='adflights' value='        Add New Flight        '  >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type='submit' name='upflights'  value='      Update Flights        '  ><br>
<input type='submit' name='adflschdl' value='Add New Flight Schedule'  >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type='submit' name='upflschdl' value='Update Flight Schedule'  ><br></form><main>";




if (isset($_POST['adroute'])) {
header("Location:adroute.php");	
}

if (isset($_POST['adflights'])) {
	
}
if (isset($_POST['adflschdl'])) {
	
}
if (isset($_POST['uproute'])) {
	
}
if (isset($_POST['upflights'])) {
	
}
if (isset($_POST['upflschdl'])) {
	
}




?>
</center>