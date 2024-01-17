<?php

declare(strict_types=1);

namespace Acp\Exception;

class ConnectException extends AcpException
{
    public function __construct(string $curlErrorMessage, int $curlErrorCode)
    {
        $message = 'Error during curl connection: ' . $curlErrorMessage;
        parent::__construct($message, $curlErrorCode);
    }
}
