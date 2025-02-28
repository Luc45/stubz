<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Class used to implement meta queries for the orders table datastore via {@see OrdersTableQuery}.
 * Heavily inspired by WordPress' own `WP_Meta_Query` for backwards compatibility reasons.
 *
 * Parts of the implementation have been adapted from {@link https://core.trac.wordpress.org/browser/tags/6.0.1/src/wp-includes/class-wp-meta-query.php}.
 */
class OrdersTableMetaQuery
{
    /**
     * List of non-numeric SQL operators used for comparisons in meta queries.
     *
     * @var array
     */
    /**
     * List of numeric SQL operators used for comparisons in meta queries.
     *
     * @var array
     */
    /**
     * Prefix used when generating aliases for the metadata table.
     *
     * @var string
     */
    /**
     * Constructor.
     *
     * @param OrdersTableQuery $q The main query being performed.
     */
    public function __construct(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery $q)
{
}
    /**
     * Returns JOIN and WHERE clauses to be appended to the main SQL query.
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
     * Returns a list of names (corresponding to meta_query clauses) that can be used as an 'orderby' arg.
     *
     * @since 7.4
     *
     * @return array
     */
    public function get_orderby_keys(): array
{
}
    /**
     * Returns an SQL fragment for the given meta_query key that can be used in an ORDER BY clause.
     * Call {@see 'get_orderby_keys'} to obtain a list of valid keys.
     *
     * @since 7.4
     *
     * @param string $key The key name.
     * @return string
     *
     * @throws \Exception When an invalid key is passed.
     */
    public function get_orderby_clause_for_key(string $key): string
{
}
}