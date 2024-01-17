<?php

declare(strict_types=1);

namespace Acp\Client;

use Acp\Dto\WalletDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Wallet extends AbstractClient
{
    protected string $endpoint = 'wallet';

    public function createWallet(WalletDto $wallet): bool
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $wallet->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return true;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateWallet(WalletDto $wallet): bool
    {
        $url = $this->getEndpoint() . '/' . $wallet->coin;
        $headers = $this->getRequestHeaders();
        $method = 'PUT';

        $body = json_encode(
            $wallet->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return true;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function showWallet(string $coin): \Acp\Result\Wallet\Wallet
    {
        $url = $this->getEndpoint() . '/' . $coin;
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Wallet\WalletWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
