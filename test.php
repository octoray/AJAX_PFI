
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/css/body.css" type="text/css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>

<ul id="menu">
    <li>Offers
        <ul>
            <li><a href="#">item1 </a></li>
            <li><a href="#">item 4</a></li>
        </ul>
    </li>
    <li>Parent 2
        <ul>
            <li><a href="#">item 5</a></li>
            <li><a href="#">item 6</a></li>
            <li><a href="#">item 7</a></li>
        </ul>
    </li>
</ul>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/slicknav/dist/jquery.slicknav.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#menu').slicknav();
    });
</script>
</body>
</html>