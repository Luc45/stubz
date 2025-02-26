<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * Provides the implementation for `field_query` in {@see OrdersTableQuery} used to build
 * complex queries against order fields in the database.
 *
 * @internal
 */
class OrdersTableFieldQuery extends \
{
    const VALID_COMPARISON_OPERATORS = array(
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
     * The original query object.
     *
     * @var OrdersTableQuery
     */
    private $query = null;

    /**
     * Determines whether the field query should produce no results due to an invalid argument.
     *
     * @var boolean
     */
    private $force_no_results = false;

    /**
     * Holds a sanitized version of the `field_query`.
     *
     * @var array
     */
    private $queries = array(
);

    /**
     * JOIN clauses to add to the main SQL query.
     *
     * @var array
     */
    private $join = array(
);

    /**
     * WHERE clauses to add to the main SQL query.
     *
     * @var array
     */
    private $where = array(
);

    /**
     * Table aliases in use by the field query. Used to keep track of JOINs and optimize when possible.
     *
     * @var array
     */
    private $table_aliases = array(
);

    /**
     * Constructor.
     *
     * @param OrdersTableQuery $q The main query being performed.
     */
    public function __construct(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableQuery $q)
    {
        // stub
    }

    /**
     * Sanitizes the field_query argument.
     *
     * @param array $q A field_query array.
     * @return array A sanitized field query array.
     * @throws \Exception When field table info is missing.
     */
    private function sanitize_query(array $q)
    {
        // stub
    }

    /**
     * Makes sure we use an AND or OR relation. Defaults to AND.
     *
     * @param string $relation An unsanitized relation prop.
     * @return string
     */
    private function sanitize_relation(string $relation): string
    {
        // stub
    }

    /**
     * Processes field_query entries and generates the necessary table aliases, JOIN statements and WHERE conditions.
     *
     * @param array $q A field query.
     * @return string An SQL WHERE statement.
     */
    private function process(array $q)
    {
        // stub
    }

    /**
     * Checks whether a given field_query clause is atomic or not (i.e. not nested).
     *
     * @param array $q The field_query clause.
     * @return boolean TRUE if atomic, FALSE otherwise.
     */
    private function is_atomic($q)
    {
        // stub
    }

    /**
     * Finds a common table alias that the field_query clause can use, or creates one.
     *
     * @param array $q       An atomic field_query clause.
     * @return string A table alias for use in an SQL JOIN clause.
     * @throws \Exception When table info for clause is missing.
     */
    private function find_or_create_table_alias_for_clause($q)
    {
        // stub
    }

    /**
     * Returns the correct type for a given clause 'type'.
     *
     * @param string $type MySQL type.
     * @return string MySQL type.
     */
    private function sanitize_cast_type($type)
    {
        // stub
    }

    /**
     * Generates an SQL WHERE clause for a given field_query atomic clause.
     *
     * @param array $clause An atomic field_query clause.
     * @return string An SQL WHERE clause or an empty string if $clause is invalid.
     */
    private function generate_where_for_clause($clause): string
    {
        // stub
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
        // stub
    }

}

