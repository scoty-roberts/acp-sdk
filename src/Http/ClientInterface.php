<?php

declare(strict_types=1);

namespace Acp\Http;

use Acp\Exception\ConnectException;
use Acp\Exception\RequestException;

interface ClientInterface
{
    /**
     * Sends the HTTP request to API server.
     *
     * @param  string  $method
     * @param  string  $url
     * @param  array  $headers
     * @param  string|array  $body
     *
     * @return ResponseInterface
     * @throws ConnectException
     * @throws RequestException
     */
    public function request(string $method, string $url, array $headers = [], string|array $body = ''): ResponseInterface;
}
