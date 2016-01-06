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
$result1 = mysql_query('INSERT INTO `ajax`.`notification` (`tid`, `ref`, `time`, `status`, `type`, `sid`, `msisdn`, `networkid`, `hash`, `array`)VALUES("'.$_REQUEST['tid'].'", "'.$_REQUEST['ref'].'", "'.$_REQUEST['time'].'", "'.$_REQUEST['status'].'", "'.$_REQUEST['type'].'", "'.$_REQUEST['sid'].'", "'.rawurldecode($_REQUEST['msisdn']).'", "'.$_REQUEST['networkid'].'", "'.$_REQUEST['hash'].'","'.print_r($_REQUEST).'");')
or die(mysql_error());

// store the record of the "example" table into $row
//while ($row = mysql_fetch_assoc($result1)) {
// $r1[] = $row;
//}
//$var1 = $r1[0]['id'];
//echo $var1;


mysql_close($dbhandle);
?>