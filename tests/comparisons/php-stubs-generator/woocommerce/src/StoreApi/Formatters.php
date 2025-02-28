<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * Formatters class.
 *
 * Allows formatter classes to be registered. Formatters are exposed to extensions via the ExtendSchema class.
 */
class Formatters
{
    /**
     * Get a new instance of a formatter class.
     *
     * @throws Exception An Exception is thrown if a non-existing formatter is used and the user is admin.
     *
     * @param string $name Name of the formatter.
     * @return FormatterInterface Formatter class instance.
     */
    public function __get($name)
    {
    }
    /**
     * Register a formatter class for usage.
     *
     * @param string $name Name of the formatter.
     * @param string $class A formatter class name.
     */
    public function register($name, $class)
    {
    }
}