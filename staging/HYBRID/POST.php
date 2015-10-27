<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
    <meta charset="utf-8">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>

<!-- POST DATA JSON FUNCTION -->
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var post = JSON.stringify({ x: 5 });
        $("#post").click(function(){

            $.post(
                "http://212.71.238.228:1337/",
                post,
                function(data) {
                    $('#swap').html(data);
                }
            );

        });
    });
</script>

POSTing hopefully.....
<p>Click on the button</p>

<div id="swap" style="background-color:cc0;">
    here goes
</div>

<input type="button" id="post" value="Load Data" />


</body>
</html>