<?php require("./phpdb/phpgeneralfun.php"); ?>


<!DOCTYPE HTML>
<html>
<head>

    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <!-- activate Menu -->
   <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/slicknav.css">
   <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/body.css" type="text/css">
    <link rel="stylesheet" href="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/css/fonts.css" type="text/css">
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/jquery-2.1.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" integrity="sha384-vEQs6vKzb8v6+GpGDCnXUQ6aa2DYtn5LTi/tA/85iEZfXN0nAYj0shvYo8ldQQ7m" crossorigin="anonymous"></script>
    <script src="http://ec2-35-158-40-105.eu-central-1.compute.amazonaws.com/staging/slicknav/dist/jquery.slicknav.js"></script>
<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"84d87c94c1",applicationID:"32071966",sa:1}
</script>



     <script type="text/javascript">
         $(document).ready(function(){
             $('#menu').slicknav();
         });
     </script>
</head>

<body>
<!-- Menu -->
<ul id="menu">
    <li>Offers
        <ul>
            <li><a href="/staging/landing.php">HOME (The Taken King)</a></li>
            <li><a href="/staging/EXPANSION1.php">EXPANSION I Offer</a></li>
            <li><a href="/staging/EXPANSION2.php">EXPANSION II Offer</a></li>
        </ul>
    </li>
    <li>The Taken King Offer
        <ul>
            <li><a href="/staging/100.php">Buy 100 In-Game Credits</a></li>
            <li><a href="/staging/500.php">Buy 500 In-Game Credits</a></li>
            <li><a href="/staging/2000.php">Buy 2000 In-Game Credits</a></li>
        </ul>
    </li>
    <li>Destiny Competitions
        <ul>
            <li><a href="/staging/wine.php">WIN The Expansion Packs</a></li>
            <li><a href="/staging/wint.php">WIN Free T-Shirt</a></li>
        </ul>
    </li>
    <li>IVR
        <ul>
            <li><a href="/staging/ivr.php">Buy The Super Pack</a></li>
        </ul>
    </li>
</ul>



<!-- 2nd block  -->
<div class="block_666" data-pfi-area="true" id="showmeee" style="<?php if ($_SERVER['HTTP_X_PFI_STATUS'] == 'PfiHybridSession') {echo "display:none";}else{echo "";}; ?>" >
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/bungie/dtg-comet/utils/logos/destiny-taken-king-composite-logo.svg" class="banner2" alt="Header"><br>
    <!-- 1st block /Purchase subscription button -->
    <div class="merchant-button btn1" id="hideme1" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="326" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="sub1">
        Subscribe
    </div>
    <br>
<br>

    <!-- 2nd block /Purchase button -->
    <div class="merchant-button btn2" id="hideme2" data-pfi-button="true" data-pfi-button-id="hidebutton2" data-pfi-service-id="330" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Buy
    </div>
    <br>
    <br>
    <!-- 3rd block /Purchase button -->
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="336" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="381" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 5.00 week
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="383" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 1.00 week
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="385" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 5.00 day
    </div>
    <br> <br>
    <div class="merchant-button btn3" id="hideme3" data-pfi-button="true" data-pfi-button-id="hidebutton" data-pfi-service-id="384" data-pfi-reference="<?php echo $out1;?>" data-pfi-content-url="/staging/landing.php" data-pfi-content-id="<?php echo $out2;?>">
        Subscribe With Free Trial 1.00 day
    </div>
</div>


<div class="footer" id="footer">
    <br>
    <img src="https://www.destinythegame.com/content/dam/atvi/global/firstparty/activision/activision-logo.svg"  class="foot_logo" alt="Header"><br><br>
    <?php
    echo"<br>";
    echo $set;
    echo $notset;
    echo"<br>";
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your Alias is: ".$_SERVER['HTTP_X_PFI_ALIAS'];
    echo"<br>";
    echo "Your Status is: ".$_SERVER['HTTP_X_PFI_STATUS'];
    echo"<br>";
    echo "Your Network is: ".$_SERVER['HTTP_X_PFI_NETINFO'];
    echo"<br>";
    echo "Your referance is: ".$_SERVER['HTTP_X_PFI_REFERANCE'];
    echo"<br>";
    echo "Your Session token is: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN'];
    echo"<br>";
    echo "GUID generated is: ".$GUID;
    echo"<br>";
    echo "Your hash is: ".$_SERVER['HTTP_X_PFI_HASH'];
    echo"<br>";
    echo "Your callerid is: ".$_SERVER['HTTP_X_PFI_CALLERID'];
    echo"<br>";
    echo "Your transid is: ".$_SERVER['HTTP_X_PFI_TRANSACTIONID'];
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo print_r($_SERVER);
    echo"<br>";
    echo"<br>";
    echo"response header";
    echo print_r($http_response_header);
    echo"<br>";
    echo"Request";
    echo print_r($_REQUEST);

    //Write logs
    $arr = $_SERVER;
    // echo implode(" ",$arr);
    $today1 = date("Y-m-d H:i:s");
    $myFile = "mainpage.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    $stringData = "\n";
    fwrite($fh, $stringData);
    fwrite($fh, $today1. ": headers: " .implode(" ",$arr));
    fclose($fh);



$cookie_name = "PFI_NetInfo";
$cookie_value = "ASxY2FckENo5UwFuoHMk+g==";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "<BR>";
    setcookie($cookie_name, urldecode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie named '" . $cookie_name . "'set to ASxY2FckENo5UwFuoHMk+g==";
    echo "<BR>";
    echo "<BR>";
    echo "<BR>";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<BR>";
    setcookie($cookie_name, urldecode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Cookie is changed name too '" . $cookie_name . "'set to ASxY2FckENo5UwFuoHMk+g==";
    echo "<BR>";
    echo "<BR>";
}



    ?>
</div>
<?php require("./phpdb/mainpage.php"); ?>
<iframe src="http://www.w3schools.com">
    <p>Your browser does not support iframes.</p>
</iframe>
</body>
<script>
    function wrong() {
        document.getElementById('buttons1').style.display = 'none';
        document.getElementById('buttons2').style.display = 'none';
        document.getElementById('buttons3').style.display = 'none';
        document.getElementById('wrong').style.display = '';
        document.getElementById('shirwan').style.display = 'none';
        document.getElementById('question').style.display = 'none';
    }

</script>

<script>
    function correct() {
        document.getElementById('buttons1').style.display = 'none';
        document.getElementById('buttons2').style.display = 'none';
        document.getElementById('buttons3').style.display = 'none';
        document.getElementById('correct').style.display = '';
        document.getElementById('question').style.display = 'none';
    }

</script>
<script>
    function nope() {
        document.getElementById('footer').style.display = 'none';
    }

</script>
</html>
