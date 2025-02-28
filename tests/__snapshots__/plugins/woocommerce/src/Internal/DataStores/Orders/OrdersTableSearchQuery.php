<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Creates the join and where clauses needed to perform an order search using Custom Order Tables.
 *
 * @internal
 */
class OrdersTableSearchQuery
{
    /**
     * Holds the Orders Table Query object.
     *
     * @var OrdersTableQuery
     */
    private $query = null;
    /**
     * Holds the search term to be used in the WHERE clauses.
     *
     * @var string
     */
    private $search_term = null;
    /**
     * Limits the search to a specific field.
     *
     * @var string[]
     */
    private $search_filters = null;
    /**
     * Creates the JOIN and WHERE clauses needed to execute a search of orders.
     *
     * @internal
     *
     * @param OrdersTableQuery $query The order query object.
     */
    public function __construct(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery $query)
{
}
    /**
     * Sanitize search filter param.
     *
     * @param string $search_filter Search filter param.
     *
     * @return array Array of search filters.
     */
    private function sanitize_search_filters(string $search_filter): array
{
}
    /**
     * Supplies an array of clauses to be used in an order query.
     *
     * @internal
     * @throws Exception If unable to generate either the JOIN or WHERE SQL fragments.
     *
     * @return array {
     *     @type string $join  JOIN clause.
     *     @type string $where WHERE clause.
     * }
     */
    public function get_sql_clauses(): array
{
}
    /**
     * Generates the necessary JOIN clauses for the order search to be performed.
     *
     * @throws Exception May be triggered if a table name cannot be determined.
     *
     * @return string
     */
    private function generate_join(): string
{
}
    /**
     * Generate JOIN clause for a given search filter.
     * Right now we only have the products filter that actually does a JOIN, but in the future we may add more -- for example, custom order fields, payment tokens, and so on. This function makes it easier to add more filters in the future.
     *
     * If a search filter needs a JOIN, it will also need a WHERE clause.
     *
     * @param string $search_filter Name of the search filter.
     *
     * @return string JOIN clause.
     */
    private function generate_join_for_search_filter($search_filter): string
{
}
    /**
     * Generates the necessary WHERE clauses for the order search to be performed.
     *
     * @throws Exception May be triggered if a table name cannot be determined.
     *
     * @return string
     */
    private function generate_where(): string
{
}
    /**
     * Generates WHERE clause for a given search filter. Right now we only have the products and customers filters that actually use WHERE, but in the future we may add more -- for example, custom order fields, payment tokens and so on. This function makes it easier to add more filters in the future.
     *
     * @param string $search_filter Name of the search filter.
     *
     * @return string WHERE clause.
     */
    private function generate_where_for_search_filter(string $search_filter): string
{
}
    /**
     * Helper function to generate the WHERE clause for products search. Uses FTS when available.
     *
     * @return string|null WHERE clause for products search.
     */
    private function get_where_for_products()
{
}
    /**
     * Helper function to generate the WHERE clause for customers search. Uses FTS when available.
     *
     * @return string|null WHERE clause for customers search.
     */
    private function get_where_for_customers()
{
}
    /**
     * Generates where clause for meta table.
     *
     * Note we generate the where clause as a subquery to be used by calling function inside the IN clause. This is against the general wisdom for performance, but in this particular case, a subquery is able to use the order_id-meta_key-meta_value index, which is not possible with a join.
     *
     * Since it can use the index, which otherwise would not be possible, it is much faster than both LEFT JOIN or SQL_CALC approach that could have been used.
     *
     * @return string The where clause for meta table.
     */
    private function generate_where_for_meta_table(): string
{
}
    /**
     * Returns the order meta field keys to be searched.
     *
     * These will be returned as a single string, where the meta keys have been escaped, quoted and are
     * comma-separated (ie, "'abc', 'foo'" - ready for inclusion in a SQL IN() clause).
     *
     * @return string
     */
    private function get_meta_fields_to_be_searched(): string
{
}
}