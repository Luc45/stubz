<?php

namespace Automattic\WooCommerce\Blocks\Assets;

/**
 * Class instance for registering data used on the current view session by
 * assets.
 *
 * Holds data registered for output on the current view session when
 * `wc-settings` is enqueued( directly or via dependency )
 *
 * @since 2.5.0
 */
class AssetDataRegistry
{
    /**
     * Contains registered data.
     *
     * @var array
     */
    private $data = array();

    /**
     * Contains preloaded API data.
     *
     * @var array
     */
    private $preloaded_api_requests = array();

    /**
     * Lazy data is an array of closures that will be invoked just before
     * asset data is generated for the enqueued script.
     *
     * @var array
     */
    private $lazy_data = array();

    /**
     * Asset handle for registered data.
     *
     * @var string
     */
    private $handle = 'wc-settings';

    /**
     * Asset API interface for various asset registration.
     *
     * @var API
     */
    private $api = null;

    /**
     * Constructor
     *
     * @param Api $asset_api  Asset API interface for various asset registration.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
{
}
    /**
     * Hook into WP asset registration for enqueueing asset data.
     */
    protected function init()
{
}
    /**
     * Exposes core data via the wcSettings global. This data is shared throughout the client.
     *
     * Settings that are used by various components or multiple blocks should be added here. Note, that settings here are
     * global so be sure not to add anything heavy if possible.
     *
     * @return array  An array containing core data.
     */
    protected function get_core_data()
{
}
    /**
     * Get currency data to include in settings.
     *
     * @return array
     */
    protected function get_currency_data()
{
}
    /**
     * Get locale data to include in settings.
     *
     * @return array
     */
    protected function get_locale_data()
{
}
    /**
     * Get store pages to include in settings.
     *
     * @return array
     */
    protected function get_store_pages()
{
}
    /**
     * Get product related settings.
     *
     * Note: For the time being we are exposing only the settings that are used by blocks.
     *
     * @return array
     */
    protected function get_products_settings()
{
}
    /**
     * Format a page object into a standard array of data.
     *
     * @param WP_Post|int $page Page object or ID.
     * @return array
     */
    protected function format_page_resource($page)
{
}
    /**
     * Returns block-related data for enqueued wc-settings script.
     * Format order statuses by removing a leading 'wc-' if present.
     *
     * @return array formatted statuses.
     */
    protected function get_order_statuses()
{
}
    /**
     * Used for on demand initialization of asset data and registering it with
     * the internal data registry.
     *
     * Note: core data will overwrite any externally registered data via the api.
     */
    protected function initialize_core_data()
{
}
    /**
     * Loops through each registered lazy data callback and adds the returned
     * value to the data array.
     *
     * This method is executed right before preparing the data for printing to
     * the rendered screen.
     *
     * @return void
     */
    protected function execute_lazy_data()
{
}
    /**
     * Exposes private registered data to child classes.
     *
     * @return array  The registered data on the private data property
     */
    protected function get()
{
}
    /**
     * Allows checking whether a key exists.
     *
     * @param string $key  The key to check if exists.
     * @return bool  Whether the key exists in the current data registry.
     */
    public function exists($key)
{
}
    /**
     * Interface for adding data to the registry.
     *
     * You can only register data that is not already in the registry identified by the given key. If there is a
     * duplicate found, unless $ignore_duplicates is true, an exception will be thrown.
     *
     * @param string  $key              The key used to reference the data being registered. This should use camelCase.
     * @param mixed   $data             If not a function, registered to the registry as is. If a function, then the
     *                                  callback is invoked right before output to the screen.
     * @param boolean $check_key_exists Deprecated. If set to true, duplicate data will be ignored if the key exists.
     *                                  If false, duplicate data will cause an exception.
     */
    public function add($key, $data, $check_key_exists = false)
{
}
    /**
     * Hydrate from the API.
     *
     * @param string $path REST API path to preload.
     */
    public function hydrate_api_request($path)
{
}
    /**
     * Hydrate some data from the API.
     *
     * @param string  $key  The key used to reference the data being registered.
     * @param string  $path REST API path to preload.
     * @param boolean $check_key_exists If set to true, duplicate data will be ignored if the key exists.
     *                                  If false, duplicate data will cause an exception.
     *
     * @throws InvalidArgumentException  Only throws when site is in debug mode. Always logs the error.
     */
    public function hydrate_data_from_api_request($key, $path, $check_key_exists = false)
{
}
    /**
     * Adds a page permalink to the data registry.
     *
     * @param integer $page_id Page ID to add to the registry.
     */
    public function register_page_id($page_id)
{
}
    /**
     * Callback for registering the data script via WordPress API.
     *
     * @return void
     */
    public function register_data_script()
{
}
    /**
     * Callback for enqueuing asset data via the WP api.
     *
     * Note: while this is hooked into print/admin_print_scripts, it still only
     * happens if the script attached to `wc-settings` handle is enqueued. This
     * is done to allow for any potentially expensive data generation to only
     * happen for routes that need it.
     */
    public function enqueue_asset_data()
{
}
    /**
     * See self::add() for docs.
     *
     * @param   string $key   Key for the data.
     * @param   mixed  $data  Value for the data.
     */
    protected function add_data($key, $data)
{
}
    /**
     * Exposes whether the current site is in debug mode or not.
     *
     * @return boolean  True means the site is in debug mode.
     */
    protected function debug()
{
}
}