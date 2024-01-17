<?php

declare(strict_types=1);

namespace Acp\Result\Callback;

class Callback
{
    public readonly string $url;
    public readonly string $method;

    /** @var string[] */
    public readonly ?array $params;
}
