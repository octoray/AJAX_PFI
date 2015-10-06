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
//echo $GUID;
header("X-PFI-SessionToken: ".$GUID);
header('X-PFI-MerchantToken: 57D92441-6B7F-4691-936E-10836CB92496');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/slicknav/dist/slicknav.css" type="text/css">
    <script src="http://octoraypfi.co.uk/slicknav/dist/jquery.slicknav.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("body").fadeOut(4200,function(){
                window.location.href = "http://the-sloth.uk/test2.php"
            })
        });
    </script>

</head>
<body>


<img src="http://octoraypfi.co.uk/images/banner.png" class="banner_main" alt="Header">


</body>
</html>