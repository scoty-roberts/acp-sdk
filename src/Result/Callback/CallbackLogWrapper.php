<?php

declare(strict_types=1);

namespace Acp\Result\Callback;
use Acp\Result\Base;

class CallbackLogWrapper extends Base
{
    public function __construct(
        public readonly CallbackLog $data
    ) {}
}
