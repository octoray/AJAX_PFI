
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


function sendmessage() {
$ch = curl_init('http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_URL, 'http://pfi.imimobile.net/staging/msisdnlookup/web/lookup');
curl_setopt($ch, CURLOPT_POST, 1);

$post = array(
'merchantToken'=>('57D92441-6B7F-4691-936E-10836CB92496'),
'sessionToken'=>('92248593-2177-3DB5-463E-B6EA29ABBB67'),
'msisdn'=>('447768240407')
);



$query = http_build_query($post);

curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

$runy = curl_exec($ch);
$info = curl_getinfo($ch);
echo '<br>';
echo $info['url'];
echo '<br>';
    echo '<br>';
echo $info['body'];
echo '<br>';
    echo '<br>';
echo $info['request_header'];
echo '<br>';

    echo $runy;
    echo '<br>';
    echo $info;
    echo '<br>';
    print_r($ch);
    print '<BR>';
    print_r($post);
}

sendmessage();


?>