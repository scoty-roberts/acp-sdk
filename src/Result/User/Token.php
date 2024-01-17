<?php

declare(strict_types=1);

namespace Acp\Result\User;

class Token
{
    public function __construct(
        public readonly string $accessToken,
        public readonly string $tokenType,
        public readonly string $expiresIn
    ) {}
}
