<?php

declare(strict_types=1);

namespace Acp\Result\Account;
use Acp\Result\Base;

class AccountWrapper extends Base
{
    public function __construct(
        public readonly Account $data
    ) {}
}
