<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';
$coin = 'BTC';
$address = 'bc1qknp9u0m4pn582dq505gh6vk8yyfp5y2ve8pz60';
$amount = '100';
$subtractFromAmount = true;

$transactionClient = (new \Acp\Client\Transaction($baseUrl, $token));

//$transactionDto = new \Acp\Dto\TransactionDto(
//    coin: $coin,
//    address: $address,
//    amount: $amount,
//    subtractFromAmount: $subtractFromAmount
//);

// POST /transaction/{coin}
//$transaction = $transactionClient->createTransaction($transactionDto);
//var_dump($transaction);