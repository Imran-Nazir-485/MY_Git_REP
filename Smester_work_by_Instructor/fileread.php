<?php
// --- create a file ---
$fh = fopen("myfile.txt", "r"); 
// w:write, a:append, r:read

//--- write to file ---
while(!feof($fh)){
  $str= fgets($fh) . "<br>" ;
  echo $str;
}

?>