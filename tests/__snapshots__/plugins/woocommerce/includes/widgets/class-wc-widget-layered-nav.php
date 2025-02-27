<?php

/**
 * Widget layered nav class.
 */
class WC_Widget_Layered_Nav
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Updates a particular instance of a widget.
     *
     * @see WP_Widget->update
     *
     * @param array $new_instance New Instance.
     * @param array $old_instance Old Instance.
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
        // stub
    }

    /**
     * Outputs the settings update form.
     *
     * @see WP_Widget->form
     *
     * @param array $instance Instance.
     */
    public function form($instance)
    {
        // stub
    }

    /**
     * Init settings after post types are registered.
     */
    public function init_settings()
    {
        // stub
    }

    /**
     * Get this widgets taxonomy.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_taxonomy($instance)
    {
        // stub
    }

    /**
     * Get this widgets query type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_query_type($instance)
    {
        // stub
    }

    /**
     * Get this widgets display type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_display_type($instance)
    {
        // stub
    }

    /**
     * Output widget.
     *
     * @see WP_Widget
     *
     * @param array $args Arguments.
     * @param array $instance Instance.
     */
    public function widget($args, $instance)
    {
        // stub
    }

    /**
     * Return the currently viewed taxonomy name.
     *
     * @return string
     */
    protected function get_current_taxonomy()
    {
        // stub
    }

    /**
     * Return the currently viewed term ID.
     *
     * @return int
     */
    protected function get_current_term_id()
    {
        // stub
    }

    /**
     * Return the currently viewed term slug.
     *
     * @return int
     */
    protected function get_current_term_slug()
    {
        // stub
    }

    /**
     * Show dropdown layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return bool Will nav display?
     */
    protected function layered_nav_dropdown($terms, $taxonomy, $query_type)
    {
        // stub
    }

    /**
     * Count products within certain terms, taking the main WP query into consideration.
     *
     * This query allows counts to be generated based on the viewed products, not all products.
     *
     * @param  array  $term_ids Term IDs.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return array
     */
    protected function get_filtered_term_product_counts($term_ids, $taxonomy, $query_type)
    {
        // stub
    }

    /**
     * Wrapper for WC_Query::get_main_tax_query() to ease unit testing.
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_main_tax_query()
    {
        // stub
    }

    /**
     * Wrapper for WC_Query::get_main_search_query_sql() to ease unit testing.
     *
     * @since 4.4.0
     * @return string
     */
    protected function get_main_search_query_sql()
    {
        // stub
    }

    /**
     * Wrapper for WC_Query::get_main_search_queryget_main_meta_query to ease unit testing.
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_main_meta_query()
    {
        // stub
    }

    /**
     * Show list based layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return bool   Will nav display?
     */
    protected function layered_nav_list($terms, $taxonomy, $query_type)
    {
        // stub
    }

}
