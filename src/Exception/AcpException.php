<?php

declare(strict_types=1);

namespace Acp\Exception;

class AcpException extends \RuntimeException
{
    public function __construct(string $message, int $code, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
