<?php

namespace ;

/**
 * Post data class.
 */
class WC_Post_Data
{
    /**
     * Editing term.
     *
     * @var object
     */
    private static $editing_term = null;

    /**
     * Hook in methods.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Link to parent products when getting permalink for variation.
     *
     * @param string  $permalink Permalink.
     * @param WP_Post $post      Post data.
     *
     * @return string
     */
    public static function variation_post_link($permalink, $post)
    {
        // stub
    }

    /**
     * Sync products queued to sync.
     */
    public static function do_deferred_product_sync()
    {
        // stub
    }

    /**
     * Sync a product.
     *
     * @param int $product_id Product ID.
     */
    public static function deferred_product_sync($product_id)
    {
        // stub
    }

    /**
     * When a post status changes.
     *
     * @param string  $new_status New status.
     * @param string  $old_status Old status.
     * @param WP_Post $post       Post data.
     */
    public static function transition_post_status($new_status, $old_status, $post)
    {
        // stub
    }

    /**
     * Delete product view transients when needed e.g. when post status changes, or visibility/stock status is modified.
     */
    public static function delete_product_query_transients()
    {
        // stub
    }

    /**
     * Handle type changes.
     *
     * @since 3.0.0
     *
     * @param WC_Product $product Product data.
     * @param string     $from    Origin type.
     * @param string     $to      New type.
     */
    public static function product_type_changed($product, $from, $to)
    {
        // stub
    }

    /**
     * When editing a term, check for product attributes.
     *
     * @param  int    $term_id  Term ID.
     * @param  int    $tt_id    Term taxonomy ID.
     * @param  string $taxonomy Taxonomy slug.
     */
    public static function edit_term($term_id, $tt_id, $taxonomy)
    {
        // stub
    }

    /**
     * When a term is edited, check for product attributes and update variations.
     *
     * @param  int    $term_id  Term ID.
     * @param  int    $tt_id    Term taxonomy ID.
     * @param  string $taxonomy Taxonomy slug.
     */
    public static function edited_term($term_id, $tt_id, $taxonomy)
    {
        // stub
    }

    /**
     * Ensure floats are correctly converted to strings based on PHP locale.
     *
     * @param  null   $check      Whether to allow updating metadata for the given type.
     * @param  int    $object_id  Object ID.
     * @param  string $meta_key   Meta key.
     * @param  mixed  $meta_value Meta value. Must be serializable if non-scalar.
     * @param  mixed  $prev_value If specified, only update existing metadata entries with the specified value. Otherwise, update all entries.
     * @return null|bool
     */
    public static function update_order_item_metadata($check, $object_id, $meta_key, $meta_value, $prev_value)
    {
        // stub
    }

    /**
     * Ensure floats are correctly converted to strings based on PHP locale.
     *
     * @param  null   $check      Whether to allow updating metadata for the given type.
     * @param  int    $object_id  Object ID.
     * @param  string $meta_key   Meta key.
     * @param  mixed  $meta_value Meta value. Must be serializable if non-scalar.
     * @param  mixed  $prev_value If specified, only update existing metadata entries with the specified value. Otherwise, update all entries.
     * @return null|bool
     */
    public static function update_post_metadata($check, $object_id, $meta_key, $meta_value, $prev_value)
    {
        // stub
    }

    /**
     * Forces the order posts to have a title in a certain format (containing the date).
     * Forces certain product data based on the product's type, e.g. grouped products cannot have a parent.
     *
     * @param array $data An array of slashed post data.
     * @return array
     */
    public static function wp_insert_post_data($data)
    {
        // stub
    }

    /**
     * Change embed data for certain post types.
     *
     * @since 3.2.0
     * @param array   $data The response data.
     * @param WP_Post $post The post object.
     * @return array
     */
    public static function filter_oembed_response_data($data, $post)
    {
        // stub
    }

