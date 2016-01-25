

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>


<script type="text/javascript">
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/lookup",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '<?php echo $_GET['merchantToken'];?>',
            sessionToken: '<?php echo $_GET['sessionToken'];?>',
            msisdn: '<?php echo $_GET['msisdn'];?>'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('it fucked up');
        });
</script>