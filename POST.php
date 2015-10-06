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
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            type: 'POST',
            url: 'http://212.71.238.228:1337/',
            data: '{"name":"jonas"}',
            // success: function(data) { alert('data: ' + data); },
            success: 'NULL',
            contentType: "application/json",
            dataType: 'json'
        });
    });
</script>

POSTing hopefully.....


</body>
</html>