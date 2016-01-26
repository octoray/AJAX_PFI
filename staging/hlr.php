<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
        body {
            text-align: left;
        }
    </style>
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


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>HLR LOOKUP TEST</h2>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Merchant Token:<br> <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Session Token:<br> <textarea name="session" rows="5" cols="40"><?php echo $session;?></textarea>
    <br><br>
    Msisdn:<br> <textarea name="msisdn" rows="5" cols="40"><?php echo $msisdn;?></textarea>
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
echo "Sample Session Token: <h3> ".$GUID."<h3>";
echo "<br>";
echo "Octoray Staging Merhcant Token: <h3> 57D92441-6B7F-4691-936E-10836CB92496 <h3>";
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

    echo '<br>';
    echo "URL POSTED TO IS: ".$info['url'];
    print '<BR>';
//echo $info['url'];
    echo '<br>';
//echo '<br>';
    echo "POSTED DATA IS:"; print '<BR>';print '<BR>';
    print_r($post);
    print '<BR>';
    print '<BR>';
    echo "RESPONSE CODE: ".$info['http_code'];
    print '<BR>';
    print '<BR>';
    echo "RESPONSE  IS:  "  .$runy;
    print '<BR>';
    print '<BR>';
    echo "Remote IP:  ".$info['primary_ip'];
    print '<BR>';
    print '<BR>';
    echo "Time TAken:  ".$info['total_time'];

}


if (empty($_POST["session"])) {
} else {
    sendmessage($name,$session,$msisdn);
}
?>