    /**
     * Removes variations etc belonging to a deleted post, and clears transients.
     *
     * @param mixed $id ID of post being deleted.
     */
    public static function delete_post($id)
    {
        // stub
    }

    /**
     * Trash post.
     *
     * @param mixed $id Post ID.
     */
    public static function trash_post($id)
    {
        // stub
    }

    /**
     * Untrash post.
     *
     * @param mixed $id Post ID.
     */
    public static function untrash_post($id)
    {
        // stub
    }

    /**
     * Clear global unique id if it's not unique.
     *
     * @param mixed $id Post ID.
     */
    private static function clear_global_unique_id_if_necessary($id)
    {
        // stub
    }

    /**
     * Get the post type for a given post.
     *
     * @param int $id The post id.
     * @return string The post type.
     */
    private static function get_post_type($id)
    {
        // stub
    }

    /**
     * Before deleting an order, do some cleanup.
     *
     * @since 3.2.0
     * @param int $order_id Order ID.
     */
    public static function before_delete_order($order_id)
    {
        // stub
    }

    /**
     * Remove item meta on permanent deletion.
     *
     * @param int $postid Post ID.
     */
    public static function delete_order_items($postid)
    {
        // stub
    }

    /**
     * Remove downloadable permissions on permanent order deletion.
     *
     * @param int $postid Post ID.
     */
    public static function delete_order_downloadable_permissions($postid)
    {
        // stub
    }

    /**
     * Flush meta cache for CRUD objects on direct update.
     *
     * @param  int    $meta_id    Meta ID.
     * @param  int    $object_id  Object ID.
     * @param  string $meta_key   Meta key.
     * @param  mixed  $meta_value Meta value.
     */
    public static function flush_object_meta_cache($meta_id, $object_id, $meta_key, $meta_value)
    {
        // stub
    }

    /**
     * Ensure default category gets set.
     *
     * @since 3.3.0
     * @param int    $object_id Product ID.
     * @param array  $terms     Terms array.
     * @param array  $tt_ids    Term ids array.
     * @param string $taxonomy  Taxonomy name.
     * @param bool   $append    Are we appending or setting terms.
     */
    public static function force_default_term($object_id, $terms, $tt_ids, $taxonomy, $append)
    {
        // stub
    }

    /**
     * Ensure statuses are correctly reassigned when restoring orders and products.
     *
     * @param string $new_status      The new status of the post being restored.
     * @param int    $post_id         The ID of the post being restored.
     * @param string $previous_status The status of the post at the point where it was trashed.
     * @return string
     */
    public static function wp_untrash_post_status($new_status, $post_id, $previous_status)
    {
        // stub
    }

    /**
     * When setting stock level, ensure the stock status is kept in sync.
     *
     * @param  int    $meta_id    Meta ID.
     * @param  int    $object_id  Object ID.
     * @param  string $meta_key   Meta key.
     * @param  mixed  $meta_value Meta value.
     * @deprecated    3.3
     */
    public static function sync_product_stock_status($meta_id, $object_id, $meta_key, $meta_value)
    {
        // stub
    }

    /**
     * Update changed downloads.
     *
     * @deprecated  3.3.0 No action is necessary on changes to download paths since download_id is no longer based on file hash.
     * @param int   $product_id   Product ID.
     * @param int   $variation_id Variation ID. Optional product variation identifier.
     * @param array $downloads    Newly set files.
     */
    public static function process_product_file_download_paths($product_id, $variation_id, $downloads)
    {
        // stub
    }

    /**
     * Delete transients when terms are set.
     *
     * @deprecated   3.6
     * @param int    $object_id  Object ID.
     * @param mixed  $terms      An array of object terms.
     * @param array  $tt_ids     An array of term taxonomy IDs.
     * @param string $taxonomy   Taxonomy slug.
     * @param mixed  $append     Whether to append new terms to the old terms.
     * @param array  $old_tt_ids Old array of term taxonomy IDs.
     */
    public static function set_object_terms($object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids)
    {
        // stub
    }

}

