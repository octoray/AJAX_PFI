

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



<script type="text/javascript">
    var start = new Date();
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '57D92441-6B7F-4691-936E-10836CB92496',
            sessionToken: 'D2BD403D-12BD-8767-37F8-2ACFA752CEA3'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>



