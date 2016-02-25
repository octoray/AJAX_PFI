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
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <script type="text/javascript">
        $(function(){
            $("body").hide();
            $("body").fadeIn(1000);
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#menu').slicknav();
        });
    </script>




    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/body.css" type="text/css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <!-- POST DATA JSON FUNCTION -->

</head>
<body>
<!-- Menu -->
<ul id="menu">
    <li>Offers
        <ul>
            <li><a href="/staging/landing.php">HOME (The Taken King)</a></li>
            <li><a href="/staging/EXPANSION1.php">EXPANSION I Offer</a></li>
            <li><a href="/staging/EXPANSION2.php">EXPANSION II Offer</a></li>
        </ul>
    </li>
    <li>The Taken King Offer
        <ul>
            <li><a href="/staging/100.php">Buy 100 In-Game Credits</a></li>
            <li><a href="/staging/500.php">Buy 500 In-Game Credits</a></li>
            <li><a href="/staging/2000.php">Buy 2000 In-Game Credits</a></li>
        </ul>
    </li>
    <li>Destiny Competitions
        <ul>
            <li><a href="/staging/wine.php">WIN The Expansion Packs</a></li>
            <li><a href="/staging/wint.php">WIN Free T-Shirt</a></li>
        </ul>
    </li>
</ul>


<!-- activate Menu -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#menu').slicknav();
    });
</script>


<div class="block_66" data-pfi-area="true" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner" alt="Header"> <br>
    <h2 class="hed" style="color: greenyellow">Purchase Successful</h2>
    <br>
    <h2 class="hed" style="color: greenyellow">You Will receive a SMS confirming your purchase shortly</h2>
    <br>
</div>




<div class="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" alt="Header"><br><br>
    <?php
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your Alias is: ".$_SERVER['HTTP_X_PFI_ALIAS'];
    echo"<br>";
    echo "Your Status is: ".$_SERVER['HTTP_X_PFI_STATUS'];
    echo"<br>";
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your referance is: ".$_SERVER['HTTP_X_PFI_REFERANCE'];
    echo"<br>";
    echo "Your Session token is: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN'];
    echo"<br>";
    echo "Your hash is: ".$_SERVER['HTTP_X_PFI_HASH'];
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo print_r($_SERVER);
    ?>
</div>

<?php require("./phpdb/successpage.php"); ?>

</body>
</html>