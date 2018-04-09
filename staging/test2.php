<?php require("./phpdb/phpgeneralfun.php"); ?>


<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <!-- activate Menu -->
   <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/slicknav.css">
   <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/fonts.css" type="text/css">
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/jquery-2.1.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>
<script>
    function correct() {
        document.getElementById('buttons1').style.display = 'none';
        document.getElementById('buttons2').style.display = 'none';
        document.getElementById('buttons3').style.display = 'none';
        document.getElementById('correct').style.display = '';
        document.getElementById('question').style.display = 'none';
    }

</script>
<script>
    function nope() {
        document.getElementById('footer').style.display = 'none';
    }

</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65637947-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65637947-1');
</script>



     <script type="text/javascript">
         $(document).ready(function(){
             $('#menu').slicknav();
         });
     </script>
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
    <li>IVR
        <ul>
            <li><a href="/staging/ivr.php">Buy The Super Pack</a></li>
        </ul>
    </li>
</ul>



<!-- 2nd block  -->
<div class="block_666" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner2" alt="Header"><br>
    <!-- 1st block /Purchase subscription button -->
    <div class="merchant-button btn1" id="hideme1" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="326" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe
    </div>
    <br>
<br>

    <!-- 2nd block /Purchase button -->
    <div class="merchant-button btn2" id="hideme2" data-pfi-button="true" data-pfi-button-id="hidebutton2" data-pfi-service-id="330" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Buy
    </div>
    <br>
    <br>
    <!-- 3rd block /Purchase button -->
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="336" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="381" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 5.00 week
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="383" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 1.00 week
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="385" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 5.00 day
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="384" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 1.00 day
    </div>
</div>


<div class="footer" id="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" id="footerlogo" alt="Header"><br><br>
    <?php
    echo"<br>";
    echo $set;
    echo $notset;
    echo"<br>";
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
    echo "GUID generated is: ".$GUID;
    echo"<br>";
    echo "Your hash is: ".$_SERVER['HTTP_X_PFI_HASH'];
    echo"<br>";
    echo "Your callerid is: ".$_SERVER['HTTP_X_PFI_CALLERID'];
    echo"<br>";
    echo "Your transid is: ".$_SERVER['HTTP_X_PFI_TRANSACTIONID'];
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo print_r($_SERVER);
    echo"<br>";
    echo"<br>";
    echo"response header";
    echo print_r($http_response_header);
    echo"<br>";
    echo"Request";
    echo print_r($_REQUEST);

    //Write logs
    $arr = $_SERVER;
    // echo implode(" ",$arr);
    $today1 = date("Y-m-d H:i:s");
    $myFile = "mainpage.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    $stringData = "\n";
    fwrite($fh, $stringData);
    fwrite($fh, $today1. ": headers: " .implode(" ",$arr));
    fclose($fh);



$cookie_name = "PFI_NetInfo";
$cookie_value = "ASxY2FckENo5UwFuoHMk+g==";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "<BR>";
    setcookie($cookie_name, urldecode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie named '" . $cookie_name . "'set to ASxY2FckENo5UwFuoHMk+g==";
    echo "<BR>";
    echo "<BR>";
    echo "<BR>";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<BR>";
    setcookie($cookie_name, urldecode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie is changed name too '" . $cookie_name . "'set to ASxY2FckENo5UwFuoHMk+g==";
    echo "<BR>";
    echo "<BR>";
}



    ?>
</div>
<?php require("./phpdb/mainpage.php"); ?>
<iframe src="http://www.w3schools.com">
    <p>Your browser does not support iframes.</p>
</iframe>
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


</html>
