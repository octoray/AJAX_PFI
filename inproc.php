php


function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = // "{"
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}
$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'Yes';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $set = 'not set';
};


$response1 = '{
	"Error":null,
	"Script":"wrong()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';

$response2 = '{
	"Error":null,
	"Script":"correct()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';

$response3 = '{
	"Error":null,
	"Script":"nope()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';


$temp1 = '{
	"Error":null,
	"Script":"hidebutton()",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';

//respond

if ($_SERVER['HTTP_X_PFI_CALLERID'] == "a3" && $_SERVER['HTTP_X_PFI_STATUS'] == 'PfiPurchaseButtonShown') {
    $response = $response2;
}elseif($_SERVER['HTTP_X_PFI_CALLERID'] != "a3" && $_SERVER['HTTP_X_PFI_STATUS'] == 'PfiPurchaseButtonShown'){
    $response = $response1;
}else{
    $response = $response3;
}


//Write logs
$today1 = date("Y-m-d H:i:s");
$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n";
fwrite($fh, $stringData);
fwrite($fh, $today1. ": GUID Set?: " .$set);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": Sessiontoken: " .$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": status: " .$_SERVER['HTTP_X_PFI_STATUS']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": requestime: " .$_SERVER['HTTP_X_PFI_REQUESTTIME']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": hash: " .$_SERVER['HTTP_X_PFI_HASH']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": alias: " .$_SERVER['HTTP_X_PFI_ALIAS']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": netinfo: " .$_SERVER['HTTP_X_PFI_NETINFO']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": callerid / function: " .$_SERVER['HTTP_X_PFI_CALLERID']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": opt in status: " .$_SERVER['HTTP_X_PFI_OPTINSTATUS']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": trans_id: " .$_SERVER['HTTP_X_PFI_TRANSACTIONID']);
fwrite($fh, $stringData);
fwrite($fh, $today1. ": response was: ".$response);
fwrite($fh, $stringData);
fclose($fh);




echo $response;

$data_json = json_decode($response, true);


?>
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
      "Error: '.$data_json['Error'].'  Script: '.$data_json['Script'].'  InProcessUrl: '.$data_json['InProcessUrl'].'  ShowMarketingOptIn: '.$data_json['ShowMarketingOptIn'].'");')
or die(mysql_error());




mysql_close($dbhandle);
?>
