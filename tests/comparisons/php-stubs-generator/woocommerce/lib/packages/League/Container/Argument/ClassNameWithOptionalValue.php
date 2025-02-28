<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Argument;

class ClassNameWithOptionalValue implements \Automattic\WooCommerce\Vendor\League\Container\Argument\ClassNameInterface
{
    /**
     * @param string $className
     * @param mixed $optionalValue
     */
    public function __construct(string $className, $optionalValue)
    {
    }
    /**
     * @inheritDoc
     */
    public function getClassName(): string
    {
    }
    public function getOptionalValue()
    {
    }
}
