<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';
$coin = 'BTC|LTC|DOGE|DASH|BTG';
$amount = '100';

$currencyClient = (new \Acp\Client\Currency($baseUrl, $token));

// POST /currency/coin/{coin}/{amount}
//$currency = $currencyClient->getCoinCurrency($coin, $amount);
//var_dump($currency);

// POST /currency/fiat/{coin}/{amount}
//$currency = $currencyClient->getFiatCurrency($coin, $amount);
//var_dump($currency);