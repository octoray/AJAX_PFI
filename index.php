<!DOCTYPE html>
<html>
<head>
    <title>foobar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://octoraypfi.co.uk/slicknav/dist/slicknav.css" type="text/css">
    <script src="http://octoraypfi.co.uk/slicknav/dist/jquery.slicknav.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <script type="text/javascript">
    </script>

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
<script type="text/javascript">
    $(document).ready(function(){
        $('#menu').slicknav();
    });
</script>
<br>

<img src="http://octoraypfi.co.uk/images/banner.png" class="banner" alt="Header">

<video width="400" controls autoplay >
    <source src="http://octoraypfi.co.uk/video/des1.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

</body>
</html>