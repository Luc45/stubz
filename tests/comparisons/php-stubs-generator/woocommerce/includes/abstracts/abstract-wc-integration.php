<?php

/**
 * Abstract Integration Class
 *
 * Extended by individual integrations to offer additional functionality.
 *
 * @class    WC_Integration
 * @extends  WC_Settings_API
 * @version  2.6.0
 * @package  WooCommerce\Abstracts
 */
abstract class WC_Integration extends \WC_Settings_API
{
    /**
     * Yes or no based on whether the integration is enabled.
     *
     * @var string
     */
    public $enabled = 'yes';
    /**
     * Integration title.
     *
     * @var string
     */
    public $method_title = '';
    /**
     * Integration description.
     *
     * @var string
     */
    public $method_description = '';
    /**
     * Return the title for admin screens.
     *
     * @return string
     */
    public function get_method_title()
    {
    }
    /**
     * Return the description for admin screens.
     *
     * @return string
     */
    public function get_method_description()
    {
    }
    /**
     * Output the gateway settings screen.
     */
    public function admin_options()
    {
    }
    /**
     * Init settings for gateways.
     */
    public function init_settings()
    {
    }
}
