<?php

namespace Automattic\WooCommerce\Blocks\Registry;

/**
 * A definition for the SharedType dependency type.
 *
 * @since 2.5.0
 */
class SharedType extends \Automattic\WooCommerce\Blocks\Registry\AbstractDependencyType
{
    /**
     * Holds a cached instance of the value stored (or returned) internally.
     *
     * @var mixed
     */
    private $shared_instance = null;

    /**
     * Returns the internal stored and shared value after initial generation.
     *
     * @param Container $container An instance of the dependency injection
     *                             container.
     *
     * @return mixed
     */
    public function get(Automattic\WooCommerce\Blocks\Registry\Container $container)
{
}
}