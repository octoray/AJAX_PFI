<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

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
	"Script":"",
	"InProcessUrl":null,
	"ShowMarketingOptIn":true
}';



//respond


echo $response1;

$data_json = json_decode($response, true);


?>
<?php
$username = "root";
$password = "toor";
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
