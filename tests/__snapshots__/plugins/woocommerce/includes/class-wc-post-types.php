<?php

/**
 * Post types Class.
 */
class WC_Post_Types
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Register core taxonomies.
     */
    public static function register_taxonomies()
    {
        // stub
    }

    /**
     * Register core post types.
     */
    public static function register_post_types()
    {
        // stub
    }

    /**
     * Customize taxonomies update messages.
     *
     * @param array $messages The list of available messages.
     * @since 4.4.0
     * @return bool
     */
    public static function updated_term_messages($messages)
    {
        // stub
    }

    /**
     * Register our custom post statuses, used for order status.
     */
    public static function register_post_status()
    {
        // stub
    }

    /**
     * Flush rules if the event is queued.
     *
     * @since 3.3.0
     */
    public static function maybe_flush_rewrite_rules()
    {
        // stub
    }

    /**
     * Flush rewrite rules.
     */
    public static function flush_rewrite_rules()
    {
        // stub
    }

    /**
     * Disable Gutenberg for products.
     *
     * @param bool   $can_edit Whether the post type can be edited or not.
     * @param string $post_type The post type being checked.
     * @return bool
     */
    public static function gutenberg_can_edit_post_type($can_edit, $post_type)
    {
        // stub
    }

    /**
     * Add Product Support to Jetpack Omnisearch.
     */
    public static function support_jetpack_omnisearch()
    {
        // stub
    }

    /**
     * Added product for Jetpack related posts.
     *
     * @param  array $post_types Post types.
     * @return array
     */
    public static function rest_api_allowed_post_types($post_types)
    {
        // stub
    }

}
