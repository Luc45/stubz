<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class to integrate Blocks with the Google Analytics extension,
 */
class GoogleAnalytics
{
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api = null;

    /**
     * Constructor.
     *
     * @param AssetApi $asset_api Instance of the asset API.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
        // stub
    }

    /**
     * Hook into WP.
     */
    public function init()
    {
        // stub
    }

    /**
     * Register scripts.
     */
    public function register_assets()
    {
        // stub
    }

    /**
     * Enqueue the Google Tag Manager script if prerequisites are met.
     */
    public function enqueue_scripts()
    {
        // stub
    }

    /**
     * Get settings from the GA integration extension.
     *
     * @return array
     */
    private function get_google_analytics_settings()
    {
        // stub
    }

    /**
     * Add async to script tags with defined handles.
     *
     * @param string $tag HTML for the script tag.
     * @param string $handle Handle of script.
     * @param string $src Src of script.
     * @return string
     */
    public function async_script_loader_tags($tag, $handle, $src)
    {
        // stub
    }

}