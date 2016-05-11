<?php


    $curl = curl_init("https://hlrlookup.com/api/hlr/?apikey=BebTIXVVcUP8kQIRQU6PQmIBNZBkLFgN&password=Wyab9mgx&msisdn=447768240407");
    curl_setopt($curl, CURLOPT_HEADER,0);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;


?>