<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



<script type="text/javascript">
    function callajax(callback) {
        $.ajax({
            url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/lookup",
            type: "POST",
            dataType: "jsonp",
            data: {
                merchantToken: '<?php echo $_POST["name"];?>',
                sessionToken: '<?php echo $_POST["session"];?>',
                msisdn: '<?php echo $_POST["msisdn"];?>'
            }
        }).done(function(data) {
               // document.write(data);
            }).fail(function() {
                document.write('AJAX lookup Failed :(');
            });}

    callajax()(function(data) {
        return data;
    });
</script>
<br><br><br><br><br><br>

<h1><div id="log">Hello</div></h1>



<script>
    var carName = "Volvo";
    document.getElementById("log").innerHTML = carName;
</script>