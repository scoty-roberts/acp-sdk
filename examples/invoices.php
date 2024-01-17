<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$account = 'acc-3d5acd9a-63a1-4fbf-abd7-fa86d809000c';
$currency = 'USD';
$coin = 'BTC';
$address = 'bc1qknp9u0m4pn582dq505gh6vk8yyfp5y2ve8pz60';
$amount = '100';
$orderId = 'orderId';
$metadata = [
    'key1' => 'value1',
    'key2' => 'value2',
];

$invoiceClient = (new \Acp\Client\Invoice($baseUrl, $token));

//$invoiceDto = new \Acp\Dto\InvoiceDto(
//    account: $account,
//    currency: $currency,
//    coin: $coin,
//    address: $address,
//    amount: $amount,
//    orderId: $orderId,
//    metadata: $metadata,
//);

// POST /invoice
//$invoice = $invoiceClient->createInvoice($invoiceDto);
//var_dump($invoice);

// GET /invoice/{invoiceId}
//$invoice = $invoiceClient->showInvoice($coin);
//var_dump($invoice);