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
    $set = 'set';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $notset = 'not set';
};

$myFile = "log.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "\n";
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_STATUS']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_REQUESTTIME']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_HASH']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_ALIAS']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_NETINFO']);
fwrite($fh, $stringData);
fwrite($fh, $_SERVER['HTTP_X_PFI_CALLERID']);
fwrite($fh, $stringData);
fclose($fh);

echo '{
	"Error":null,
	"Script":"hidebutton()",
	"InProcessUrl":null
}'
?>

