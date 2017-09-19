

<script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>
<?php
function getGUID(){
if (function_exists('com_create_guid')){
return com_create_guid();
}else{
mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
$charid = strtoupper(md5(uniqid(rand(), true)));
$hyphen = chr(45);// "-"
$uuid = // "{"
substr($charid, 0, 8).$hyphen
.substr($charid, 8, 4).$hyphen
.substr($charid,12, 4).$hyphen
.substr($charid,16, 4).$hyphen
.substr($charid,20,12);
return $uuid;
}
}
?>


<script type="text/javascript">
    var start = new Date();
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '57D92441-6B7F-4691-936E-10836CB92496',
            sessionToken: '<?php echo getGUID();?>'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>



