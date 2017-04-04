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
}

$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'set';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $notset = 'not set';
};

$arr = $_SERVER;
// echo implode(" ",$arr);

//Write logs
$today1 = date("Y-m-d H:i:s");
$myFile = "indexpage.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n";
fwrite($fh, $stringData);
fwrite($fh, $today1. ": headers: " .implode(" ",$arr));
fclose($fh);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/slicknav.css" type="text/css">
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("body").fadeOut(4200,function(){
                window.location.href = "http://staging.octoray.mobi/staging/landing.php"
            })
        });
    </script>

</head>
<body>


<img src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/images/banner.png" class="banner_main" alt="Header">


</body>
</html>
