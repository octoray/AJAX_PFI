<?php

//Write logs
$today1 = date("Y-m-d H:i:s");
$myFile = "log.txt";
$fh = fopen($myFile, 'r') or die("can't open file");
$stringData = "\n";
fread($fh,1000);
fclose($fh);

?>