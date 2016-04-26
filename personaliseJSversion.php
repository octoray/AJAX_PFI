

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>

<script type="text/javascript">
    function callajax(callback) {
        $.ajax({
            url: "pfi.imimobile.net/msisdnlookup/Ajax/SendAjaxPersonalLink",
            type: "POST",
            dataType: "jsonp",
            data: {
                merchantToken: "AE7A07A8-D085-40C6-ACE4-FF84F14E3247",
                sessionToken: "01022B5F-7C54-C5F5-CFC6-FF1A4562AE62",
                msisdn: 447768240407,
                destinationUrl: "http://octoray.org.uk/",
                message: "test {url}",
                spoof: "62277"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });


</script>