<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * Helper class for filtering products using the product attributes lookup table.
 */
class Filterer
{
    /**
     * Class initialization, invoked by the DI container.
     *
     * @internal
     * @param LookupDataStore $data_store The data store to use.
     */
    final public function init(Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore $data_store)
{
}
    /**
     * Checks if the product attribute filtering via lookup table feature is enabled.
     *
     * @return bool
     */
    public function filtering_via_lookup_table_is_active()
{
}
    /**
     * Adds post clauses for filtering via lookup table.
     * This method should be invoked within a 'posts_clauses' filter.
     *
     * @param array     $args Product query clauses as supplied to the 'posts_clauses' filter.
     * @param \WP_Query $wp_query Current product query as supplied to the 'posts_clauses' filter.
     * @param array     $attributes_to_filter_by Attribute filtering data as generated by WC_Query::get_layered_nav_chosen_attributes.
     * @return array The updated product query clauses.
     */
    public function filter_by_attribute_post_clauses(array $args, WP_Query $wp_query, array $attributes_to_filter_by)
{
}
    /**
     * Count products within certain terms, taking the main WP query into consideration,
     * for the WC_Widget_Layered_Nav widget.
     *
     * This query allows counts to be generated based on the viewed products, not all products.
     *
     * @param  array  $term_ids Term IDs.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return array
     */
    public function get_filtered_term_product_counts($term_ids, $taxonomy, $query_type)
{
}
}