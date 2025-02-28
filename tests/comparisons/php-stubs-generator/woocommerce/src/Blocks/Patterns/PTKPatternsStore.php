<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * PTKPatterns class.
 *
 * @internal
 */
class PTKPatternsStore
{
    const TRANSIENT_NAME = 'ptk_patterns';
    const CATEGORY_MAPPING = array('testimonials' => 'reviews');
    /**
     * Constructor for the class.
     *
     * @param PTKClient $ptk_client An instance of PatternsToolkit.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Patterns\PTKClient $ptk_client)
    {
    }
    /**
     * Resets the cached patterns when the `woocommerce_allow_tracking` option is disabled.
     * Resets and fetch the patterns from the PTK when it is enabled (if the scheduler
     * is initialized, it's done asynchronously via a scheduled action).
     *
     * @return void
     */
    public function flush_or_fetch_patterns()
    {
    }
    /**
     * Get the patterns from the Patterns Toolkit cache.
     *
     * @return array
     */
    public function get_patterns()
    {
    }
    /**
     * Re-fetch the patterns when the WooCommerce plugin is updated.
     *
     * @param WP_Upgrader $upgrader_object WP_Upgrader instance.
     * @param array       $options Array of bulk item update data.
     *
     * @return void
     */
    public function fetch_patterns_on_plugin_update($upgrader_object, $options)
    {
    }
    /**
     * Reset the cached patterns to fetch them again from the PTK.
     *
     * @return void
     */
    public function flush_cached_patterns()
    {
    }
    /**
     * Reset the cached patterns and fetch them again from the PTK API.
     *
     * @return void
     */
    public function fetch_patterns()
    {
    }
}