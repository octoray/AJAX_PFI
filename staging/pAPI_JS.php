

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>


<script type="text/javascript">
    var start = new Date();
    $.ajax({
        url: "http://pfi.imimobile.net/api/PersonalLink.svc/rest/SendAjaxPersonalLink",
        beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Basic MTpBRTdBMDdBOC1EMDg1LTQwQzYtQUNFNC1GRjg0RjE0RTMyNDc=");
        },
        headers: { 'Authorization': 'Basic MTpBRTdBMDdBOC1EMDg1LTQwQzYtQUNFNC1GRjg0RjE0RTMyNDc=' },
        type: "POST",
        dataType: "jsonp",
        data: {"SessionToken":"4AD263B3-C0F5-8C0F-0AD0-380748666523","MSISDN":"447768240407","DestinationUrl":"http://the-sloth.uk/","Message":"test JS {url}","Spoof":"62277"}
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>


