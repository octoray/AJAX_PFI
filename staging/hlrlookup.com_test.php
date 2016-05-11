<?php

function hlr_check($key,$password,$msisdn)
{
    $curl = curl_init("https://www.hlrlookup.com/api/hlr/?apikey=$key&password=$password&msisdn=$msisdn");
    curl_setopt($curl, CURLOPT_HEADER,0);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

hlr_check($_GET['apikey'],$_GET['password'],$_GET['msisdn']);

?>