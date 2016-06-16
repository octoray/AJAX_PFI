<?php


$request_headers = array();
$request_headers[] = 'Accept: */*';
$request_headers[] = 'Host: www.hlrlookup.com';
$var1 = $_GET["msisdn"];
$var2 = $_GET["personalcache"];
$var3 = $_GET["sharedcache"];


    $curl = curl_init("http://<username>:<password>@93.158.78.4:3700/lookup?msisdn=$var1&nocache");
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $request_headers);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
    echo "<BR>";
    echo "<BR>";
    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    echo "Process Time: {$time}";


?>