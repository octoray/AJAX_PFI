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
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/ajaxcomp.css" type="text/css">
</head>
<body>
<img src="http://a.espncdn.com/combiner/i/?img=/media/motion/ESPNi/2015/0818/int_150818_Hislop_Ive_never_seen_Rooney_this_poor_REV1/int_150818_Hislop_Ive_never_seen_Rooney_this_poor_REV1.jpg&w=738&site=espnfc" class="banner" alt="Header">
<br>

<br>

<div class="competition">
    <div id="comp-entry-area">
        <p class="question">HOw much better is arenal than man u?</p>

        <div class="btn" data-pfi-button="true" data-pfi-button-id="a1" data-pfi-service-id="330" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/competition/success" data-pfi-content-id="a1">
            <span>10%</span>
        </div>
        <div class="btn" data-pfi-button="true" data-pfi-button-id="a2" data-pfi-service-id="330" data-pfi-reference="<?php echo $out2;?>" data-pfi-content-url="/competition/success" data-pfi-content-id="a2">
            <span>20%</span>
        </div>
        <div class="btn" data-pfi-button="true" data-pfi-button-id="a3" data-pfi-service-id="330" data-pfi-reference="<?php echo $out3;?>" data-pfi-content-url="/competition/success" data-pfi-content-id="a3">
            <span>5000%</span>
        </div>
    </div>

    <div id="shirwan" class="dave" dude="alex" data-pfi-area="true">This is a div</div>
    <br>
</div>
</body>
</html>