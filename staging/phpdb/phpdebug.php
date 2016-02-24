<?php
echo"<br>";
echo $set;
echo $notset;
echo"<br>";
echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
echo"<br>";
echo "Your Alias is: ".$_SERVER['HTTP_X_PFI_ALIAS'];
echo"<br>";
echo "Your Status is: ".$_SERVER['HTTP_X_PFI_STATUS'];
echo"<br>";
echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
echo"<br>";
echo "Your referance is: ".$_SERVER['HTTP_X_PFI_REFERANCE'];
echo"<br>";
echo "Your Session token is: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN'];
echo"<br>";
echo "GUID generated is: ".$GUID;
echo"<br>";
echo "Your hash is: ".$_SERVER['HTTP_X_PFI_HASH'];
echo"<br>";
echo "Your callerid is: ".$_SERVER['HTTP_X_PFI_CALLERID'];
echo"<br>";
echo "Your transid is: ".$_SERVER['HTTP_X_PFI_TRANSACTIONID'];
echo"<br>";
echo"<br>";
echo"<br>";
echo print_r($_SERVER);
echo"<br>";
echo"<br>";
echo"response header";
echo print_r($http_response_header);
echo"<br>";
echo"Request";
echo print_r($_REQUEST);


//Write logs
$arr = $_SERVER;
// echo implode(" ",$arr);
$today1 = date("Y-m-d H:i:s");
$myFile = "mainpage.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n";
fwrite($fh, $stringData);
fwrite($fh, $today1. ": headers: " .implode(" ",$arr));
fclose($fh);
?>