
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">

    <title>SlickNav Demo - Responsive Mobile Nav Plugin for jQuery</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/slicknav/dist/slicknav.css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/css/body.css" type="text/css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>
<body>
<p><b>Resize browser to view mobile menu</b></p>

Original Menu hidden on mobile
<ul id="menu">
    <li>Parent 1
        <ul>
            <li><a href="#">item 3</a></li>
            <li>Parent 3
                <ul>
                    <li><a href="#">item 8</a></li>
                    <li><a href="#">item 9</a></li>
                    <li><a href="#">item 10</a></li>
                </ul>
            </li>
            <li><a href="#">item 4</a></li>
        </ul>
    </li>
    <li><a href="#">item 1</a></li>
    <li>non-link item</li>
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