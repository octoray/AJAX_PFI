<!DOCTYPE HTML>
<?php

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
?>

<?php

function sendmessage() {
$ch = curl_init('http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, 'http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
curl_setopt($ch, CURLOPT_POST, 1);

$post = array(
'merchantToken'=>($_GET{'merchantToken'}),
'sessionToken'=>($_GET{'sessionToken'}),
'msisdn'=>($_GET{'msisdn'})
);



$query = http_build_query($post);

curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

$runy = curl_exec($ch);
$info = curl_getinfo($ch);

echo '<br>';
echo "URL POSTED TO IS: ".$info['url'];
//echo $info['url'];
echo '<br>';
//echo '<br>';
    echo "POSTED DATA IS:"; print '<BR>';
    print_r($post);
    print '<BR>';
    echo "RESPONSE CODE: ".$info['http_code'];
    print '<BR>';
    echo "RESPONSE  IS:  "  .$runy;
    print '<BR>';
    echo "Remote IP:  ".$info['primary_ip'];
    print '<BR>';
    echo "Remote IP:  ".$info['total_time'];

}



sendmessage();


?>