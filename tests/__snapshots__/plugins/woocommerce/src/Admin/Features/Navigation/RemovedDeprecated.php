<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Handle calls to deprecated methods.
 */
class RemovedDeprecated extends \
{
    /**
     * Handle deprecated method calls.
     *
     * @param string $name The name of the deprecated method.
     */
    private static function handle_deprecated_method_call($name)
    {
        // stub
    }

    /**
     * Handle calls to deprecated methods.
     *
     * @param string $name The name of the deprecated method.
     * @param array  $arguments The arguments passed to the deprecated method.
     */
    public function __call($name, $arguments)
    {
        // stub
    }

    /**
     * Handle static calls to deprecated methods.
     *
     * @param string $name The name of the deprecated method.
     * @param array  $arguments The arguments passed to the deprecated method.
     */
    public static function __callStatic($name, $arguments)
    {
        // stub
    }

}

