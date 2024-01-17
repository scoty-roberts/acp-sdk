<?php

declare(strict_types=1);

namespace Acp\Result;

class Base
{
    public function __construct(
        public readonly string $status,
        public readonly int $timestamp
    ) {}
}
