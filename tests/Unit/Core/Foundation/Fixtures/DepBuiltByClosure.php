<?php

namespace PrestaShop\PrestaShop\Tests\Unit\Core\Foundation\Fixtures;

class DepBuiltByClosure
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
