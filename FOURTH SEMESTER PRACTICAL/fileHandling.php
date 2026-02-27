<?php
$file=fopen("test.txt","w");
fwrite($file,"Hello World!. <br> I am learning PHP file handling. <br> I am Rajan Poudel.");
fclose($file);

echo file_get_contents("test.txt");
?>