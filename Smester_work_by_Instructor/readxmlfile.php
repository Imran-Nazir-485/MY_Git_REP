<?php
$xml = simplexml_load_file("myxmlfile.xml");

echo  $xml->student[0]->rollno;
echo $xml->student[0]->name;
echo $xml->student[0]->marks;
echo $xml->student[0]->marks['sub'];

echo $xml->student[1]->marks;
?>