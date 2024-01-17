<?php

declare(strict_types=1);

namespace Acp\Dto;

class WalletDto extends AbstractDto
{
    /**
     * @param string $coin
     * @param string $invoiceExpiration
     * @param string $speedPolicy
     * @param string $recommendedFeeBlockTarget
     * @param string $paymentTolerance
     */
    public function __construct(
        public string $coin,
        public string $invoiceExpiration,
        public string $speedPolicy,
        public string $recommendedFeeBlockTarget,
        public string $paymentTolerance
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['coin'],
            $data['invoiceExpiration'],
            $data['speedPolicy'],
            $data['recommendedFeeBlockTarget'],
            $data['paymentTolerance'],
        );
    }
}
