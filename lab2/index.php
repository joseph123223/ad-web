<?php
$myfile = fopen("contact.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("contact.txt"));
fclose($myfile);
?>