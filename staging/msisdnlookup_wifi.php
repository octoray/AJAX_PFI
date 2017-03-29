

<script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>


<script type="text/javascript">
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/lookup",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '57D92441-6B7F-4691-936E-10836CB92496',
            sessionToken: 'B676A0ED-0ED3-6637-4B61-72AF0DA3FA7A',
            msisdn: '447768240407'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('Error');
        });
</script>

