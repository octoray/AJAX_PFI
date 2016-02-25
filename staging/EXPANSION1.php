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
<div class="block_1e1">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/banner.png" class="banner2" alt="Header">
    <br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner" alt="Header"> <br>
    <a href="/staging/test2.php"><h2 style="color: deepskyblue">Available Now!</h2>
        <h2 style="color: deepskyblue">Click Here to Purchase EXPANSION I</h2></a><br>
    <h3>THE DARK BELOW

        Expand your Destiny adventure with a wealth of weapons, armor, and gear earned in new story quests and missions, three new competitive multiplayer arenas, and a new Strike and Raid. Beneath the surface of the Moon, a long-forgotten enemy stirs. Survive the true depths of the Hellmouth, and stop its dark army from invading Earth.</h3>
    <br>


</div>


<!-- 5th block  -->
<div class="block_4">
    <img src="http://ps4daily.com/wp-content/uploads/2014/07/destiny-wallpaper-18.jpg" class="image2" alt="Header" width="100%" height="300">
</div>


<!-- 6th block  -->
<div class="block_6">
    <br>
    <h1 class="hed">THE DARK BELOW</h1> <br>


    After years hiding amongst the Hive shadows, a new character, Eris, has come forth bearing an ominous warning: The Hive seek to summon a god, Crota, to destroy the Earth. Find her in the Tower to complete her quests and three new story missions, increase your Light, and earn the weapons and armor you’ll need to face what waits in the dark below.
    <br><br><br>
</div>


<!-- 7th block  -->
<div class="block_4">
    <img src="http://i1.wp.com/planetdestiny.com/wp-content/uploads/2013/02/destiny_wallpaper___aspect_of_blood_by_tusk_and_ink-d7sq1l2.jpg?resize=407%2C254" class="image2" alt="Header" width="100%">
</div>


<!-- 8th block  -->
<div class="block_6"><br>
    <h1 class="hed">NEW STORY MISSIONS AND QUESTS</h1> <br>
    Summon your courage, Guardians. Crota waits in the dark below. Gather your most trusted allies to form a Fireteam, six Guardians strong. Don your best, battle-hardened weapons and armor. Master the depths of the Hellmouth. Face Crota, and live, and glory and reward are yours for the taking.
    <br><br><br>
</div>

<div class="block_5">
    <img src="http://destiny.bungie.org/images/news/Cal_Carlson_desktop_trio.jpg" class="image2" alt="Header" width="100%">
</div>


<div class="block_6">
    <h1 class="edition-title hed" >
        NEW GEAR AND INCREASED LIGHT LEVEL
    </h1><br>
    NEW GEAR AND INCREASED LIGHT LEVEL
    Your legend grows. Reach new heights of prestige and glory by increasing your Light Level to 32, acquiring exclusive new weapons, armor and gear, and facing new cooperative and competitive challenges as your adventure continues.
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