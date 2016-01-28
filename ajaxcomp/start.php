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
$out2 = substr(hash('md5', $today2), 0, $length2); // Hash ita
$out3 = substr(hash('md5', $today3), 0, $length3); // Hash it

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
<img src="http://static.independent.co.uk/s3fs-public/thumbnails/image/2014/09/27/16/Wayne_Rooney-2.jpg" class="banner" alt="Header">
<br>

<br>

<h3><div id="wrong" style="display: none;">You got it wrong...go away</div></h3>
<h3><div id="correct" style="display: none;">You Got the Answer correct...you may continue</div></h3>

<br>
<div class="competition">
    <div id="comp-entry-area">
        <p class="question" id="question">How much better is Arsenal than Man Utd?</p>

        <div class="btn" id="buttons1" data-pfi-button="true" data-pfi-button-id="a1" data-pfi-service-id="330" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/ajaxcomp/finish.php" data-pfi-content-id="a1">
            <span>10%</span>
        </div>
        <div class="btn" id="buttons2" data-pfi-button="true" data-pfi-button-id="a2" data-pfi-service-id="330" data-pfi-reference="<?php echo $out2;?>" data-pfi-content-url="/ajaxcomp/finish.php" data-pfi-content-id="a2">
            <span>20%</span>
        </div>
        <div class="btn" id="buttons3" data-pfi-button="true" data-pfi-button-id="a3" data-pfi-service-id="330" data-pfi-reference="<?php echo $out3;?>" data-pfi-content-url="/ajaxcomp/finish.php" data-pfi-content-id="a3">
            <span>5000%</span>
        </div>
    </div>

    <div id="shirwan" class="dave" dudse="alex" data-pfi-area="true"></div>
    <br>
</div>


</body>


<script>
    function wrong() {
        document.getElementById('buttons1').style.display = 'none';
        document.getElementById('buttons2').style.display = 'none';
        document.getElementById('buttons3').style.display = 'none';
        document.getElementById('wrong').style.display = '';
        document.getElementById('shirwan').style.display = 'none';
        document.getElementById('question').style.display = 'none';
    }

</script>

<script>
    function correct() {
        document.getElementById('buttons1').style.display = 'none';
        document.getElementById('buttons2').style.display = 'none';
        document.getElementById('buttons3').style.display = 'none';
        document.getElementById('correct').style.display = '';
        document.getElementById('question').style.display = 'none';
    }

</script>
</html>