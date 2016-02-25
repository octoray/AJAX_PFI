

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
                merchantToken: "57D92441-6B7F-4691-936E-10836CB92496",
                sessionToken: "A6ED204F-D031-ECA9-38BA-E54AE4545894",
                msisdn: "447961832063",
                destinationUrl: "http://octoray.org.uk/staging",
                message: "test {url}",
                spoof: "brrraaaa"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });
</script>