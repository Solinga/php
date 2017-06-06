<?php
    $host = "http://saweather.market.alicloudapi.com";
    $path = "/day15";
    $method = "GET";
    $appcode = "420a431b511c48f0a8a5683c7909db6c";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "area=%E4%B8%BD%E6%B1%9F&areaid=101230506";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    var_dump(curl_exec($curl));
    echo curl_exec($curl);
?>