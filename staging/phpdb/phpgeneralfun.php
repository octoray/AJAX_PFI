<?php

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
};

$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
}else{
    header("X-PFI-SessionToken: ".$GUID);
};




$length1 = 8;
$length2 = 10;
$length3 = 12;
$today1 = date("Y-m-d H:i:s");
$today2 = date("Y-m-d H:i:s");
$today3= date("Y-m-d H:i:s");
$out1 = substr(hash('md5', $today1), 0, $length1); // Hash it
$out2 = substr(hash('md5', $today2), 0, $length2); // Hash it
$out3 = substr(hash('md5', $today3), 0, $length3); // Hash it
?>
