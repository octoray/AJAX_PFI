<?php


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

file_put_contents('imiconnect.txt', file_get_contents('php://input'));

$response = 'hello world';
$json_string = json_encode($_POST);
//Write logs
$today1 = date("Y-m-d H:i:s");
$myFile = "imiconnect.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n";
fwrite($fh, $today1. ": POST BODY: " .$HTTP_RAW_POST_DATA);
fwrite($fh, $stringData);
fwrite($fh, $stringData);
fwrite($fh,  $today1. ": json BODY: " .$json_string);
fwrite($fh, $stringData);
fclose($fh);


echo $response;



$json_db = json_decode($HTTP_RAW_POST_DATA, true);

function db_dr_insert($table, $deliveryInfoNotification = '*', $correlationid = null, $transid = null, $callbackData = '1', $deliveryInfo ='', $destination = '', $deliveryStatus = '', $deliveryChannel ='', $raw='')   {

    //Establish a connection
    $con = mysqli_connect("localhost", "pfimonuser", "Fa6rUCha", "PFI_MON");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// Perform queries
    mysqli_query($con,"INSERT INTO" .$table." (".$FirstName",LastName,Age) VALUES ('Glenn','Quagmire',33)");

    mysqli_close($con);

}


//$item['product']['title'];

print_r($json_db['notifyurl']);







?>
