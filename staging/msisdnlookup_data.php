

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



<script type="text/javascript">
    var start = new Date();
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '<?php echo $_GET['merchantToken'];?>',
            sessionToken: '<?php echo $_GET['sessionToken'];?>'
        }
    }).done(function(result) {
            document.write(result);
            document.write('<br>');
            document.write('Time taken in milliseconds');
            document.write('<br>');
            var time = new Date() - start;
            document.write(time);
        }).fail(function() {
            document.write('it fucked up, probably coz your on an Iphone');
        });
</script>
