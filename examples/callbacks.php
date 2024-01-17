<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';
$url = 'https://domain.com';
$method = 'POST';
$params = [
    'key1' => 'value1',
    'key2' => 'value2',
];

$callbackClient = (new \Acp\Client\Callback($baseUrl, $token));

//$callbackDto = new \Acp\Dto\CallbackDto(
//    url: $url,
//    method: $method,
//    params: $params,
//);

// POST /callback
//$callback = $callbackClient->createCallback($callbackDto);
//var_dump($callback);

// PUT /callback
//$callback = $callbackClient->updateCallback($callbackDto);
//var_dump($callback);

// GET /callback
//$callback = $callbackClient->showCallback();
//var_dump($callback);

// GET /callback/logs
//$callbackLog = $callbackClient->showCallbackLogs();
//var_dump($callbackLog);

// DELETE /callback
//if ($callbackClient->deleteCallback()) {
// ...    
//};