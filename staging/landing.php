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


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/banner.png" class="banner2" alt="Header">
    <br>
<br><br><br><br><br><br><br><br><br>
<br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner" alt="Header"> <br>
    <a href="/staging/test2.php"><h2 style="color: deepskyblue">Available Now!</h2>
        <h2 style="color: deepskyblue">Click Here to Purchase</h2></a><br><br>

</div>


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

    <br>
</div>
<br>
<br>
<br>




<div class="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" alt="Header"><br><br>
    <?php require("./phpdb/phpdebug.php"); ?>

</div>
<?php require("./phpdb/mainpage.php"); ?>

</body>
</html>