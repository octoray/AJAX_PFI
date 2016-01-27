

<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>

<?php $execution_time = microtime(); // Start counting ?>

<script type="text/javascript">
    $.ajax({
        url: "http://pfi.imimobile.net/staging/msisdnlookup/ajax/carrier",
        type: "POST",
        dataType: "jsonp",
        data: {
            merchantToken: '<?php echo $_GET['merchantToken'];?>',
            sessionToken: '<?php echo $_GET['sessionToken'];?>'
        }
    }).done(function(result) {
            document.write(result);
        }).fail(function() {
            document.write('it fucked up');
        });
</script>

<?php
echo '<br>';
$execution_time = microtime() - $execution_time;
printf('It took (secs)', $execution_time); ?>