<?php

declare(strict_types=1);

namespace Acp\Result\Transaction;

class Transaction
{
    public readonly string $id;
    public readonly string $status;
    public readonly string $transactionHash;
    public readonly string $confirmations;
    public readonly string $timestamp;
    public readonly string $amount;
}
