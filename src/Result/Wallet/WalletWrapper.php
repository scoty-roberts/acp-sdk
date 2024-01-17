<?php

declare(strict_types=1);

namespace Acp\Result\Wallet;
use Acp\Result\Base;

class WalletWrapper extends Base
{
    public function __construct(
        public readonly Wallet $data
    ) {}
}
