

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">
    function callajax(callback) {
        $.ajax({
            url: "pfi.imimobile.net/staging/msisdnlookup/Ajax/SendAjaxPersonalLink",
            type: "POST",
            dataType: "jsonp",
            data: {
                merchantToken: "57D92441-6B7F-4691-936E-10836CB92496",
                sessionToken: "A6ED204F-D031-ECA9-38BA-E54AE4545894",
                msisdn: 447768240407,
                destinationUrl: "http://octoray.org.uk/staging",
                message: "test {url}",
                spoof: "62277B"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });
    }


</script>