<?php

declare(strict_types=1);

namespace Acp\Result\Transaction;
use Acp\Result\Base;

class TransactionWrapper extends Base
{
    public function __construct(
        public readonly Transaction $data
    ) {}
}
