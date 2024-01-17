<?php

declare(strict_types=1);

namespace Acp\Result\Callback;

class CallbackLog
{
    public readonly string $id;
    public readonly string $url;
    public readonly string $method;
    public readonly array $request;
    public readonly array $headers;
    public readonly string $statusCode;
    public readonly string $response;
    public readonly string $createdAt;
}
