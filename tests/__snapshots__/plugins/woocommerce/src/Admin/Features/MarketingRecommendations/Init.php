<?php

namespace Automattic\WooCommerce\Admin\Features\MarketingRecommendations;

/**
 * Marketing Recommendations engine.
 * This goes through the specs and gets marketing recommendations.
 */
class Init
{
    const MARKETING_EXTENSION_CATEGORY_SLUG = 'marketing';

    const MARKETING_CHANNEL_SUBCATEGORY_SLUG = 'sales-channels';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
        // stub
    }

    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
        // stub
    }

    /**
     * Get misc recommendations specs or fetch remotely if they don't exist.
     *
     * @since 9.5.0
     */
    public static function get_misc_recommendations_specs()
    {
        // stub
    }

    /**
     * Process specs.
     *
     * @param array|null $specs Marketing recommendations spec array.
     * @return array
     */
    protected static function evaluate_specs(array|null $specs = null)
    {
        // stub
    }

    /**
     * Load recommended plugins from WooCommerce.com
     *
     * @return array
     */
    public static function get_recommended_plugins(): array
    {
        // stub
    }

    /**
     * Return only the recommended marketing channels from WooCommerce.com.
     *
     * @return array
     */
    public static function get_recommended_marketing_channels(): array
    {
        // stub
    }

    /**
     * Return all recommended marketing extensions EXCEPT the marketing channels from WooCommerce.com.
     *
     * @return array
     */
    public static function get_recommended_marketing_extensions_excluding_channels(): array
    {
        // stub
    }

    /**
     * Load misc recommendations from WooCommerce.com
     *
     * @since 9.5.0
     * @return array
     */
    public static function get_misc_recommendations(): array
    {
        // stub
    }

    /**
     * Returns whether a plugin is a marketing extension.
     *
     * @param array $plugin_data The plugin properties returned by the API.
     *
     * @return bool
     */
    protected static function is_marketing_plugin(array $plugin_data): bool
    {
        // stub
    }

    /**
     * Returns whether a plugin is a marketing channel.
     *
     * @param array $plugin_data The plugin properties returned by the API.
     *
     * @return bool
     */
    protected static function is_marketing_channel_plugin(array $plugin_data): bool
    {
        // stub
    }

    /**
     * Convert an object to an array.
     * This is used to convert the specs to an array so that they can be returned by the API.
     *
     * @param mixed $obj Object to convert.
     * @param array &$visited Reference to an array keeping track of all seen objects to detect circular references.
     * @return array
     */
    public static function object_to_array($obj, &$visited = array (
))
    {
        // stub
    }

}

