<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';
$coin = 'BTC';
$invoiceExpiration = 86400;
$speedPolicy = 'LOW_MEDIUM_SPEED';
$recommendedFeeBlockTarget = 1;
$paymentTolerance = 0;

$walletClient = (new \Acp\Client\Wallet($baseUrl, $token));

//$walletDto = new \Acp\Dto\WalletDto(
//    coin: $coin,
//    invoiceExpiration: $invoiceExpiration,
//    speedPolicy: $speedPolicy,
//    recommendedFeeBlockTarget: $recommendedFeeBlockTarget,
//    paymentTolerance: $paymentTolerance
//);

// POST /wallet
//$wallet = $walletClient->createWallet($walletDto);
//var_dump($wallet);

// PUT /wallet/{coin}
//$wallet = $walletClient->updateWallet($walletDto);
//var_dump($wallet);

// GET /wallet/{coin}
//$wallet = $walletClient->showWallet($coin);
//var_dump($wallet);