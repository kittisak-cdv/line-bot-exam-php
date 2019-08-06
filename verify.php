<?php
$access_token = '7EgwZlW//QEpWcqRToKg9j72f/Hv93iXso8LVv4N1YME8J11uIUh2H12p7ugSWmUxmFWPnpQvFAZIRLaNlRSfdfZHB2hd9IJ+hErv+g2nWisQrzSVnzry7RS9hP1sD+KIdHYG2u9vaAELQVqycgmcgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
