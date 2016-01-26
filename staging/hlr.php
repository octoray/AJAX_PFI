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
                    document.write(data);
                }).fail(function() {
                    document.write('AJAX lookup Failed :(');
                });}

        callajax().success(function(data) {
            document.write(data);
            // document.write(result);

        });
    </script>
</head>
<body>



<?php
// define variables and set to empty values
$nameErr = "";
$name = $msisdn = $session = "";

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

    if (empty($_POST["type"])) {
        $typeErr = "Type is required";
    } else {
        $type = test_input($_POST["type"]);
    }



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
    Type:
    <input type="radio" name="type" <?php if (isset($type) && $type=="ajax") echo "checked";?>  value="ajax">ajax
    <input type="radio" name="type" <?php if (isset($type) && $type=="http") echo "checked";?>  value="http">http
    <span class="error">* <?php echo $typeErr;?></span>
    <br><br>
    <br>
    Merchant Token:<br> <input type="text" name="name" size="40" value="<?php echo $name;?>">
    <span class="error"> <?php echo $nameErr;?></span>
    <br><br>
    Session Token:<br> <textarea name="session" rows="2" cols="40"><?php echo $session;?></textarea>
    <br><br>
    Msisdn:<br> <textarea name="msisdn" rows="2" cols="40"><?php echo $msisdn;?></textarea>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "Merchant Token";
echo "<br>";
echo $name;
echo "<br>";
echo "Session Token";
echo "<br>";
echo $session;
echo "<br>";
echo "Msisdn";
echo "<br>";
echo $msisdn;
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

echo "<br>";
echo "Sample Session Token: <h4> ".$GUID."</h4>";
echo "<br>";
echo "Octoray Staging Merhcant Token: <h4> 57D92441-6B7F-4691-936E-10836CB92496 </h4>";
echo "<br>";


function sendmessage($n,$s,$m) {
    $ch = curl_init('http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_URL, 'http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
    curl_setopt($ch, CURLOPT_POST, 1);

    $post = array(
        'merchantToken'=>($n),
        'sessionToken'=>($s),
        'msisdn'=>($m)
    );



    $query = http_build_query($post);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

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

}


if (empty($_POST["session"])) {

} else {
    sendmessage($name,$session,$msisdn);
}


?>






