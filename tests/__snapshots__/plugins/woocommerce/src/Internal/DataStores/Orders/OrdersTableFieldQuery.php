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
    private const VALID_COMPARISON_OPERATORS = array (
  0 => '=',
  1 => '!=',
  2 => 'LIKE',
  3 => 'NOT LIKE',
  4 => 'IN',
  5 => 'NOT IN',
  6 => 'EXISTS',
  7 => 'NOT EXISTS',
  8 => 'RLIKE',
  9 => 'REGEXP',
  10 => 'NOT REGEXP',
  11 => '>',
  12 => '>=',
  13 => '<',
  14 => '<=',
  15 => 'BETWEEN',
  16 => 'NOT BETWEEN',
);
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
    public function get_sql_clauses()
{
}
}