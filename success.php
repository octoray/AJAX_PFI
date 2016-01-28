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
    <script type="text/javascript" src="/scripts/jquery-2.1.4.js">
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





    <!-- Hide stuff -->
    <script>
        function hidebutton() {
            document.getElementById('hideme1').style.display = 'none';
            document.getElementById('hideme2').style.display = 'none';
        }
    </script>

    <script>
        function showproc() {
            document.getElementById('block_66_buy').style.display = '';
        }
    </script>

    <script>
        function show() {
            document.getElementById('block_66_buy2').style.display = '';
            document.getElementById('showmeee').style.display = 'none';
        }
    </script>

    <script>
        function hideproc() {
            document.getElementById('block_66_buy').style.display = 'none';
            document.getElementById('showmeee').style.display = 'none';
            document.getElementById('mehhh').style.display = '';
            $(function(){
                $(".pfi-area").hide();
            });
        }
    </script>

    <script>
        function showproc2() {
            document.getElementById('extra').style.display = '';
        }
    </script>

    <script>
        function hybridshow() {
            document.getElementById('hybridshow').style.display = '';
        }
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

<!-- activate Menu -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#menu').slicknav();
    });
</script>





<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
    <img src="http://octoraypfi.co.uk/staging/images/banner.png" class="banner" alt="Header">
    <br>
    <br><br><br><br><br><br><br>
    <button onclick="showproc2()">STAGING Click me to run hidebutton() !!!!!!!!!!!!!</button>
    <!-- 1st block /Purchase button -->

    <br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner" alt="Header"> <br>
    <h2 class="hed" style="color: greenyellow">STAGING Purchase Successful</h2>
    <br>
    <h2 class="hed" style="color: greenyellow">Thank You For Buying The Taken King Game </h2>
    <br>
</div>
<div id="extra" style="display:none">
    <h2 class="hed">extratext</h2>
</div>




<!-- 3nd block  -->
<div class="block_2">
    <video class="video" width="100%"  poster="http://octoraypfi.co.uk/staging/images/image1.jpg" autoplay="autoplay" controls >
        <source src="http://octoraypfi.co.uk/staging/video/des1.mp4" type="video/mp4">
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
    <img src="http://octoraypfi.co.uk/staging/images/box1.jpg" class="image2" alt="Header" width="100%">
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
    <img src="http://octoraypfi.co.uk/staging/images/image2.png" class="image2" alt="Header" width="100%">
</div>


<!-- 8th block  -->
<div class="block_6"><br>
    <h1 class="hed">THIS IS YOUR LEGEND</h1> <br>
    ACCESS YOUR ARSENAL, TRACK YOUR STATS, AND TEAM UP WITH OTHER GUARDIANS.
    <br><br><br>
</div>

<div class="block_5">
    <img src="http://octoraypfi.co.uk/staging/images/gif.gif" class="image2" alt="Header" width="100%">
</div>


<div class="block_6">
    <h1 class="edition-title hed" >
        The Taken King - <br>Legendary Edition
    </h1><br>
    Destiny: &nbsp;The Taken King -&nbsp;Legendary Edition is&nbsp;perfect for new and existing Guardians that are ready to jump into the Destiny universe or continue to carve their legend in the stars. &nbsp;The Legendary Edition features the complete Destiny experience including The Taken King, the next evolution in the Destiny universe, Destiny, Expansion I: The Dark Below and Expansion II: House of Wolves. &nbsp;Unite with 20 million Guardians in the fight to defeat Earth’s enemies, reclaim all that we have lost, and Become Legend.
    <br><br><br><br>
    <div class="btn1" onclick="test1()">
        Buy Expansion Pack For £30 <br> (Charged To Your Mobile)
    </div>
    <br><br><br>
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

</body>
</html>
