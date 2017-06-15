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
    $set = 'set';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $notset = 'not set';
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

<!DOCTYPE HTML>
<html>
<head>
    
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    
    </head>

<body>

<div class="merchant-button btn2" id="hideme2" 
data-pfi-button="true" 
data-pfi-button-id="hidebutton2" 
data-pfi-service-id="330" 
data-pfi-reference="a2100fd1eecd158e70d2986e03538247ced714" 
data-pfi-content-url="/staging/landing.php" 
data-pfi-content-id="a2100fd1eecd158e70d2986e03538247ced714934924c875">
   Buy ME
</div>
<br>
<div class="block_666" data-pfi-area="true" id="showmeee" style=""> Content goes here </div>


</body>
</script>
</html>
