<?php

/**
 * WC_Data_Store_WP class.
 */
class WC_Data_Store_WP
{
    /**
     * Meta type. This should match up with
     * the types available at https://developer.wordpress.org/reference/functions/add_metadata/.
     * WP defines 'post', 'user', 'comment', and 'term'.
     *
     * @var string
     */
    protected $meta_type = 'post';
    /**
     * This only needs set if you are using a custom metadata type (for example payment tokens.
     * This should be the name of the field your table uses for associating meta with objects.
     * For example, in payment_tokenmeta, this would be payment_token_id.
     *
     * @var string
     */
    protected $object_id_field_for_meta = '';
    /**
     * Data stored in meta keys, but not considered "meta" for an object.
     *
     * @since 3.0.0
     *
     * @var array
     */
    protected $internal_meta_keys = array();
    /**
     * Meta data which should exist in the DB, even if empty.
     *
     * @since 3.6.0
     *
     * @var array
     */
    protected $must_exist_meta_keys = array();
    /**
     * Get and store terms from a taxonomy.
     *
     * @since  3.0.0
     * @param  WC_Data|integer $object WC_Data object or object ID.
     * @param  string          $taxonomy Taxonomy name e.g. product_cat.
     * @return array of terms
     */
    protected function get_term_ids($object, $taxonomy)
    {
    }
    /**
     * Returns an array of meta for an object.
     *
     * @since  3.0.0
     * @param  WC_Data $object WC_Data object.
     * @return array
     */
    public function read_meta(&$object)
    {
    }
    /**
     * Helper method to filter internal meta keys from all meta data rows for the object.
     *
     * @since 4.7.0
     *
     * @param WC_Data $object        WC_Data object.
     * @param array   $raw_meta_data Array of std object of meta data to be filtered.
     *
     * @return mixed|void
     */
    public function filter_raw_meta_data(&$object, $raw_meta_data)
    {
    }
    /**
     * Deletes meta based on meta ID.
     *
     * @since  3.0.0
     * @param  WC_Data  $object WC_Data object.
     * @param  stdClass $meta (containing at least ->id).
     */
    public function delete_meta(&$object, $meta)
    {
    }
    /**
     * Add new piece of meta.
     *
     * @since  3.0.0
     * @param  WC_Data  $object WC_Data object.
     * @param  stdClass $meta (containing ->key and ->value).
     * @return int meta ID
     */
    public function add_meta(&$object, $meta)
    {
    }
    /**
     * Update meta.
     *
     * @since  3.0.0
     * @param  WC_Data  $object WC_Data object.
     * @param  stdClass $meta (containing ->id, ->key and ->value).
     */
    public function update_meta(&$object, $meta)
    {
    }
    /**
     * Table structure is slightly different between meta types, this function will return what we need to know.
     *
     * @since  3.0.0
     * @return array Array elements: table, object_id_field, meta_id_field
     */
    protected function get_db_info()
    {
    }
    /**
     * Internal meta keys we don't want exposed as part of meta_data. This is in
     * addition to all data props with _ prefix.
     *
     * @since 2.6.0
     *
     * @param string $key Prefix to be added to meta keys.
     * @return string
     */
    protected function prefix_key($key)
    {
    }
    /**
     * Callback to remove unwanted meta data.
     *
     * @param object $meta Meta object to check if it should be excluded or not.
     * @return bool
     */
    protected function exclude_internal_meta_keys($meta)
    {
    }
    /**
     * Gets a list of props and meta keys that need updated based on change state
     * or if they are present in the database or not.
     *
     * @param  WC_Data $object              The WP_Data object (WC_Coupon for coupons, etc).
     * @param  array   $meta_key_to_props   A mapping of meta keys => prop names.
     * @param  string  $meta_type           The internal WP meta type (post, user, etc).
     * @return array                        A mapping of meta keys => prop names, filtered by ones that should be updated.
     */
    protected function get_props_to_update($object, $meta_key_to_props, $meta_type = 'post')
    {
    }
    /**
     * Update meta data in, or delete it from, the database.
     *
     * Avoids storing meta when it's either an empty string or empty array.
     * Other empty values such as numeric 0 and null should still be stored.
     * Data-stores can force meta to exist using `must_exist_meta_keys`.
     *
     * Note: WordPress `get_metadata` function returns an empty string when meta data does not exist.
     *
     * @param WC_Data $object The WP_Data object (WC_Coupon for coupons, etc).
     * @param string  $meta_key Meta key to update.
     * @param mixed   $meta_value Value to save.
     *
     * @since 3.6.0 Added to prevent empty meta being stored unless required.
     *
     * @return bool True if updated/deleted.
     */
    protected function update_or_delete_post_meta($object, $meta_key, $meta_value)
    {
    }
    /**
     * Get valid WP_Query args from a WC_Object_Query's query variables.
     *
     * @since 3.1.0
     * @param array $query_vars query vars from a WC_Object_Query.
     * @return array
     */
    protected function get_wp_query_args($query_vars)
    {
    }
    /**
     * Map a valid date query var to WP_Query arguments.
     * Valid date formats: YYYY-MM-DD or timestamp, possibly combined with an operator from $valid_operators.
     * Also accepts a WC_DateTime object.
     *
     * @since 3.2.0
     * @param mixed  $query_var A valid date format.
     * @param string $key meta or db column key.
     * @param array  $wp_query_args WP_Query args.
     * @return array Modified $wp_query_args
     */
    public function parse_date_for_wp_query($query_var, $key, $wp_query_args = array())
    {
    }
    /**
     * Return list of internal meta keys.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_internal_meta_keys()
    {
    }
    /**
     * Check if the terms are suitable for searching.
     *
     * Uses an array of stopwords (terms) that are excluded from the separate
     * term matching when searching for posts. The list of English stopwords is
     * the approximate search engines list, and is translatable.
     *
     * @since 3.4.0
     * @param array $terms Terms to check.
     * @return array Terms that are not stopwords.
     */
    protected function get_valid_search_terms($terms)
    {
    }
    /**
     * Retrieve stopwords used when parsing search terms.
     *
     * @since 3.4.0
     * @return array Stopwords.
     */
    protected function get_search_stopwords()
    {
    }
    /**
     * Get data to save to a lookup table.
     *
     * @since 3.6.0
     * @param int    $id ID of object to update.
     * @param string $table Lookup table name.
     * @return array
     */
    protected function get_data_for_lookup_table($id, $table)
    {
    }
    /**
     * Get primary key name for lookup table.
     *
     * @since 3.6.0
     * @param string $table Lookup table name.
     * @return string
     */
    protected function get_primary_key_for_lookup_table($table)
    {
    }
    /**
     * Update a lookup table for an object.
     *
     * @since 3.6.0
     * @param int    $id ID of object to update.
     * @param string $table Lookup table name.
     *
     * @return NULL
     */
    protected function update_lookup_table($id, $table)
    {
    }
    /**
     * Delete lookup table data for an ID.
     *
     * @since 3.6.0
     * @param int    $id ID of object to update.
     * @param string $table Lookup table name.
     */
    public function delete_from_lookup_table($id, $table)
    {
    }
    /**
     * Converts a WP post date string into a timestamp.
     *
     * @since 4.8.0
     *
     * @param  string $time_string The WP post date string.
     * @return int|null The date string converted to a timestamp or null.
     */
    protected function string_to_timestamp($time_string)
    {
    }
}