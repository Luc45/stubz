<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * BlocksWpQuery query.
 *
 * Wrapper for WP Query with additional helper methods.
 * Allows query args to be set and parsed without doing running it, so that a cache can be used.
 *
 * @deprecated 2.5.0
 */
class BlocksWpQuery extends \WP_Query
{
    /**
     * Constructor.
     *
     * Sets up the WordPress query, if parameter is not empty.
     *
     * Unlike the constructor in WP_Query, this does not RUN the query.
     *
     * @param string|array $query URL query string or array of vars.
     */
    public function __construct($query = '')
    {
    }
    /**
     * Get cached posts, if a cache exists.
     *
     * A hash is generated using the array of query_vars. If doing custom queries via filters such as posts_where
     * (where the SQL query is manipulated directly) you can still ensure there is a unique hash by injecting custom
     * query vars via the parse_query filter. For example:
     *
     *      add_filter( 'parse_query', function( $wp_query ) {
     *           $wp_query->query_vars['my_custom_query_var'] = true;
     *      } );
     *
     * Doing so won't have any negative effect on the query itself, and it will cause the hash to change.
     *
     * @param string $transient_version Transient version to allow for invalidation.
     * @return WP_Post[]|int[] Array of post objects or post IDs.
     */
    public function get_cached_posts($transient_version = '')
    {
    }
}