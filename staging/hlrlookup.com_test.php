<?php


$request_headers = array();
$request_headers[] = 'Accept: */*';
$request_headers[] = 'Host: www.hlrlookup.com';

    $curl = curl_init("https://hlrlookup.com/api/hlr/?apikey=BebTIXVVcUP8kQIRQU6PQmIBNZBkLFgN&password=Wyab9mgx&msisdn=447768240407");
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $request_headers);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;


?>