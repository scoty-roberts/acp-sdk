<?php

declare(strict_types=1);

namespace Acp\Client;

class Currency extends AbstractClient
{
    protected string $endpoint = 'currency';

    public function getCoinCurrency(string $coin, string $amount): string
    {
        $url = $this->getEndpoint() . '/coin/' . $coin . '/' . $amount;
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getFiatCurrency(string $coin, string $amount): string
    {
        $url = $this->getEndpoint() . '/fiat/' . $coin . '/' . $amount;
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
