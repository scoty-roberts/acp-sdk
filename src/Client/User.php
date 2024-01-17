<?php

declare(strict_types=1);

namespace Acp\Client;

use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class User extends AbstractClient
{
    protected string $endpoint = 'users';

    public function createUser(string $userType): \Acp\Result\User\User
    {
        $url = $this->getApiUrl() . 'register';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                'type' => $userType
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\User\UserWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function login(string $userAccount, string $password): \Acp\Result\User\Token
    {
        $url = $this->getApiUrl() . 'login';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                'account' => $userAccount,
                'password' => $password,
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\User\TokenWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function logout(): bool
    {
        $url = $this->getApiUrl() . 'logout';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

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

    public function refreshToken(): \Acp\Result\User\Token
    {
        $url = $this->getApiUrl() . 'refresh';
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\User\TokenWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
