<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Argument;

class ClassName implements \Automattic\WooCommerce\Vendor\League\Container\Argument\ClassNameInterface
{
    /**
     * @var string
     */
    protected $value;
    /**
     * Construct.
     *
     * @param string $value
     */
    public function __construct(string $value)
{
}
    /**
     * {@inheritdoc}
     */
    public function getClassName(): string
{
}
}