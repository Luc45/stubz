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
        // stub
    }

    /**
     * @inheritDoc
     */
    public function getClassName(): string
    {
        // stub
    }

    public function getOptionalValue()
    {
        // stub
    }

}

