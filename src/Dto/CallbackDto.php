<?php

declare(strict_types=1);

namespace Acp\Dto;

class CallbackDto extends AbstractDto
{
    /**
     * @param string $url
     * @param string $method
     * @param array $params
     */
    public function __construct(
        public string $url,
        public string $method,
        public array $params
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['url'],
            $data['method'],
            $data['params']
        );
    }
}
