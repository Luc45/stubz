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
     * Creates the JOIN and WHERE clauses needed to execute a search of orders.
     *
     * @internal
     *
     * @param OrdersTableQuery $query The order query object.
     */
    public function __construct(\Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery $query)
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
}
