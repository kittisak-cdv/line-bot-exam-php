<?php



require "vendor/autoload.php";

$access_token = '7EgwZlW//QEpWcqRToKg9j72f/Hv93iXso8LVv4N1YME8J11uIUh2H12p7ugSWmUxmFWPnpQvFAZIRLaNlRSfdfZHB2hd9IJ+hErv+g2nWisQrzSVnzry7RS9hP1sD+KIdHYG2u9vaAELQVqycgmcgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '26ade74fb9e50f7c40245e4d3ef0d2f3';

$pushID = 'Ucc61e47137ffb649253c80fed64778f7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







