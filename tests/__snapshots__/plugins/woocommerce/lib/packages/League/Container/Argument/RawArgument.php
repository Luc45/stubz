<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Argument;

class RawArgument implements \Automattic\WooCommerce\Vendor\League\Container\Argument\RawArgumentInterface
{
    /**
     * @var mixed
     */
    protected $value = null;
    /**
     * Construct.
     *
     * @param mixed $value
     */
    public function __construct($value)
{
}
    /**
     * {@inheritdoc}
     */
    public function getValue()
{
}
}