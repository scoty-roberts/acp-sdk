<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$accessToken = ''; // use /login endpoint to get actual accessToken
$account = '';
$password = '';
$accountType = 'ACCOUNT';

$callbackClient = (new \Acp\Client\Callback($baseUrl, $accessToken));

// POST /register
//$user = $userClient->createUser($accountType);
//var_dump($user);

// POST /login
//$token = $userClient->login($account, $password);
//var_dump($token);

// POST /refresh
//$token = $userClient->refreshToken();
//print_r($token);

// POST /logout
//if ($userClient->logout()) {
// ...    
//};