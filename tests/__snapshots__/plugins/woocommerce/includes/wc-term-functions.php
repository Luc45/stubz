<?php

/**
 * Change get terms defaults for attributes to order by the sorting setting, or default to menu_order for sortable taxonomies.
 *
 * @since 3.6.0 Sorting options are now set as the default automatically, so you no longer have to request to orderby menu_order.
 *
 * @param array $defaults   An array of default get_terms() arguments.
 * @param array $taxonomies An array of taxonomies.
 * @return array
 */
function wc_change_get_terms_defaults($defaults, $taxonomies)
{
    // stub
}

/**
 * Adds support to get_terms for menu_order argument.
 *
 * @since 3.6.0
 * @param WP_Term_Query $terms_query Instance of WP_Term_Query.
 */
function wc_change_pre_get_terms($terms_query)
{
    // stub
}

/**
 * Adjust term query to handle custom sorting parameters.
 *
 * @param array $clauses    Clauses.
 * @param array $taxonomies Taxonomies.
 * @param array $args       Arguments.
 * @return array
 */
function wc_terms_clauses($clauses, $taxonomies, $args)
{
    // stub
}

/**
 * Helper to get cached object terms and filter by field using wp_list_pluck().
 * Works as a cached alternative for wp_get_post_terms() and wp_get_object_terms().
 *
 * @since  3.0.0
 * @param  int    $object_id Object ID.
 * @param  string $taxonomy  Taxonomy slug.
 * @param  string $field     Field name.
 * @param  string $index_key Index key name.
 * @return array
 */
function wc_get_object_terms($object_id, $taxonomy, $field = null, $index_key = null)
{
    // stub
}

/**
 * Cached version of wp_get_post_terms().
 * This is a private function (internal use ONLY).
 *
 * @since  3.0.0
 * @param  int    $product_id Product ID.
 * @param  string $taxonomy   Taxonomy slug.
 * @param  array  $args       Query arguments.
 * @return array
 */
function _wc_get_cached_product_terms($product_id, $taxonomy, $args = array (
))
{
    // stub
}

/**
 * Wrapper used to get terms for a product.
 *
 * @param  int    $product_id Product ID.
 * @param  string $taxonomy   Taxonomy slug.
 * @param  array  $args       Query arguments.
 * @return array
 */
function wc_get_product_terms($product_id, $taxonomy, $args = array (
))
{
    // stub
}

/**
 * Sort by name (numeric).
 *
 * @param  WP_Post $a First item to compare.
 * @param  WP_Post $b Second item to compare.
 * @return int
 */
function _wc_get_product_terms_name_num_usort_callback($a, $b)
{
    // stub
}

/**
 * Sort by parent.
 *
 * @param  WP_Post $a First item to compare.
 * @param  WP_Post $b Second item to compare.
 * @return int
 */
function _wc_get_product_terms_parent_usort_callback($a, $b)
{
    // stub
}

/**
 * WooCommerce Dropdown categories.
 *
 * @param array $args Args to control display of dropdown.
 */
function wc_product_dropdown_categories($args = array (
))
{
    // stub
}

/**
 * Custom walker for Product Categories.
 *
 * Previously used by wc_product_dropdown_categories, but wp_dropdown_categories has been fixed in core.
 *
 * @param mixed ...$args Variable number of parameters to be passed to the walker.
 * @return mixed
 */
function wc_walk_category_dropdown_tree(...$args)
{
    // stub
}

/**
 * Migrate data from WC term meta to WP term meta.
 *
 * When the database is updated to support term meta, migrate WC term meta data across.
 * We do this when the new version is >= 34370, and the old version is < 34370 (34370 is when term meta table was added).
 *
 * @param string $wp_db_version The new $wp_db_version.
 * @param string $wp_current_db_version The old (current) $wp_db_version.
 */
function wc_taxonomy_metadata_migrate_data($wp_db_version, $wp_current_db_version)
{
    // stub
}

/**
 * Move a term before the a given element of its hierarchy level.
 *
 * @param int    $the_term Term ID.
 * @param int    $next_id  The id of the next sibling element in save hierarchy level.
 * @param string $taxonomy Taxonomy.
 * @param int    $index    Term index (default: 0).
 * @param mixed  $terms    List of terms. (default: null).
 * @return int
 */
function wc_reorder_terms($the_term, $next_id, $taxonomy, $index = 0, $terms = null)
{
    // stub
}

/**
 * Set the sort order of a term.
 *
 * @param int    $term_id   Term ID.
 * @param int    $index     Index.
 * @param string $taxonomy  Taxonomy.
 * @param bool   $recursive Recursive (default: false).
 * @return int
 */
function wc_set_term_order($term_id, $index, $taxonomy, $recursive = false)
{
    // stub
}

/**
 * Function for recounting product terms, ignoring hidden products.
 *
 * @param array  $terms                       List of terms.
 * @param object $taxonomy                    Taxonomy.
 * @param bool   $callback                    Callback.
 * @param bool   $terms_are_term_taxonomy_ids If terms are from term_taxonomy_id column.
 */
function _wc_term_recount($terms, $taxonomy, $callback = true, $terms_are_term_taxonomy_ids = true)
{
    // stub
}

/**
 * Recount terms after the stock amount changes.
 *
 * @param int $product_id Product ID.
 */
function wc_recount_after_stock_change($product_id)
{
    // stub
}

/**
 * Overrides the original term count for product categories and tags with the product count.
 * that takes catalog visibility into account.
 *
 * @param array        $terms      List of terms.
 * @param string|array $taxonomies Single taxonomy or list of taxonomies.
 * @return array
 */
function wc_change_term_counts($terms, $taxonomies)
{
    // stub
}

/**
 * Return products in a given term, and cache value.
 *
 * To keep in sync, product_count will be cleared on "set_object_terms".
 *
 * @param int    $term_id  Term ID.
 * @param string $taxonomy Taxonomy.
 * @return array
 */
function wc_get_term_product_ids($term_id, $taxonomy)
{
    // stub
}

/**
 * When a post is updated and terms recounted (called by _update_post_term_count), clear the ids.
 *
 * @param int    $object_id  Object ID.
 * @param array  $terms      An array of object terms.
 * @param array  $tt_ids     An array of term taxonomy IDs.
 * @param string $taxonomy   Taxonomy slug.
 * @param bool   $append     Whether to append new terms to the old terms.
 * @param array  $old_tt_ids Old array of term taxonomy IDs.
 */
function wc_clear_term_product_ids($object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids)
{
    // stub
}

/**
 * Get full list of product visibility term ids.
 *
 * @since  3.0.0
 * @return int[]
 */
function wc_get_product_visibility_term_ids()
{
    // stub
}

/**
 * Recounts all terms.
 *
 * @since 5.2
 * @return void
 */
function wc_recount_all_terms()
{
    // stub
}

/**
 * Recounts terms by product.
 *
 * @since 5.2
 * @param int $product_id The ID of the product.
 * @return void
 */
function _wc_recount_terms_by_product($product_id = '')
{
    // stub
}

