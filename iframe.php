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
    <!-- activate Menu -->
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/fonts.css" type="text/css">
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" integrity="sha384-vEQs6vKzb8v6+GpGDCnXUQ6aa2DYtn5LTi/tA/85iEZfXN0nAYj0shvYo8ldQQ7m" crossorigin="anonymous"></script>
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>


     <script type="text/javascript">
         $(document).ready(function(){
             $('#menu').slicknav();
         });
     </script>





     <!-- Hide stuff -->


</head>
<body>
<!-- Menu -->
<ul id="menu">
    <li>Offers
        <ul>
            <li><a href="#">EXPANSION I Offer</a></li>
            <li><a href="#">EXPANSION II Offer</a></li>
        </ul>
    </li>
    <li>The Taken King Offer
        <ul>
            <li><a href="#">Abilitys</a></li>
            <li><a href="#">New Gear</a></li>
            <li><a href="#">New Subclasses</a></li>
        </ul>
    </li>
</ul>


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
<img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/banner.png" class="banner" alt="Header">
<br>
    <br><br><br><br><br><br><br>
    <button onclick="hidebutton()">STAGING Click me to run hidebutton() !!!!!!!!!!!!!</button><br><br>
    <!-- <a href="sms:/* phone number here */?body=/* body text here */">Link</a>-->
     <a href="sms:07624806156?body=SLOTH"><h2>WIFI USERS CLICK HERE</h2></a><br><br>


 <!-- 1st block /Purchase subscription button -->
<div class="merchant-button btn1" id="hideme1123" data-pfi-button="true" data-pfi-button-id="hidebutton1" data-pfi-service-id="19" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="sub1">
subscripbe to Expansion Pack For £30 <br>(Charged To Your Mobile)
</div>
    <br>
</div>

<!-- 1st block /Purchase button -->
<div class="merchant-button btn1" id="hideme1232" data-pfi-button="true" data-pfi-button-id="hidebutton1" data-pfi-service-id="17" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="<?php echo $out2;?>">
    NON SUB Buy Expansion Pack For £30 <br>(Charged To Your Mobile)
</div>
<br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner" alt="Header"> <br>
    <h2 class="hed">Available Now</h2>








<!-- 3nd block  -->
<div class="block_2">
<video class="video" width="100%"  poster="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/image1.jpg" controls >
    <source src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/video/des1.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
</div>


<!-- 4th block  -->
<div class="block_6">
    <br>
    <h1 class="hed">The Taken King Live Action Trailer – Evil’s Most Wanted</h1> <br>
    You killed his son. Now Oryx, The Taken King, wants revenge. Gather your Fireteam and take on the greatest threat this universe has seen with Destiny: The Taken King.
    <br><br><br>
</div>


<!-- 5th block  -->
<div class="block_4">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/box1.jpg" class="image2" alt="Header" width="100%">
</div>


<!-- 6th block  -->
<div class="block_6">
    <br>
    <h1 class="hed">The Taken King - Legendary Edition</h1> <br>
    Destiny: The Taken King - Legendary Edition is perfect for new and existing Guardians that are ready to jump into the Destiny universe or continue to carve their legends in the stars.
    <br><br><br>
</div>


<!-- 7th block  -->
<div class="block_4">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/image2.png" class="image2" alt="Header" width="100%">
</div>


<!-- 8th block  -->
<div class="block_6"><br>
    <h1 class="hed">THIS IS YOUR LEGEND</h1> <br>
    ACCESS YOUR ARSENAL, TRACK YOUR STATS, AND TEAM UP WITH OTHER GUARDIANS.
    <br><br><br>
</div>

<div class="block_5">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/gif.gif" class="image2" alt="Header" width="100%">
</div>


<div class="block_6">
    <h1 class="edition-title hed" >
        The Taken King - <br>Legendary Edition
    </h1><br>
    Destiny: &nbsp;The Taken King -&nbsp;Legendary Edition is&nbsp;perfect for new and existing Guardians that are ready to jump into the Destiny universe or continue to carve their legend in the stars. &nbsp;The Legendary Edition features the complete Destiny experience including The Taken King, the next evolution in the Destiny universe, Destiny, Expansion I: The Dark Below and Expansion II: House of Wolves. &nbsp;Unite with 20 million Guardians in the fight to defeat Earth’s enemies, reclaim all that we have lost, and Become Legend.
<br><br><br><br>
    <!-- 1st block /Purchase button -->
    <div class="merchant-button btn1" id="hidemwwe" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="326" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/success.php" data-pfi-content-id="<?php echo $out2;?>">
        Buy Expansion Pack For £300 <br>(Charged To Your Mobile)
    </div>
    <br>
</div>
    <br><br>
    <button id="bob1">Click me</button>
    <br>
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
    ?>
</div>

</body>
</html>
