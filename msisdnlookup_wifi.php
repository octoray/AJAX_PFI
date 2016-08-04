

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>


<script type="text/javascript">
    $.ajax({
        url: "http://pfi.imimobile.net/msisdnlookup/ajax/lookup",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: 'AE7A07A8-D085-40C6-ACE4-FF84F14E3247',
            sessionToken: '70ACC6D7-7715-FA5B-BA98-B0FA35DA1C8F',
            msisdn: '447920201277'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>

