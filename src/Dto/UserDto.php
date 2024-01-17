<?php

declare(strict_types=1);

namespace Acp\Dto;

class UserDto extends AbstractDto
{
    /**
     * @param string $account
     * @param string $password
     * @param string $type
     */
    public function __construct(
        public string $account,
        public string $password,
        public string $type
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['account'],
            $data['password'],
            $data['type']
        );
    }
}
