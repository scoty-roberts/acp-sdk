<?php

declare(strict_types=1);

namespace Acp\Result\User;
use Acp\Result\Base;

class TokenWrapper extends Base
{
    
    public function __construct(
        public readonly Token $data
    ) {}
}
