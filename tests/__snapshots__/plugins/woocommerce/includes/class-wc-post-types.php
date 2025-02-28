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
}
    /**
     * Register core taxonomies.
     */
    public static function register_taxonomies()
{
}
    /**
     * Register core post types.
     */
    public static function register_post_types()
{
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
}
    /**
     * Register our custom post statuses, used for order status.
     */
    public static function register_post_status()
{
}
    /**
     * Flush rules if the event is queued.
     *
     * @since 3.3.0
     */
    public static function maybe_flush_rewrite_rules()
{
}
    /**
     * Flush rewrite rules.
     */
    public static function flush_rewrite_rules()
{
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
}
    /**
     * Add Product Support to Jetpack Omnisearch.
     */
    public static function support_jetpack_omnisearch()
{
}
    /**
     * Added product for Jetpack related posts.
     *
     * @param  array $post_types Post types.
     * @return array
     */
    public static function rest_api_allowed_post_types($post_types)
{
}
}
