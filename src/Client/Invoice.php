<?php

declare(strict_types=1);

namespace Acp\Client;

use Acp\Dto\InvoiceDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Invoice extends AbstractClient
{
    protected string $endpoint = 'invoice';

    public function createInvoice(InvoiceDto $invoice): \Acp\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $invoice->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Invoice\InvoiceWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function showInvoice(string $invoiceId): \Acp\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint() . $invoiceId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->enableFlexibleCasting()
                ->allowSuperfluousKeys()
                ->mapper()
                ->map(
                    \Acp\Result\Invoice\InvoiceWrapper::class,
                    new JsonSource($response->getBody())
                )
                ->data;
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
