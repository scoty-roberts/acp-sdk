<?php

declare(strict_types=1);

namespace Acp\Dto;

class TransactionDto extends AbstractDto
{
    /**
     * @param string $coin
     * @param string $address
     * @param string $amount
     * @param bool $subtractFromAmount
     */
    public function __construct(
        public string $coin,
        public string $address,
        public string $amount,
        public bool $subtractFromAmount
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['coin'],
            $data['address'],
            $data['amount'],
            $data['subtractFromAmount']
        );
    }
}
