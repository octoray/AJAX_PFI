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
	"Script":"hidebutton()",
	"InProcessUrl":null
}';

$response2 = '{
	"Error":null,
	"Script":"showproc()",
	"InProcessUrl":null
}';

$response3 = '{
	"Error":null,
	"Script":"hideproc()",
	"InProcessUrl":null
}';


//respond

if ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiProcessing") {
    echo $response2;
    $response = $response2;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiProcessing"){
    echo $response1;
    $response = $response1;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccess"){
    echo $response3;
    $response = $response3;
}elseif ($_SERVER['HTTP_X_PFI_STATUS'] == "PfiPurchaseSuccess"){

}else{
    echo $response1;
    $response = $response1;
};


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
fwrite($fh, $today1. ": response was: ".$response);
fwrite($fh, $stringData);
fclose($fh);



?>
