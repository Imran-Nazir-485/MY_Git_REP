<?php
// read from one file and write into other file
$ffr = fopen("source1.txt", "r"); 
$sfr = fopen("source2.txt", "r"); 
$target = fopen("target2.txt", "a"); 


while(!feof($ffr)){
  $str= fgets($ffr);
  $str1= fgets($sfr);
  
  fwrite($target, $str);
  fwrite($target, $str1);
}




?>