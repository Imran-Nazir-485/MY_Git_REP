<center>
<?php


include 'dbconn.php';

$xml = simplexml_load_file("project.xml");
foreach($xml->children() as $stu){
echo "FlightID: " . $stu->flightiid. "<br>";
echo "RouteID: " . $stu->routeid . "<br>";
 
 echo "Dparturecity: " . $stu->depcity . "<br>";
 echo "DestinationCity: " . $stu->destcity . "<br>"; 
 echo "DepartureDate: " . $stu->depdate . "<hr>";




}
  
?>
</center>