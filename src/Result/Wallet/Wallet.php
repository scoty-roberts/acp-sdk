<?php

declare(strict_types=1);

namespace Acp\Result\Wallet;

class Wallet
{
    public readonly string $balance;
    public readonly string $unconfirmedBalance;
    public readonly string $confirmedBalance;
    public readonly string $invoiceExpiration;
    public readonly string $speedPolicy;
    public readonly string $recommendedFeeBlockTarget;
    public readonly string $paymentTolerance;
}
