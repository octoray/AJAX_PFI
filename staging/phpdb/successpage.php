<?php
$username = "remote";
$password = "foobar";
$hostname = "localhost";
$today1 = date("Y-m-d H:i:s");
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

mysql_select_db("ajax") or die(mysql_error());
$r1 = array();
// chart1
$result1 = mysql_query('INSERT INTO `ajax`.`main_page` (`HTTP_X_PFI_REQUESTTIME`, `HTTP_X_PFI_ALIAS`, `HTTP_X_PFI_NETINFO`, `HTTP_X_PFI_OPTINSTATUS`, `HTTP_X_PFI_TRANSACTIONID`, `HTTP_X_PFI_HASH`, `HTTP_X_PFI_SESSIONTOKEN`, `HTTP_USER_AGENT`, `HTTP_X_PFI_STATUS`, `REQUEST_URI`, `HTTP_REFERER`, `REMOTE_ADDR`, `SERVER_ADDR`, `HTTP_X_SOURCE_IP`,`HTTP_COOKIE`,`page`)
VALUES
("'.$_SERVER['HTTP_X_PFI_REQUESTTIME'].'",
 "'.$_SERVER['HTTP_X_PFI_ALIAS'].'",
  "'.$_SERVER['HTTP_X_PFI_NETINFO'].'",
   "'.$_SERVER['HTTP_X_PFI_OPTINSTATUS'].'",
    "'.$_SERVER['HTTP_X_PFI_TRANSACTIONID'].'",
     "'.$_SERVER['HTTP_X_PFI_HASH'].'",
     "'.$_SERVER['HTTP_X_PFI_SESSIONTOKEN'].'",
     "'.$_SERVER['HTTP_USER_AGENT'].'",
     "'.$_SERVER['HTTP_X_PFI_STATUS'].'",
     "'.$_SERVER['REQUEST_URI'].'",
     "'.$_SERVER['HTTP_REFERER'].'",
     "'.$_SERVER['REMOTE_ADDR'].'",
     "'.$_SERVER['SERVER_ADDR'].'",
     "'.$_SERVER['HTTP_X_SOURCE_IP'].'",
     "'.$_SERVER['HTTP_COOKIE'].'",
      "successpage_php");')
or die(mysql_error());


// store the record of the "example" table into $row
//while ($row = mysql_fetch_assoc($result1)) {
// $r1[] = $row;
//}
//$var1 = $r1[0]['id'];
//echo $var1;


mysql_close($dbhandle);
?>