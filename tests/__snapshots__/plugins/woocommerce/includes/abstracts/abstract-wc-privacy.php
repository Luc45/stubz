<?php

/**
 * Abstract class that is intended to be extended by
 * specific privacy class. It handles the display
 * of the privacy message of the privacy id to the admin,
 * privacy data to be exported and privacy data to be deleted.
 *
 * @version  3.4.0
 * @package  WooCommerce\Abstracts
 */
abstract class WC_Abstract_Privacy
{
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is a list of exporters.
     *
     * @var array
     */
    protected $exporters = array (
);

    /**
     * This is a list of erasers.
     *
     * @var array
     */
    protected $erasers = array (
);

    /**
     * This is a priority for the wp_privacy_personal_data_exporters filter
     *
     * @var int
     */
    protected $export_priority = null;

    /**
     * This is a priority for the wp_privacy_personal_data_erasers filter
     *
     * @var int
     */
    protected $erase_priority = null;

    /**
     * WC_Abstract_Privacy Constructor.
     *
     * @param string $name            Plugin identifier.
     * @param int    $export_priority Export priority.
     * @param int    $erase_priority  Erase priority.
     */
    public function __construct($name = '', $export_priority = 5, $erase_priority = 10)
    {
        // stub
    }

    /**
     * Hook in events.
     */
    protected function init()
    {
        // stub
    }

    /**
     * Adds the privacy message on WC privacy page.
     */
    public function add_privacy_message()
    {
        // stub
    }

    /**
     * Gets the message of the privacy to display.
     * To be overloaded by the implementor.
     *
     * @return string
     */
    public function get_privacy_message()
    {
        // stub
    }

    /**
     * Integrate this exporter implementation within the WordPress core exporters.
     *
     * @param array $exporters List of exporter callbacks.
     * @return array
     */
    public function register_exporters($exporters = array (
))
    {
        // stub
    }

    /**
     * Integrate this eraser implementation within the WordPress core erasers.
     *
     * @param array $erasers List of eraser callbacks.
     * @return array
     */
    public function register_erasers($erasers = array (
))
    {
        // stub
    }

    /**
     * Add exporter to list of exporters.
     *
     * @param string       $id       ID of the Exporter.
     * @param string       $name     Exporter name.
     * @param string|array $callback Exporter callback.
     *
     * @return array
     */
    public function add_exporter($id, $name, $callback)
    {
        // stub
    }

    /**
     * Add eraser to list of erasers.
     *
     * @param string       $id       ID of the Eraser.
     * @param string       $name     Exporter name.
     * @param string|array $callback Exporter callback.
     *
     * @return array
     */
    public function add_eraser($id, $name, $callback)
    {
        // stub
    }

}
