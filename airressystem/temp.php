<?php

echo "<center>";
echo "<input  type=\"submit\" name=\"\" value=\"Click On Desired Trip Type\"     >";



// echo "<br>";
// echo "<br>";

// echo "<select>";
// echo "<option>OneWay</option>";
// echo "<option>Return</option>";
// echo "</select>";




echo "<br>";
echo "<br>";


echo "<form method=\"post\">";









echo "<input  type=\"submit\" name=\"interchnage\" value=\"OneWay Ticket Reservation\"     >";

echo "<input  type=\"submit\" name=\"interchnage1\" value=\"Return  Ticket Reservation\"     >";


echo "</form>";
echo "</center>";
if (isset($_POST['interchnage'])) {
	 
echo "<center>";
echo "<input type=\"submit\" name=\"submit\" value=\"OneWay\">"."<input type=\"radio\" name=\"triptype\" value=\"v1\"  checked=\"checked\" >";
echo "<br>";
echo "<br>";

echo "<main>";
echo "<form method=\"POST\" >";
echo"<label>From:Airport & City</label>";
echo "<br>";
echo "<input type=\"text\" name=\"depcity\" placeholder=\"From:Airport & City\">";
echo "<br>";
echo"<label>To Airport & City</label>";
echo "<br>";
echo "<input type=\"text\" name=\"destcity\" placeholder=\"To Airport & City\">";
echo "<br>";
echo"<label>Departure Date</label>";
echo"<br>";
echo"<input type=\"date\" name=\"depdate\" placeholder=\"Select Daparture Date\">";
echo"<br>";
echo"<label>Departure Time</label>";
echo"<br>";
echo"<input type=\"time\" name=\"deptime\" placeholder=\"Select Daparture Time\">";
echo"<br>";
echo "<input type=\"submit\" name=\"submit\" value=\"FindFlight\">";
echo "</form>";
echo "</main>";
echo "</center>";
}









if (isset($_POST['interchnage1'])) {
echo "<center>";


echo "<input type=\"submit\" name=\"submit\" value=\"Return\">"."<input type=\"radio\" name=\"triptype\" value=\"v1\"  checked=\"checked\" >";
echo "<br>";
echo "<br>";

echo "<main>";
echo "<form method=\"POST\">";
echo "<label>From:Airport & City</label>";
echo "<br>";
echo "<input type=\"text\" name=\"depcity\" placeholder=\"From:Airport & City\">";
echo "<br>";
echo "<label>To Airport & City</label>";
echo "<br>";
echo "<input type=\"text\" name=\"destcity\" placeholder=\"To Airport & City\">";
echo "<br>";
echo "<label>Departure Date</label>";
echo "<br>";
echo "<input type=\"date\" name=\"depdate\" placeholder=\"Select Daparture Date\">";
echo "<br>";
echo "<label>Return Date</label>";
echo "<br>";
echo "<input type=\"date\" name=\"retdate\" placeholder=\"Select Return Date\">";
echo "<br>";
echo "<label>Departure Time</label>";
echo "<br>";
echo "<input type=\"time\" name=\"retdate\" placeholder=\"Select Departure Time\">";
echo "<br>";
echo "<input type=\"submit\" name=\"submit\" value=\"FindFlight\">";
echo "</form>";
echo "</main>";
echo "</center>";








}






































 ?>