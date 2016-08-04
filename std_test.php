<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>


<script>
    function insertScript(doc, target, src, callback) {
        var s = doc.createElement("script");
        s.type = "text/javascript";
        if(callback) {
            if (s.readyState){  //IE
                s.onreadystatechange = function(){
                    if (s.readyState == "loaded" ||
                        s.readyState == "complete"){
                        s.onreadystatechange = null;
                        callback();
                    }
                };
            } else {  //Others
                s.onload = function(){
                    callback();
                };
            }
        }
        s.src = src;
        target.appendChild(s);
    }

    var elFrame = document.getElementById('#iframe');
    $(elFrame).load(function(){
        var context = this.contentDocument;
        var frameHead = context.getElementsByTagName('head').item(0);
        insertScript(context, frameHead, '/js/somescript.js');
    }
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
    document.getElementById('pfi-form').style.display = 'none';
</script>