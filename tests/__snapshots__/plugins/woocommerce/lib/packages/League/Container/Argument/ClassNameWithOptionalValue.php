<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Argument;

class ClassNameWithOptionalValue
{
    /**
     * @var string
     */
    private $className = null;

    /**
     * @var mixed
     */
    private $optionalValue = null;

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