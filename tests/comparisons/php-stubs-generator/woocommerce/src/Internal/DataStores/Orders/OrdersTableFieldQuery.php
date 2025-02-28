<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Provides the implementation for `field_query` in {@see OrdersTableQuery} used to build
 * complex queries against order fields in the database.
 *
 * @internal
 */
class OrdersTableFieldQuery
{
    /**
     * Constructor.
     *
     * @param OrdersTableQuery $q The main query being performed.
     */
    public function __construct(\Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery $q)
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
    public function get_sql_clauses()
    {
    }
}