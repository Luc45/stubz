<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

/**
 * Default Free Extensions
 */
class DefaultFreeExtensions
{
    /**
     * Get default specs.
     *
     * @return array Default specs.
     */
    public static function get_all()
    {
    }
    /**
     * Get the plugin arguments by slug.
     *
     * @param string $slug Slug.
     * @return array
     */
    public static function get_plugin($slug)
    {
    }
    /**
     * Decorate plugin data with core profiler fields.
     *
     * - Updated description for the core-profiler.
     * - Adds learn_more_link and label.
     * - Adds install_priority, which is used to sort the plugins. The value is determined by the plugin size. Lower = smaller.
     *
     * @param array $plugins Array of plugins.
     *
     * @return array
     */
    public static function with_core_profiler_fields(array $plugins)
    {
    }
}
