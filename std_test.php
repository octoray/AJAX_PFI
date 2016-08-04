<link rel="stylesheet" href="http://octoraypfi.co.uk/staging/css/iframe.css" type="text/css">

<style>
    h1 {
        color: blue;
        font-family: verdana;
        font-size: 300%;
    }
    .frame  {
        color: red;!important;
        background-color: #000000;!important;
        font-family: courier;!important;
        font-size: 160%;!important;
    }
</style>

<script>
$('iframe').load( function() {
$('iframe').contents().find("head")
.append($("<style type='text/css'>  input.btn, a.btn{display:none;!important;}  </style>"));
});


var iframe = document.getElementById('frame');
var style = document.createElement('style');
style.textContent =
    'body {' +
        '  background-color: #33a9a9; !important;' +
        '  background-image: some-image;' +
        '}';
iframe.contentDocument.head.appendChild(style);
</script>


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
<iframe id="frame1" class="frame1" style="width: 420px; height: 280px; background-color: powderblue;" src="http://pfi.imimobile.net/staging/checkout/?sid=344&ref=0000000101&render=embed" marginheight="0" marginwidth="0" frameborder="0"></iframe>

<br>
<br>
LIVE
<br>
<iframe id="frame2" class="frame2" style="width: 420px; height: 280px; background-color: powderblue;" src="http://pfi.imimobile.net/checkout/?sid=115&ref=0000000101&render=embed" marginheight="0" marginwidth="0" frameborder="0"></iframe>


<script>
    document.getElementById('frame31').style.display = 'none';
</script>