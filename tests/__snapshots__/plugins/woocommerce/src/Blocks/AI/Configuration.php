<?php

namespace Automattic\WooCommerce\Blocks\AI;

/**
 * Class Configuration
 *
 * @internal
 */
class Configuration
{
    /**
     * The name of the option that stores the site owner's consent to connect to the AI API.
     *
     * @var string
     */
    private $consent_option_name = 'woocommerce_blocks_allow_ai_connection';
    /**
     * The Jetpack connection manager.
     *
     * @var Manager
     */
    private $manager = null;
    /**
     * The Jetpack configuration.
     *
     * @var Config
     */
    private $config = null;
    /**
     * Configuration constructor.
     */
    public function __construct()
{
}
    /**
     * Initialize the site and user connection and registration.
     *
     * @return bool|\WP_Error
     */
    public function init()
{
}
    /**
     * Verify if the site should connect to Jetpack.
     *
     * @return bool
     */
    private function should_connect()
{
}
    /**
     * Initialize Jetpack's connection feature within the WooCommerce Blocks plugin.
     *
     * @return void
     */
    private function enable_connection_feature()
{
}
    /**
     * Register the site with Jetpack.
     *
     * @return bool|\WP_Error
     */
    private function register_and_connect()
{
}
    /**
     * Unregister the site with Jetpack.
     *
     * @return void
     */
    private function unregister_site()
{
}
}