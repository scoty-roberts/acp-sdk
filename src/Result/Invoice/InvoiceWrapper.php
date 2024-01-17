<?php

declare(strict_types=1);

namespace Acp\Result\Invoice;
use Acp\Result\Base;

class InvoiceWrapper extends Base
{
    public function __construct(
        public readonly Invoice $data
    ) {}
}
