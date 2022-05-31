<?php
$handle = curl_init('https://eoon1r728et4iac.m.pipedream.net');

$data = [
    'key' => 'value'
];

$encodedData = json_encode($data);

curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($handle);
?>