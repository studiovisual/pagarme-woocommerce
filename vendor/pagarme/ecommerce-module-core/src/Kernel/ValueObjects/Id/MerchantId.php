<?php

namespace Pagarme\Core\Kernel\ValueObjects\Id;

use Pagarme\Core\Kernel\ValueObjects\AbstractValidString;

class MerchantId extends AbstractValidString
{
    protected function validateValue($value)
    {
        return preg_match('/^merch_\w{16}$/', $value ?? '') === 1;
    }
}