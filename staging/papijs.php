

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript">
        $.ajax({
            url: "http://pfi.imimobile.net/staging/msisdnlookup/Ajax/SendAjaxPersonalLink",
            type: "POST",
            dataType: "jsonp",
            data: {
                merchantToken: "AE7A07A8-D085-40C6-ACE4-FF84F14E3247",
                sessionToken: "172E514F-E40E-41D0-9811-DC87141549FF",
                msisdn: "447768240407",
                destinationUrl: "http://the-sloth.uk/",
                message: "Super test 12123423542345345435345 das !£$%%^&**) {url}",
                spoof: "personal"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });
</script>
