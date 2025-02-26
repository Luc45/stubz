<?php

namespace Automattic\WooCommerce\Blocks\Domain;

/**
 * Takes care of bootstrapping the plugin.
 *
 * @since 2.5.0
 */
class Bootstrap extends \
{
    /**
     * Holds the Dependency Injection Container
     *
     * @var Container
     */
    private $container = null;

    /**
     * Holds the Package instance
     *
     * @var Package
     */
    private $package = null;

    /**
     * Holds the Migration instance
     *
     * @var Migration
     */
    private $migration = null;

    /**
     * Constructor
     *
     * @param Container $container  The Dependency Injection Container.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Registry\Container $container)
    {
        // stub
    }

    /**
     * Init the package - load the blocks library and define constants.
     */
    protected function init()
    {
        // stub
    }

    /**
     * See if files have been built or not.
     *
     * @return bool
     */
    protected function is_built()
    {
        // stub
    }

    /**
     * Add a notice stating that the build has not been done yet.
     */
    protected function add_build_notice()
    {
        // stub
    }

    /**
     * Load and set up the Interactivity API if enabled.
     */
    protected function load_interactivity_api()
    {
        // stub
    }

    /**
     * Register core dependencies with the container.
     */
    protected function register_dependencies()
    {
        // stub
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
        // stub
    }

    /**
     * Register payment method integrations with the container.
     */
    protected function register_payment_methods()
    {
        // stub
    }

}

