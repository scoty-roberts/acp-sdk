<?php

declare(strict_types=1);

namespace Acp\Dto;

class InvoiceDto extends AbstractDto
{
    /**
     * @param string $account
     * @param string $currency
     * @param string $coin
     * @param string $address
     * @param string $amount
     * @param string $orderId
     * @param array $metadata
     */
    public function __construct(
        public string $account,
        public string $currency,
        public string $coin,
        public string $address,
        public string $amount,
        public string $orderId,
        public array $metadata
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['account'],
            $data['currency'],
            $data['coin'],
            $data['address'],
            $data['amount'],
            $data['orderId'],
            $data['metadata']
        );
    }
}
