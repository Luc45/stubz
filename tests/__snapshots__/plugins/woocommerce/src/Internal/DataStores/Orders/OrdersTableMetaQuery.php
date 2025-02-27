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
    const NON_NUMERIC_OPERATORS = array (
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
);

    const NUMERIC_OPERATORS = array (
  0 => '>',
  1 => '>=',
  2 => '<',
  3 => '<=',
  4 => 'BETWEEN',
  5 => 'NOT BETWEEN',
);

    const ALIAS_PREFIX = 'meta';

    /**
     * Name of the main orders table.
     *
     * @var string
     */
    private $meta_table = '';

    /**
     * Name of the metadata table.
     *
     * @var string
     */
    private $orders_table = '';

    /**
     * Sanitized `meta_query`.
     *
     * @var array
     */
    private $queries = array (
);

    /**
     * Flat list of clauses by name.
     *
     * @var array
     */
    private $flattened_clauses = array (
);

    /**
     * JOIN clauses to add to the main SQL query.
     *
     * @var array
     */
    private $join = array (
);

    /**
     * WHERE clauses to add to the main SQL query.
     *
     * @var array
     */
    private $where = array (
);

    /**
     * Table aliases in use by the meta query. Used to optimize JOINs when possible.
     *
     * @var array
     */
    private $table_aliases = array (
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
     * Returns JOIN and WHERE clauses to be appended to the main SQL query.
     *
     * @return array {
     *     @type string $join  JOIN clause.
     *     @type string $where WHERE clause.
     * }
     */
    public function get_sql_clauses(): array
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Checks whether a given meta_query clause is atomic or not (i.e. not nested).
     *
     * @param array $arg The meta_query clause.
     * @return boolean TRUE if atomic, FALSE otherwise.
     */
    private function is_atomic(array $arg): bool
    {
        // stub
    }

    /**
     * Sanitizes the meta_query argument.
     *
     * @param array $q A meta_query array.
     * @return array A sanitized meta query array.
     */
    private function sanitize_meta_query(array $q): array
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
     * Returns the correct type for a given meta type.
     *
     * @param string $type MySQL type.
     * @return string MySQL type.
     */
    private function sanitize_cast_type(string $type = ''): string
    {
        // stub
    }

    /**
     * Makes sure a JOIN array does not have duplicates.
     *
     * @param array $join A JOIN array.
     * @return array A sanitized JOIN array.
     */
    private function sanitize_join(array $join): array
    {
        // stub
    }

    /**
     * Flattens a nested WHERE array.
     *
     * @param array $where A possibly nested WHERE array with AND/OR operators.
     * @return string An SQL WHERE clause.
     */
    private function flatten_where_clauses($where): string
    {
        // stub
    }

    /**
     * Builds all the required internal bits for this meta query.
     *
     * @return void
     */
    private function build_query(): void
    {
        // stub
    }

    /**
     * Processes meta_query entries and generates the necessary table aliases, JOIN statements and WHERE conditions.
     *
     * @param array      $arg    A meta query.
     * @param null|array $parent The parent of the element being processed.
     * @return array A nested array of WHERE conditions.
     */
    private function process(array &$arg, &$parent = null): array
    {
        // stub
    }

    /**
     * Generates a JOIN clause to handle an atomic meta_query clause.
     *
     * @param array  $clause An atomic meta_query clause.
     * @param string $alias  Metadata table alias to use.
     * @return string An SQL JOIN clause.
     */
    private function generate_join_for_clause(array $clause, string $alias): string
    {
        // stub
    }

    /**
     * Finds a common table alias that the meta_query clause can use, or creates one.
     *
     * @param array $clause       An atomic meta_query clause.
     * @param array $parent_query The parent query this clause is in.
     * @return string A table alias for use in an SQL JOIN clause.
     */
    private function find_or_create_table_alias_for_clause(array $clause, array $parent_query): string
    {
        // stub
    }

    /**
     * Checks whether two meta_query clauses can share a JOIN.
     *
     * @param array  $clause    An atomic meta_query clause.
     * @param array  $sibling   An atomic meta_query clause.
     * @param string $relation The relation involving both clauses.
     * @return boolean TRUE if the clauses can share a table alias, FALSE otherwise.
     */
    private function is_operator_compatible_with_shared_join(array $clause, array $sibling, string $relation = 'AND'): bool
    {
        // stub
    }

    /**
     * Generates an SQL WHERE clause for a given meta_query atomic clause based on its meta key.
     * Adapted from WordPress' `WP_Meta_Query::get_sql_for_clause()` method.
     *
     * @param array $clause An atomic meta_query clause.
     * @return string An SQL WHERE clause or an empty string if $clause is invalid.
     */
    private function generate_where_for_clause_key(array $clause): string
    {
        // stub
    }

    /**
     * Generates an SQL WHERE clause for a given meta_query atomic clause based on its meta value.
     * Adapted from WordPress' `WP_Meta_Query::get_sql_for_clause()` method.
     *
     * @param array $clause An atomic meta_query clause.
     * @return string An SQL WHERE clause or an empty string if $clause is invalid.
     */
    private function generate_where_for_clause_value($clause): string
    {
        // stub
    }

}