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
            <li><a href="/staging/EXPANSION1.php">EXPANSION I Offer</a></li>
            <li><a href="/staging/EXPANSION2.php">EXPANSION II Offer</a></li>
        </ul>
    </li>
    <li>The Taken King Offer
        <ul>
            <li><a href="/staging/abilitys.php">Abilitys</a></li>
            <li><a href="/staging/newgear.php">New Gear</a></li>
            <li><a href="/staging/subclass.php">New Subclasses</a></li>
        </ul>
    </li>
</ul>


<!-- 1st block /Destiny logo text overlay -->
<div class="block_1e2">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/banner.png" class="banner2" alt="Header">
    <br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br>
</div>

<!-- 2nd block  -->
<div class="block_66" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <a href="/staging/test2.php"><h2>Available Now. Click Here to Purchase The Expansion</h2></a><br><br>
</div>


<!-- 4th block  -->
<div class="block_6">
    <br>
    <h1 class="hed">HOUSE OF WOLVES</h1> <br>
    Expand your Destiny adventure with a wealth of weapons, armor, and gear to earn in new story missions, three new competitive multiplayer maps, and a new cooperative Strike. Expansion II introduces a new competitive elimination mode in the Crucible and an all-new arena activity – The Prison of Elders. The Reef is open. Join the Awoken and hunt down the Fallen rising against us.
    <br><br><br>
</div>


<!-- 5th block  -->
<div class="block_4">
    <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/staging/images/gun1.gif" class="image2" alt="Header" width="100%">
</div>


<!-- 6th block  -->
<div class="block_6">
    <br>
    <h1 class="hed">HOUSE OF WOLVES</h1> <br>
    New weapons, armor, and gear to increase your Guardian’s power, including Fallen and Osiris-themed collections earned as top-tier rewards in new activities. New Activity rewards will enable Guardians to upgrade old favorites. Legendary and Exotic gear from Destiny, The Dark Below, and House of Wolves can be boosted to the current maximum Attack, Defense, and Light values.
    <br><br><br>
</div>


<!-- 7th block  -->
<div class="block_4">
    <img src="http://images.techtimes.com/data/images/full/85113/destiny-house-of-wolves.jpg?w=600" class="image2" alt="Header" width="100%">
</div>


<!-- 8th block  -->
<div class="block_6"><br>
    <h1 class="hed">THIS IS YOUR LEGEND</h1> <br>
    ACCESS YOUR ARSENAL, TRACK YOUR STATS, AND TEAM UP WITH OTHER GUARDIANS.
    <br><br><br>
</div>

<div class="block_5">
    <img src="http://img00.deviantart.net/705c/i/2015/113/9/7/destiny___house_of_wolves_hype_by_1337ninjasakura-d8qqree.png" alt="Header" width="100%">
</div>


<div class="block_6">
    <h1 class="edition-title hed" >
        THOUSE OF WOLVES
    </h1><br>
    DThe Guardians have grown strong, and now the Queen of the Awoken has called upon them to hunt down the House of Wolves, Fallen subjects once loyal to the Queen before their violent rebellion. Meet with the Queen’s emissaries at Vestian Outpost in the Reef. Hunt down their Fallen betrayers and earn great rewards.
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