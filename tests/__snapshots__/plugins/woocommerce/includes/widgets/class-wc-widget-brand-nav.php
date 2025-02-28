<?php

/**
 * Layered Navigation Widget for brands WC 2.6 version
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @package WooCommerce\Widgets
 * @version 9.4.0
 * @extends WP_Widget
 */
class WC_Widget_Brand_Nav extends \WC_Widget
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
{
}
    /**
     * Filter out all categories and not display them
     *
     * @param array $cat_args Category arguments.
     */
    public function filter_out_cats($cat_args)
{
}
    /**
     * Return the currently viewed taxonomy name.
     *
     * @return string
     */
    protected function get_current_taxonomy()
{
}
    /**
     * Return the currently viewed term ID.
     *
     * @return int
     */
    protected function get_current_term_id()
{
}
    /**
     * Return the currently viewed term slug.
     *
     * @return int
     */
    protected function get_current_term_slug()
{
}
    /**
     * Widget function.
     *
     * @see WP_Widget
     *
     * @param array $args Arguments.
     * @param array $instance Widget instance.
     * @return void
     */
    public function widget($args, $instance)
{
}
    /**
     * Update function.
     *
     * @see WP_Widget->update
     *
     * @param array $new_instance The new settings for the particular instance of the widget.
     * @param array $old_instance The old settings for the particular instance of the widget.
     * @return array
     */
    public function update($new_instance, $old_instance)
{
}
    /**
     * Form function.
     *
     * @see WP_Widget->form
     *
     * @param array $instance Widget instance.
     * @return void
     */
    public function form($instance)
{
}
    /**
     * Get current page URL for layered nav items.
     *
     * @param  string $taxonomy Taxonomy.
     * @return string
     */
    protected function get_page_base_url($taxonomy)
{
}
    /**
     * Gets the currently selected attributes
     *
     * @return array
     */
    public function get_chosen_attributes()
{
}
    /**
     * Show dropdown layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  int    $depth Depth.
     * @return bool Will nav display?
     */
    protected function layered_nav_dropdown($terms, $taxonomy, $depth = 0)
{
}
    /**
     * Show list based layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  int    $depth Depth.
     * @return bool   Will nav display?
     */
    protected function layered_nav_list($terms, $taxonomy, $depth = 0)
{
}
    /**
     * Count products within certain terms, taking the main WP query into consideration.
     *
     * @param  array  $term_ids Term IDs.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query type.
     * @return array
     */
    protected function get_filtered_term_product_counts($term_ids, $taxonomy, $query_type = 'and')
{
}
}
