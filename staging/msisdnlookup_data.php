

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>


<script type="text/javascript">
    $.ajax({
        url: "http://pfi.imimobile.net/staging/Ajax/Carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '57D92441-6B7F-4691-936E-10836CB92496',
            sessionToken: '92248493-2177-3DB5-463E-B6EA29ABBB67'
        }
    }).done(function (result) {
// result contains the outcome
        }).fail(function () {
// the call was not successful
        });


</script>