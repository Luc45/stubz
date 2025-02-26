<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * AIPatterns class.
 *
 * @internal
 */
class AIPatterns
{
    const PATTERNS_AI_DATA_POST_TYPE = 'patterns_ai_data';

    /**
     * Constructor for the class.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register the Patterns AI Data post type to store patterns with the AI-generated content.
     */
    public function register_patterns_ai_data_post_type()
    {
        // stub
    }

    /**
     * Make sure the 'woocommerce_blocks_allow_ai_connection' option is set to true if the site is connected to AI.
     *
     * @return bool
     */
    public function update_ai_connection_allowed_option(): bool
    {
        // stub
    }

    /**
     * Update the patterns content when the store description is changed.
     *
     * @param string $option The option name.
     * @param string $value The option value.
     */
    public function schedule_on_option_update($option, $value)
    {
        // stub
    }

    /**
     * Update the patterns content when the WooCommerce Blocks plugin is updated.
     *
     * @param \WP_Upgrader $upgrader_object  WP_Upgrader instance.
     * @param array        $options  Array of bulk item update data.
     */
    public function schedule_on_plugin_update($upgrader_object, $options)
    {
        // stub
    }

    /**
     * Update the patterns content when the store description is changed.
     *
     * @param string $business_description The business description.
     */
    public function schedule_patterns_content_update($business_description)
    {
        // stub
    }

    /**
     * Update the patterns content.
     *
     * @return bool|string|\WP_Error
     */
    public function update_patterns_content()
    {
        // stub
    }

}

