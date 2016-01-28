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



?>

<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/ajaxcomp.css" type="text/css">
    <script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
    <script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>


</head>
<body>
<img src="http://a.espncdn.com/combiner/i/?img=/media/motion/ESPNi/2015/0818/int_150818_Hislop_Ive_never_seen_Rooney_this_poor_REV1/int_150818_Hislop_Ive_never_seen_Rooney_this_poor_REV1.jpg&w=738&site=espnfc" class="banner" alt="Header">
<br>

<br>

<div class="body1">
    <div id="comp-entry-area">
        <p class="question">HOw much better is arenal than man u?</p>

        <h2>STUFF BELOW</h2>


        <p class="stuff1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

        <br>
        <a href="http://octoraypfi.co.uk/ajaxcomp/start.php" id="btn2">PLAY NOW</a>


</body>

</html>