

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
                sessionToken: "EC465AB0-A01E-CB1C-816F-6B42056CCB6C",
                msisdn: "447961832063",
                destinationUrl: "http://octoray.org.uk/staging/landing.php",
                message: "Super test 12123423542345345435345 34sddhsdjfafhkjgdfjhkgfdajhkgfdajhkgdfajhkgdfasjhkgfdasjhkgdfasjhkgfjdjjghkdsfjghkasdfjghkadfsjghkdfsajghkfdas {url}",
                spoof: "334466"
            }
        }).done(function (result) {
                document.write(result);
            }).fail(function () {
                document.write('Error');
            });
</script>