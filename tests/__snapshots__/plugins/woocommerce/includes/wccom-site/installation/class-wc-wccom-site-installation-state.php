<?php

namespace ;

/**
 * WC_WCCOM_Site_Installation_State class
 */
class WC_WCCOM_Site_Installation_State
{
    const STEP_STATUS_IN_PROGRESS = 'in-progress';

    const STEP_STATUS_FAILED = 'failed';

    const STEP_STATUS_COMPLETED = 'completed';

    /**
     * The product ID.
     *
     * @var string
     */
    protected $product_id = null;

    /**
     * The idempotency key.
     *
     * @var string
     */
    protected $idempotency_key = null;

    /**
     * The last step name.
     *
     * @var string
     */
    protected $last_step_name = null;

    /**
     * The last step status.
     *
     * @var string
     */
    protected $last_step_status = null;

    /**
     * The last step error.
     *
     * @var string
     */
    protected $last_step_error = null;

    /**
     * The product type.
     *
     * @var string
     */
    protected $product_type = null;

    /**
     * The product name.
     *
     * @var string
     */
    protected $product_name = null;

    /**
     * The product slug.
     *
     * @var string
     */
    protected $download_url = null;

    /**
     * The path to the downloaded file.
     *
     * @var string
     */
    protected $download_path = null;

    /**
     * The path to the unpacked file.
     *
     * @var string
     */
    protected $unpacked_path = null;

    /**
     * The path to the installed file.
     *
     * @var string
     */
    protected $installed_path = null;

    /**
     * The plugin info for the already installed plugin.
     *
     * @var array
     */
    protected $already_installed_plugin_info = null;

    /**
     * The timestamp of the installation start.
     *
     * @var int
     */
    protected $started_date = null;

    /**
     * Constructor.
     *
     * @param string $product_id The product ID.
     */
    protected function __construct($product_id)
    {
        // stub
    }

    /**
     * Initiate an existing installation state.
     *
     * @param int    $product_id The product ID.
     * @param string $idempotency_key The idempotency key.
     * @param string $last_step_name The last step name.
     * @param string $last_step_status The last step status.
     * @param string $last_step_error The last step error.
     * @param int    $started_date The timestamp of the installation start.
     * @return WC_WCCOM_Site_Installation_State The instance.
     */
    public static function initiate_existing($product_id, $idempotency_key, $last_step_name, $last_step_status, $last_step_error, $started_date)
    {
        // stub
    }

    /**
     * Initiate a new installation state.
     *
     * @param init   $product_id The product ID.
     * @param string $idempotency_key The idempotency key.
     * @return WC_WCCOM_Site_Installation_State The instance.
     */
    public static function initiate_new($product_id, $idempotency_key)
    {
        // stub
    }

    /**
     * Get the product ID.
     *
     * @return string
     */
    public function get_product_id()
    {
        // stub
    }

    /**
     * Get the idempotency key.
     *
     * @return string
     */
    public function get_idempotency_key()
    {
        // stub
    }

    /**
     * Get the timestamp of the installation start.
     *
     * @return int
     */
    public function get_last_step_name()
    {
        // stub
    }

    /**
     * Get the last step status.
     *
     * @return string
     */
    public function get_last_step_status()
    {
        // stub
    }

    /**
     * Get the last step error.
     *
     * @return int
     */
    public function get_last_step_error()
    {
        // stub
    }

    /**
     * Initiate a step.
     *
     * @param string $step_name Step name.
     * @return void
     */
    public function initiate_step($step_name)
    {
        // stub
    }

    /**
     * Capture a successful installation of a step.
     *
     * @param string $step_name The step name.
     */
    public function complete_step($step_name)
    {
        // stub
    }

    /**
     * Capture an installation failure.
     *
     * @param string $step_name  The step name.
     * @param string $error_code The error code.
     */
    public function capture_failure($step_name, $error_code)
    {
        // stub
    }

    /**
     * Get the product type.
     *
     * @return string
     */
    public function get_product_type()
    {
        // stub
    }

    /**
     * Set the product type.
     *
     * @param string $product_type The product type.
     */
    public function set_product_type($product_type)
    {
        // stub
    }

    /**
     * Get the product name.
     *
     * @return string
     */
    public function get_product_name()
    {
        // stub
    }

    /**
     * Set the product name.
     *
     * @param string $product_name The product name.
     */
    public function set_product_name($product_name)
    {
        // stub
    }

    /**
     * Get the download URL.
     *
     * @return string
     */
    public function get_download_url()
    {
        // stub
    }

    /**
     * Set the download URL.
     *
     * @param string $download_url The download URL.
     */
    public function set_download_url($download_url)
    {
        // stub
    }

    /**
     * Get the path to the downloaded file.
     *
     * @return string
     */
    public function get_download_path()
    {
        // stub
    }

    /**
     * Set the path to the downloaded file.
     *
     * @param string $download_path The path to the downloaded file.
     */
    public function set_download_path($download_path)
    {
        // stub
    }

    /**
     * Get the path to the unpacked file.
     *
     * @return string
     */
    public function get_unpacked_path()
    {
        // stub
    }

    /**
     * Set the path to the unpacked file.
     *
     * @param string $unpacked_path The path to the unpacked file.
     */
    public function set_unpacked_path($unpacked_path)
    {
        // stub
    }

    /**
     * Get the path to the installed file.
     *
     * @return string
     */
    public function get_installed_path()
    {
        // stub
    }

    /**
     * Set the path to the installed file.
     *
     * @param string $installed_path The path to the installed file.
     */
    public function set_installed_path($installed_path)
    {
        // stub
    }

    /**
     * Get the plugin info for the already installed plugin.
     *
     * @return array
     */
    public function get_already_installed_plugin_info()
    {
        // stub
    }

    /**
     * Set the plugin info for the already installed plugin.
     *
     * @param array $plugin_info The plugin info.
     */
    public function set_already_installed_plugin_info($plugin_info)
    {
        // stub
    }

    /**
     * Get the timestamp of the installation start.
     *
     * @return int
     */
    public function get_started_date()
    {
        // stub
    }

}

