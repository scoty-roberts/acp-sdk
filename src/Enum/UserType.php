<?php

declare(strict_types=1);

namespace Acp\Enums;

use Acp\Traits\EnumToArray;

enum UserType: string
{
    use EnumToArray;

    case ACCOUNT = 'account';
    case FORWARDING = 'forwarding';
}
