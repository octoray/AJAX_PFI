

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



<script type="text/javascript">
    var start = new Date();
    $.ajax({
        url: "http://pfi.imimobile.net/msisdnlookup/ajax/carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: 'AE7A07A8-D085-40C6-ACE4-FF84F14E3247',
            sessionToken: '3AD5F4D4-591C-34C0-3767-F7622683A586'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>



