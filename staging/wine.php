<?php require("./phpdb/phpgeneralfun.php"); ?>


<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <!-- activate Menu -->
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/fonts.css" type="text/css">
    <script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



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
</ul>



<!-- 2nd block  -->
<div class="block_6667" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <div class="competition">
        <div id="comp-entry-area">
            <p class="question" id="question">When Was The Taken King Released In The UK?</p><br><br><br>

            <div class="btn1c" id="buttons1" data-pfi-button="true" data-pfi-button-id="a1" data-pfi-service-id="357" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="a_01">
                <span>September 15, 2015</span>
            </div>
            <div class="btn1c" id="buttons2" data-pfi-button="true" data-pfi-button-id="a2" data-pfi-service-id="357" data-pfi-reference="<?php echo $out2;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="a_02">
                <span>November 15, 2013</span>
            </div>
            <div class="btn1c" id="buttons3" data-pfi-button="true" data-pfi-button-id="a3" data-pfi-service-id="357" data-pfi-reference="<?php echo $out3;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="a_03">
                <span>January 15, 2014</span>
            </div>
        </div>

        <div id="shirwan" class="dave" dudse="alex" data-pfi-area="true"></div>
        <br>
    </div>
    <br> <br>    <br>


</div>


<div class="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" alt="Header"><br><br>
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


    ?>
</div>
<?php require("./phpdb/mainpage.php"); ?>

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
<script>
    function nope() {

    }

</script>
</html>