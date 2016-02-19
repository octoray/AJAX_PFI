<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
        body {
            text-align: left;
        }
        h4 {
            color: darkorange;
        }
        h5 {
            color: green;
            font-size: 15px;
        }

    </style>
    <script src="http://octoraypfi.co.uk/staging/jquery-2.1.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>


</head>
<body>



<?php
// define variables and set to empty values
$nameErr = "";
$name = $msisdn = $durl = $message = $spoof = $ep = $session = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Merchant Token is required";
    } else {
        $name = test_input($_POST["name"]);
    }


    if (empty($_POST["msisdn"])) {
        $msisdn = "";
    } else {
        $msisdn = test_input($_POST["msisdn"]);
    }

    if (empty($_POST["session"])) {
        $session = "";
    } else {
        $session = test_input($_POST["session"]);
    }

    if (empty($_POST["durl"])) {
        $durl = "";
    } else {
        $durl = test_input($_POST["durl"]);
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    if (empty($_POST["spoof"])) {
        $spoof = "";
    } else {
        $spoof = test_input($_POST["spoof"]);
    }

    // if (empty($_POST["type"])) {
    //     $typeErr = "Type is required";
    // } else {
    //     $type = test_input($_POST["type"]);
    // }



}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>HLR LOOKUP TEST PFI</h2>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- Hide stuff
    Type:
    <input type="radio" name="type" <?php if (isset($type) && $type=="ajax") echo "checked";?>  value="ajax">ajax
    <input type="radio" name="type" <?php if (isset($type) && $type=="http") echo "checked";?>  value="http">http
    <span class="error">* <?php echo $typeErr;?></span>
    <br><br>-->
    <br><br>

    Session Token:<br> <textarea name="session" rows="2" cols="40"><?php echo $session;?></textarea>
    <br><br>
    MSISDN:<br> <textarea name="msisdn" rows="2" cols="40"><?php echo $msisdn;?></textarea>
    <br><br>
    Destination URL:<br> <textarea name="durl" rows="2" cols="40"><?php echo $durl;?></textarea>
    <br><br>
    Message:<br> <textarea name="message" rows="2" cols="40"><?php echo $message;?></textarea>
    <br><br>
    Spoof:<br> <textarea name="spoof" rows="2" cols="40"><?php echo $spoof;?></textarea>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Merchant Token set";
echo "<br>";
echo $name;
echo "<br>";
echo "Session Token set";
echo "<br>";
echo $session;
echo "<br>";
echo "Msisdn set ";
echo "<br>";
echo $msisdn;
echo "<br>";
echo "URL set";
echo "<br>";
echo $durl;
echo "<br>";
echo "message set";
echo "<br>";
echo $message;
echo "<br>";
echo "spoof set";
echo "<br>";
echo $spoof;
echo "<br>";


function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
};

$GUID = getGUID();
if (isset($_SERVER['HTTP_X_PFI_SESSIONTOKEN'])) {
    header("X-PFI-SessionToken: ".$_SERVER['HTTP_X_PFI_SESSIONTOKEN']);
    $set = 'set';
}else{
    header("X-PFI-SessionToken: ".$GUID);
    $notset = 'not set';
};

echo "<br>";
echo "Sample Session Token: <h4> ".$GUID."</h4>";
echo "<br>";
echo "Octoray Staging Merhcant Token: <h4> 57D92441-6B7F-4691-936E-10836CB92496 </h4>";
echo "<br>";

//http://pfi.imimobile.net/staging/msisdnlookup/web/lookup
function sendmessage($s,$m,$dl,$ms,$sp) {
    $ch = curl_init($dl);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,"Authorization: Basic MTpBRTdBMDdBOC1EMDg1LTQwQzYtQUNFNC1GRjg0RjE0RTMyNDc=");
    curl_setopt($ch, CURLOPT_HTTPHEADER,"Accept: */*");
    curl_setopt($ch, CURLOPT_HTTPHEADER,"Accept-Charset: utf-8");
    curl_setopt($ch, CURLOPT_HTTPHEADER,"Content-Type: application/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_URL, "http://pfi.imimobile.net/api/PersonalLink.svc/rest/SendAjaxPersonalLink");
    //curl_setopt($ch, CURLOPT_HTTPHEADER,"X-PFI-MerchantToken: 57D92441-6B7F-4691-936E-10836CB92496");
    // curl_setopt($ch, CURLOPT_HTTPHEADER,"X-PFI-MerchantToken: */*");
    curl_setopt($ch, CURLOPT_POST, 1);

    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

    echo json_encode($arr);

    $post = array(
        'sessionToken'=>($s),
        'msisdn'=>($m),
        'destinationurl'=>($dl),
        'message'=>($ms),
        'spoof'=>($sp)
    );

    $post_json = json_encode($post);



    $query = http_build_query($post);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);

    $runy = curl_exec($ch);
    $info = curl_getinfo($ch);

    echo "URL POSTED TO IS: <h4>".$info['url']."</h4>";
    print '<BR>';
//echo $info['url'];
//echo '<br>';
    echo "POSTED DATA IS: <h4>"; print '<BR>';print '<BR>';
    print_r($post);
    print '<BR></h4>';
    echo "RESPONSE CODE: <h4>".$info['http_code']."</h4>";
    print '<BR>';
    echo "RESPONSE  IS:  <h5>"  .$runy."</h5>";
    print '<BR>';
    echo "Remote IP:  <h4>".$info['primary_ip']."</h4>";
    print '<BR>';
    echo "Time TAken:  <h4>".$info['total_time']."</h4>";
    print '<BR>';
    print 'JSON ARRAY';
    echo json_encode($post);
    print '<BR>';
    echo "all is:  <h5>"  .$ch."</h5>";
    print '<BR>';
    print '<BR>';
    echo "request is is:  <h5>"  .print_r($_REQUEST)."</h5>";
    print '<BR>';

}


if (empty($_POST["session"])) {

} else {
    sendmessage($session,$msisdn,$durl,$message,$spoof);
}


?>






