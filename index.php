<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://httpbin.org/get");
curl_setopt($ch, CURLOPT_HEADER, 1);

if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    echo 'Operation completed without any errors';
}
// close cURL resource, and free up system resources
curl_close($ch);
?>