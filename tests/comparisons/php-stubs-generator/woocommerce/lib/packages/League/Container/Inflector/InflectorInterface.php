<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

interface InflectorInterface
{
    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string;
    /**
     * Defines a method to be invoked on the subject object.
     *
     * @param string $name
     * @param array  $args
     *
     * @return self
     */
    public function invokeMethod(string $name, array $args): \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface;
    /**
     * Defines multiple methods to be invoked on the subject object.
     *
     * @param array $methods
     *
     * @return self
     */
    public function invokeMethods(array $methods): \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface;
    /**
     * Defines a property to be set on the subject object.
     *
     * @param string $property
     * @param mixed  $value
     *
     * @return self
     */
    public function setProperty(string $property, $value): \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface;
    /**
     * Defines multiple properties to be set on the subject object.
     *
     * @param array $properties
     *
     * @return self
     */
    public function setProperties(array $properties): \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface;
    /**
     * Apply inflections to an object.
     *
     * @param object $object
     *
     * @return void
     */
    public function inflect($object);
}
