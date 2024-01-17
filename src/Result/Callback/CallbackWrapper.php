<?php

declare(strict_types=1);

namespace Acp\Result\Callback;
use Acp\Result\Base;

class CallbackWrapper extends Base
{
    public function __construct(
        public readonly Callback $data
    ) {}
}
