<?php
// --- create a file ---
$fh = fopen("myfile.txt", "a"); // w:write, a:append

//--- write to file ---
fwrite($fh, "111 \n");
fwrite($fh, "222 \n");
fwrite($fh, "3333 \n");


?>