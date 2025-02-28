<?php

namespace Automattic\WooCommerce\Blocks\Domain;

/**
 * Takes care of bootstrapping the plugin.
 *
 * @since 2.5.0
 */
class Bootstrap
{
    /**
     * Constructor
     *
     * @param Container $container  The Dependency Injection Container.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Registry\Container $container)
    {
    }
    /**
     * Init the package - load the blocks library and define constants.
     */
    protected function init()
    {
    }
    /**
     * See if files have been built or not.
     *
     * @return bool
     */
    protected function is_built()
    {
    }
    /**
     * Add a notice stating that the build has not been done yet.
     */
    protected function add_build_notice()
    {
    }
    /**
     * Load and set up the Interactivity API if enabled.
     */
    protected function load_interactivity_api()
    {
    }
    /**
     * Register core dependencies with the container.
     */
    protected function register_dependencies()
    {
    }
    /**
     * Throws a deprecation notice for a dependency without breaking requests.
     *
     * @param string $function Class or function being deprecated.
     * @param string $version Version in which it was deprecated.
     * @param string $replacement Replacement class or function, if applicable.
     * @param string $trigger_error_version Optional version to start surfacing this as a PHP error rather than a log. Defaults to $version.
     */
    protected function deprecated_dependency($function, $version, $replacement = '', $trigger_error_version = '')
    {
    }
    /**
     * Register payment method integrations with the container.
     */
    protected function register_payment_methods()
    {
    }
}