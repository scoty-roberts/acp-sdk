<?php

declare(strict_types=1);

namespace Acp\Client;

use Acp\Dto\CallbackDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Callback extends AbstractClient
{
    protected string $endpoint = 'callback';

    public function createCallback(CallbackDto $callback): \Acp\Result\Callback\Callback
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $callback->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Callback\CallbackWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateCallback(CallbackDto $callback): \Acp\Result\Callback\Callback
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'PUT';

        $body = json_encode(
            $callback->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Callback\CallbackWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteCallback(): bool
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $body = json_encode(
            [],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 204) {
            return true;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function showCallback(): \Acp\Result\Callback\Callback
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
                    \Acp\Result\Callback\CallbackWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function showCallbackLogs(): \Acp\Result\Callback\CallbackLog
    {
        $url = $this->getEndpoint() . '/logs';
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Callback\CallbackLogWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
