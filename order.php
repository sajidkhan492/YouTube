<?php

// apni API key yahan likho
$api_key = "YOUR_API_KEY";

// panel API URL
$api_url = "https://panel.com/api/v2";

// form se data lena
$link = $_POST['link'];
$amount = $_POST['amount'];

// service ID (panel se milti hai)
$service = 1;

$post = [
'key' => $api_key,
'action' => 'add',
'service' => $service,
'link' => $link,
'quantity' => $amount
];

// API request bhejna
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$api_url);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
