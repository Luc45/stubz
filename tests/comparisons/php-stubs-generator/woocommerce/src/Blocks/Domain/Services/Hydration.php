<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class that handles hydration of API data for blocks.
 */
class Hydration
{
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry;
    /**
     * Cached notices to restore after hydrating the API.
     *
     * @var array
     */
    protected $cached_store_notices = array();
    /**
     * Constructor.
     *
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
    }
    /**
     * Hydrates the asset data registry with data from the API. Disables notices and nonces so requests contain valid
     * data that is not polluted by the current session.
     *
     * @param array $path API paths to hydrate e.g. '/wc/store/v1/cart'.
     * @return array Response data.
     */
    public function get_rest_api_response_data($path = '')
    {
    }
    /**
     * Disable the nonce check temporarily.
     */
    protected function disable_nonce_check()
    {
    }
    /**
     * Callback to disable the nonce check. While we could use `__return_true`, we use a custom named callback so that
     * we can remove it later without affecting other filters.
     */
    public function disable_nonce_check_callback()
    {
    }
    /**
     * Restore the nonce check.
     */
    protected function restore_nonce_check()
    {
    }
    /**
     * Cache notices before hydrating the API if the customer has a session.
     */
    protected function cache_store_notices()
    {
    }
    /**
     * Restore notices into current session from cache.
     */
    protected function restore_cached_store_notices()
    {
    }
}
