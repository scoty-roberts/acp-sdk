<?php

declare(strict_types=1);

namespace Acp\Client;

use Acp\Dto\TransactionDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Transaction extends AbstractClient
{
    protected string $endpoint = 'transaction';

    public function createTransaction(TransactionDto $transaction): \Acp\Result\Transaction\Transaction
    {
        $url = $this->getEndpoint() . $transaction->coin;
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $transaction->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Transaction\TransactionWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
