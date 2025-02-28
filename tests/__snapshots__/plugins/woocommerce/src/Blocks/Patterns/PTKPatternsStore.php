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

    const CATEGORY_MAPPING = array (
  'testimonials' => 'reviews',
);

    /**
     * PatternsToolkit instance.
     *
     * @var PTKClient $ptk_client
     */
    private Automattic\WooCommerce\Blocks\Patterns\PTKClient $ptk_client;

    /**
     * Constructor for the class.
     *
     * @param PTKClient $ptk_client An instance of PatternsToolkit.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Patterns\PTKClient $ptk_client)
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
     * Schedule an async action to fetch the PTK patterns when the scheduler is initialized.
     *
     * @return void
     */
    private function schedule_fetch_patterns()
{
}
    /**
     * Schedule an action if it's not already pending.
     *
     * @param string $action The action name to schedule.
     * @return void
     */
    private function schedule_action_if_not_pending($action)
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
     * Filter the patterns that have external dependencies.
     *
     * @param array $patterns The patterns to filter.
     * @return array
     */
    private function filter_patterns(array $patterns)
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
    /**
     * Check if the user allowed tracking.
     *
     * @return bool
     */
    private function allowed_tracking_is_enabled(): bool
{
}
    /**
     * Change the categories of the patterns to match the ones used in the CYS flow
     *
     * @param array $patterns The patterns to map categories for.
     * @return array The patterns with the categories mapped.
     */
    private function map_categories(array $patterns)
{
}
    /**
     * Check if the pattern has external dependencies.
     *
     * @param array $pattern The pattern to check.
     *
     * @return bool
     */
    private function has_external_dependencies($pattern)
{
}
}