<?php

declare(strict_types=1);

namespace Acp\Client;

use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Account extends AbstractClient
{
    protected string $endpoint = 'account';

    public function deleteAccount(): bool
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $body = json_encode(
            [],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return true;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function showAccount(): \Acp\Result\Account\Account
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Account\AccountWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
