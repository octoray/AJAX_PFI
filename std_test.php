
<?php
$cookie_name = "PFI_NetInfo";

if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "<BR>";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<BR>";
}


?>
<a href="http://pfi.imimobile.net/staging/checkout/?sid=344&ref=IMI_00000000000_2">PFI-s normal http non adult</a>
<br>
<a href="http://pfi.imimobile.net/staging/checkout/?sid=345&ref=IMI_00000000000_2">PFI-s normal https non adult</a>
<br>
<a href="http://pfi.imimobile.net/staging/checkout/?sid=346&ref=IMI_00000000000_2">PFI-s normal http adult</a>
<br>
<a href="http://pfi.imimobile.net/staging/checkout/?sid=347&ref=IMI_00000000000_2">PFI-s SUB http non adult</a>
<br>
<br>
<br>
<iframe id="frame" style="width: 420px; height: 280px;" src="http://pfi.imimobile.net/staging/checkout/?sid=344&ref=0000000101&render=embed" marginheight="0" marginwidth="0" frameborder="0"></iframe>