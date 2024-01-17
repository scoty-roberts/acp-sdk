<?php

declare(strict_types=1);

namespace Acp\Result\Invoice;

class Invoice
{
    public readonly string $id;
    public readonly string $status;
    public readonly string $currency;
    public readonly string $rate;
    public readonly string $coin;
    public readonly string $createdTime;
    public readonly string $expirationTime;
    public readonly string $destination;
    public readonly string $totalPaid;
    public readonly string $paymentLink;
    public readonly string $storeId;
    public readonly string $amount;
    public readonly string $fiat;
}
