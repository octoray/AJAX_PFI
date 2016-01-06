<?php
$username = "remote";
$password = "foobar";
$hostname = "localhost";
$today1 = date("Y-m-d H:i:s");
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("inproc") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query('INSERT INTO `ajax`.`inproc` (`HTTP_X_PFI_SESSIONTOKEN`, `HTTP_X_PFI_STATUS`, `HTTP_X_PFI_REQUESTTIME`, `HTTP_X_PFI_HASH`, `HTTP_X_PFI_ALIAS`, `HTTP_X_PFI_NETINFO`, `HTTP_X_PFI_CALLERID`, `HTTP_X_PFI_OPTINSTATUS`, `HTTP_X_PFI_TRANSACTIONID`, `Response`)
VALUES
("'.$_SERVER['HTTP_X_PFI_SESSIONTOKEN'].'",
 "'.$_SERVER['HTTP_X_PFI_STATUS'].'",
  "'.$_SERVER['HTTP_X_PFI_REQUESTTIME'].'",
   "'.$_SERVER['HTTP_X_PFI_HASH'].'",
    "'.$_SERVER['HTTP_X_PFI_ALIAS'].'",
     "'.$_SERVER['HTTP_X_PFI_NETINFO'].'",
     "'.$_SERVER['HTTP_X_PFI_CALLERID'].'",
     "'.$_SERVER['HTTP_X_PFI_OPTINSTATUS'].'",
     "'.$_SERVER['HTTP_X_PFI_TRANSACTIONID'].'",
     "'.$response.'");')
or die(mysql_error());



mysql_close($dbhandle);
?>