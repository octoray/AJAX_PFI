

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript">
        $.ajax({
            url: "http://pfi.imimobile.net/msisdnlookup/Ajax/SendAjaxPersonalLink",
            type: "POST",
            dataType: "jsonp",
            data: {
                merchantToken: "88209BE0-D22D-4CC4-9B3B-6A5AC736D877",
                sessionToken: "A88DAC9A-3A7C-41EC-87B0-FE91E4019AF4",
                msisdn: "447768240407",
                destinationUrl: "http://pfi.69camsbox.com/cams",
                message: "Super test 12123423542345345435345 das !£$%%^&**) {url}",
                spoof: "personal"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });
</script>
