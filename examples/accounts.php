<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$accountClient = (new \Acp\Client\Account($baseUrl, $token));

// GET /account
//$account = $accountClient->showAccount();
//print_r($account);

// DELETE /account
//$account = $accountClient->deleteAccount();
//print_r($account);