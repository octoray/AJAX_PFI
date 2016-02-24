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
            <li><a href="/staging/100.php">Buy 100 In-Game Credits</a></li>
            <li><a href="/staging/500.php">Buy 500 In-Game Credits</a></li>
            <li><a href="/staging/2000.php">Buy 2000 In-Game Credits</a></li>
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





<div class="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" alt="Header"><br><br>
    <?php require("./phpdb/phpdebug.php"); ?>

</div>
<?php require("./phpdb/mainpage.php"); ?>

</body>
</html>